<?php
// Step 1 Verify: Verify Email OTP and Create/Retrieve Loan
require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'verify_email_otp';
$input = getJsonInput();
logAppRequest($endpointName, $input);

function ensureEmailOtpTableExists($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS app_email_otp_verifications (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        otp VARCHAR(10) NOT NULL,
        expires_at DATETIME NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX (email)
    )";
    $conn->query($sql);
}

function generateFileId($conn) {
    $prefix = 'DL-VARD/';
    $result = $conn->query('SELECT MAX(id) AS max_id FROM loans');
    $row = $result ? $result->fetch_assoc() : ['max_id' => null];
    $id = isset($row['max_id']) && $row['max_id'] ? (int) $row['max_id'] + 1 : 1;
    $number = $id + 10000;
    $formattedNumber = str_pad((string) $number, 6, '0', STR_PAD_LEFT);

    return $prefix . $formattedNumber;
}

function generateAccessToken() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = '';
    for ($i = 0; $i < 8; $i++) {
        $token .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $token;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$otp = $input['otp'] ?? '';
$email = $input['email'] ?? '';
$mobile = $input['mobile'] ?? '';
$loanType = $input['loan_type'] ?? 'instant loan';

// Normalize loan type
$ltLower = strtolower(trim($loanType));
if (strpos($ltLower, 'private') !== false || strpos($ltLower, 'instant') !== false) {
    $loanType = 'instant loan';
} elseif (strpos($ltLower, 'personal') !== false) {
    $loanType = 'personal loan';
}

if (!$email || !$mobile) {
     appSendResponse(false, 'Missing email or mobile number.');
}

if (empty($otp)) {
    appSendResponse(false, 'Please enter the OTP.');
}

ensureEmailOtpTableExists($conn);

// Verify OTP against DB
$otpVerified = false;
$stmt = $conn->prepare("SELECT otp, expires_at FROM app_email_otp_verifications WHERE email = ? AND otp = ? ORDER BY id DESC LIMIT 1");
if ($stmt) {
    $stmt->bind_param("ss", $email, $otp);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (strtotime($row['expires_at']) > time()) {
            $otpVerified = true;
        } else {
             appSendResponse(false, 'OTP expired.');
        }
    }
    $stmt->close();
}

if (!$otpVerified) {
    appSendResponse(false, 'Invalid OTP.');
}

// Check for existing loan
$query = 'SELECT * FROM loans WHERE mobile = ? AND file_type = ? ORDER BY id DESC LIMIT 1';
$checkStmt = $conn->prepare($query);
$checkStmt->bind_param('ss', $mobile, $loanType);
$checkStmt->execute();
$result = $checkStmt->get_result();
$existingLoan = $result->fetch_assoc();
$checkStmt->close();

$softApprovalAmount = 0.00;
$accessToken = '';
$step = 0;
$name = '';
$loanData = [];
$fileId = '';

if ($existingLoan) {
    $step = $existingLoan['step'];
    $accessToken = $existingLoan['access_token'];
    $name = $existingLoan['name'];
    $softApprovalAmount = $existingLoan['soft_approval_amount'];
    $fileId = $existingLoan['file_id'];
    $loanData = $existingLoan;

    // Update email if different
    if ($existingLoan['email'] !== $email) {
        $updateEmail = $conn->prepare("UPDATE loans SET email = ? WHERE id = ?");
        if ($updateEmail) {
            $updateEmail->bind_param("si", $email, $existingLoan['id']);
            $updateEmail->execute();
            $updateEmail->close();
        }
    }
} else {
    // Create new loan
    $fileId = generateFileId($conn);
    $accessToken = generateAccessToken();
    $fileType = $loanType;
    $addedBy = 'self';
    $createdAt = date('Y-m-d H:i:s');

    $stmt = $conn->prepare(
        'INSERT INTO loans (file_id, mobile, email, created_at, access_token, file_type, added_by) VALUES (?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->bind_param('sssssss', $fileId, $mobile, $email, $createdAt, $accessToken, $fileType, $addedBy);

    if (!$stmt->execute()) {
         appSendResponse(false, 'Database error: ' . $stmt->error, [], 500);
    }
    $stmt->close();
}

// Check/Initialize Soft Approval and ROI
$roi = isset($existingLoan) ? (float)$existingLoan['rate_of_interest'] : 0.0;
$needsUpdate = false;

if ($softApprovalAmount <= 0) {
    $minAmount = 7500;
    $maxAmount = 15000;
    $randomHundreds = rand($minAmount, $maxAmount);
    $softApprovalAmount = $randomHundreds * 100;
    $needsUpdate = true;
}

if ($roi <= 0) {
    // Generate random ROI between 12 and 18
    $roi = rand(120, 180) / 10.0;
    $needsUpdate = true;
}

if ($needsUpdate || empty($existingLoan)) {
    $updateStmt = $conn->prepare("UPDATE loans SET soft_approval_amount = ?, rate_of_interest = ? WHERE access_token = ?");
    if ($updateStmt) {
        $updateStmt->bind_param("dds", $softApprovalAmount, $roi, $accessToken);
        $updateStmt->execute();
        $updateStmt->close();
    }
}

appSendResponse(true, 'Verification successful', [
    'access_token' => $accessToken,
    'step' => $step,
    'soft_approval_amount' => $softApprovalAmount,
    'rate_of_interest' => $roi,
    'applicant_name' => $name,
    'file_id' => $fileId,
    'file_type' => $loanType,
    'status' => 'approved',
    'data' => $loanData
]);
?>
