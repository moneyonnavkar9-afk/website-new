<?php
// check_video_kyc.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// Authenticate
if (!function_exists('authenticateUser')) {
    function authenticateUser($conn) {
        $headers = getallheaders();
        $authHeader = isset($headers['Authorization']) ? $headers['Authorization'] : '';
        
        if (empty($authHeader)) {
             sendResponse(false, 'Unauthorized', [], 401);
        }
        
        if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
            $token = $matches[1];
            
            $stmt = $conn->prepare("SELECT user_id FROM app_auth_tokens WHERE token = ? AND (expires_at IS NULL OR expires_at > NOW())");
            if ($stmt) {
                $stmt->bind_param("s", $token);
                $stmt->execute();
                $stmt->bind_result($userId);
                if ($stmt->fetch()) {
                    $stmt->close();
                    return $userId;
                }
                $stmt->close();
            }

            $stmt = $conn->prepare("SELECT id FROM user WHERE access_token = ?");
            if ($stmt) {
                $stmt->bind_param("s", $token);
                $stmt->execute();
                $stmt->bind_result($userId);
                if ($stmt->fetch()) {
                    $stmt->close();
                    return $userId;
                }
                $stmt->close();
            }
        }
        
        sendResponse(false, 'Invalid Token', [], 401);
        return null;
    }
}

$userId = authenticateUser($conn);

$loanId = isset($_GET['loan_id']) ? $_GET['loan_id'] : null;

if (!$loanId) {
    sendResponse(false, 'Loan ID is required');
}

// 1. Check if video KYC is already done or pending
// We check the `loans` table.
// Based on SQL dump, columns are `g1_video_status`, `g2_video_status`, `video_url`.
// It seems `video_url` stores the user's video KYC url if done?
// Or maybe `g_verification`?
// Let's assume `video_url` being not empty means video KYC is done, OR check a status field if one exists specifically for video KYC.
// The SQL dump shows `video_url` varchar(50) NOT NULL (but seemingly empty string by default based on inserts).

$stmt = $conn->prepare("SELECT video_url, g1_video_status FROM loans WHERE (file_id = ? OR id = ?)");
$stmt->bind_param("ss", $loanId, $loanId);
$stmt->execute();
$result = $stmt->get_result();
$loan = $result->fetch_assoc();

$isVideoKycDone = false;
if ($loan) {
    if (!empty($loan['video_url'])) {
        $isVideoKycDone = true;
    }
}

// 2. Return status and potentially the link
// For now, we generate a link to a web page handling the video call
// We'll append an access token to the URL so the web page knows who is connecting.
// We need to fetch the access token for the loan application if possible, or user token.
// The `loans` table has `access_token` column.

$accessToken = '';
$stmtToken = $conn->prepare("SELECT access_token FROM loans WHERE (file_id = ? OR id = ?)");
$stmtToken->bind_param("ss", $loanId, $loanId);
$stmtToken->execute();
$resToken = $stmtToken->get_result();
if ($row = $resToken->fetch_assoc()) {
    $accessToken = $row['access_token'];
}

$brandPartnerBase = rtrim((string) brand_url(), '/');
$videoKycUrl = $brandPartnerBase . "/verify/vdata.php?access_token=" . $accessToken;
$selfieHomeUrl = $brandPartnerBase . "/selfie_home_verification.php?atc=" . $accessToken;

if ($isVideoKycDone) {
    $videoKycUrl = "";
}

sendResponse(true, 'Video KYC status', [
    'is_completed' => $isVideoKycDone,
    'video_kyc_url' => $videoKycUrl,
    'selfie_home_verification_url' => $selfieHomeUrl,
    'access_token' => $accessToken
]);

?>
