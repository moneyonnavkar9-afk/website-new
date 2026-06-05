<?php
// Endpoint: api/app_loan/resume_loan.php
// Description: Returns ALL loan details (standard + extended) to allow mobile app to resume/pre-fill.

require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'resume_loan';
$input = $_GET; // Strictly GET request

function ensureExtendedTable($conn) {
    $table = "loan_extended_details";
    $sql = "CREATE TABLE IF NOT EXISTS $table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        loan_id INT NOT NULL,
        access_token VARCHAR(255) NOT NULL,
        salary_credit_mode VARCHAR(100) DEFAULT NULL,
        salary_slip_2 VARCHAR(255) DEFAULT NULL,
        salary_slip_3 VARCHAR(255) DEFAULT NULL,
        icard_image VARCHAR(255) DEFAULT NULL,
        firm_type VARCHAR(100) DEFAULT NULL,
        business_turnover VARCHAR(100) DEFAULT NULL,
        business_proof_type VARCHAR(100) DEFAULT NULL,
        business_proof_url VARCHAR(255) DEFAULT NULL,
        business_image VARCHAR(255) DEFAULT NULL,
        incorporation_cert VARCHAR(255) DEFAULT NULL,
        project_report VARCHAR(255) DEFAULT NULL,
        house_type VARCHAR(100) DEFAULT NULL,
        rent_agreement VARCHAR(255) DEFAULT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        UNIQUE KEY uk_access_token (access_token),
        INDEX idx_loan_id (loan_id)
    )";
    $conn->query($sql);
}

// Ensure table exists before querying
ensureExtendedTable($conn);

$accessToken = $input['access_token'] ?? '';
if (empty($accessToken)) {
    appSendResponse(false, 'Access token is required.');
}

// Fetch from Loans (Standard)
$stmt = $conn->prepare("SELECT * FROM loans WHERE access_token = ?");
$stmt->bind_param("s", $accessToken);
$stmt->execute();
$result = $stmt->get_result();
$loan = $result->fetch_assoc();
$stmt->close();

if (!$loan) {
    appSendResponse(false, 'Invalid access token or loan not found.');
}

// --- Logic to ensure ROI and Soft Approval are set (Fix for missing ROI) ---
$roi = isset($loan['rate_of_interest']) ? (float)$loan['rate_of_interest'] : 0.0;
$softApprovalAmount = isset($loan['soft_approval_amount']) ? (float)$loan['soft_approval_amount'] : 0.0;
$needsUpdate = false;

if ($softApprovalAmount <= 0) {
    $minAmount = 7500;
    $maxAmount = 15000;
    $randomHundreds = rand($minAmount, $maxAmount);
    $softApprovalAmount = $randomHundreds * 100;
    $loan['soft_approval_amount'] = $softApprovalAmount; // Update array for response
    $needsUpdate = true;
}

if ($roi <= 0) {
    // Generate random ROI between 12.0 and 18.0
    $roi = rand(120, 180) / 10.0;
    $loan['rate_of_interest'] = $roi; // Update array for response
    $needsUpdate = true;
}

if ($needsUpdate) {
    $updateStmt = $conn->prepare("UPDATE loans SET soft_approval_amount = ?, rate_of_interest = ? WHERE access_token = ?");
    if ($updateStmt) {
        $updateStmt->bind_param("dds", $softApprovalAmount, $roi, $accessToken);
        $updateStmt->execute();
        $updateStmt->close();
    }
}
// --------------------------------------------------------------------------

// Fetch from Extended Details
$stmtExt = $conn->prepare("SELECT * FROM loan_extended_details WHERE access_token = ?");
$stmtExt->bind_param("s", $accessToken);
$stmtExt->execute();
$resExt = $stmtExt->get_result();
$extended = $resExt->fetch_assoc();
$stmtExt->close();

if (!$extended) $extended = [];

// Merge Data
$data = array_merge($loan, $extended);

// Handle numeric step explicitly
$data['step'] = (int)$data['step'];

// Construct Response
appSendResponse(true, 'Loan details fetched.', $data);
?>
