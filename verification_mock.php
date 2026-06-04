<?php
// Mock session start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Mock database connection for frontend display purposes only - we don't need real DB here
$conn = null;

// Mock data for step_references.php
$token = 'mock_token_123';
$i = 1;

// Define helper function to avoid errors if not included
if (!function_exists('brand_config')) {
    function brand_config($key) {
        return '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reference Verification Mock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(0, 0, 0, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 0, 0, 0); }
        }
        .btn-proceed {
            background-color: #041c44;
            color: white;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5" style="max-width: 600px;">
        <?php include 'partner/payout/views/step_references.php'; ?>
    </div>
</body>
</html>
