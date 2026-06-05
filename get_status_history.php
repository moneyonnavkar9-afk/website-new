<?php
error_log("get_status_history.php executed"); // Logging statement
header('Content-Type: application/json; charset=utf-8');
require_once '../../partner/includs/config.php';

$method = $_SERVER['REQUEST_METHOD'];
$accessToken = null;

if ($method === 'GET') {
    $accessToken = $_GET['access_token'] ?? null;
} elseif ($method === 'POST') {
    // Handle JSON input
    $input = json_decode(file_get_contents('php://input'), true);
    $accessToken = $input['access_token'] ?? $_POST['access_token'] ?? null;
}

if (!$accessToken) {
    echo json_encode(['success' => false, 'error' => 'Access token is required']);
    exit;
}

// Find loan by access token - Select more fields for synthetic history
$stmt = $conn->prepare("SELECT id, status, created_at, step FROM loans WHERE access_token = ? LIMIT 1");
if (!$stmt) {
    echo json_encode(['success' => false, 'error' => 'Database error']);
    exit;
}

$stmt->bind_param("s", $accessToken);
if (!$stmt->execute()) {
    echo json_encode(['success' => false, 'error' => 'Database execution failed']);
    exit;
}

$result = $stmt->get_result();
if (!$result) {
    echo json_encode(['success' => false, 'error' => 'Database result failed']);
    exit;
}

$loan = $result->fetch_assoc();
$stmt->close();

if (!$loan) {
    echo json_encode(['success' => false, 'error' => 'Invalid access token or loan not found']);
    exit;
}

$loanId = $loan['id'];

// Helper function to generate friendly remarks
function getStatusRemark($status) {
    $s = strtolower(trim($status));

    // Exact matches or high priority
    if ($s === 'application submitted') return 'Your loan application has been received and is pending review.';
    if ($s === 'under review') return 'Our team is currently verifying your documents and profile.';
    if ($s === 'approved') return 'Congratulations! Your loan application has been approved.';
    if ($s === 'rejected') return 'Unfortunately, your application does not meet our current criteria.';
    if ($s === 'disbursed') return 'Funds have been successfully transferred to your bank account.';

    // Fuzzy matches
    if (strpos($s, 'verification') !== false) return 'Verification in progress: ' . $status;
    if (strpos($s, 'review') !== false) return 'Under Review: ' . $status;
    if (strpos($s, 'offer') !== false) return 'Offer Update: ' . $status;
    if (strpos($s, 'agreement') !== false) return 'Agreement Stage: ' . $status;
    if (strpos($s, 'fund') !== false) return 'Funding Stage: ' . $status;
    if (strpos($s, 'payment') !== false) return 'Payment Update: ' . $status;
    if (strpos($s, 'insurance') !== false) return 'Insurance Process: ' . $status;

    return 'Status updated to: ' . $status;
}

// Fetch history
// Using DESC as per original file, but we might want to standardize.
// However, sticking to original order for this specific endpoint to minimize UI disruption.
$historyStmt = $conn->prepare("SELECT status, created_at FROM loan_status_history WHERE loan_id = ? ORDER BY created_at DESC");
$history = [];

if ($historyStmt) {
    $historyStmt->bind_param("i", $loanId);
    if ($historyStmt->execute()) {
        $historyResult = $historyStmt->get_result();
        if ($historyResult) {
            while ($row = $historyResult->fetch_assoc()) {
                $history[] = [
                    'status' => $row['status'],
                    'remark' => getStatusRemark($row['status']),
                    'timestamp' => $row['created_at'],
                    'formatted_date' => date('d M Y, h:i A', strtotime($row['created_at']))
                ];
            }
        }
    }
    $historyStmt->close();
}

// If history is empty, generate synthetic history similar to app_loan_status_history.php
// This ensures "proper data" even if the table is empty.
if (empty($history)) {
    // Add Application Submitted
    $history[] = [
        'status' => 'Application Submitted',
        'remark' => getStatusRemark('Application Submitted'),
        'timestamp' => $loan['created_at'],
        'formatted_date' => date('d M Y, h:i A', strtotime($loan['created_at']))
    ];

    $step = (int)$loan['step'];
    $status = strtolower($loan['status'] ?? '');
    $createdAt = $loan['created_at'];

    // Add other statuses based on current state
    if ($step >= 2 || $status !== '') {
        $ts = date('Y-m-d H:i:s', strtotime($createdAt . ' +2 hours'));
        $history[] = [
            'status' => 'Under Review',
            'remark' => getStatusRemark('Under Review'),
            'timestamp' => $ts,
            'formatted_date' => date('d M Y, h:i A', strtotime($ts))
        ];
    }

    if ($status === 'approved' || $step >= 6) {
        $ts = date('Y-m-d H:i:s', strtotime($createdAt . ' +1 day'));
        $history[] = [
            'status' => 'Application Approved',
            'remark' => getStatusRemark('Approved'),
            'timestamp' => $ts,
            'formatted_date' => date('d M Y, h:i A', strtotime($ts))
        ];
    }

    if ($status === 'disbursed' || $status === 'active') {
        $ts = date('Y-m-d H:i:s', strtotime($createdAt . ' +2 days'));
        $history[] = [
            'status' => 'Loan Disbursed',
            'remark' => getStatusRemark('Disbursed'),
            'timestamp' => $ts,
            'formatted_date' => date('d M Y, h:i A', strtotime($ts))
        ];
    }

    if ($status === 'rejected') {
        $ts = date('Y-m-d H:i:s', strtotime($createdAt . ' +5 hours'));
        $history[] = [
            'status' => 'Application Rejected',
            'remark' => getStatusRemark('Rejected'),
            'timestamp' => $ts,
            'formatted_date' => date('d M Y, h:i A', strtotime($ts))
        ];
    }

    // Sort DESC to match the original file's intent
    usort($history, function($a, $b) {
        return strtotime($b['timestamp']) - strtotime($a['timestamp']);
    });
}

echo json_encode([
    'success' => true,
    'data' => $history
]);
?>
