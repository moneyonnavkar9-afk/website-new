<?php
require_once __DIR__ . '/api_common.php';

// Check DB connection
if (!isset($conn) || $conn->connect_error) {
    sendResponse(false, 'Database connection failed', [], 500);
}

// Get Input
$input = getJsonInput();

if (!isset($input['mobile']) || empty($input['mobile'])) {
    sendResponse(false, 'Mobile number is required', [], 400);
}

// Basic cleanup
$mobile = preg_replace('/\D+/', '', $input['mobile']);
if (strlen($mobile) > 10) {
    $mobile = substr($mobile, -10);
}

if (strlen($mobile) !== 10) {
    sendResponse(false, 'Invalid mobile number', [], 400);
}

// 0. Check Loan Existence (Restrict Login)
$checkLoanStmt = $conn->prepare("SELECT id FROM loans WHERE mobile = ? LIMIT 1");
if ($checkLoanStmt) {
    $checkLoanStmt->bind_param("s", $mobile);
    $checkLoanStmt->execute();
    $checkLoanStmt->store_result();

    if ($checkLoanStmt->num_rows === 0) {
        $checkLoanStmt->close();
        sendResponse(false, 'Please apply on website to generate your offer', [], 403);
    }
    $checkLoanStmt->close();
} else {
    error_log('DB Prepare Error (Check Loan): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}

// 0.1 Check Block Status
$blockStmt = $conn->prepare("SELECT is_blocked FROM app_users WHERE mobile_no = ?");
if ($blockStmt) {
    $blockStmt->bind_param("s", $mobile);
    $blockStmt->execute();
    $blockResult = $blockStmt->get_result();
    if ($blockResult->num_rows > 0) {
        $userRow = $blockResult->fetch_assoc();
        if (!empty($userRow['is_blocked'])) {
            $blockStmt->close();
            sendResponse(false, 'Your account is blocked. Please contact support.', [], 403);
        }
    }
    $blockStmt->close();
}

// 1. Rate Limiting Check
$stmt = $conn->prepare("SELECT created_at FROM app_otp_verifications WHERE mobile = ? ORDER BY id DESC LIMIT 1");

if ($stmt === false) {
    error_log('DB Prepare Error (Rate Limit): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}

$stmt->bind_param("s", $mobile);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastSent = strtotime($row['created_at']);
    $currentTime = time();

    // 60 seconds cooldown
    if (($currentTime - $lastSent) < 60) {
        $stmt->close();
        sendResponse(false, 'Please wait before requesting another OTP', [], 429);
    }
}
$stmt->close();

// 2. Generate OTP
$otp = (string) random_int(1000, 9999);
$expiresAt = date('Y-m-d H:i:s', strtotime('+5 minutes'));

// 3. Store OTP in DB
$insertStmt = $conn->prepare("INSERT INTO app_otp_verifications (mobile, otp, expires_at) VALUES (?, ?, ?)");

if ($insertStmt === false) {
    error_log('DB Prepare Error (Insert OTP): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}

$insertStmt->bind_param("sss", $mobile, $otp, $expiresAt);

if (!$insertStmt->execute()) {
    error_log('DB Execute Error (Insert OTP): ' . $insertStmt->error);
    $insertStmt->close();
    sendResponse(false, 'System error occurred. Please try again.', [], 500);
}
$insertStmt->close();

// 4. Send SMS
// Use the PARTNER_DIR constant defined in api_common.php
$smsTemplatesPath = PARTNER_DIR . '/includs/sms_templates.php';

// Fallback template and key to avoid 500s if the config file is missing in some environments
$fallbackTemplate = [
    'template_id' => '1107176399019144183',
    'sender_id'   => 'iVRDMN',
    'provider'    => 'powerstext',
    'message'     => 'Dear Customer, your OTP is %s. This OTP is valid for 5 minutes. Do not share this code with anyone. -%s'
];
$fallbackKey = '3333556464616e3130301708250263';

$smsTemplates = [];
if (file_exists($smsTemplatesPath)) {
    $smsTemplates = require $smsTemplatesPath;
} else {
    error_log('SMS Templates file not found at: ' . $smsTemplatesPath . ' (using fallback)');
}

// Resolve template and API key
$tpl = $smsTemplates['otp_verification'] ?? $fallbackTemplate;

if (!isset($tpl['message'], $tpl['sender_id'], $tpl['template_id'])) {
    error_log('OTP Verification template missing required fields');
    sendResponse(false, 'Configuration error (Template missing fields)', [], 500);
}

// "Dear Customer, your OTP is %s. ... -%s"
$brandName = (function_exists('brand_config')) ? brand_config('brand_name') : 'Vardhman Finance';

$message = sprintf($tpl['message'], $otp, $brandName);

// Configuration
$apiKey = $smsTemplates['keys']['powerstext_default'] ?? $fallbackKey; // Hardcoded as per login.php
$senderId = $tpl['sender_id'];
$templateId = $tpl['template_id'];

// Prepare CURL parameters
$messageContent = urlencode($message);
$encodedMobile = urlencode($mobile);
$encodedKey = urlencode($apiKey);
$encodedSenderId = urlencode($senderId);
$encodedTemplateId = urlencode($templateId);

$url = "http://sms1.powerstext.in/http-tokenkeyapi.php?authentic-key={$encodedKey}&senderid={$encodedSenderId}&route=1&number={$encodedMobile}&message={$messageContent}&templateid={$encodedTemplateId}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$output = curl_exec($ch);
$curlError = curl_error($ch);
curl_close($ch);

if ($output === false) {
    error_log('SMS Error: ' . $curlError);
    sendResponse(false, 'Failed to send OTP (Network Error)', [], 500);
} else {
    sendResponse(true, 'OTP sent successfully');
}
?>
