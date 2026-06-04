<?php
// api/get_my_loans.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate
$userId = authenticateUser($conn);

// 2. Get status from request
$status = $_GET['status'] ?? null;

// 3. Fetch User Profile to get Mobile Number
// Loans are linked by mobile number, so we need to get the user's mobile.
$stmt = $conn->prepare("SELECT mobile_no FROM app_users WHERE id = ?");
if (!$stmt) {
    sendResponse(false, 'Database error', [], 500);
}
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if (!$user || empty($user['mobile_no'])) {
    sendResponse(false, 'User mobile number not found', [], 404);
}

$mobile = $user['mobile_no'];

// 4. Fetch Loans
// Fetches all loans (active, pending, incomplete) linked to the mobile number.
// Using explicit column names that exist in the loans table according to u727169065_vard.sql
$query = "SELECT id, file_id, file_type, status, step, access_token, soft_approval_amount, approved_loan_amount, created_at, 
          accepted_loan_amount, tenure, emi_amount, rate_of_interest, name, father_name, mobile, email, aadhar_number AS aadhaar_no, pan_Number AS pan_no
          FROM loans
          WHERE mobile = ?";

$params = [$mobile];
$types = 's';

if ($status !== null) {
    $query .= " AND status = ?";
    $params[] = $status;
    $types .= 's';
}

$query .= " ORDER BY id DESC";

$stmt = $conn->prepare($query);
if (!$stmt) {
    // If table doesn't exist or other error
    sendResponse(false, 'Error preparing loan query: ' . $conn->error, [], 500);
}

$stmt->bind_param($types, ...$params);
$stmt->execute();
$result = $stmt->get_result();

$loans = [];
while ($row = $result->fetch_assoc()) {
    // Add a computed status for frontend display if needed
    // e.g. if step < 7, it's "Incomplete"
    $displayStatus = $row['status'];
    if ($row['step'] < 7 && $row['status'] != 'rejected') {
        $displayStatus = 'incomplete';
    }

    $row['display_status'] = $displayStatus;

    // Filter fields that are only relevant for step >= 7
    // Keep essential info for all steps if required by the new track loan screen
    /*
    if ($row['step'] < 7) {
        unset($row['accepted_loan_amount']);
        unset($row['tenure']);
        unset($row['emi_amount']);
        unset($row['rate_of_interest']);
    }
    */

    $loans[] = $row;
}
$stmt->close();

// 5. Send Response
sendResponse(true, 'Loans fetched successfully', $loans);
?>