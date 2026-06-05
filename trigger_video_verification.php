<?php
// Endpoint: api/app_loan/trigger_video_verification.php
// Purpose: Checks video verification status and returns the verification link if not completed.

require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'trigger_video_verification';
$input = getJsonInput();
logAppRequest($endpointName, $input);

// 1. Validate Input
$accessToken = $input['access_token'] ?? '';

if (empty($accessToken)) {
    appSendResponse(false, 'Access token is required.');
}

// 2. Query Loan Status
$stmt = $conn->prepare("SELECT id, name, video_url, g1_video_url, g2_video_url FROM loans WHERE access_token = ? LIMIT 1");
if (!$stmt) {
    appSendResponse(false, 'Database error: ' . $conn->error);
}

$stmt->bind_param("s", $accessToken);
$stmt->execute();
$result = $stmt->get_result();
$loan = $result->fetch_assoc();
$stmt->close();

if (!$loan) {
    appSendResponse(false, 'Invalid access token or loan not found.');
}

// 3. Check Verification Status
// Note: We primarily check the main applicant's video status.
// Guarantor logic can be added here if needed, but the prompt implies "user video verification".
$isCompleted = !empty($loan['video_url']);

if ($isCompleted) {
    appSendResponse(true, 'Video verification already completed.', [
        'is_completed' => true,
        'link' => null
    ]);
} else {
    // 4. Generate Link
    // brand_config('base_url') returns e.g. https://vardhmanfinance.com/partner/
    // We need to append verify/vdata.php
    $baseUrl = rtrim(brand_config('base_url'), '/');
    $verificationLink = $baseUrl . '/verify/vdata.php?access_token=' . urlencode($accessToken);

    appSendResponse(true, 'Video verification link generated.', [
        'is_completed' => false,
        'link' => $verificationLink
    ]);
}
?>
