<?php
// Include api_common.php first, which handles error suppression and JSON headers
require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// At this point, api_common has cleaned the buffer and set content-type: application/json

// Use the existing authenticateUser function from profile_helpers.php or define it if missing
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

// Fetch user mobile number to verify ownership
$userMobile = '';
$stmt = $conn->prepare("SELECT mobile_no FROM app_users WHERE id = ?");
if ($stmt) {
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($row = $res->fetch_assoc()) {
        $userMobile = $row['mobile_no'];
    }
    $stmt->close();
}

if (empty($userMobile)) {
    $stmt = $conn->prepare("SELECT mobile FROM user WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($row = $res->fetch_assoc()) {
            $userMobile = $row['mobile'];
        }
        $stmt->close();
    }
}

if (empty($userMobile)) {
     sendResponse(false, 'User profile not found');
}

// Now search in `loans` table
$stmt = $conn->prepare("SELECT id, file_id, status, created_at, step, approved_loan_amount, accepted_loan_amount, name, file_type, tenure, rate_of_interest, emi_amount FROM loans WHERE (file_id = ? OR id = ?) AND mobile = ?");
$stmt->bind_param("sis", $loanId, $loanId, $userMobile);
$stmt->execute();
$result = $stmt->get_result();
$loan = $result->fetch_assoc();

// If not found in `loans`, check `cibil_data`
if (!$loan) {
    $stmt = $conn->prepare("SELECT id, file_id, step, created_at, name, file_type, selected_loan_amount FROM cibil_data WHERE (file_id = ? OR id = ?) AND mobile = ?");
    $stmt->bind_param("sis", $loanId, $loanId, $userMobile);
    $stmt->execute();
    $result = $stmt->get_result();
    $loan = $result->fetch_assoc();
    
    if ($loan) {
        $loan['status'] = 'incomplete'; 
    }
}

if (!$loan) {
    sendResponse(false, 'Loan not found');
}

// Determine tracking steps based on status
$status = strtolower($loan['status'] ?? 'pending');
$step = isset($loan['step']) ? (int)$loan['step'] : 0;
$createdAt = $loan['created_at'];

$trackingData = [
    'application_submitted' => true,
    'application_submitted_date' => $createdAt,
    'under_review' => false,
    'under_review_date' => null,
    'approved' => false,
    'approved_date' => null,
    'disbursed' => false,
    'disbursed_date' => null,
    
    // Additional Details
    'name' => $loan['name'] ?? '',
    'loan_type' => 'Private Funding', // Hardcoded as requested
    'file_type_original' => $loan['file_type'] ?? '',
    'file_id' => $loan['file_id'] ?? $loan['id'] ?? '',
    'amount' => $loan['accepted_loan_amount'] ?? $loan['approved_loan_amount'] ?? $loan['selected_loan_amount'] ?? 0,
    'tenure' => $loan['tenure'] ?? '',
    'roi' => $loan['rate_of_interest'] ?? '',
    'emi' => $loan['emi_amount'] ?? ''
];

// Logic for stages
if ($status != 'incomplete' && $step >= 2) {
    $trackingData['under_review'] = true;
    $trackingData['under_review_date'] = date('Y-m-d H:i:s', strtotime($createdAt . ' +1 hour'));
}

if (in_array($status, ['approved', 'disbursed', 'active', 'closed']) || ($step >= 6)) {
    $trackingData['approved'] = true;
    $trackingData['approved_date'] = date('Y-m-d H:i:s', strtotime($createdAt . ' +1 day'));
}

if (in_array($status, ['disbursed', 'active', 'closed'])) {
    $trackingData['disbursed'] = true;
     $trackingData['disbursed_date'] = date('Y-m-d H:i:s', strtotime($createdAt . ' +2 days'));
}

sendResponse(true, 'Tracking info fetched', $trackingData);
?>
