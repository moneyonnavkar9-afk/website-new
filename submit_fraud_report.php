<?php
// submit_fraud_report.php
ob_start();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../partner/includs/config.php';
require_once '../partner/includs/mail_handler.php';

header('Content-Type: application/json');

function sendJson($data) {
    ob_clean();
    echo json_encode($data);
    die();
}

try {
    $action = $_POST['action'] ?? '';

    if ($action === 'send_otp') {
        $mobile = $_POST['mobile'] ?? '';
        $email = $_POST['email'] ?? '';

        if (empty($mobile) || empty($email)) {
            sendJson(['status' => 'error', 'message' => 'Mobile and Email are required.']);
        }

        $mobileOtp = rand(100000, 999999);
        $emailOtp = rand(100000, 999999);

        $_SESSION['fraud_mobile'] = $mobile;
        $_SESSION['fraud_email'] = $email;
        $_SESSION['fraud_mobile_otp'] = $mobileOtp;
        $_SESSION['fraud_email_otp'] = $emailOtp;
        $_SESSION['fraud_otp_expiry'] = time() + 600;

        $brandName = brand_config('brand_name', 'Vardhman Finance');
        $subject = "$brandName - Verification Code for Fraud Report";
        $body = "
            <h3>Fraud Reporting Verification</h3>
            <p>Dear User,</p>
            <p>Your Email verification code is: <strong>$emailOtp</strong></p>
            <p>Please enter this code to proceed with your cyber fraud report. This code will expire in 10 minutes.</p>
            <br>
            <p>Regards,<br>Security Team, $brandName</p>
        ";

        if (function_exists('sendEmail')) {
            $mailSent = sendEmail($email, 'User', $subject, $body);
        }

        require_once '../partner/includs/sms_service.php';
        $smsSuccess = false;
        $smsErrorMsg = '';

        if (function_exists('sendTransactionalSms')) {
            $smsTemplates = require '../partner/includs/sms_templates.php';
            $otpTpl = $smsTemplates['otp_verification'];
            $smsBody = sprintf($otpTpl['message'], $mobileOtp);
            $smsResponse = sendTransactionalSms(
                $mobile,
                $smsBody,
                $otpTpl['template_id'],
                $otpTpl['sender_id']
            );

            if (isset($smsResponse['success']) && $smsResponse['success'] === true) {
                $smsSuccess = true;
            } else {
                $smsErrorMsg = $smsResponse['error'] ?? 'Unknown SMS gateway error';
            }
        } else {
             $smsErrorMsg = 'SMS service not available.';
        }

        if (!$smsSuccess) {
             // We can choose to fail the whole OTP request if SMS fails,
             // to prevent users from getting stuck waiting for an SMS that won't arrive.
             sendJson(['status' => 'error', 'message' => 'Failed to send Mobile OTP. Please try again later. Error: ' . $smsErrorMsg]);
        }

        sendJson(['status' => 'success', 'message' => 'OTPs sent successfully.']);
    }

    if ($action === 'verify_otp') {
        $mobileOtp = $_POST['mobile_otp'] ?? '';
        $emailOtp = $_POST['email_otp'] ?? '';

        if (!isset($_SESSION['fraud_mobile_otp']) || time() > $_SESSION['fraud_otp_expiry']) {
            sendJson(['status' => 'error', 'message' => 'OTP has expired. Please resend.']);
        }

        if ($_SESSION['fraud_mobile_otp'] == $mobileOtp && $_SESSION['fraud_email_otp'] == $emailOtp) {
            $_SESSION['fraud_verified'] = true;
            sendJson(['status' => 'success', 'message' => 'Verification successful.']);
        } else {
            sendJson(['status' => 'error', 'message' => 'Invalid OTP(s) entered.']);
        }
    }

    if ($action === 'submit_report') {
        if (!isset($_SESSION['fraud_verified']) || $_SESSION['fraud_verified'] !== true) {
            sendJson(['status' => 'error', 'message' => 'Please verify mobile and email first.']);
        }

        $mobile = $_SESSION['fraud_mobile'];
        $email = $_SESSION['fraud_email'];
        $fraudDate = $_POST['fraud_date'] ?? '';
        $fraudMode = $_POST['fraud_mode'] ?? '';
        $transactionCount = $_POST['transaction_count'] ?? 0;
        $transactionNumbers = $_POST['transaction_numbers'] ?? '';
        $extraDetails = $_POST['extra_details'] ?? '';

        if (empty($fraudDate) || empty($fraudMode)) {
            sendJson(['status' => 'error', 'message' => 'Missing required fields.']);
        }

        $screenshotPath = '';
        if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = __DIR__ . '/../assets/uploads/cyber_fraud/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $fileName = time() . '_' . basename($_FILES['screenshot']['name']);
            $fileName = preg_replace("/[^a-zA-Z0-9.\-_]/", "", $fileName);
            $targetPath = $uploadDir . $fileName;

            $fileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
            if (in_array($fileType, ['jpg', 'jpeg', 'png', 'pdf'])) {
                if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $targetPath)) {
                    $screenshotPath = 'assets/uploads/cyber_fraud/' . $fileName;
                } else {
                    sendJson(['status' => 'error', 'message' => 'Failed to save uploaded file.']);
                }
            } else {
                sendJson(['status' => 'error', 'message' => 'Invalid file format. Only JPG, PNG, and PDF allowed.']);
            }
        } else {
            sendJson(['status' => 'error', 'message' => 'Please upload a valid screenshot/evidence.']);
        }

        if ($conn) {
            $stmt = $conn->prepare("INSERT INTO cyber_fraud_reports (mobile, email, fraud_date, fraud_mode, transaction_count, transaction_numbers, extra_details, screenshot_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssisss", $mobile, $email, $fraudDate, $fraudMode, $transactionCount, $transactionNumbers, $extraDetails, $screenshotPath);

            if ($stmt->execute()) {
                unset($_SESSION['fraud_mobile']);
                unset($_SESSION['fraud_email']);
                unset($_SESSION['fraud_verified']);

                sendJson(['status' => 'success', 'message' => 'Report submitted successfully.']);
            } else {
                sendJson(['status' => 'error', 'message' => 'Database error: ' . $stmt->error]);
            }
        } else {
            sendJson(['status' => 'error', 'message' => 'Database connection failed.']);
        }
    }

    sendJson(['status' => 'error', 'message' => 'Invalid action.']);

} catch (Throwable $e) {
    error_log("Fraud Report API Error: " . $e->getMessage());
    sendJson(['status' => 'error', 'message' => 'Internal server error occurred.']);
}
