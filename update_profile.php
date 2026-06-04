<?php
// api/update_profile.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate
$userId = authenticateUser($conn);

// 2. Get Input
$input = getJsonInput();

// 3. Update Personal Details
// Only update fields that are provided
$personalUpdates = [];
$types = "";
$bindParams = []; // Will hold references

// Prepare variables to be referenced
$name = isset($input['name']) ? trim($input['name']) : null;
$email = isset($input['email']) ? trim($input['email']) : null;
$dob = isset($input['dob']) ? trim($input['dob']) : null;

if ($name !== null) {
    $personalUpdates[] = "name = ?";
    $types .= "s";
    $bindParams[] = &$name;
}
if ($email !== null) {
    $personalUpdates[] = "email = ?";
    $types .= "s";
    $bindParams[] = &$email;
}
if ($dob !== null) {
    $personalUpdates[] = "dob = ?";
    $types .= "s";
    $bindParams[] = &$dob;
}

if (!empty($personalUpdates)) {
    $sql = "UPDATE app_users SET " . implode(", ", $personalUpdates) . " WHERE id = ?";
    $types .= "i";
    // Important: bind_param requires references.
    // We append userId to our params array
    $bindParams[] = &$userId;

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Use splat operator to unpack the array of references
        // Note: For bind_param, the first argument is the type string, followed by variables
        $stmt->bind_param($types, ...$bindParams);
        $stmt->execute();
        $stmt->close();
    }
}

// 4. Update/Insert Address
if (isset($input['address'])) {
    $addr = $input['address'];
    $addressLine = isset($addr['address_line']) ? trim($addr['address_line']) : '';
    $city = isset($addr['city']) ? trim($addr['city']) : '';
    $pincode = isset($addr['pincode']) ? trim($addr['pincode']) : '';

    // Check if exists
    $stmt = $conn->prepare("SELECT id FROM app_user_addresses WHERE user_id = ? ORDER BY id DESC LIMIT 1");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $res = $stmt->get_result();
    $existing = $res->fetch_assoc();
    $stmt->close();

    if ($existing) {
        $stmt = $conn->prepare("UPDATE app_user_addresses SET address = ?, city = ?, pincode = ? WHERE id = ?");
        $stmt->bind_param("sssi", $addressLine, $city, $pincode, $existing['id']);
        $stmt->execute();
        $stmt->close();
    } else {
        $stmt = $conn->prepare("INSERT INTO app_user_addresses (user_id, address, city, pincode) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $userId, $addressLine, $city, $pincode);
        $stmt->execute();
        $stmt->close();
    }
}

// 5. Update/Insert Bank Account
if (isset($input['bank_account'])) {
    $bank = $input['bank_account'];
    $bankName = isset($bank['bank_name']) ? trim($bank['bank_name']) : '';
    $accNum = isset($bank['account_number']) ? trim($bank['account_number']) : '';
    $ifsc = isset($bank['ifsc_code']) ? trim($bank['ifsc_code']) : '';

    // Same logic: Update latest or insert
    $stmt = $conn->prepare("SELECT id FROM app_user_bank_accounts WHERE user_id = ? ORDER BY is_primary DESC, id DESC LIMIT 1");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $res = $stmt->get_result();
    $existing = $res->fetch_assoc();
    $stmt->close();

    if ($existing) {
        $stmt = $conn->prepare("UPDATE app_user_bank_accounts SET bank_name = ?, account_number = ?, ifsc_code = ? WHERE id = ?");
        $stmt->bind_param("sssi", $bankName, $accNum, $ifsc, $existing['id']);
        $stmt->execute();
        $stmt->close();
    } else {
        $stmt = $conn->prepare("INSERT INTO app_user_bank_accounts (user_id, bank_name, account_number, ifsc_code, is_primary) VALUES (?, ?, ?, ?, 1)");
        $stmt->bind_param("isss", $userId, $bankName, $accNum, $ifsc);
        $stmt->execute();
        $stmt->close();
    }
}

// 6. Recalculate Progress
$profileData = getUserProfile($conn, $userId);
$progress = calculateProfileCompleteness($profileData);

sendResponse(true, 'Profile updated successfully', [
    'new_completeness_score' => $progress
]);
?>
