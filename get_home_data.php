<?php
// api/get_home_data.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate
$userId = authenticateUser($conn);

// 2. Fetch Profile Data
$profileData = getUserProfile($conn, $userId);

if (!$profileData) {
    // Should not happen if authenticated, but safety check
    sendResponse(false, 'User not found', [], 404);
}

// Check Block Status
$blockStmt = $conn->prepare("SELECT is_blocked FROM app_users WHERE id = ?");
if ($blockStmt) {
    $blockStmt->bind_param("i", $userId);
    $blockStmt->execute();
    $blockRes = $blockStmt->get_result();
    if ($blockRes->num_rows > 0) {
        $bRow = $blockRes->fetch_assoc();
        if (!empty($bRow['is_blocked'])) {
            $blockStmt->close();
            // Return failure with specific message
            sendResponse(false, 'Your account is blocked.', ['is_blocked' => true], 403);
        }
    }
    $blockStmt->close();
}

// 3. Calculate Progress
$progress = calculateProfileCompleteness($profileData);

// 4. Check for Incomplete and Active Loans
// Use the mobile number from the user profile
$mobile = $profileData['personal']['mobile_no'];
$incompleteLoan = getIncompleteLoan($conn, $mobile);
$allIncompleteLoans = getAllIncompleteLoans($conn, $mobile);

// Fetch Approved/Active Loans (Step >= 7)
$approvedLoans = [];
$stmt = $conn->prepare("SELECT file_id, file_type, status, step, access_token, approved_loan_amount, accepted_loan_amount, tenure, emi_amount, rate_of_interest, created_at FROM loans WHERE mobile = ? AND step >= 7 ORDER BY id DESC");
if ($stmt) {
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
        $approvedLoans[] = [
            'file_id' => $row['file_id'],
            'file_type' => $row['file_type'],
            'status' => $row['status'],
            'step' => (int)$row['step'],
            'access_token' => $row['access_token'],
            'approved_loan_amount' => $row['approved_loan_amount'],
            'accepted_loan_amount' => $row['accepted_loan_amount'],
            'tenure' => $row['tenure'],
            'emi_amount' => $row['emi_amount'],
            'rate_of_interest' => $row['rate_of_interest'],
            'created_at' => $row['created_at']
        ];
    }
    $stmt->close();
}

// 5. Construct Response
$response = [
    'profile_progress' => $progress,
    'pending_loan_application' => null,
    'all_pending_loans' => [],
    'approved_loans' => $approvedLoans
];

if ($incompleteLoan) {
    $response['pending_loan_application'] = [
        'file_id' => $incompleteLoan['file_id'],
        'access_token' => $incompleteLoan['access_token'],
        'current_step' => (int)$incompleteLoan['step'],
        'amount' => $incompleteLoan['selected_loan_amount'],
        'started_at' => $incompleteLoan['created_at'],
        'message' => 'Complete your application to get approved faster!'
    ];
}

if (!empty($allIncompleteLoans)) {
    foreach ($allIncompleteLoans as $loan) {
        $response['all_pending_loans'][] = [
            'file_id' => $loan['file_id'],
            'access_token' => $loan['access_token'],
            'file_type' => $loan['file_type'],
            'current_step' => (int)$loan['step'],
            'amount' => $loan['selected_loan_amount'],
            'started_at' => $loan['created_at'],
        ];
    }
}

sendResponse(true, 'Home screen data fetched', $response);
?>
