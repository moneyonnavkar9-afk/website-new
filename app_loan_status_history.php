<?php
require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate User
$userId = authenticateUser($conn);

// 2. Get Loan ID from request
$loanId = $_GET['loan_id'] ?? null;
if (!$loanId) {
    sendResponse(false, 'Loan ID is required');
}

// 3. Verify that the loan belongs to the user and fetch its status
$stmt = $conn->prepare("SELECT l.id, l.status, l.created_at FROM loans l JOIN app_users u ON l.mobile = u.mobile_no WHERE (l.id = ? OR l.file_id = ?) AND u.id = ?");
$stmt->bind_param("ssi", $loanId, $loanId, $userId);
$stmt->execute();
$result = $stmt->get_result();
$loan = $result->fetch_assoc();

if (!$loan) {
    sendResponse(false, 'Loan not found or access denied');
}
$internalLoanId = $loan['id'];
$stmt->close();

// 4. Fetch the loan status history from the database
// We assume a table named 'loan_status_history' with columns: loan_id, status, remark, created_at
$historyStmt = $conn->prepare("SELECT status, remark, created_at AS timestamp FROM loan_status_history WHERE loan_id = ? ORDER BY created_at ASC");
$historyStmt->bind_param("i", $internalLoanId);
$historyStmt->execute();
$historyResult = $historyStmt->get_result();

$history = [];

// Add the initial creation status. This is the first event in any loan's lifecycle.
$history[] = [
    'status' => 'Application Submitted',
    'remark' => 'Your loan application has been received and is pending review.',
    'timestamp' => $loan['created_at'],
    'formatted_date' => date('d M Y, h:i A', strtotime($loan['created_at']))
];

while ($row = $historyResult->fetch_assoc()) {
    $row['formatted_date'] = date('d M Y, h:i A', strtotime($row['timestamp']));
    $history[] = $row;
}
$historyStmt->close();


sendResponse(true, 'History fetched successfully', $history);
?>