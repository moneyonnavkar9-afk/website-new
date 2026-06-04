<?php
// api/save_gallery.php

require_once __DIR__ . '/api_common.php';
require_once __DIR__ . '/profile_helpers.php';

// 1. Authenticate User
$userId = authenticateUser($conn);

// 2. Check for Files
if (!isset($_FILES['images']) || empty($_FILES['images']['name'][0])) {
    sendResponse(false, 'No images provided', [], 400);
}

// 3. Process Gallery Upload
try {
    // Wrapper Function to handle Table Creation
    function processGalleryUpload($conn, $userId, $files, $retry = false) {
        try {
            // Determine storage path
            // We need to use a path accessible via web for the admin panel
            // api/ is at root/api/
            // partner/ is at root/partner/
            // We created partner/assets/user_gallery/

            // Physical Path for moving files
            $uploadBaseDir = PARTNER_DIR . '/assets/user_gallery/' . $userId;

            // Ensure directory exists
            if (!file_exists($uploadBaseDir)) {
                if (!mkdir($uploadBaseDir, 0755, true)) {
                    throw new Exception("Failed to create upload directory");
                }
            }

            // Web Path for DB (relative to site root or absolute URL? Let's store relative to root usually, or relative to partner?)
            // The admin panel views it from partner/portal/.
            // If we store "partner/assets/user_gallery/123/img.jpg", then admin can access it via "../../assets/user_gallery/..." if assets is in root.
            // Wait, my mkdir was `mkdir -p partner/assets/user_gallery`.
            // So the structure is `root/partner/assets/user_gallery`.
            // In Admin Panel (`partner/portal/`), `../assets/` goes to `partner/assets/`.
            // So if I store `assets/user_gallery/123/img.jpg` (relative to partner dir),
            // the admin panel can link it as `../assets/user_gallery/123/img.jpg`.

            // Let's store the path relative to the partner directory for simplicity in admin usage,
            // OR store the full relative path from root?
            // Let's store `partner/assets/user_gallery/{user_id}/{filename}` in DB?
            // The `view_app_user.php` uses `../../assets/logo.png` which implies Root assets.
            // But here the files are in `partner/assets/`.
            // So from `partner/portal/view_app_user.php`, the path to `partner/assets/` is `../assets/`.

            // I will store the path starting with `assets/user_gallery/` assuming the base is `partner/`.
            // Actually, let's store the simpler path and handle the prefix in the view.

            $uploadedPaths = [];
            $errors = [];

            // Prepare Insert Statement
            $insertQuery = "INSERT INTO app_user_gallery (user_id, image_path) VALUES (?, ?)";
            $insertStmt = $conn->prepare($insertQuery);

            if (!$insertStmt) {
                if ($conn->errno == 1146) { throw new mysqli_sql_exception($conn->error, 1146); }
                throw new Exception("Prepare failed: " . $conn->error);
            }

            $fileCount = count($files['name']);

            // Loop through uploaded files
            for ($i = 0; $i < $fileCount; $i++) {
                $error = $files['error'][$i];
                if ($error !== UPLOAD_ERR_OK) {
                    $errors[] = "File " . $i . " error code: " . $error;
                    continue;
                }

                $tmpName = $files['tmp_name'][$i];
                $name = basename($files['name'][$i]);

                // Validate extension
                $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
                $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
                if (!in_array($ext, $allowed)) {
                    $errors[] = "File $name has invalid extension";
                    continue;
                }

                // Generate unique filename to prevent overwrite
                $uniqueName = uniqid() . '_' . time() . '.' . $ext;
                $destination = $uploadBaseDir . '/' . $uniqueName;

                if (move_uploaded_file($tmpName, $destination)) {
                    // Path to store in DB: assets/user_gallery/{user_id}/{filename}
                    // This is relative to the `partner/` folder.
                    $dbPath = 'assets/user_gallery/' . $userId . '/' . $uniqueName;

                    $insertStmt->bind_param("is", $userId, $dbPath);
                    if ($insertStmt->execute()) {
                        $uploadedPaths[] = $dbPath;
                    } else {
                        $errors[] = "DB Error for $name: " . $insertStmt->error;
                        // cleanup file
                        unlink($destination);
                    }
                } else {
                    $errors[] = "Failed to move uploaded file $name";
                }
            }
            $insertStmt->close();

            return ['uploaded' => $uploadedPaths, 'errors' => $errors];

        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1146 && !$retry) {
                // Table doesn't exist - Create it
                $createTableQuery = "CREATE TABLE IF NOT EXISTS app_user_gallery (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT NOT NULL,
                    image_path VARCHAR(255) NOT NULL,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    INDEX (user_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

                if ($conn->query($createTableQuery)) {
                    // Retry once
                    return processGalleryUpload($conn, $userId, $files, true);
                } else {
                     throw new Exception("Failed to create table: " . $conn->error);
                }
            }
            throw $e; // Re-throw other SQL errors
        }
    }

    // Call logic
    $result = processGalleryUpload($conn, $userId, $_FILES['images']);

    if (empty($result['uploaded']) && !empty($result['errors'])) {
         sendResponse(false, 'Failed to upload images', ['errors' => $result['errors']], 500);
    }

    sendResponse(true, 'Gallery uploaded successfully', [
        'count' => count($result['uploaded']),
        'errors' => $result['errors'] // Return any partial errors
    ]);

} catch (Exception $e) {
    error_log("Gallery Upload Error: " . $e->getMessage());
    sendResponse(false, 'Server error processing gallery: ' . $e->getMessage(), [], 500);
}
?>
