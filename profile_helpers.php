<?php
// api/profile_helpers.php

// This file relies on $conn being available from api_common.php (included by the caller)

/**
 * Validates the Bearer token from the request header.
 * Returns the user ID if valid, or terminates the script with JSON error if invalid.
 */
function authenticateUser($conn) {
    $headers = apache_request_headers();
    $authHeader = null;

    if (isset($headers['Authorization'])) {
        $authHeader = $headers['Authorization'];
    } elseif (isset($headers['authorization'])) { // Lowercase check
        $authHeader = $headers['authorization'];
    }

    if (!$authHeader) {
        sendResponse(false, 'Authorization header missing', [], 401);
    }

    if (!preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
        sendResponse(false, 'Invalid token format', [], 401);
    }

    $token = $matches[1];

    $stmt = $conn->prepare("SELECT user_id, expires_at FROM app_auth_tokens WHERE token = ?");
    if (!$stmt) {
        error_log("DB Error auth: " . $conn->error);
        sendResponse(false, 'Authentication error', [], 500);
    }

    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $stmt->close();
        sendResponse(false, 'Invalid token', [], 401);
    }

    $row = $result->fetch_assoc();
    $stmt->close();

    // Check expiry
    if ($row['expires_at'] && strtotime($row['expires_at']) < time()) {
        sendResponse(false, 'Token expired', [], 401);
    }

    return $row['user_id'];
}

/**
 * Helper to fetch user profile data.
 */
function getUserProfile($conn, $userId) {
    // 1. App Users (Personal)
    $stmt = $conn->prepare("SELECT id, mobile_no, name, email, dob FROM app_users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if (!$user) return null;

    // 2. Address (Latest)
    $stmt = $conn->prepare("SELECT address, city, pincode FROM app_user_addresses WHERE user_id = ? ORDER BY id DESC LIMIT 1");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $address = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    // 3. Bank Account (Primary or Latest)
    $stmt = $conn->prepare("SELECT bank_name, account_number, ifsc_code FROM app_user_bank_accounts WHERE user_id = ? ORDER BY is_primary DESC, id DESC LIMIT 1");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $bank = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    // 4. Transactions (Recent 10) - Purely for profile data return, not for completeness
    // Note: This fetches from the dedicated table. If empty, the caller might choose to fetch from loans,
    // but here we stick to the dedicated table as requested.
    $transactions = [];
    $stmt = $conn->prepare("SELECT amount, type, description, transaction_date FROM app_user_transactions WHERE user_id = ? ORDER BY transaction_date DESC LIMIT 10");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
        $transactions[] = $row;
    }
    $stmt->close();

    return [
        'personal' => $user,
        'address' => $address, // can be null
        'bank' => $bank, // can be null
        'transactions' => $transactions
    ];
}

/**
 * Calculates profile completeness percentage.
 * Rules:
 * - Personal (Name, Email, DOB): 33%
 * - Address (Address, City, Pincode): 33%
 * - Bank (Account, IFSC): 34%
 */
function calculateProfileCompleteness($profile) {
    $score = 0;

    // Personal (33%)
    $personal = $profile['personal'];
    if (!empty($personal['name']) && !empty($personal['email']) && !empty($personal['dob'])) {
        $score += 33;
    }

    // Address (33%)
    $address = $profile['address'];
    if ($address && !empty($address['address']) && !empty($address['city']) && !empty($address['pincode'])) {
        $score += 33;
    }

    // Bank (34%)
    $bank = $profile['bank'];
    if ($bank && !empty($bank['account_number']) && !empty($bank['ifsc_code'])) {
        $score += 34;
    }

    return $score;
}

/**
 * Checks for incomplete loans (step < 7) for a given mobile number.
 * Returns the latest one, but also now supports returning a list if needed by the caller directly.
 * However, to keep this helper simple and backward compatible, we will create a new function `getAllIncompleteLoans`.
 */
function getIncompleteLoan($conn, $mobile) {
    $stmt = $conn->prepare("SELECT file_id, step, selected_loan_amount, created_at, access_token FROM loans WHERE mobile = ? AND step < 7 ORDER BY id DESC LIMIT 1");
    if (!$stmt) {
        return null;
    }
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();
    $loan = $result->fetch_assoc();
    $stmt->close();

    return $loan;
}

/**
 * Returns ALL incomplete loans for the user.
 */
function getAllIncompleteLoans($conn, $mobile) {
    $stmt = $conn->prepare("SELECT file_id, step, selected_loan_amount, created_at, access_token, file_type FROM loans WHERE mobile = ? AND step < 7 ORDER BY id DESC");
    if (!$stmt) {
        return [];
    }
    $stmt->bind_param("s", $mobile);
    $stmt->execute();
    $result = $stmt->get_result();

    $loans = [];
    while ($row = $result->fetch_assoc()) {
        $loans[] = $row;
    }
    $stmt->close();

    return $loans;
}

if (!function_exists('apache_request_headers')) {
    function apache_request_headers() {
        $arh = array();
        $rx_http = '/\AHTTP_/';
        foreach($_SERVER as $key => $val) {
            if( preg_match($rx_http, $key) ) {
                $arh_key = preg_replace($rx_http, '', $key);
                $rx_matches = array();
                // do some nasty string manipulations to restore the original letter case
                // this should work in most cases
                $rx_matches = explode('_', $arh_key);
                if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
                    foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
                    $arh_key = implode('-', $rx_matches);
                }
                $arh[$arh_key] = $val;
            }
        }
        return( $arh );
    }
}
?>
