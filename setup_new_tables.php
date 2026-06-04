<?php
// Include the common API file to get DB connection
require_once __DIR__ . '/api_common.php';

// We want to see errors for this setup script
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "Starting database setup...\n";

// Table 1: app_user_addresses
$sql1 = "CREATE TABLE IF NOT EXISTS `app_user_addresses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `address` TEXT COLLATE utf8mb4_unicode_ci,
  `city` VARCHAR(100) COLLATE utf8mb4_unicode_ci,
  `pincode` VARCHAR(20) COLLATE utf8mb4_unicode_ci,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_user_address` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// Table 2: app_user_bank_accounts
$sql2 = "CREATE TABLE IF NOT EXISTS `app_user_bank_accounts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `bank_name` VARCHAR(100) COLLATE utf8mb4_unicode_ci,
  `account_number` VARCHAR(50) COLLATE utf8mb4_unicode_ci,
  `ifsc_code` VARCHAR(20) COLLATE utf8mb4_unicode_ci,
  `is_primary` TINYINT(1) NOT NULL DEFAULT '0',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_user_bank` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// Table 3: app_user_transactions
// 'type': 'credit' means money coming to user (Loan Disbursed), 'debit' means money leaving user (Repayment)
$sql3 = "CREATE TABLE IF NOT EXISTS `app_user_transactions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `loan_id` INT(11) DEFAULT NULL,
  `amount` DECIMAL(15,2) NOT NULL DEFAULT '0.00',
  `type` ENUM('credit','debit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
  `transaction_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_user_transactions` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

$tables = [
    'app_user_addresses' => $sql1,
    'app_user_bank_accounts' => $sql2,
    'app_user_transactions' => $sql3
];

foreach ($tables as $name => $sql) {
    echo "Creating table: $name ... ";
    if ($conn->query($sql) === TRUE) {
        echo "OK\n";
    } else {
        echo "Error: " . $conn->error . "\n";
    }
}

echo "Database setup completed.\n";
?>
