<?php
// Service Check API (Check Balance / Deduct)
require_once '../api_common.php';
require_once 'logger.php';

// Ensure the service metering class is loaded.
// PARTNER_DIR is defined in api_common.php.
$meteringFile = PARTNER_DIR . '/includs/service_metering.php';
if (file_exists($meteringFile)) {
    require_once $meteringFile;
} else {
    appSendResponse(false, 'Service metering module not found.', [], 500);
}

if (!class_exists('ServiceMeter')) {
    appSendResponse(false, 'Service metering logic is unavailable.', [], 500);
}

$endpointName = 'service_check';
$input = getJsonInput();
logAppRequest($endpointName, $input);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    appSendResponse(false, 'Method not allowed', [], 405);
}

$action = $input['action'] ?? 'check'; // check or deduct
$serviceKey = $input['service_key'] ?? 'video_verification';

$meter = new ServiceMeter($conn);

try {
    if ($action === 'check') {
        $svc = $meter->getService($serviceKey);

        if ($svc) {
            $balance = (float)$svc['balance'];
            $rate = (float)$svc['rate'];

            appSendResponse(true, 'Service status retrieved.', [
                'service_key' => $serviceKey,
                'balance' => $balance,
                'rate' => $rate,
                'sufficient_balance' => ($balance >= $rate)
            ]);
        } else {
            appSendResponse(false, "Service '$serviceKey' not found or not initialized.", [
                'service_key' => $serviceKey,
                'balance' => 0.00,
                'rate' => 0.00,
                'sufficient_balance' => false
            ]);
        }

    } elseif ($action === 'deduct') {
        $res = $meter->recordUsage(
            $serviceKey,
            'API Service Usage',
            'api_call',
            null,
            'API Deduction via service_check.php'
        );

        appSendResponse(true, 'Balance deducted successfully.', [
            'deducted' => $res['amount'],
            'new_balance' => $res['balance_after']
        ]);
    } else {
        appSendResponse(false, 'Invalid action.');
    }
} catch (Throwable $e) {
    appSendResponse(false, $e->getMessage(), [], 400);
}
?>
