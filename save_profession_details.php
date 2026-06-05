<?php
// Step 3 (New Flow): Save Employment/Profession Details
require_once '../api_common.php';
require_once 'logger.php';

$endpointName = 'save_profession_details';
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

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

// Initialize Table
ensureExtendedTable($conn);

$accessToken = $input['access_token'] ?? '';
if (empty($accessToken)) appSendResponse(false, 'Access token is required.');

$loan = getLoanByToken($conn, $accessToken);
if (!$loan) appSendResponse(false, 'Invalid access token.');
$loanId = $loan['id'];

// Common Fields
$profession = $input['profession'] ?? ''; // 'Salaried' or 'Self-Employed'
$monthlyIncome = $input['net_monthly_income'] ?? $input['monthly_in_hand'] ?? 0;

// Directories
$uploadDir = PARTNER_DIR . '/includs/images/documents';
$certDir = PARTNER_DIR . '/includs/certificate';
$base_url = brand_config('base_url');

// Extended Fields
$salaryCreditMode = null;
$salarySlip1Url = null;
$salarySlip2Url = null;
$salarySlip3Url = null;
$icardUrl = null;

$firmType = null;
$businessName = null;
$businessVintage = null;
$businessTurnover = null;
$businessProofType = null;
$businessProofUrl = null;
$itrUrl = null;
$businessImageUrl = null;
$incorpCertUrl = null;
$projectReportUrl = null;

// Logic based on Profession
if ($profession === 'Salaried') {
    $companyName = $input['organization_name'] ?? ''; // "Organization Name"
    $orgType = $input['organization_type'] ?? ''; // Govt/LLP/Pvt Ltd etc
    $salaryCreditMode = $input['salary_credit_mode'] ?? '';

    // Uploads
    $salarySlip1Url = handleBase64ImageUpload($input['salary_slip_1'] ?? '', 'salary_slip_1_', $uploadDir, $base_url);
    $salarySlip2Url = handleBase64ImageUpload($input['salary_slip_2'] ?? '', 'salary_slip_2_', $uploadDir, $base_url);
    $salarySlip3Url = handleBase64ImageUpload($input['salary_slip_3'] ?? '', 'salary_slip_3_', $uploadDir, $base_url);
    $icardUrl = handleBase64ImageUpload($input['icard_image'] ?? '', 'icard_', $uploadDir, $base_url);

    if (!$salarySlip1Url && !$loan['salary_slip']) appSendResponse(false, 'At least 1 Salary Slip is compulsory.');

} elseif ($profession === 'Self-Employed') {
    $firmType = $input['firm_type'] ?? ''; // Proprietorship/Partnership etc
    $companyName = $input['business_name'] ?? '';
    $businessVintage = $input['business_vintage'] ?? '';
    $businessTurnover = $input['business_turnover'] ?? '';

    $businessProofType = $input['business_proof_type'] ?? 'GST';
    $businessProofUrl = handleBase64ImageUpload($input['business_proof_image'] ?? '', 'business_proof_', $certDir, $base_url);

    $itrUrl = handleBase64ImageUpload($input['company_itr'] ?? '', 'company_itr_', $uploadDir, $base_url);
    $businessImageUrl = handleBase64ImageUpload($input['business_image'] ?? '', 'business_image_', $uploadDir, $base_url);

    if (!$businessProofUrl && !$loan['certificate_url']) appSendResponse(false, 'Business Proof is compulsory.');
    if (!$itrUrl && !$loan['company_itr']) appSendResponse(false, 'Company ITR (2 years) is compulsory.');

    // Pvt Ltd Extras
    if (stripos($firmType, 'pvt ltd') !== false || stripos($firmType, 'private limited') !== false) {
        $incorpCertUrl = handleBase64ImageUpload($input['incorporation_cert'] ?? '', 'incorp_cert_', $certDir, $base_url);
        $projectReportUrl = handleBase64ImageUpload($input['project_report'] ?? '', 'proj_report_', $uploadDir, $base_url);
    }
} else {
    appSendResponse(false, 'Invalid profession type.');
}

// UPDATE loans table
$step = 4; // New Step Number

