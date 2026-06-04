<?php
session_start();
$_SESSION['puser_id'] = 'admin_user';
$_SESSION['prole'] = 'admin';

require_once 'partner/includs/config.php';
// Create fake loan but make sure it has required fields to not crash
# $conn->query("INSERT INTO loans (name, mobile, email, amount, tenure, p_status, access_token, step, file_id) VALUES ('John Doe', '9999999999', 'test@test.com', 50000, 12, 'Pending', 'FAKE_TOKEN_123', 5, 'FILE_123')");
echo "Session set";
?>
