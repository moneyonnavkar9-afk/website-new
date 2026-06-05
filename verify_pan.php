<?php
// Step 3: Verify PAN (Format check only, NO LINK CHECK, Optional Images)
require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'verify_pan';
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

function handleBase64ImageUpload($base64Data, $prefix, $uploadDir, $base_url) {
    if (empty($base64Data)) return null;

    if (strpos($base64Data, 'data:image') === 0) {
        list($meta, $content) = explode(',', $base64Data, 2);
        $extension = 'png';
        if (strpos($meta, 'image/jpeg') !== false || strpos($meta, 'image/jpg') !== false) {
            $extension = 'jpg';
        }
        $decoded = base64_decode($content, true);
    } else {
        $decoded = base64_decode($base64Data, true);
        $extension = 'jpg';
    }

    if ($decoded === false) return null;

    $fileName = uniqid($prefix, true) . '.' . $extension;
    $filePath = rtrim($uploadDir, '/') . '/' . $fileName;

    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) return null;
    }

    if (file_put_contents($filePath, $decoded) === false) return null;

    $relativePath = str_replace(PARTNER_DIR . '/', '', $filePath);
    return rtrim($base_url, '/') . '/' . $relativePath;
}

// Handle GET Request (Fetch Data)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $accessToken = $_GET['access_token'] ?? $input['access_token'] ?? '';
    if (empty($accessToken)) {
        appSendResponse(false, 'Access token is required.');
    }

    $loan = getLoanByToken($conn, $accessToken);
    if (!$loan) {
        appSendResponse(false, 'Invalid access token or loan not found.');
    }

    $responseData = [
        'pan_number' => $loan['pan_number'],
        'pan_image' => $loan['pan_Image'], // Database column is pan_Image
        'additional_doc' => $loan['additional_doc'],
        'step' => $loan['step']
    ];

    appSendResponse(true, 'PAN details fetched.', $responseData);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$accessToken = $input['access_token'] ?? '';
$panNumber = strtoupper($input['pan_number'] ?? '');
$panImageBase64 = $input['pan_image'] ?? '';
$additionalDocBase64 = $input['additional_doc'] ?? '';
$map = $input['map'] ?? ''; // lat,long

$loan = getLoanByToken($conn, $accessToken);
if (!$loan) appSendResponse(false, 'Invalid access token.');

// Check for Aadhaar
$aadhaarNumber = $loan['aadhar_number'] ?? '';
if (empty($aadhaarNumber)) {
    appSendResponse(false, 'Aadhaar number not found. Please complete Aadhaar verification first.');
}

// Basic Format Check
if (!preg_match('/^[A-Z]{5}\d{4}[A-Z]$/', $panNumber)) {
    appSendResponse(false, 'Invalid PAN number format.');
}

// NO EXTERNAL LINK CHECK HERE as per user requirement.

$uploadDir = PARTNER_DIR . '/includs/images/adata';
$base_url = brand_config('base_url');

// Optional Image Uploads
$panImageUrl = handleBase64ImageUpload($panImageBase64, 'pan_', $uploadDir, $base_url);
$panImageUrl = $panImageUrl ?? '';

$additionalDocUrl = handleBase64ImageUpload($additionalDocBase64, 'add_', $uploadDir, $base_url);
$additionalDocUrl = $additionalDocUrl ?? '';

$step = 3;
$query = "UPDATE loans SET pan_number = ?, pan_Image = ?, additional_doc = ?, map = ?, step = ? WHERE access_token = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('ssssis', $panNumber, $panImageUrl, $additionalDocUrl, $map, $step, $accessToken);

if ($stmt->execute()) {
    // Fetch personal details from the loan record to return to frontend
    $loanDetails = getLoanByToken($conn, $accessToken);

    $responseData = [
        'step' => 3,
        'personal_details' => [
            'name' => $loanDetails['name'],
            'gender' => $loanDetails['gender'],
            'dob' => $loanDetails['dob'],
            'father_name' => $loanDetails['father_name'],
            'address' => $loanDetails['address'],
            'pincode' => $loanDetails['pincode'],
            'city' => $loanDetails['city'],
            'district' => $loanDetails['district'],
            'photo_url' => $loanDetails['dp']
        ]
    ];

    appSendResponse(true, 'PAN details verified and saved successfully.', $responseData);
} else {
    appSendResponse(false, 'Database update failed: ' . $stmt->error);
}
?>