$updateLoans = "UPDATE loans SET
    profession = ?,
    company_name = ?,
    organization = ?,
    monthly_in_hand = ?,
    salary_slip = ?,
    business_vintage = ?,
    company_turnover = ?,
    certificate_url = ?,
    business_certificate = ?,
    company_itr = ?,
    step = ?
    WHERE access_token = ?";

$stmt = $conn->prepare($updateLoans);

// Resolve final values for Loans table (Use existing if new upload is null)
$finalSlp1 = $salarySlip1Url ? $salarySlip1Url : $loan['salary_slip'];
$finalCertUrl = $businessProofUrl ? $businessProofUrl : $loan['certificate_url'];
$finalItr = $itrUrl ? $itrUrl : $loan['company_itr'];

$orgValue = ($profession === 'Salaried') ? $orgType : '';

$stmt->bind_param("sssissssssis",
    $profession,
    $companyName,
    $orgValue,
    $monthlyIncome,
    $finalSlp1,
    $businessVintage,
    $businessTurnover,
    $finalCertUrl,
    $businessProofType,
    $finalItr,
    $step,
    $accessToken
);

if (!$stmt->execute()) {
    appSendResponse(false, 'Database error (Loans): ' . $stmt->error);
}
$stmt->close();

// UPDATE loan_extended_details
$checkExt = $conn->prepare("SELECT * FROM loan_extended_details WHERE access_token = ?");
$checkExt->bind_param("s", $accessToken);
$checkExt->execute();
$res = $checkExt->get_result();
$existingExt = $res->fetch_assoc();
$exists = ($existingExt !== null);
$checkExt->close();

if ($exists) {
    $extQuery = "UPDATE loan_extended_details SET
        salary_credit_mode = ?,
        salary_slip_2 = ?,
        salary_slip_3 = ?,
        icard_image = ?,
        firm_type = ?,
        business_turnover = ?,
        business_proof_type = ?,
        business_proof_url = ?,
        business_image = ?,
        incorporation_cert = ?,
        project_report = ?
        WHERE access_token = ?";
    $stmtExt = $conn->prepare($extQuery);

    // Resolve Extended Values
    $finalSlp2 = $salarySlip2Url ? $salarySlip2Url : $existingExt['salary_slip_2'];
    $finalSlp3 = $salarySlip3Url ? $salarySlip3Url : $existingExt['salary_slip_3'];
    $finalIcard = $icardUrl ? $icardUrl : $existingExt['icard_image'];
    $finalBProof = $businessProofUrl ? $businessProofUrl : $existingExt['business_proof_url'];
    $finalBImg = $businessImageUrl ? $businessImageUrl : $existingExt['business_image'];
    $finalIncorp = $incorpCertUrl ? $incorpCertUrl : $existingExt['incorporation_cert'];
    $finalProj = $projectReportUrl ? $projectReportUrl : $existingExt['project_report'];

    $stmtExt->bind_param("ssssssssssss",
        $salaryCreditMode,
        $finalSlp2,
        $finalSlp3,
        $finalIcard,
        $firmType,
        $businessTurnover,
        $businessProofType,
        $finalBProof,
        $finalBImg,
        $finalIncorp,
        $finalProj,
        $accessToken
    );
} else {
    $extQuery = "INSERT INTO loan_extended_details (
        loan_id, access_token, salary_credit_mode, salary_slip_2, salary_slip_3, icard_image,
        firm_type, business_turnover, business_proof_type, business_proof_url, business_image,
        incorporation_cert, project_report
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmtExt = $conn->prepare($extQuery);
    $stmtExt->bind_param("issssssssssss",
        $loanId, $accessToken, $salaryCreditMode, $salarySlip2Url, $salarySlip3Url, $icardUrl,
        $firmType, $businessTurnover, $businessProofType, $businessProofUrl, $businessImageUrl,
        $incorpCertUrl, $projectReportUrl
    );
}

if ($stmtExt->execute()) {
    appSendResponse(true, 'Employment details saved.', ['step' => 4]);
} else {
    appSendResponse(false, 'Database error (Extended): ' . $stmtExt->error);
}
?>
