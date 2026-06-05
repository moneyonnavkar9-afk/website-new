<?php
// Step 5 (New Flow): Save Bank Details
require_once '../api_common.php';
require_once 'logger.php';
require_once PARTNER_DIR . '/includs/mail_handler.php';

$endpointName = 'save_bank_details';
$input = getJsonInput();
logAppRequest($endpointName, $input);

function getLoanByToken($conn, $accessToken) {
    if (!$accessToken) return null;
    $stmt = $conn->prepare("SELECT * FROM loans WHERE access_token = ?");
    $stmt->bind_param("s", $accessToken);
    $stmt->execute();
    $result = $stmt->get_result();
    $loan = $result->fetch_assoc();
    $stmt->close();
    return $loan;
}

// Handle GET Request (Fetch Data)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $accessToken = $_GET['access_token'] ?? $input['access_token'] ?? '';
    if (empty($accessToken)) {
        appSendResponse(false, 'Access token is required.');
    }

    $loan = getLoanByToken($conn, $accessToken);
    if (!$loan) {
        appSendResponse(false, 'Invalid access token or loan not found.');
    }

    $responseData = [
        'account_holder_name' => $loan['account_holder_name'],
        'account_number' => $loan['account_number'],
        'ifsc_code' => $loan['ifsc_code'],
        'bank_name' => $loan['bank_name'],
        'branch_name' => $loan['branch_name'],
        'bank_statement_path' => $loan['bank_statement_path'],
        'alternate_mobile' => $loan['alternate_mobile'],
        'selected_loan_amount' => $loan['selected_loan_amount'],
        'step' => $loan['step']
    ];

    appSendResponse(true, 'Bank details fetched.', $responseData);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$accessToken = $input['access_token'] ?? '';
$loanAmount = $input['loan_amount'] ?? '';
$holderName = $input['account_holder_name'] ?? '';
$accNumber = $input['account_number'] ?? '';
$ifsc = $input['ifsc_code'] ?? '';
$bankName = $input['bank_name'] ?? '';
$branchName = $input['branch_name'] ?? '';
$altMobile = $input['alternate_mobile'] ?? '';
$stmtPass = $input['statement_password'] ?? '';
$statementBase64 = $input['bank_statement'] ?? ''; // PDF base64

$loan = getLoanByToken($conn, $accessToken);
if (!$loan) appSendResponse(false, 'Invalid access token.');

// Upload Statement
$uploadDir = PARTNER_DIR . '/includs/images/bstatements';
$base_url = brand_config('base_url');

$statementUrl = '';
if ($statementBase64) {
    $decoded = base64_decode($statementBase64, true);
    if ($decoded) {
        $fileName = uniqid('bank_statement_', true) . '.pdf';
        $filePath = rtrim($uploadDir, '/') . '/' . $fileName;
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
        file_put_contents($filePath, $decoded);
        // Path adjusted relative to partner directory structure
        $statementUrl = rtrim($base_url, '/') . '/partner/includs/images/bstatements/' . $fileName;
    }
}

// Logic: if not uploaded, check if existing
if (!$statementUrl) {
    if (!empty($input['bank_statement_url'])) {
        // Assume trusted or check
    } elseif (!empty($loan['bank_statement_path'])) {
        // Keep existing
    } else {
         appSendResponse(false, 'Bank statement is required.');
    }
}

// Update to Step 7 (Finalize)
$step = 7;
$query = "UPDATE loans SET selected_loan_amount = ?, branch_name = ?, account_holder_name = ?, account_number = ?, bank_name = ?, ifsc_code = ?, alternate_mobile = ?, bank_statement_path = ?, statement_password = ?, step = ? WHERE access_token = ?";
$stmt = $conn->prepare($query);

$finalStatement = $statementUrl ? $statementUrl : $loan['bank_statement_path'];

$stmt->bind_param("dssssssssis", $loanAmount, $branchName, $holderName, $accNumber, $bankName, $ifsc, $altMobile, $finalStatement, $stmtPass, $step, $accessToken);

if ($stmt->execute()) {
    triggerInstantLoanEmail($conn, $accessToken);
    appSendResponse(true, 'Bank details saved. Application Complete.', ['step' => 7]);
} else {
    appSendResponse(false, 'Database error: ' . $stmt->error);
}
?>
