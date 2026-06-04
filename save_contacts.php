<?php
// api/save_contacts.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate User
$userId = authenticateUser($conn);

// 2. Get Input Data
$input = getJsonInput();

if (!isset($input['contacts']) || !is_array($input['contacts'])) {
    sendResponse(false, 'Invalid input: "contacts" list required', [], 400);
}

$contacts = $input['contacts'];

// 3. Process Contacts (Sync Mode: Replace All)
try {
    // Wrapper Function to handle Table Creation
    function processContactsSync($conn, $userId, $contacts, $retry = false) {
        try {
            // Start Transaction
            $conn->begin_transaction();

            // A. Delete existing contacts for this user
            $deleteStmt = $conn->prepare("DELETE FROM app_user_contacts WHERE user_id = ?");
            if (!$deleteStmt) {
                // Check if error is because table missing (prepare might return false)
                // But usually throws exception if strict mode or returns false.
                // If strict mode is ON, it throws. If OFF, we check error.
                if ($conn->errno == 1146) { throw new mysqli_sql_exception($conn->error, 1146); }
                throw new Exception("Prepare failed (Delete): " . $conn->error);
            }
            $deleteStmt->bind_param("i", $userId);
            if (!$deleteStmt->execute()) {
                throw new Exception("Execute failed (Delete): " . $deleteStmt->error);
            }
            $deleteStmt->close();

            // B. Insert new contacts
            if (!empty($contacts)) {
                $insertQuery = "INSERT INTO app_user_contacts (user_id, name, mobile_no) VALUES (?, ?, ?)";
                $insertStmt = $conn->prepare($insertQuery);

                if (!$insertStmt) {
                    if ($conn->errno == 1146) { throw new mysqli_sql_exception($conn->error, 1146); }
                    throw new Exception("Prepare failed (Insert): " . $conn->error);
                }

                foreach ($contacts as $contact) {
                    // Basic validation/sanitization could happen here
                    $name = isset($contact['name']) ? trim($contact['name']) : '';
                    $mobile = isset($contact['mobile']) ? trim($contact['mobile']) : '';

                    // Skip empty entries if needed, or store them as provided
                    if ($name === '' && $mobile === '') {
                        continue;
                    }

                    // Bind and Execute
                    // user_id is integer, name and mobile are strings
                    $insertStmt->bind_param("iss", $userId, $name, $mobile);

                    if (!$insertStmt->execute()) {
                        throw new Exception("Execute failed (Insert): " . $insertStmt->error);
                    }
                }
                $insertStmt->close();
            }

            // 4. Commit Transaction
            $conn->commit();
            return true;

        } catch (mysqli_sql_exception $e) {
            $conn->rollback(); // Rollback first

            if ($e->getCode() == 1146 && !$retry) {
                // Table doesn't exist - Create it
                $createTableQuery = "CREATE TABLE IF NOT EXISTS app_user_contacts (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT NOT NULL,
                    name VARCHAR(255) NOT NULL,
                    mobile_no VARCHAR(50) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    INDEX (user_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

                if ($conn->query($createTableQuery)) {
                    // Retry once
                    return processContactsSync($conn, $userId, $contacts, true);
                } else {
                     throw new Exception("Failed to create table: " . $conn->error);
                }
            }
            throw $e; // Re-throw other SQL errors
        } catch (Exception $e) {
            $conn->rollback();
            throw $e;
        }
    }

    // Call the logic
    processContactsSync($conn, $userId, $contacts);

    sendResponse(true, 'Contacts synced successfully', [
        'count' => count($contacts)
    ]);

} catch (Exception $e) {
    // Log error for debugging (in a real system)
    error_log("Contact Sync Error: " . $e->getMessage());
    sendResponse(false, 'Failed to sync contacts: ' . $e->getMessage(), [], 500);
}
?>
