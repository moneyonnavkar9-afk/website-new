<?php
require_once __DIR__ . '/api_common.php';

// Check DB connection
if (!isset($conn) || $conn->connect_error) {
    sendResponse(false, 'Database connection failed', [], 500);
}

// Get Input
$input = getJsonInput();

if (!isset($input['mobile']) || empty($input['mobile'])) {
    sendResponse(false, 'Mobile number is required', [], 400);
}

if (!isset($input['otp']) || empty($input['otp'])) {
    sendResponse(false, 'OTP is required', [], 400);
}

// Manual cleanup to match request_otp.php (strip non-digits, take last 10)
$mobile = preg_replace('/\D+/', '', $input['mobile']);
if (strlen($mobile) > 10) {
    $mobile = substr($mobile, -10);
}
$otp = trim($input['otp']);

if (strlen($mobile) !== 10) {
    sendResponse(false, 'Invalid mobile number', [], 400);
}

// 1. Verify OTP
// Check for the latest unverified, non-expired OTP for this mobile
$stmt = $conn->prepare("SELECT id, expires_at FROM app_otp_verifications WHERE mobile = ? AND otp = ? AND is_verified = 0 ORDER BY id DESC LIMIT 1");

if ($stmt === false) {
    error_log('DB Prepare Error (Verify OTP): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}

$stmt->bind_param("ss", $mobile, $otp);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $stmt->close();
    sendResponse(false, 'Invalid OTP or OTP expired', [], 400);
}

$otpRow = $result->fetch_assoc();
$stmt->close(); // Close statement as we are done with it

$currentTime = time();
$expiryTime = strtotime($otpRow['expires_at']);

if ($currentTime > $expiryTime) {
    sendResponse(false, 'OTP has expired', [], 400);
}

// Mark OTP as verified
$updateStmt = $conn->prepare("UPDATE app_otp_verifications SET is_verified = 1 WHERE id = ?");
if ($updateStmt === false) {
    error_log('DB Prepare Error (Update OTP): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}
$updateStmt->bind_param("i", $otpRow['id']);
$updateStmt->execute();
$updateStmt->close();

// 2. Check or Create User (database uses `mobile_no` column)
$userStmt = $conn->prepare("SELECT id FROM app_users WHERE mobile_no = ?");
if ($userStmt === false) {
    error_log('DB Prepare Error (Check User): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}
$userStmt->bind_param("s", $mobile);
$userStmt->execute();
$userResult = $userStmt->get_result();

$userId = null;

if ($userResult->num_rows > 0) {
    // User exists
    $userRow = $userResult->fetch_assoc();
    $userId = $userRow['id'];
    $userStmt->close();

    // Update last login timestamp
    $updateLastLogin = $conn->prepare("UPDATE app_users SET last_login_date = NOW() WHERE id = ?");
    if ($updateLastLogin) {
        $updateLastLogin->bind_param("i", $userId);
        $updateLastLogin->execute();
        $updateLastLogin->close();
    } else {
        error_log('DB Prepare Error (Update Last Login): ' . $conn->error);
    }
} else {
    $userStmt->close(); // Close before creating new statement

    // Create new user
    $createStmt = $conn->prepare("INSERT INTO app_users (mobile_no, last_login_date) VALUES (?, NOW())");
    if ($createStmt === false) {
        error_log('DB Prepare Error (Create User): ' . $conn->error);
        sendResponse(false, 'System error occurred', [], 500);
    }

    $createStmt->bind_param("s", $mobile);
    if ($createStmt->execute()) {
        $userId = $createStmt->insert_id;
    } else {
        error_log("DB Error creating user: " . $createStmt->error);
        $createStmt->close();
        sendResponse(false, 'Failed to create user account', [], 500);
    }
    $createStmt->close();
}

// 2.1 Sync User Details from Loans
// Fetch latest loan details
$loanStmt = $conn->prepare("SELECT name, email, dob, address, city, pincode FROM loans WHERE mobile = ? ORDER BY id DESC LIMIT 1");
if ($loanStmt) {
    $loanStmt->bind_param("s", $mobile);
    $loanStmt->execute();
    $loanRes = $loanStmt->get_result();

    if ($loanRes->num_rows > 0) {
        $loanData = $loanRes->fetch_assoc();

        // Prepare data for update
        $l_name = !empty($loanData['name']) ? $loanData['name'] : null;
        $l_email = !empty($loanData['email']) ? $loanData['email'] : null;
        $l_dob = !empty($loanData['dob']) ? $loanData['dob'] : null;

        // Update app_users
        // Only update fields if we have data from loans (or overwrite? Requirement says 'copy details', implying sync)
        // We will overwrite to ensure latest data is reflected.
        $syncUser = $conn->prepare("UPDATE app_users SET name = ?, email = ?, dob = ? WHERE id = ?");
        if ($syncUser) {
            $syncUser->bind_param("sssi", $l_name, $l_email, $l_dob, $userId);
            $syncUser->execute();
            $syncUser->close();
        }

        // Update/Insert app_user_addresses
        $l_address = !empty($loanData['address']) ? $loanData['address'] : null;
        $l_city = !empty($loanData['city']) ? $loanData['city'] : null;
        $l_pincode = !empty($loanData['pincode']) ? $loanData['pincode'] : null;

        if ($l_address || $l_city || $l_pincode) {
            // Check if address exists
            $checkAddr = $conn->prepare("SELECT id FROM app_user_addresses WHERE user_id = ?");
            $checkAddr->bind_param("i", $userId);
            $checkAddr->execute();
            $addrRes = $checkAddr->get_result();

            if ($addrRes->num_rows > 0) {
                $addrRow = $addrRes->fetch_assoc();
                $updateAddr = $conn->prepare("UPDATE app_user_addresses SET address = ?, city = ?, pincode = ? WHERE id = ?");
                $updateAddr->bind_param("sssi", $l_address, $l_city, $l_pincode, $addrRow['id']);
                $updateAddr->execute();
                $updateAddr->close();
            } else {
                $insertAddr = $conn->prepare("INSERT INTO app_user_addresses (user_id, address, city, pincode) VALUES (?, ?, ?, ?)");
                $insertAddr->bind_param("isss", $userId, $l_address, $l_city, $l_pincode);
                $insertAddr->execute();
                $insertAddr->close();
            }
            $checkAddr->close();
        }
    }
    $loanStmt->close();
} else {
    error_log("DB Prepare Error (Sync Loans): " . $conn->error);
}

// 3. Generate Auth Token
// Generate a random secure token
$token = bin2hex(random_bytes(32));
// Expiry: 30 days
$tokenExpires = date('Y-m-d H:i:s', strtotime('+30 days'));

$tokenStmt = $conn->prepare("INSERT INTO app_auth_tokens (user_id, token, expires_at) VALUES (?, ?, ?)");
if ($tokenStmt === false) {
    error_log('DB Prepare Error (Create Token): ' . $conn->error);
    sendResponse(false, 'System error occurred', [], 500);
}

$tokenStmt->bind_param("iss", $userId, $token, $tokenExpires);

if (!$tokenStmt->execute()) {
    error_log("DB Error creating token: " . $tokenStmt->error);
    $tokenStmt->close();
    sendResponse(false, 'Login successful but failed to generate session', [], 500);
}
$tokenStmt->close();

// 4. Return Success
sendResponse(true, 'Login successful', [
    'token' => $token,
    'user_id' => $userId,
    'mobile' => $mobile
]);
?>
