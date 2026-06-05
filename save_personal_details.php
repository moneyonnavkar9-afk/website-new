<?php
// Step 4: Save Personal Details & Face Match
require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'save_personal_details';
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
        'name' => $loan['name'],
        'dob' => $loan['dob'],
        'gender' => $loan['gender'],
        'father_name' => $loan['father_name'],
        'address' => $loan['address'],
        'paddress' => $loan['paddress'],
        'pincode' => $loan['pincode'],
        'city' => $loan['city'],
        'district' => $loan['district'],
        'photo_url' => $loan['dp'],
        'step' => $loan['step']
    ];

    appSendResponse(true, 'Personal details fetched.', $responseData);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$accessToken = $input['access_token'] ?? '';
$name = $input['name'] ?? '';
$dob = $input['dob'] ?? '';
$gender = $input['gender'] ?? '';
$fatherName = $input['father_name'] ?? '';
$address = $input['address'] ?? '';
$paddress = $input['paddress'] ?? '';
$pincode = $input['pincode'] ?? '';
$city = $input['city'] ?? '';
$district = $input['district'] ?? '';
$selfieBase64 = $input['selfie_image'] ?? '';
$houseBase64 = $input['house_image'] ?? '';
$lat = $input['latitude'] ?? '';
$lng = $input['longitude'] ?? '';

$loan = getLoanByToken($conn, $accessToken);
if (!$loan) appSendResponse(false, 'Invalid access token.');

$uploadDir = PARTNER_DIR . '/includs/images/adata';
$base_url = brand_config('base_url');

$selfieUrl = handleBase64ImageUpload($selfieBase64, 'live_self_', $uploadDir, $base_url);
if (!$selfieUrl && !$loan['dp']) appSendResponse(false, 'Selfie is required.');

$houseUrl = handleBase64ImageUpload($houseBase64, 'live_house_', $uploadDir, $base_url);

$aadhaarPhotoUrl = $loan['dp'];
if (!$aadhaarPhotoUrl && $selfieUrl) {
    $aadhaarPhotoUrl = $selfieUrl;
}

$genderChar = ($gender === 'Male') ? 'M' : (($gender === 'Female') ? 'F' : $gender);

$step = 4;
$query = "UPDATE loans SET name = ?, step=?, dob = ?, gender = ?, father_name = ?, address = ?, paddress = ?, pincode =?, city = ?, district = ? WHERE access_token = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssssssssss", $name, $step, $dob, $genderChar, $fatherName, $address, $paddress, $pincode, $city, $district, $accessToken);

if ($stmt->execute()) {
    // Save Live Photos
    $loanId = $loan['id'];
    $liveInsertSql = "INSERT INTO loan_live_photos (loan_id, access_token, live_photo_url, latitude, longitude, captured_at, house_photo_url, house_latitude, house_longitude, house_captured_at) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?, NOW()) ON DUPLICATE KEY UPDATE live_photo_url = VALUES(live_photo_url), latitude = VALUES(latitude), longitude = VALUES(longitude), captured_at = VALUES(captured_at), house_photo_url = VALUES(house_photo_url), house_latitude = VALUES(house_latitude), house_longitude = VALUES(house_longitude), house_captured_at = VALUES(house_captured_at)";
    $liveInsert = $conn->prepare($liveInsertSql);

    $houseLat = $input['house_latitude'] ?? $lat;
    $houseLng = $input['house_longitude'] ?? $lng;

    if ($liveInsert) {
        $liveInsert->bind_param("isssssss", $loanId, $accessToken, $selfieUrl, $lat, $lng, $houseUrl, $houseLat, $houseLng);
        $liveInsert->execute();
        $liveInsert->close();
    }

    appSendResponse(true, 'Personal details saved.', ['step' => 4]);
} else {
    appSendResponse(false, 'Database error: ' . $stmt->error);
}
?>
