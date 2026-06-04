<?php
// Start output buffering to catch any unwanted output from includes (like config.php)
ob_start();

// Disable error display initially
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Define Partner Path
$partnerPath = realpath(__DIR__ . '/../partner');
if (!$partnerPath) {
    // Fallback if realpath fails (e.g. symlinks)
    $partnerPath = __DIR__ . '/../partner';
}
define('PARTNER_DIR', $partnerPath);

// Include main configuration (DB connection, settings)
// Use the resolved path
$configFile = PARTNER_DIR . '/includs/config.php';

if (file_exists($configFile)) {
    require_once $configFile;
} else {
    // If config is missing, we can't proceed.
    // We can't output JSON yet safely if we don't know the state, but we try.
    ob_end_clean();
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Configuration missing']);
    exit;
}

// Clean the buffer to remove any HTML output from config.php
ob_end_clean();

// Force JSON header
header('Content-Type: application/json; charset=utf-8');

// RE-DISABLE error display because config.php might have turned it on
ini_set('display_errors', 0);

// Helper function to send JSON response and exit
function sendResponse($success, $message, $data = [], $statusCode = 200) {
    http_response_code($statusCode);
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}

// Helper to get input data (handles both POST form-data and JSON body)
function getJsonInput() {
    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    $rawContent = file_get_contents("php://input");

    // Check if content type contains application/json (handles charset suffix)
    if (stripos($contentType, 'application/json') !== false) {
        $decoded = json_decode(trim($rawContent), true);
        return is_array($decoded) ? $decoded : [];
    }

    // Standard form-data / x-www-form-urlencoded
    if (!empty($_POST)) {
        return $_POST;
    }

    // Some clients forget to set content-type; attempt to decode JSON payloads
    $trimmed = trim($rawContent);
    if ($trimmed !== '') {
        $decoded = json_decode($trimmed, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        // Fallback: parse query-string style bodies
        parse_str($trimmed, $parsed);
        if (!empty($parsed)) {
            return $parsed;
        }
    }

    return [];
}
?>
