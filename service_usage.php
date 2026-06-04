<?php
require_once __DIR__ . '/api_common.php';
require_once PARTNER_DIR . '/includs/service_metering.php';

// Verify method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Method Not Allowed', [], 405);
}

// Get input
$input = getJsonInput();
$action = $input['action'] ?? '';
$serviceKey = $input['service_key'] ?? ServiceMeter::SERVICE_AADHAR_NO_DETECT; // Default to aadhar if not provided, or force it?
// User request specifically asked for this service, but making it flexible is good.
// However, to strictly follow "in service balance add a service name aadhar no detect",
// I will default to this specific service but allow override if needed,
// or maybe just enforce it if the user wants a dedicated API.
// The user said: "also give and api for this". I'll default to 'aadhar_no_detect' if not specified.

if (empty($serviceKey)) {
    $serviceKey = ServiceMeter::SERVICE_AADHAR_NO_DETECT;
}

try {
    $meter = new ServiceMeter($conn);

    // 1. Ensure the service exists with defaults (if applicable) and fetch status
    // User requirement for Aadhar No Detect: Rate 1 Rs, Initial Balance 50 Rs.
    $serviceData = $meter->ensureService(
        $serviceKey,
        $serviceKey === ServiceMeter::SERVICE_AADHAR_NO_DETECT ? 'Aadhar No Detect' : $serviceKey,
        $serviceKey === ServiceMeter::SERVICE_AADHAR_NO_DETECT ? 1.00 : 0.0,
        $serviceKey === ServiceMeter::SERVICE_AADHAR_NO_DETECT ? 50.00 : 0.0
    );

    $balance = (float)$serviceData['balance'];
    $rate = (float)$serviceData['rate'];
    $isSufficient = $balance >= $rate;

    if ($action === 'check') {
        sendResponse(true, 'Service status retrieved', [
            'service_key' => $serviceKey,
            'display_name' => $serviceData['display_name'],
            'balance' => $balance,
            'rate' => $rate,
            'sufficient_balance' => $isSufficient
        ]);

    } elseif ($action === 'deduct') {
        if (!$isSufficient) {
             sendResponse(false, 'Insufficient balance', [
                'balance' => $balance,
                'rate' => $rate,
                'required' => $rate
             ], 402); // 402 Payment Required
        }

        // Proceed to deduct
        // We need a reference for the transaction.
        // If the app sends 'user_id' or 'mobile', we can log it.
        $referenceId = $input['user_id'] ?? ($input['mobile'] ?? 'anonymous');
        $description = $input['description'] ?? 'API Usage Charge';

        $result = $meter->recordUsage(
            $serviceKey,
            $serviceData['display_name'],
            'api_call',
            $referenceId,
            $description,
            ['source' => 'api/service_usage.php']
        );

        sendResponse(true, 'Balance deducted successfully', [
            'previous_balance' => $balance,
            'new_balance' => (float)$result['balance_after'],
            'deducted_amount' => (float)$result['amount'],
            'transaction_id' => $result['transaction_id']
        ]);

    } else {
        sendResponse(false, 'Invalid action. Use "check" or "deduct".');
    }

} catch (Exception $e) {
    // Log error internally if possible, or just return failure
    error_log("Service Meter Error: " . $e->getMessage());
    sendResponse(false, 'Service processing failed: ' . $e->getMessage(), [], 500);
}
