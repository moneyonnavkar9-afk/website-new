<?php
// Logger Helper Function
// Logs requests and responses to api/logs/app_loan_debug.log

function logAppRequest($endpoint, $input) {
    $logFile = __DIR__ . '/../../api/logs/app_loan_debug.log';
    $timestamp = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

    // Mask sensitive data
    if (isset($input['pan_image'])) $input['pan_image'] = '[BASE64_IMAGE]';
    if (isset($input['additional_doc'])) $input['additional_doc'] = '[BASE64_IMAGE]';
    if (isset($input['selfie_image'])) $input['selfie_image'] = '[BASE64_IMAGE]';
    if (isset($input['house_image'])) $input['house_image'] = '[BASE64_IMAGE]';
    if (isset($input['bank_statement'])) $input['bank_statement'] = '[BASE64_PDF]';

    $logEntry = "[$timestamp] [REQUEST] [$endpoint] [IP:$ip] " . json_encode($input, JSON_PRETTY_PRINT) . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}

function logAppResponse($endpoint, $success, $message, $data = []) {
    $logFile = __DIR__ . '/../../api/logs/app_loan_debug.log';
    $timestamp = date('Y-m-d H:i:s');

    $logEntry = "[$timestamp] [RESPONSE] [$endpoint] Success: " . ($success ? 'true' : 'false') . " | Msg: $message | Data: " . json_encode($data) . PHP_EOL . str_repeat('-', 50) . PHP_EOL;
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}

function appSendResponse($success, $message, $data = [], $statusCode = 200) {
    global $endpointName; // Should be defined in the calling script
    logAppResponse($endpointName ?? 'unknown', $success, $message, $data);

    http_response_code($statusCode);
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}
?>
