-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2025 at 08:13 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u727169065_vard`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_details`
--

CREATE TABLE `aadhar_details` (
  `id` int(11) NOT NULL,
  `aadhar_number` varchar(14) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `dp` blob DEFAULT NULL,
  `aadhar_front_image` blob DEFAULT NULL,
  `aadhar_back_image` blob DEFAULT NULL,
  `mobile_hash` varchar(64) DEFAULT NULL,
  `email_hash` varchar(64) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apidata`
--

CREATE TABLE `apidata` (
  `id` int(11) NOT NULL,
  `apikey` varchar(255) DEFAULT NULL,
  `api_secret` varchar(255) DEFAULT NULL,
  `authtoken` varchar(5555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `apidata`
--

INSERT INTO `apidata` (`id`, `apikey`, `api_secret`, `authtoken`) VALUES
(1, 'key_live_82AAcBFQwve9PdiXgyrXxIPwftjpQjU8', 'secret_live_kOhdODOOMLNgzKQ4Qg3sh0YldiB2MMT1', 'eyJ0eXAiOiJKV1MiLCJhbGciOiJSU0FTU0FfUFNTX1NIQV81MTIiLCJraWQiOiIwYzYwMGUzMS01MDAwLTRkYTItYjM3YS01ODdkYTA0ZTk4NTEifQ.eyJyZWZyZXNoX3Rva2VuIjoiZXlKMGVYQWlPaUpLVjFNaUxDSmhiR2NpT2lKU1UwRlRVMEZmVUZOVFgxTklRVjgxTVRJaUxDSnJhV1FpT2lJd1l6WXdNR1V6TVMwMU1EQXdMVFJrWVRJdFlqTTNZUzAxT0Rka1lUQTBaVGs0TlRFaWZRLmV5SnpkV0lpT2lKclpYbGZiR2wyWlY4NE1rRkJZMEpHVVhkMlpUbFFaR2xZWjNseVdIaEpVSGRtZEdwd1VXcFZPQ0lzSW1Gd2FWOXJaWGtpT2lKclpYbGZiR2wyWlY4NE1rRkJZMEpHVVhkMlpUbFFaR2xZWjNseVdIaEpVSGRtZEdwd1VXcFZPQ0lzSW5kdmNtdHpjR0ZqWlY5cFpDSTZJbUUzWmpCallXTTFMVEJoWVdVdE5ERmxOaTA0TkdKbExXRXhZVFJqWm1SbU1XWmlaU0lzSW1GMVpDSTZJa0ZRU1NJc0ltbHVkR1Z1ZENJNklsSkZSbEpGVTBoZlZFOUxSVTRpTENKcGMzTWlPaUp3Y205a01TMWhjR2t1YzJGdVpHSnZlQzVqYnk1cGJpSXNJbVY0Y0NJNk1UYzVOakk1T1RJd05Dd2lhV0YwSWpveE56WTBOell6TWpBMGZRLnZ5SFpBRFc5bERtTzhtMWtYNm5mc3JmNnNhM2k0Q3F5R0tHaTNvekFrVTk3VHNrWEZ0VGVleUpIOFpXNGRRWHFUWDdndm1GSWFVLWNvSWg2YXpTUEFTejNwUVlwX09DVzNnN2RlTHBuMVBEaFpKM3kxVV9CWGotTEp2Mi1QeWNkdFptZ2pwZXh0cFVhc1RSX2hROVJnbGhvbl9aUXgyNXpra09uSGRpUVVaaXJYZFVRbjdTakIwOXlYTFdBbENNVUJwcnRFXy1DOW1XUUJ5dHlJWHJoV2FlRVhUaExQV0RKbkxHY1NXc1BKMEs4R3lmTFJHcjlZMGhzYi1mT2NoSGFZVi1JZWFkNmVmVVVoaVJhQ1NnclB6RHBGLUk2OTR1OVE4aUpuNC1YcGRWR0dmeTB4cFcyYnBDOWRVOHZHUHFsdEpPQkthMmxxMlR5d0FuUFp3cTE1USIsIndvcmtzcGFjZV9pZCI6ImE3ZjBjYWM1LTBhYWUtNDFlNi04NGJlLWExYTRjZmRmMWZiZSIsInN1YiI6ImtleV9saXZlXzgyQUFjQkZRd3ZlOVBkaVhneXJYeElQd2Z0anBRalU4IiwiYXBpX2tleSI6ImtleV9saXZlXzgyQUFjQkZRd3ZlOVBkaVhneXJYeElQd2Z0anBRalU4IiwiYXVkIjoiQVBJIiwiaW50ZW50IjoiQUNDRVNTX1RPS0VOIiwiaXNzIjoicHJvZDEtYXBpLnNhbmRib3guY28uaW4iLCJpYXQiOjE3NjQ3NjMyMDQsImV4cCI6MTc2NDg0OTYwNH0.L8vh9Woftt4a3_3jqkosAg--rWjQxtxVjV8U9DpG9izvny4U7pXilhvrfT9PNuNM6cb1vH5PEPS59ranOsXDyv0QeXz6faXfsq-wArlVexClpfJgEtdmCn3UsmGZfIGSAhIKG1ja7BUH0ZZxwJqJ_1r2Iwb4EK4T00DcGEWMcrDcYMVsiYTAWc02MBQp0PtMUd3WwRaUXXSGXc4gNLpWu4zruRtoS17VEVg9l9xur5CXgWYNYU05z3vygwWlweaMVJVUXwtHrodX6ptzp-mY9opEuWX_s3Cvrc07vIpVkTeS_mWs9vZuKzs9SEKaZSgZeHOOW3lt2KAfuRgJY3Hzrg');

-- --------------------------------------------------------

--
-- Table structure for table `api_charges`
--

CREATE TABLE `api_charges` (
  `id` int(11) NOT NULL,
  `api_name` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `create_AT` timestamp NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `api_click`
--

CREATE TABLE `api_click` (
  `id` int(11) NOT NULL,
  `aadhaar_number` bigint(20) NOT NULL,
  `api_name` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `api_hit_logs`
--

CREATE TABLE `api_hit_logs` (
  `id` int(11) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `api_type` varchar(1000) DEFAULT NULL,
  `data1` varchar(255) DEFAULT NULL,
  `data2` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `data4` text DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_auth_tokens`
--

CREATE TABLE `app_auth_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_otp_verifications`
--

CREATE TABLE `app_otp_verifications` (
  `id` int(11) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `expires_at` datetime NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_otp_verifications`
--

INSERT INTO `app_otp_verifications` (`id`, `mobile`, `otp`, `expires_at`, `is_verified`, `created_at`) VALUES
(1, '7737785911', '7860', '2025-12-13 03:31:47', 0, '2025-12-12 21:56:47'),
(2, '7737785911', '4079', '2025-12-13 03:40:11', 0, '2025-12-12 22:05:11'),
(3, '7737785911', '3665', '2025-12-13 03:40:46', 0, '2025-12-12 22:05:46'),
(4, '7737785911', '4596', '2025-12-13 03:40:52', 0, '2025-12-12 22:05:52'),
(5, '7737785911', '9579', '2025-12-13 03:41:01', 0, '2025-12-12 22:06:01'),
(6, '7737785911', '3121', '2025-12-13 03:47:04', 0, '2025-12-12 22:12:04'),
(7, '7737785911', '5282', '2025-12-13 04:01:23', 0, '2025-12-12 22:26:23'),
(8, '7737785911', '6898', '2025-12-13 04:05:47', 0, '2025-12-12 22:30:47'),
(9, '7737785911', '9937', '2025-12-13 04:08:00', 0, '2025-12-12 22:33:00'),
(10, '7737785911', '5055', '2025-12-13 04:08:03', 0, '2025-12-12 22:33:03'),
(11, '7737785911', '3768', '2025-12-13 04:08:20', 0, '2025-12-12 22:33:20'),
(12, '7737785911', '4357', '2025-12-13 04:13:13', 0, '2025-12-12 22:38:13'),
(13, '7737785911', '9561', '2025-12-13 04:13:23', 0, '2025-12-12 22:38:23'),
(14, '7737785911', '7656', '2025-12-13 04:17:05', 0, '2025-12-12 22:42:05'),
(15, '7737785911', '8235', '2025-12-13 04:28:55', 0, '2025-12-12 22:53:55'),
(16, '7737785911', '2256', '2025-12-13 04:32:01', 0, '2025-12-12 22:57:01'),
(17, '7737785911', '8720', '2025-12-13 04:32:02', 0, '2025-12-12 22:57:02'),
(18, '7737785911', '8263', '2025-12-13 04:32:11', 0, '2025-12-12 22:57:11'),
(19, '7737785911', '5899', '2025-12-13 04:32:30', 0, '2025-12-12 22:57:30'),
(20, '7737785911', '1485', '2025-12-15 00:52:51', 0, '2025-12-14 19:17:51'),
(21, '7737785911', '9903', '2025-12-15 00:52:55', 0, '2025-12-14 19:17:55'),
(22, '7737785911', '5424', '2025-12-15 00:52:56', 0, '2025-12-14 19:17:56'),
(23, '7737785911', '4874', '2025-12-15 00:52:57', 0, '2025-12-14 19:17:57'),
(24, '7737785911', '5603', '2025-12-15 00:52:58', 0, '2025-12-14 19:17:58'),
(25, '7737785911', '4993', '2025-12-15 00:52:59', 0, '2025-12-14 19:17:59'),
(26, '7737785911', '3181', '2025-12-15 00:54:21', 0, '2025-12-14 19:19:21'),
(27, '7737785911', '2688', '2025-12-15 01:12:53', 0, '2025-12-14 19:37:53'),
(28, '7737785911', '1450', '2025-12-15 01:28:43', 0, '2025-12-14 19:53:43'),
(29, '7737785911', '9131', '2025-12-15 01:28:46', 0, '2025-12-14 19:53:46'),
(30, '7737785911', '4426', '2025-12-15 01:30:54', 0, '2025-12-14 19:55:54'),
(31, '7737785911', '1486', '2025-12-15 01:43:00', 0, '2025-12-14 20:08:00'),
(32, '8619036818', '7820', '2025-12-15 01:43:28', 0, '2025-12-14 20:08:28'),
(33, '8619036818', '5731', '2025-12-15 01:46:28', 0, '2025-12-14 20:11:28'),
(34, '7737785911', '5319', '2025-12-15 01:46:56', 0, '2025-12-14 20:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cibil_data`
--

CREATE TABLE `cibil_data` (
  `id` int(11) NOT NULL,
  `file_id` varchar(20) NOT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `aadhar_number` varchar(20) DEFAULT NULL,
  `pan_Number` varchar(20) DEFAULT NULL,
  `pan_Image` varchar(255) DEFAULT NULL,
  `aadhar_front_image` varchar(255) DEFAULT NULL,
  `aadhar_back_image` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `added_by` varchar(20) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `guarantor1_name` varchar(255) DEFAULT NULL,
  `guarantor1_mobile` varchar(15) DEFAULT NULL,
  `guarantor2_name` varchar(255) DEFAULT NULL,
  `guarantor2_mobile` varchar(15) DEFAULT NULL,
  `email_hash` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_hash` varchar(255) DEFAULT NULL,
  `dp` varchar(255) DEFAULT NULL,
  `aadhar_verification` tinyint(1) DEFAULT 0,
  `access_token` varchar(20) DEFAULT NULL,
  `step` int(10) NOT NULL DEFAULT 0,
  `ref_name` varchar(255) DEFAULT NULL,
  `selected_loan_amount` int(20) DEFAULT NULL,
  `approved_loan_amount` int(20) DEFAULT NULL,
  `accepted_loan_amount` int(11) DEFAULT NULL,
  `rate_of_interest` decimal(5,2) DEFAULT NULL,
  `tenure` int(11) DEFAULT NULL,
  `emi_amount` decimal(10,2) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(30) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(40) DEFAULT NULL,
  `alternate_mobile` varchar(15) DEFAULT NULL,
  `bank_statement_path` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `gst_no` varchar(15) DEFAULT NULL,
  `no_of_employees` int(11) DEFAULT NULL,
  `office_name` varchar(255) DEFAULT NULL,
  `monthly_in_hand` varchar(20) DEFAULT NULL,
  `electricity_bill` varchar(255) DEFAULT NULL,
  `blank_cheque` varchar(255) DEFAULT NULL,
  `company_itr` varchar(255) DEFAULT NULL,
  `salary_slip` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `processingFees` decimal(10,2) DEFAULT NULL,
  `agreement_url` varchar(255) DEFAULT NULL,
  `invoice_url` varchar(255) DEFAULT NULL,
  `emi_url` varchar(255) DEFAULT NULL,
  `policy_rate` decimal(10,2) DEFAULT NULL,
  `tds_amount` decimal(10,2) DEFAULT NULL,
  `noc_amount` decimal(10,2) DEFAULT NULL,
  `blank_cheque2` varchar(255) DEFAULT NULL,
  `cheque_no1` varchar(50) DEFAULT NULL,
  `cheque_no2` varchar(50) DEFAULT NULL,
  `statement_password` varchar(255) DEFAULT NULL,
  `company_turnover` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `selfPhoto` varchar(255) DEFAULT NULL,
  `policy_url` varchar(255) DEFAULT NULL,
  `tds_invoice_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_dedupe_logs`
--

CREATE TABLE `cl_dedupe_logs` (
  `id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `http_code` int(11) DEFAULT NULL,
  `success` tinyint(1) DEFAULT 0,
  `response_json` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_leads`
--

CREATE TABLE `cl_leads` (
  `id` int(11) NOT NULL,
  `lead_uuid` varchar(64) DEFAULT NULL,
  `loan_type` enum('personal','gold','housing') NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `pan` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `monthly_income` int(11) DEFAULT NULL,
  `employment_status` tinyint(4) DEFAULT NULL,
  `employer_name` varchar(128) DEFAULT NULL,
  `office_pincode` varchar(6) DEFAULT NULL,
  `loan_amount` int(11) DEFAULT NULL,
  `housing_loan_amount` int(11) DEFAULT NULL,
  `property_type` varchar(64) DEFAULT NULL,
  `consent_datetime` datetime DEFAULT NULL,
  `consent_ip` varchar(64) DEFAULT NULL,
  `http_code` int(11) DEFAULT NULL,
  `success` tinyint(1) DEFAULT 0,
  `api_request_json` longtext DEFAULT NULL,
  `api_response_json` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_mobile_otp`
--

CREATE TABLE `cl_mobile_otp` (
  `id` int(11) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `otp_hash` varchar(255) NOT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_offers`
--

CREATE TABLE `cl_offers` (
  `id` int(11) NOT NULL,
  `offer_log_id` int(11) NOT NULL,
  `lender_name` varchar(128) DEFAULT NULL,
  `interest_rate` varchar(64) DEFAULT NULL,
  `tenure` varchar(64) DEFAULT NULL,
  `status` varchar(64) DEFAULT NULL,
  `lender_logo` varchar(255) DEFAULT NULL,
  `offer_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_offer_clicks`
--

CREATE TABLE `cl_offer_clicks` (
  `id` int(11) NOT NULL,
  `lead_uuid` varchar(64) NOT NULL,
  `lender_id` int(11) DEFAULT NULL,
  `lender_name` varchar(128) DEFAULT NULL,
  `offer_link` varchar(255) DEFAULT NULL,
  `user_ip` varchar(64) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `clicked_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cl_offer_logs`
--

CREATE TABLE `cl_offer_logs` (
  `id` int(11) NOT NULL,
  `lead_uuid` varchar(64) NOT NULL,
  `fetch_type` enum('offers','summary') NOT NULL,
  `http_code` int(11) DEFAULT NULL,
  `success` tinyint(1) DEFAULT 0,
  `offers_count` int(11) DEFAULT NULL,
  `response_json` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `communication_logs`
--

CREATE TABLE `communication_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(10) UNSIGNED NOT NULL,
  `communication_type` enum('email','sms') NOT NULL,
  `channel` varchar(191) NOT NULL,
  `recipient` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_leads`
--

CREATE TABLE `crm_leads` (
  `id` int(11) NOT NULL,
  `lead_name` varchar(120) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_email` varchar(120) DEFAULT NULL,
  `source` varchar(60) DEFAULT 'manual',
  `status` enum('new','in_progress','converted','closed','rejected') DEFAULT 'new',
  `priority` enum('low','medium','high') DEFAULT 'medium',
  `notes` text DEFAULT NULL,
  `assigned_to` varchar(64) DEFAULT NULL,
  `created_by` varchar(64) NOT NULL,
  `meta_lead_id` varchar(120) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crm_meta_settings`
--

CREATE TABLE `crm_meta_settings` (
  `id` int(11) NOT NULL,
  `access_token` text DEFAULT NULL,
  `page_id` varchar(120) DEFAULT NULL,
  `form_id` varchar(120) DEFAULT NULL,
  `verify_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_access_tokens`
--

CREATE TABLE `employee_access_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `token_hash` char(64) NOT NULL,
  `device_info` varchar(150) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `last_used_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_chat_messages`
--

CREATE TABLE `employee_chat_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `recipient_id` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_file_activity`
--

CREATE TABLE `employee_file_activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `opened_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `call_status` enum('unknown','called','not_called') NOT NULL DEFAULT 'unknown',
  `call_remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_file_assignments`
--

CREATE TABLE `employee_file_assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED DEFAULT NULL,
  `assigned_by` varchar(50) NOT NULL,
  `assignment_note` varchar(255) DEFAULT NULL,
  `assigned_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_file_notes`
--

CREATE TABLE `employee_file_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `note` text NOT NULL,
  `call_status` enum('unknown','called','not_called') NOT NULL DEFAULT 'unknown',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_password_resets`
--

CREATE TABLE `employee_password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `otp_hash` varchar(255) NOT NULL,
  `otp_sent_to` varchar(20) DEFAULT NULL,
  `otp_expires_at` datetime NOT NULL,
  `reset_token_hash` char(64) NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_portal_leads`
--

CREATE TABLE `employee_portal_leads` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `lead_name` varchar(150) NOT NULL,
  `contact_mobile` varchar(20) NOT NULL,
  `contact_email` varchar(150) DEFAULT NULL,
  `lead_source` varchar(100) DEFAULT 'manual',
  `lead_priority` varchar(50) DEFAULT 'medium',
  `lead_status` varchar(50) DEFAULT 'new',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_presence_sessions`
--

CREATE TABLE `employee_presence_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `session_token` char(64) NOT NULL,
  `started_at` datetime NOT NULL,
  `last_seen_at` datetime NOT NULL,
  `ended_at` datetime DEFAULT NULL,
  `logout_reason` enum('manual','timeout','deactivated','system') DEFAULT NULL,
  `total_active_seconds` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `esign_audit_trail`
--

CREATE TABLE `esign_audit_trail` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `action` enum('download','resend') NOT NULL,
  `performed_by` varchar(50) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `performed_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `esign_documents`
--

CREATE TABLE `esign_documents` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `status` enum('pending','signed','failed') DEFAULT 'pending',
  `signed_at` datetime DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `esign_logs`
--

CREATE TABLE `esign_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doc_id` varchar(64) NOT NULL,
  `aadhaar_number` varchar(20) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `signed_path` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `esign_logs`
--

INSERT INTO `esign_logs` (`id`, `user_id`, `doc_id`, `aadhaar_number`, `ip_address`, `signed_path`, `created_at`) VALUES
(1, 68, 'doc_68b7672497324', '7159-1337-3064', '2405:201:5c20:a08a:f1c1:4915:fd45:90d5', '/home/u727169065/domains/navkarfinances.com/public_html/partner/includs/../signed_docs/68/doc_68b7672497324.pdf', '2025-09-02 21:52:36'),
(2, 68, 'doc_68b7686b907a6', '7159-1337-3064', '2405:201:5c20:a08a:f1c1:4915:fd45:90d5', '/home/u727169065/domains/navkarfinances.com/public_html/partner/includs/../signed_docs/68/doc_68b7686b907a6.pdf', '2025-09-02 21:58:03'),
(3, 68, 'doc_68b76d75de498', '7159-1337-3064', '2405:201:5c20:a08a:f1c1:4915:fd45:90d5', '/home/u727169065/domains/navkarfinances.com/public_html/partner/includs/../signed_docs/68/doc_68b76d75de498.pdf', '2025-09-02 22:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `esign_requests`
--

CREATE TABLE `esign_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `token_hash` char(64) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `esign_verification_logs`
--

CREATE TABLE `esign_verification_logs` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `file_id` varchar(100) NOT NULL,
  `borrower_name` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `message` text DEFAULT NULL,
  `aadhaar_masked` varchar(32) NOT NULL,
  `kyc_name` varchar(255) DEFAULT NULL,
  `reference_id` varchar(120) DEFAULT NULL,
  `transaction_id` varchar(120) DEFAULT NULL,
  `share_code` varchar(120) DEFAULT NULL,
  `verification_id` varchar(120) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `pdf_path` varchar(255) DEFAULT NULL,
  `verified_at` datetime NOT NULL,
  `detail_json` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_loan`
--

CREATE TABLE `group_loan` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_id` varchar(100) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guarantor`
--

CREATE TABLE `guarantor` (
  `id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `guarantor_no` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `aadhaar_number` varchar(14) DEFAULT NULL,
  `aadhaar_front` varchar(255) DEFAULT NULL,
  `aadhaar_back` varchar(255) DEFAULT NULL,
  `pan_number` varchar(10) DEFAULT NULL,
  `pan_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `link_click`
--

CREATE TABLE `link_click` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `panCard` varchar(10) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `link_details`
--

CREATE TABLE `link_details` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `file_id` varchar(20) NOT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `map` varchar(50) NOT NULL,
  `aadhar_number` varchar(20) DEFAULT NULL,
  `pan_Number` varchar(20) DEFAULT NULL,
  `pan_Image` varchar(255) DEFAULT NULL,
  `aadhar_front_image` varchar(255) DEFAULT NULL,
  `aadhar_back_image` varchar(255) DEFAULT NULL,
  `additional_doc` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `added_by` varchar(20) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `paddress` varchar(100) NOT NULL,
  `marrital_status` text NOT NULL DEFAULT 'no',
  `spouse_name` varchar(10) NOT NULL,
  `video_url` varchar(50) NOT NULL,
  `guarantor1_name` varchar(255) DEFAULT NULL,
  `grelation1` varchar(10) NOT NULL,
  `guarantor1_mobile` varchar(15) DEFAULT NULL,
  `guarantor2_name` varchar(255) DEFAULT NULL,
  `grelation2` varchar(10) NOT NULL,
  `guarantor2_mobile` varchar(15) DEFAULT NULL,
  `email_hash` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_hash` varchar(255) DEFAULT NULL,
  `dp` varchar(255) DEFAULT NULL,
  `aadhar_verification` tinyint(1) DEFAULT 0,
  `access_token` varchar(20) DEFAULT NULL,
  `step` int(10) NOT NULL DEFAULT 0,
  `esign_agreement_url` varchar(50) NOT NULL,
  `ref_name` varchar(255) DEFAULT NULL,
  `selected_loan_amount` int(20) DEFAULT NULL,
  `approved_loan_amount` int(20) DEFAULT NULL,
  `accepted_loan_amount` int(11) DEFAULT NULL,
  `rate_of_interest` decimal(5,2) DEFAULT NULL,
  `tenure` int(11) DEFAULT NULL,
  `emi_amount` decimal(10,2) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(30) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(40) DEFAULT NULL,
  `alternate_mobile` varchar(15) DEFAULT NULL,
  `bank_statement_path` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `business_type` varchar(10) NOT NULL,
  `business_certificate` varchar(15) NOT NULL,
  `certificate_url` varchar(50) NOT NULL,
  `business_vintage` varchar(10) NOT NULL,
  `gst_no` varchar(15) DEFAULT NULL,
  `no_of_employees` int(11) DEFAULT NULL,
  `office_name` varchar(255) DEFAULT NULL,
  `monthly_in_hand` varchar(20) DEFAULT NULL,
  `electricity_bill` varchar(255) DEFAULT NULL,
  `blank_cheque` varchar(255) DEFAULT NULL,
  `company_itr` varchar(255) DEFAULT NULL,
  `salary_slip` varchar(255) DEFAULT NULL,
  `organization` varchar(10) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `processingFees` decimal(10,2) DEFAULT NULL,
  `agreement_url` varchar(255) DEFAULT NULL,
  `invoice_url` varchar(255) DEFAULT NULL,
  `emi_url` varchar(255) DEFAULT NULL,
  `policy_rate` decimal(10,2) DEFAULT NULL,
  `tds_amount` decimal(10,2) DEFAULT NULL,
  `noc_amount` decimal(10,2) DEFAULT NULL,
  `blank_cheque2` varchar(255) DEFAULT NULL,
  `cheque_no1` varchar(50) DEFAULT NULL,
  `cheque_no2` varchar(50) DEFAULT NULL,
  `statement_password` varchar(255) DEFAULT NULL,
  `company_turnover` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `selfPhoto` varchar(255) DEFAULT NULL,
  `policy_url` varchar(255) DEFAULT NULL,
  `tds_invoice_url` varchar(255) DEFAULT NULL,
  `g_verification` enum('open','done') DEFAULT NULL,
  `g1_video_status` enum('pending','done') DEFAULT 'pending',
  `g1_video_url` varchar(255) DEFAULT NULL,
  `g2_video_status` enum('pending','done') DEFAULT 'pending',
  `g2_video_url` varchar(255) DEFAULT NULL,
  `auth` varchar(4) NOT NULL,
  `assigned_employee_id` int(10) UNSIGNED DEFAULT NULL,
  `is_hidden` tinyint(1) NOT NULL DEFAULT 0,
  `soft_approval_amount` decimal(15,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `file_id`, `file_type`, `mobile`, `email`, `created_at`, `map`, `aadhar_number`, `pan_Number`, `pan_Image`, `aadhar_front_image`, `aadhar_back_image`, `additional_doc`, `name`, `added_by`, `father_name`, `mother_name`, `dob`, `gender`, `address`, `paddress`, `marrital_status`, `spouse_name`, `video_url`, `guarantor1_name`, `grelation1`, `guarantor1_mobile`, `guarantor2_name`, `grelation2`, `guarantor2_mobile`, `email_hash`, `district`, `pincode`, `city`, `mobile_hash`, `dp`, `aadhar_verification`, `access_token`, `step`, `esign_agreement_url`, `ref_name`, `selected_loan_amount`, `approved_loan_amount`, `accepted_loan_amount`, `rate_of_interest`, `tenure`, `emi_amount`, `account_holder_name`, `account_number`, `bank_name`, `ifsc_code`, `alternate_mobile`, `bank_statement_path`, `profession`, `company_name`, `business_type`, `business_certificate`, `certificate_url`, `business_vintage`, `gst_no`, `no_of_employees`, `office_name`, `monthly_in_hand`, `electricity_bill`, `blank_cheque`, `company_itr`, `salary_slip`, `organization`, `status`, `processingFees`, `agreement_url`, `invoice_url`, `emi_url`, `policy_rate`, `tds_amount`, `noc_amount`, `blank_cheque2`, `cheque_no1`, `cheque_no2`, `statement_password`, `company_turnover`, `branch_name`, `selfPhoto`, `policy_url`, `tds_invoice_url`, `g_verification`, `g1_video_status`, `g1_video_url`, `g2_video_status`, `g2_video_url`, `auth`, `assigned_employee_id`, `is_hidden`, `soft_approval_amount`) VALUES
(1, 'ILMON305D010001', 'instant loan', '7798437170', 'noopurshah2009@gmail.com', '2025-12-12 15:13:40', '', NULL, NULL, NULL, NULL, NULL, '', NULL, 'self', NULL, NULL, NULL, NULL, NULL, '', 'no', '', '', NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'qa1WY2Dd', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, 'pending', NULL, '', NULL, 0, 0.00),
(2, 'ILMONAB21010002', 'instant loan', '9619907151', 'sanganikartik5@gmail.com', '2025-12-12 18:51:08', '', NULL, NULL, NULL, NULL, NULL, '', NULL, 'self', NULL, NULL, NULL, NULL, NULL, '', 'no', '', '', NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'sInuRSCR', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, 'pending', NULL, '', NULL, 0, 0.00),
(4, 'ILMON0567010003', 'instant loan', '7737785911', 'narayanratra44@gmail.com', '2025-12-13 04:15:40', '', NULL, NULL, NULL, NULL, NULL, '', NULL, 'self', NULL, NULL, NULL, NULL, NULL, '', 'no', '', '', NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'THgGeKWE', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, 'pending', NULL, '', NULL, 0, 982500.00),
(5, 'ILMONE354010005', 'instant loan', '7042459617', 'dev94356@gmail.com', '2025-12-13 10:46:14', '', NULL, NULL, NULL, NULL, NULL, '', NULL, 'self', NULL, NULL, NULL, NULL, NULL, '', 'no', '', '', NULL, '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Owsfhc5K', 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, 'pending', NULL, '', NULL, 0, 1028300.00);

-- --------------------------------------------------------

--
-- Table structure for table `loan_applications`
--

CREATE TABLE `loan_applications` (
  `id` int(11) NOT NULL,
  `loan_type` varchar(255) NOT NULL,
  `loan_amount` decimal(15,2) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `aadhaarNumber` varchar(12) NOT NULL,
  `aadhar_front` varchar(255) NOT NULL,
  `aadhar_back` varchar(255) NOT NULL,
  `pan_number` varchar(10) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pin_code` varchar(6) NOT NULL,
  `employment_type` varchar(50) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `salary_mode` varchar(50) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `business_type` varchar(50) DEFAULT NULL,
  `business_income` decimal(15,2) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `business_proof` varchar(10) DEFAULT NULL,
  `business_age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_fraud`
--

CREATE TABLE `loan_fraud` (
  `id` int(11) NOT NULL,
  `file_id` varchar(20) NOT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `aadhar_number` varchar(20) DEFAULT NULL,
  `pan_Number` varchar(20) DEFAULT NULL,
  `pan_Image` varchar(255) DEFAULT NULL,
  `aadhar_front_image` varchar(255) DEFAULT NULL,
  `aadhar_back_image` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `added_by` varchar(20) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `guarantor1_name` varchar(255) DEFAULT NULL,
  `guarantor1_mobile` varchar(15) DEFAULT NULL,
  `guarantor2_name` varchar(255) DEFAULT NULL,
  `guarantor2_mobile` varchar(15) DEFAULT NULL,
  `email_hash` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `mobile_hash` varchar(255) DEFAULT NULL,
  `dp` varchar(255) DEFAULT NULL,
  `aadhar_verification` tinyint(1) DEFAULT 0,
  `access_token` varchar(20) DEFAULT NULL,
  `step` int(10) NOT NULL DEFAULT 0,
  `ref_name` varchar(255) DEFAULT NULL,
  `fraud_loan_amount` int(20) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(30) DEFAULT NULL,
  `transaction_id` varchar(40) DEFAULT NULL,
  `alternate_mobile` varchar(15) DEFAULT NULL,
  `evidence` varchar(255) DEFAULT NULL,
  `bank_name` text NOT NULL,
  `lender_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_live_photos`
--

CREATE TABLE `loan_live_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_id` int(11) NOT NULL,
  `access_token` varchar(191) NOT NULL,
  `live_photo_url` varchar(255) NOT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `house_photo_url` varchar(255) DEFAULT NULL,
  `house_latitude` decimal(10,7) DEFAULT NULL,
  `house_longitude` decimal(10,7) DEFAULT NULL,
  `house_captured_at` datetime DEFAULT NULL,
  `captured_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_status`
--

CREATE TABLE `loan_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `id` int(11) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `loan_image_url` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahila_group_loan`
--

CREATE TABLE `mahila_group_loan` (
  `id` int(11) NOT NULL,
  `group_id` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `file_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `husband_name` varchar(255) DEFAULT NULL,
  `self_aadhar_number` varchar(12) DEFAULT NULL,
  `husband_aadhar_number` varchar(12) DEFAULT NULL,
  `self_voter_id` varchar(10) DEFAULT NULL,
  `husband_voter_id` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(15) DEFAULT NULL,
  `ration_card_no` varchar(20) DEFAULT NULL,
  `bank_statement` varchar(255) DEFAULT NULL,
  `electricity_bill` varchar(255) DEFAULT NULL,
  `gurantor_name` varchar(255) DEFAULT NULL,
  `gurantor_mobile_no` varchar(15) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `ifsc_code` varchar(11) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `emi_bounce` varchar(22) DEFAULT NULL,
  `current_emi` decimal(10,2) DEFAULT NULL,
  `monthly_income` decimal(10,2) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) NOT NULL,
  `statement_password` varchar(255) DEFAULT NULL,
  `area` varchar(255) NOT NULL,
  `applicant_photo` varchar(255) DEFAULT NULL,
  `husband_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `amount` decimal(15,2) NOT NULL,
  `roi` decimal(5,2) NOT NULL DEFAULT 10.50,
  `tenure` int(11) NOT NULL DEFAULT 60,
  `status` varchar(50) NOT NULL,
  `self_aadhar_front` varchar(255) DEFAULT NULL,
  `self_aadhar_back` varchar(255) DEFAULT NULL,
  `husband_aadhar_front` varchar(255) DEFAULT NULL,
  `husband_aadhar_back` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_logs`
--

CREATE TABLE `mail_logs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mail_logs`
--

INSERT INTO `mail_logs` (`id`, `email`, `subject`, `created_at`) VALUES
(1, 'admin@vardhmanfinance.com', 'Verify Your OTP for Vardhman Finance', '2025-12-11 18:37:24'),
(2, 'navkarjainproperty@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-11 18:43:44'),
(3, 'navkarjainproperty@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-11 18:45:15'),
(4, 'noopurshah2009@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-12 09:43:23'),
(5, 'noopurshah2009@gmail.com', 'Vardhman Finance की ओर से शुभ दीपावली की मंगलकामनाएँ', '2025-12-12 09:43:42'),
(6, 'rajputrakesh5769@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-12 11:15:41'),
(7, 'sanganikartik5@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-12 13:20:14'),
(8, 'sanganikartik5@gmail.com', 'Vardhman Finance की ओर से शुभ दीपावली की मंगलकामनाएँ', '2025-12-12 13:21:10'),
(9, 'angelcreation0521@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-12 13:43:25'),
(10, 'narayanratra44@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-12 21:56:34'),
(11, 'narayanratra44@gmail.com', 'Vardhman Finance की ओर से शुभ दीपावली की मंगलकामनाएँ', '2025-12-12 21:57:15'),
(12, 'narayanratra44@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-12 22:45:24'),
(13, 'narayanratra44@gmail.com', 'Vardhman Finance की ओर से शुभ दीपावली की मंगलकामनाएँ', '2025-12-12 22:45:42'),
(14, 'dev94356@gmail.com', 'Verify Your OTP for Vardhman Finance', '2025-12-13 05:15:43'),
(15, 'dev94356@gmail.com', 'Vardhman Finance की ओर से शुभ दीपावली की मंगलकामनाएँ', '2025-12-13 05:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_codes`
--

CREATE TABLE `otp_codes` (
  `mobile` varchar(15) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_click`
--

CREATE TABLE `partner_click` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `link_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portal_employees`
--

CREATE TABLE `portal_employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `alternate_mobile` varchar(20) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('active','inactive','deactivated') NOT NULL DEFAULT 'active',
  `password_hash` varchar(255) NOT NULL,
  `password_plain` varchar(255) NOT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` enum('staff','hr') NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_balances`
--

CREATE TABLE `service_balances` (
  `id` int(11) NOT NULL,
  `service_key` varchar(64) NOT NULL,
  `display_name` varchar(120) NOT NULL,
  `balance` decimal(12,2) NOT NULL DEFAULT 0.00,
  `rate` decimal(12,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Dumping data for table `service_balances`
--

INSERT INTO `service_balances` (`id`, `service_key`, `display_name`, `balance`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'aadhaar_esign', 'Aadhaar e-Sign', 1000.00, 25.00, '2025-11-06 18:21:59', '2025-12-11 17:55:06'),
(2, 'video_verification', 'Video Verification', 1000.00, 10.00, '2025-11-06 18:21:59', '2025-12-11 17:55:11'),
(3, 'face_match', 'Face Match', 1000.00, 4.00, '2025-11-17 15:58:01', '2025-12-11 17:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `service_transactions`
--

CREATE TABLE `service_transactions` (
  `id` bigint(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_key` varchar(64) NOT NULL,
  `change_type` enum('debit','credit') NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `balance_after` decimal(12,2) NOT NULL,
  `reference_type` varchar(64) DEFAULT NULL,
  `reference_id` varchar(120) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `meta_json` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) DEFAULT 'requested',
  `mobile` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `aadhar_number` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pan_Number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pan_Image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadhar_front_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadhar_back_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `added_by` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `father_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mother_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pincode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadhar_verification` tinyint(1) DEFAULT 0,
  `access_token` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `step` int(10) NOT NULL DEFAULT 0,
  `account_holder_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `business_type` varchar(20) NOT NULL,
  `account_number` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ifsc_code` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alternate_mobile` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bank_statement_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gst_no` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_of_employees` int(11) DEFAULT NULL,
  `office_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `monthly_in_hand` decimal(10,2) DEFAULT NULL,
  `electricity_bill` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `blank_cheque` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `company_itr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salary_slip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `wallet` decimal(10,2) DEFAULT 0.00,
  `utr_no` varchar(50) DEFAULT NULL,
  `screenshot` varchar(255) DEFAULT NULL,
  `blank_cheque2` varchar(255) DEFAULT NULL,
  `cheque_no1` varchar(50) DEFAULT NULL,
  `cheque_no2` varchar(50) DEFAULT NULL,
  `statement_password` varchar(255) DEFAULT NULL,
  `business_vintage` int(10) NOT NULL,
  `annual_turnover` int(20) NOT NULL,
  `official_email` varchar(20) NOT NULL,
  `work_experience` int(10) NOT NULL,
  `supporting_document` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`, `role`, `status`, `mobile`, `email`, `created_at`, `aadhar_number`, `pan_Number`, `pan_Image`, `aadhar_front_image`, `aadhar_back_image`, `name`, `added_by`, `father_name`, `mother_name`, `dob`, `gender`, `address`, `email_hash`, `district`, `pincode`, `city`, `mobile_hash`, `dp`, `aadhar_verification`, `access_token`, `step`, `account_holder_name`, `business_type`, `account_number`, `bank_name`, `ifsc_code`, `alternate_mobile`, `bank_statement_path`, `profession`, `company_name`, `gst_no`, `no_of_employees`, `office_name`, `monthly_in_hand`, `electricity_bill`, `blank_cheque`, `company_itr`, `salary_slip`, `wallet`, `utr_no`, `screenshot`, `blank_cheque2`, `cheque_no1`, `cheque_no2`, `statement_password`, `business_vintage`, `annual_turnover`, `official_email`, `work_experience`, `supporting_document`, `state`) VALUES
(1, 'vardhmanadmin', 'Narayanji@321', 'admin', 'active', '7291000223', 'navkarjainproperty@gmail.com', '2024-08-13 22:12:07', '9323-0984-6358', 'BRHPA0964Q', NULL, NULL, NULL, 'Arihant Jain', 'self', 'KANHAIYA LAL', 'KANTA DEVI', '1994-08-13', 'M', 'Rajendra Palace Near PBM HOSPITAL Sadul Colony 2nd\r\nFloor Office No. Of 114-115 Bikaner Pin Code : 334001\r\nRajasthan', NULL, 'BIKANER', '334401', 'DESHNOKH', NULL, '../includs/images/logo/logo.png', 1, 'M9UCpgHw', 6, 'ARIHANT JAIN', '', '46014700000693', 'DCB', 'DCBL0000460', '9899944426', '../includs/images/bstatements/bank_statement_66bbdbad9a13f4.09847935.png', 'Self-Employed', 'MONEY ON NAVKAR', '08AAHCN8675J1ZQ', 21, 'MONEY ON NAVKAR', NULL, '../includs/images/documents/electricity_bill_66bbdc48c05fc5.61241069.png', '../includs/images/documents/blank_cheque_66bbdc48c06a61.81399370.png', '../includs/images/documents/company_itr_66bbdc48c06ee7.91994976.png', NULL, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transaction`
--

CREATE TABLE `wallet_transaction` (
  `id` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `nature` varchar(50) NOT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aadhar_details`
--
ALTER TABLE `aadhar_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apidata`
--
ALTER TABLE `apidata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_charges`
--
ALTER TABLE `api_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_click`
--
ALTER TABLE `api_click`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_hit_logs`
--
ALTER TABLE `api_hit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_auth_tokens`
--
ALTER TABLE `app_auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `app_otp_verifications`
--
ALTER TABLE `app_otp_verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobile_idx` (`mobile`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `cibil_data`
--
ALTER TABLE `cibil_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_id` (`file_id`),
  ADD UNIQUE KEY `unique_access_token` (`access_token`);

--
-- Indexes for table `cl_dedupe_logs`
--
ALTER TABLE `cl_dedupe_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_leads`
--
ALTER TABLE `cl_leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_lead_uuid` (`lead_uuid`),
  ADD KEY `idx_mobile` (`mobile`);

--
-- Indexes for table `cl_mobile_otp`
--
ALTER TABLE `cl_mobile_otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_mobile` (`mobile`);

--
-- Indexes for table `cl_offers`
--
ALTER TABLE `cl_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_offerlog` (`offer_log_id`);

--
-- Indexes for table `cl_offer_clicks`
--
ALTER TABLE `cl_offer_clicks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_click_lead` (`lead_uuid`);

--
-- Indexes for table `cl_offer_logs`
--
ALTER TABLE `cl_offer_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_offer_lead` (`lead_uuid`);

--
-- Indexes for table `communication_logs`
--
ALTER TABLE `communication_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_loan_type_created` (`loan_id`,`communication_type`,`created_at`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `crm_leads`
--
ALTER TABLE `crm_leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_to` (`assigned_to`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `status` (`status`),
  ADD KEY `source` (`source`);

--
-- Indexes for table `crm_meta_settings`
--
ALTER TABLE `crm_meta_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_access_tokens`
--
ALTER TABLE `employee_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_employee_access_tokens_token` (`token_hash`),
  ADD KEY `idx_employee_access_tokens_employee` (`employee_id`);

--
-- Indexes for table `employee_chat_messages`
--
ALTER TABLE `employee_chat_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_employee_chat_messages_sender` (`sender_id`),
  ADD KEY `idx_employee_chat_messages_recipient` (`recipient_id`),
  ADD KEY `idx_employee_chat_messages_pair` (`sender_id`,`recipient_id`),
  ADD KEY `idx_employee_chat_messages_created` (`created_at`);

--
-- Indexes for table `employee_file_activity`
--
ALTER TABLE `employee_file_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_employee_file_activity_loan` (`loan_id`),
  ADD KEY `idx_employee_file_activity_employee` (`employee_id`);

--
-- Indexes for table `employee_file_assignments`
--
ALTER TABLE `employee_file_assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_employee_file_assignments_loan` (`loan_id`),
  ADD KEY `idx_employee_file_assignments_employee` (`employee_id`);

--
-- Indexes for table `employee_file_notes`
--
ALTER TABLE `employee_file_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_employee_file_notes_loan` (`loan_id`),
  ADD KEY `idx_employee_file_notes_employee` (`employee_id`);

--
-- Indexes for table `employee_password_resets`
--
ALTER TABLE `employee_password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_employee_password_resets_token` (`reset_token_hash`),
  ADD KEY `idx_employee_password_resets_employee` (`employee_id`),
  ADD KEY `idx_employee_password_resets_expires` (`otp_expires_at`);

--
-- Indexes for table `employee_portal_leads`
--
ALTER TABLE `employee_portal_leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_employee_portal_leads_employee` (`employee_id`),
  ADD KEY `idx_employee_portal_leads_status` (`lead_status`);

--
-- Indexes for table `employee_presence_sessions`
--
ALTER TABLE `employee_presence_sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_employee_presence_sessions_token` (`session_token`),
  ADD KEY `idx_employee_presence_employee` (`employee_id`),
  ADD KEY `idx_employee_presence_active` (`is_active`),
  ADD KEY `idx_employee_presence_started` (`started_at`);

--
-- Indexes for table `esign_audit_trail`
--
ALTER TABLE `esign_audit_trail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_id` (`document_id`);

--
-- Indexes for table `esign_documents`
--
ALTER TABLE `esign_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esign_logs`
--
ALTER TABLE `esign_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `esign_requests`
--
ALTER TABLE `esign_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_token_hash` (`token_hash`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_document_id` (`document_id`);

--
-- Indexes for table `esign_verification_logs`
--
ALTER TABLE `esign_verification_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_esign_verification_document` (`document_id`);

--
-- Indexes for table `group_loan`
--
ALTER TABLE `group_loan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_id` (`group_id`);

--
-- Indexes for table `guarantor`
--
ALTER TABLE `guarantor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `link_click`
--
ALTER TABLE `link_click`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_details`
--
ALTER TABLE `link_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_id` (`file_id`),
  ADD UNIQUE KEY `unique_access_token` (`access_token`),
  ADD KEY `idx_loans_assigned_employee` (`assigned_employee_id`);

--
-- Indexes for table `loan_applications`
--
ALTER TABLE `loan_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_fraud`
--
ALTER TABLE `loan_fraud`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_id` (`file_id`),
  ADD UNIQUE KEY `unique_access_token` (`access_token`);

--
-- Indexes for table `loan_live_photos`
--
ALTER TABLE `loan_live_photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_loan_live_photo` (`loan_id`),
  ADD KEY `idx_access_token_live_photo` (`access_token`);

--
-- Indexes for table `loan_status`
--
ALTER TABLE `loan_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahila_group_loan`
--
ALTER TABLE `mahila_group_loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_logs`
--
ALTER TABLE `mail_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_codes`
--
ALTER TABLE `otp_codes`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `partner_click`
--
ALTER TABLE `partner_click`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portal_employees`
--
ALTER TABLE `portal_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `service_balances`
--
ALTER TABLE `service_balances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_key` (`service_key`);

--
-- Indexes for table `service_transactions`
--
ALTER TABLE `service_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_key` (`service_key`),
  ADD KEY `reference_type` (`reference_type`,`reference_id`),
  ADD KEY `fk_service_transactions_balance` (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aadhar_details`
--
ALTER TABLE `aadhar_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apidata`
--
ALTER TABLE `apidata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `api_charges`
--
ALTER TABLE `api_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `api_click`
--
ALTER TABLE `api_click`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `api_hit_logs`
--
ALTER TABLE `api_hit_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_auth_tokens`
--
ALTER TABLE `app_auth_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_otp_verifications`
--
ALTER TABLE `app_otp_verifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cibil_data`
--
ALTER TABLE `cibil_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_dedupe_logs`
--
ALTER TABLE `cl_dedupe_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_leads`
--
ALTER TABLE `cl_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_mobile_otp`
--
ALTER TABLE `cl_mobile_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_offers`
--
ALTER TABLE `cl_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_offer_clicks`
--
ALTER TABLE `cl_offer_clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cl_offer_logs`
--
ALTER TABLE `cl_offer_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communication_logs`
--
ALTER TABLE `communication_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_leads`
--
ALTER TABLE `crm_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_meta_settings`
--
ALTER TABLE `crm_meta_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_access_tokens`
--
ALTER TABLE `employee_access_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_chat_messages`
--
ALTER TABLE `employee_chat_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_file_activity`
--
ALTER TABLE `employee_file_activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_file_assignments`
--
ALTER TABLE `employee_file_assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_file_notes`
--
ALTER TABLE `employee_file_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_password_resets`
--
ALTER TABLE `employee_password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_portal_leads`
--
ALTER TABLE `employee_portal_leads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_presence_sessions`
--
ALTER TABLE `employee_presence_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `esign_audit_trail`
--
ALTER TABLE `esign_audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `esign_documents`
--
ALTER TABLE `esign_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `esign_logs`
--
ALTER TABLE `esign_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `esign_requests`
--
ALTER TABLE `esign_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `esign_verification_logs`
--
ALTER TABLE `esign_verification_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_loan`
--
ALTER TABLE `group_loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guarantor`
--
ALTER TABLE `guarantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_click`
--
ALTER TABLE `link_click`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_details`
--
ALTER TABLE `link_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loan_applications`
--
ALTER TABLE `loan_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_fraud`
--
ALTER TABLE `loan_fraud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_live_photos`
--
ALTER TABLE `loan_live_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `loan_status`
--
ALTER TABLE `loan_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahila_group_loan`
--
ALTER TABLE `mahila_group_loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_logs`
--
ALTER TABLE `mail_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_click`
--
ALTER TABLE `partner_click`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portal_employees`
--
ALTER TABLE `portal_employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_balances`
--
ALTER TABLE `service_balances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_transactions`
--
ALTER TABLE `service_transactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app_auth_tokens`
--
ALTER TABLE `app_auth_tokens`
  ADD CONSTRAINT `fk_user_tokens` FOREIGN KEY (`user_id`) REFERENCES `app_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cl_offers`
--
ALTER TABLE `cl_offers`
  ADD CONSTRAINT `fk_offerlog` FOREIGN KEY (`offer_log_id`) REFERENCES `cl_offer_logs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `esign_audit_trail`
--
ALTER TABLE `esign_audit_trail`
  ADD CONSTRAINT `esign_audit_trail_ibfk_1` FOREIGN KEY (`document_id`) REFERENCES `esign_documents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `esign_verification_logs`
--
ALTER TABLE `esign_verification_logs`
  ADD CONSTRAINT `fk_esign_verification_document` FOREIGN KEY (`document_id`) REFERENCES `esign_documents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guarantor`
--
ALTER TABLE `guarantor`
  ADD CONSTRAINT `guarantor_ibfk_1` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`);

--
-- Constraints for table `loan_live_photos`
--
ALTER TABLE `loan_live_photos`
  ADD CONSTRAINT `fk_loan_live_photo_loan` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_transactions`
--
ALTER TABLE `service_transactions`
  ADD CONSTRAINT `fk_service_transactions_balance` FOREIGN KEY (`service_id`) REFERENCES `service_balances` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
