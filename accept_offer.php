<?php
// Step 8: Accept Offer (Final Step)
require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'accept_offer';
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

function calculateEMI($loanAmount, $rateOfInterest, $tenureMonths) {
    if ($loanAmount <= 0 || $tenureMonths <= 0) return 0.0;
    $monthlyInterestRate = $rateOfInterest / 12 / 100;
    if ($monthlyInterestRate <= 0) return $loanAmount / $tenureMonths;
    $factor = pow(1 + $monthlyInterestRate, $tenureMonths);
    return ($loanAmount * $monthlyInterestRate * $factor) / ($factor - 1);
}

function generateAccessToken() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = '';
    for ($i = 0; $i < 12; $i++) {
        $token .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $token;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$accessToken = $input['access_token'] ?? '';
$acceptedAmount = isset($input['loan_amount']) ? (float)$input['loan_amount'] : 0.0;
$acceptedTenure = isset($input['tenure']) ? (int)$input['tenure'] : 0;

$loan = getLoanByToken($conn, $accessToken);
if (!$loan) appSendResponse(false, 'Invalid or expired access token.');

// Per user instruction, we only validate against soft_approval_amount.
// approved_loan_amount is ignored for validation.
$softApprovalAmount = (float)$loan['soft_approval_amount'];
$roi = (float)$loan['rate_of_interest'];

$maxAmount = $softApprovalAmount;

// Determine ROI
if ($roi <= 0) {
    $roi = rand(12, 28);
}

// Basic Validation
if ($acceptedAmount <= 0 || $acceptedAmount > $maxAmount) {
    appSendResponse(false, "Invalid loan amount. Must be between 0 and $maxAmount.");
}
if ($acceptedTenure < 12) {
    appSendResponse(false, "Tenure must be at least 12 months.");
}

$emi = calculateEMI($acceptedAmount, $roi, $acceptedTenure);
$newAccessToken = generateAccessToken();
$fileId = $loan['file_id'];
$step = 7;

// Update Query - Include rate_of_interest
$updateQuery = 'UPDATE loans SET access_token = ?, accepted_loan_amount = ?, emi_amount = ?, tenure = ?, step = ?, rate_of_interest = ? WHERE id = ?';
$updateStmt = $conn->prepare($updateQuery);
// Fix bind_param types:
// s (token), d (amount), d (emi), i (tenure), i (step), d (roi), i (id)
$updateStmt->bind_param('sddiidi', $newAccessToken, $acceptedAmount, $emi, $acceptedTenure, $step, $roi, $loan['id']);

if ($updateStmt->execute()) {
    // Send Emails
    $emails = ['finalInstantOffer', 'verification'];
    foreach ($emails as $type) {
        $params = http_build_query(['m' => $type, 'access_token' => $newAccessToken]);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, brand_url('includs/mail_handler.php?' . $params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }

    appSendResponse(true, 'Offer accepted successfully.', [
        'step' => 7,
        'status' => 'finalized',
        'new_access_token' => $newAccessToken,
        'accepted_amount' => $acceptedAmount,
        'tenure' => $acceptedTenure,
        'emi' => $emi,
        'rate_of_interest' => $roi
    ]);
} else {
    appSendResponse(false, 'Database error: ' . $updateStmt->error);
}
?>
