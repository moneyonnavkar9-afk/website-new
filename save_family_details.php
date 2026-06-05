<?php
// Step 4 (New Flow): Save Family & Address Details
require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'save_family_details';
$input = getJsonInput();
logAppRequest($endpointName, $input);

if (!function_exists('ensureExtendedTable')) {
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
}

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

if (!function_exists('handleBase64ImageUpload')) {
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

    // Fetch Extended Details
    $stmtExtFetch = $conn->prepare("SELECT house_type, rent_agreement FROM loan_extended_details WHERE access_token = ?");
    $stmtExtFetch->bind_param("s", $accessToken);
    $stmtExtFetch->execute();
    $resExt = $stmtExtFetch->get_result();
    $extended = $resExt->fetch_assoc() ?: [];
    $stmtExtFetch->close();

    $responseData = [
        'father_name' => $loan['father_name'],
        'mother_name' => $loan['mother_name'],
        'marital_status' => $loan['marrital_status'],
        'spouse_name' => $loan['spouse_name'],
        'guarantor1_name' => $loan['guarantor1_name'],
        'guarantor1_mobile' => $loan['guarantor1_mobile'],
        'guarantor1_relation' => $loan['grelation1'],
        'guarantor2_name' => $loan['guarantor2_name'],
        'guarantor2_mobile' => $loan['guarantor2_mobile'],
        'guarantor2_relation' => $loan['grelation2'],
        'current_address' => $loan['address'],
        'permanent_address' => $loan['paddress'],
        'electricity_bill' => $loan['electricity_bill'],
        'house_type' => $extended['house_type'] ?? '',
        'rent_agreement' => $extended['rent_agreement'] ?? '',
        'step' => $loan['step']
    ];

    appSendResponse(true, 'Family details fetched.', $responseData);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

ensureExtendedTable($conn);

$accessToken = $input['access_token'] ?? '';
if (empty($accessToken)) appSendResponse(false, 'Access token is required.');

$loan = getLoanByToken($conn, $accessToken);
if (!$loan) appSendResponse(false, 'Invalid access token.');
$loanId = $loan['id'];

// Family Details
$motherName = $input['mother_name'] ?? '';
$fatherName = $input['father_name'] ?? $loan['father_name'] ?? ''; // Update if provided
$maritalStatus = $input['marital_status'] ?? 'no'; // yes/no
$spouseName = ($maritalStatus === 'yes') ? ($input['spouse_name'] ?? '') : '';

// Guarantors - Compulsory Validation
$guarantor1Name = $input['guarantor1_name'] ?? '';
$guarantor1Relation = $input['guarantor1_relation'] ?? '';
$guarantor1Mobile = $input['guarantor1_mobile'] ?? '';

$guarantor2Name = $input['guarantor2_name'] ?? '';
$guarantor2Relation = $input['guarantor2_relation'] ?? '';
$guarantor2Mobile = $input['guarantor2_mobile'] ?? '';

if (empty($guarantor1Name) || empty($guarantor1Relation) || empty($guarantor1Mobile) ||
    empty($guarantor2Name) || empty($guarantor2Relation) || empty($guarantor2Mobile)) {
    appSendResponse(false, 'Two guarantors (Name, Relation, Mobile) are compulsory.');
}

// Address Logic
$currentAddress = $input['current_address'] ?? '';
$isSameAddress = filter_var($input['is_same_address'] ?? false, FILTER_VALIDATE_BOOLEAN);

$existingAddress = $loan['address'];
$existingPAddress = $loan['paddress'];
$permanentAddress = !empty($existingPAddress) ? $existingPAddress : $existingAddress;

if ($isSameAddress) {
    $finalCurrentAddress = $permanentAddress;
} else {
    $finalCurrentAddress = $currentAddress;
}

// House Type & Uploads
$houseType = $input['house_type'] ?? ''; // rent/parental/owned
$uploadDir = PARTNER_DIR . '/includs/images/documents';
$base_url = brand_config('base_url');

$rentAgreementUrl = null;
$elecBillUrl = null;

// Fetch existing extended details to check for existing files
$stmtExtFetch = $conn->prepare("SELECT rent_agreement FROM loan_extended_details WHERE access_token = ?");
$stmtExtFetch->bind_param("s", $accessToken);
$stmtExtFetch->execute();
$resExt = $stmtExtFetch->get_result();
$existingExtended = $resExt->fetch_assoc();
$stmtExtFetch->close();
$existingRentAgreement = $existingExtended['rent_agreement'] ?? null;


if ($houseType === 'rent' || $houseType === 'rental') {
    $rentAgreementUrl = handleBase64ImageUpload($input['rent_agreement'] ?? '', 'rent_agreement_', $uploadDir, $base_url);

    // Strict Validation
    if (!$rentAgreementUrl && empty($input['rent_agreement_url']) && empty($existingRentAgreement)) {
         appSendResponse(false, 'Rent Agreement is compulsory for rented house.');
    }
} elseif ($houseType === 'owned') {
    $elecBillUrl = handleBase64ImageUpload($input['electricity_bill'] ?? '', 'elec_bill_', $uploadDir, $base_url);
}

// Update `loans` table
$step = 5;

$updateLoans = "UPDATE loans SET
    father_name = ?,
    mother_name = ?,
    marrital_status = ?,
    spouse_name = ?,
    guarantor1_name = ?, guarantor1_mobile = ?, grelation1 = ?,
    guarantor2_name = ?, guarantor2_mobile = ?, grelation2 = ?,
    address = ?, paddress = ?,
    electricity_bill = ?,
    step = ?
    WHERE access_token = ?";

$stmt = $conn->prepare($updateLoans);
$finalBill = $elecBillUrl ? $elecBillUrl : $loan['electricity_bill'];

$stmt->bind_param("sssssssssssssis",
    $fatherName, $motherName, $maritalStatus, $spouseName,
    $guarantor1Name, $guarantor1Mobile, $guarantor1Relation,
    $guarantor2Name, $guarantor2Mobile, $guarantor2Relation,
    $finalCurrentAddress, $permanentAddress,
    $finalBill,
    $step,
    $accessToken
);

if (!$stmt->execute()) {
    appSendResponse(false, 'Database error (Loans): ' . $stmt->error);
}
$stmt->close();

// Update `loan_extended_details`
$checkExt = $conn->prepare("SELECT id FROM loan_extended_details WHERE access_token = ?");
$checkExt->bind_param("s", $accessToken);
$checkExt->execute();
$res = $checkExt->get_result();
$exists = $res->num_rows > 0;
$checkExt->close();

if ($exists) {
    $extQuery = "UPDATE loan_extended_details SET
        house_type = ?,
        rent_agreement = ?
        WHERE access_token = ?";
    $stmtExt = $conn->prepare($extQuery);

    $finalRA = $rentAgreementUrl ? $rentAgreementUrl : $existingRentAgreement;

    $stmtExt->bind_param("sss", $houseType, $finalRA, $accessToken);
} else {
    // Should exist from Step 3, but handle fallback
    $extQuery = "INSERT INTO loan_extended_details (loan_id, access_token, house_type, rent_agreement) VALUES (?, ?, ?, ?)";
    $stmtExt = $conn->prepare($extQuery);
    $stmtExt->bind_param("isss", $loanId, $accessToken, $houseType, $rentAgreementUrl);
}

if ($stmtExt->execute()) {
    appSendResponse(true, 'Family and address details saved.', ['step' => 4]);
} else {
    appSendResponse(false, 'Database error (Extended): ' . $stmtExt->error);
}
?>
