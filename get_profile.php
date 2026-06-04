<?php
// api/get_profile.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate
$userId = authenticateUser($conn);

// 2. Fetch Profile Data
$profileData = getUserProfile($conn, $userId);

if (!$profileData) {
    sendResponse(false, 'User not found', [], 404);
}

// 3. Format Response
// We structure it clearly for the frontend
$response = [
    'personal' => [
        'name' => $profileData['personal']['name'],
        'email' => $profileData['personal']['email'],
        'mobile' => $profileData['personal']['mobile_no'],
        'dob' => $profileData['personal']['dob']
    ],
    'address' => $profileData['address'] ? [
        'address_line' => $profileData['address']['address'],
        'city' => $profileData['address']['city'],
        'pincode' => $profileData['address']['pincode']
    ] : null,
    'bank_account' => $profileData['bank'] ? [
        'bank_name' => $profileData['bank']['bank_name'],
        'account_number' => $profileData['bank']['account_number'],
        'ifsc_code' => $profileData['bank']['ifsc_code']
    ] : null,
    'transaction_history' => $profileData['transactions'] // List of recent transactions
];

// Add completeness score here too, might be useful
$response['completeness_score'] = calculateProfileCompleteness($profileData);

sendResponse(true, 'Profile data fetched', $response);
?>
