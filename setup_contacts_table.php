<?php
// api/setup_contacts_table.php
require_once __DIR__ . '/api_common.php';

// Enable error reporting for setup
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Setting up app_user_contacts table...\n";

$sql = "CREATE TABLE IF NOT EXISTS `app_user_contacts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `name` VARCHAR(100) COLLATE utf8mb4_unicode_ci,
  `mobile_no` VARCHAR(20) COLLATE utf8mb4_unicode_ci,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_user_contacts` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

if ($conn->query($sql) === TRUE) {
    echo "Table 'app_user_contacts' created or already exists.\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

echo "Done.\n";
?>
