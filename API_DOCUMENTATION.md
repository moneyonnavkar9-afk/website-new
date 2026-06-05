# Loan Application API Documentation

## Overview
This documentation covers the modular API endpoints for the loan application process. All endpoints are located in `api/app_loan/`.

**Base URL:** `https://your-domain.com/api/app_loan/`
**Response Format:** JSON
**Common Success Response:**
```json
{
    "success": true,
    "message": "Operation successful.",
    "data": { ... }
}
```
**Common Error Response:**
```json
{
    "success": false,
    "message": "Error description."
}
```

## Authentication
Most endpoints require an `access_token` parameter, which is obtained after verifying the email OTP (Step 2). This token tracks the loan application session.

---

## 1. Initiate Loan (Email OTP)
**Endpoint:** `initiate.php`
**Method:** `POST`

Sends an OTP to the user's email to start the application.

**Parameters:**
- `email` (string, required): User's email address.
- `mobile` (string, required): User's 10-digit mobile number.
- `loan_type` (string, optional): Default 'instant loan'.

**Success Data:** `null` (Message indicates OTP sent)

---

## 2. Verify Email OTP
**Endpoint:** `verify_email_otp.php`
**Method:** `POST`

Verifies the email OTP and creates (or resumes) a loan application.

**Parameters:**
- `email` (string, required)
- `mobile` (string, required)
- `otp` (string, required)
- `loan_type` (string, optional)

**Success Data:**
```json
{
    "access_token": "abc123xyz",  // SAVE THIS TOKEN
    "step": 1,
    "soft_approval_amount": 120000.00,
    "applicant_name": "John Doe", // If resuming
    "file_id": "VRDMN...",
    "data": { ...full_loan_object... }
}
```

---

## 2.5. Resume Loan (Fetch All Data)
**Endpoint:** `resume_loan.php`
**Method:** `GET`

Returns ALL loan details (standard + extended) to allow the mobile app to resume/pre-fill the application form.

**Parameters:**
- `access_token` (string, required)

**Success Data:**
```json
{
    "id": 123,
    "file_id": "DL-VARD/00123",
    "step": 3,
    "full_name": "John Doe",
    "email": "john@example.com",
    "mobile": "9988776655",
    "salary_credit_mode": "RTGS",
    "house_type": "owned",
    ... // Contains all columns from 'loans' and 'loan_extended_details' tables
}
```

---

## 3. Verify PAN
**Endpoint:** `verify_pan.php`
**Method:** `POST`

Validates PAN format and optionally saves PAN images. (Does not perform external link check).

**Parameters:**
- `access_token` (string, required)
- `pan_number` (string, required): Format `ABCDE1234F`
- `pan_image` (string/base64, optional): PAN Card image.
- `additional_doc` (string/base64, optional): Additional ID doc.
- `map` (string, optional): Lat,Long coordinates.

**Success Data:**
```json
{
    "step": 3,
    "personal_details": { ... } // Pre-filled details if available
}
```

---

## 4. Aadhaar KYC (Unified)
**Endpoint:** `aadhar_kyc.php`
**Method:** `POST`

Handles the entire Aadhaar verification process. Use the `action` parameter to switch modes.

### Action: Initiate OTP
**Parameters:**
- `access_token` (string, required)
- `action` (string, required): `initiate_otp`
- `aadhaar_number` (string, required)

**Success Data:**
```json
{
    "ref_id": "xxxx-xxxx-xxxx" // Required for next step
}
```

### Action: Verify OTP
**Parameters:**
- `access_token` (string, required)
- `action` (string, required): `verify_otp`
- `aadhaar_number` (string, required)
- `otp` (string, required)
- `ref_id` (string, required): From initiate step.

**Success Data:**
```json
{
    "step": 2,
    "name": "Name from Aadhaar",
    "address": "...",
    "photo_url": "..."
}
```

### Action: Manual Verify (with Face Match)
**Parameters:**
- `access_token` (string, required)
- `action` (string, required): `manual_verify`
- `aadhaar_number`, `name`, `father_name`, `dob`, `gender`, `address`, `pincode`, `city`, `district`, `state` (all required strings)
- `front_image` (file/base64, required)
- `back_image` (file/base64, required)
- `selfie_image` (file/base64, required): Used for Face Match.

**Note:** For manual verification, `aadhar_verification` flag is set to `0` (Unverified) internally. The `selfie_image` is stored as the profile picture (`dp`).

**Success Data:**
```json
{
    "step": 2,
    "is_verified": true
}
```

---

## 5. Save Personal Details
**Endpoint:** `save_personal_details.php`
**Method:** `POST`

Saves personal info and performs face matching if not already done.

**Parameters:**
- `access_token` (string, required)
- `name`, `dob`, `gender`, `father_name`, `address`, `pincode`, `city`, `district` (required)
- `selfie_image` (base64, required): For liveness/face match.
- `house_image` (base64, optional)
- `latitude`, `longitude` (optional)

**Success Data:** `{"step": 4}`

---

## 6. Save Family Details
**Endpoint:** `save_family_details.php`
**Method:** `POST`

**Parameters:**
- `access_token` (string, required)
- `mother_name` (required)
- `guarantor1_name`, `guarantor1_mobile` (required)
- `guarantor2_name`, `guarantor2_mobile` (optional)
- `marital_status`, `spouse_name` (optional)

**Success Data:** `{"step": 5}`

---

## 7. Save Profession Details & Get Offer
**Endpoint:** `save_profession_details.php`
**Method:** `POST`

Submits professional details and **generates the final loan offer**.

**Parameters:**
- `access_token` (string, required)
- `profession` (string, required): 'Salaried' or 'Self-Employed'
- `company_name`, `monthly_in_hand` (required)
- `salary_slip` (base64, optional/conditional)
- `electricity_bill` (base64, optional)
- `blank_cheque` (base64, optional)

**Success Data (The Offer):**
```json
{
    "status": "approved",
    "offer": {
        "approved_amount": 500000,
        "roi": 12.5,
        "tenure_months": 60,
        "min_loan_amount": 50000,
        "max_loan_amount": 500000,
        "min_tenure": 12,
        "max_tenure": 120
    }
}
```

---

## 8. Save Bank Details
**Endpoint:** `save_bank_details.php`
**Method:** `POST`

**Parameters:**
- `access_token` (string, required)
- `account_holder_name`, `account_number`, `ifsc_code`, `bank_name`, `branch_name` (required)
- `bank_statement` (base64 PDF, required)

**Success Data:** `{"step": 6}`

---

## 9. Accept Offer
**Endpoint:** `accept_offer.php`
**Method:** `POST`

Finalizes the loan with the user's chosen terms.

**Parameters:**
- `access_token` (string, required)
- `loan_amount` (float, required): Must be <= approved amount.
- `tenure` (int, required): In months.

**Success Data:**
```json
{
    "step": 7,
    "status": "finalized",
    "new_access_token": "new_token_xyz", // Token rotates here
    "emi": 12500.00
}
```

---

## Helper: Service Check
**Endpoint:** `service_check.php`
**Method:** `POST`

Checks or deducts service balance (e.g., for video verification).

**Parameters:**
- `action`: `check` or `deduct`
- `service_key`: e.g., `video_verification`
