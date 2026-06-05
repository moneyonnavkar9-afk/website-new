<?php
// Step 1: Initiate Loan Application (Send Email OTP)
require_once '../api_common.php';
require_once 'logger.php';
require_once PARTNER_DIR . '/includs/mail_handler.php';
require_once PARTNER_DIR . '/includs/otp_functions.php';

$endpointName = 'initiate';
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

// Function to handle rate limiting
function checkRateLimit($conn, $email) {
    $stmt = $conn->prepare("SELECT created_at FROM app_email_otp_verifications WHERE email = ? ORDER BY id DESC LIMIT 1");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $lastSent = strtotime($row['created_at']);
            if ((time() - $lastSent) < 30) {
                 return false;
            }
        }
        $stmt->close();
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$email = filter_var($input['email'] ?? '', FILTER_VALIDATE_EMAIL);
$mobile = preg_replace('/\D/', '', $input['mobile'] ?? '');
$loanType = $input['loan_type'] ?? 'instant loan';

if (!$email) {
    appSendResponse(false, 'Invalid email address.');
}
if (strlen($mobile) < 10) {
    appSendResponse(false, 'Invalid mobile number. Please enter a valid 10-digit number.');
}

ensureEmailOtpTableExists($conn);

if (!checkRateLimit($conn, $email)) {
    appSendResponse(false, 'Please wait before requesting another OTP.');
}

$emailOtp = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);
$expiresAt = date('Y-m-d H:i:s', strtotime('+10 minutes'));

$stmt = $conn->prepare("INSERT INTO app_email_otp_verifications (email, otp, expires_at) VALUES (?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("sss", $email, $emailOtp, $expiresAt);
    $stmt->execute();
    $stmt->close();
} else {
    appSendResponse(false, 'Database error: ' . $conn->error, [], 500);
}

if (sendOTPmail($email, $emailOtp)) {
    appSendResponse(true, 'OTP sent successfully to ' . $email);
} else {
    appSendResponse(false, 'Failed to send OTP. Please try again later.');
}
?>
