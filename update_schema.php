<?php
// update_schema.php
// Script to add is_blocked column to app_users table if it doesn't exist

include_once 'partner/includs/config.php'; // Adjust path if necessary, assuming this runs from root

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if column exists
$checkQuery = "SHOW COLUMNS FROM app_users LIKE 'is_blocked'";
$result = $conn->query($checkQuery);

if ($result && $result->num_rows > 0) {
    echo "Column 'is_blocked' already exists in 'app_users' table.\n";
} else {
    // Add column
    $alterQuery = "ALTER TABLE app_users ADD COLUMN is_blocked TINYINT(1) DEFAULT 0";
    if ($conn->query($alterQuery) === TRUE) {
        echo "Column 'is_blocked' added successfully to 'app_users' table.\n";
    } else {
        echo "Error adding column: " . $conn->error . "\n";
    }
}

$conn->close();
?>
