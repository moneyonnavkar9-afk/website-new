<?php
require_once 'api_common.php';

header('Content-Type: application/json');

function ensure_app_settings_table($conn) {
    $sql = "CREATE TABLE IF NOT EXISTS `app_control_settings` (
      `id` INT(11) NOT NULL AUTO_INCREMENT,
      `maintenance_mode` TINYINT(1) NOT NULL DEFAULT '0',
      `force_update` TINYINT(1) NOT NULL DEFAULT '0',
      `latest_version_code` VARCHAR(50) COLLATE utf8mb4_unicode_ci DEFAULT '1',
      `app_url` VARCHAR(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://vardhmanfinance.com/vardhman.apk',
      `maintenance_message` TEXT COLLATE utf8mb4_unicode_ci,
      `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

    if ($conn->query($sql)) {
         $check = $conn->query("SELECT COUNT(*) as count FROM app_control_settings");
         if ($check) {
            $row = $check->fetch_assoc();
            if ($row['count'] == 0) {
                $insert = "INSERT INTO app_control_settings (maintenance_mode, force_update, latest_version_code, app_url, maintenance_message) VALUES (0, 0, '1', 'https://vardhmanfinance.com/vardhman.apk', 'System is under maintenance. Please try again later.')";
                $conn->query($insert);
            }
         }
    }
}

try {
    $sql = "SELECT maintenance_mode, force_update, latest_version_code, app_url, maintenance_message FROM app_control_settings LIMIT 1";
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception($conn->error, $conn->errno);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Convert integer flags to booleans for cleaner JSON
        $response = [
            'success' => true,
            'data' => [
                'maintenance_mode' => (bool)$row['maintenance_mode'],
                'force_update' => (bool)$row['force_update'],
                'latest_version_code' => $row['latest_version_code'],
                'app_url' => $row['app_url'],
                'maintenance_message' => $row['maintenance_message']
            ]
        ];
    } else {
        // Should not happen if ensure_app_settings_table works, but fallback
        $response = [
            'success' => true,
            'data' => [
                'maintenance_mode' => false,
                'force_update' => false,
                'latest_version_code' => '1',
                'app_url' => 'https://vardhmanfinance.com/vardhman.apk',
                'maintenance_message' => ''
            ]
        ];
    }

} catch (Exception $e) {
    // Check for table doesn't exist error (1146)
    if ($conn->errno == 1146) {
        ensure_app_settings_table($conn);
        // Retry once
        $result = $conn->query("SELECT maintenance_mode, force_update, latest_version_code, app_url, maintenance_message FROM app_control_settings LIMIT 1");
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $response = [
                'success' => true,
                'data' => [
                    'maintenance_mode' => (bool)$row['maintenance_mode'],
                    'force_update' => (bool)$row['force_update'],
                    'latest_version_code' => $row['latest_version_code'],
                    'app_url' => $row['app_url'],
                    'maintenance_message' => $row['maintenance_message']
                ]
            ];
        } else {
             $response = [
                'success' => true,
                'data' => [
                    'maintenance_mode' => false,
                    'force_update' => false,
                    'latest_version_code' => '1',
                    'app_url' => 'https://vardhmanfinance.com/vardhman.apk',
                    'maintenance_message' => ''
                ]
            ];
        }
    } else {
        $response = [
            'success' => false,
            'message' => 'Database error: ' . $e->getMessage()
        ];
    }
}

echo json_encode($response);
?>
