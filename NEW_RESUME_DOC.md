# New Loan Application Flow & Resume API Documentation

## Overview
This document outlines the updated loan application flow and the new `resume_loan` API. The flow has been restructured to prioritize Employment details, followed by Family/Address, and finally Bank Details.

### New API: Resume Loan
**Endpoint:** `GET /api/app_loan/resume_loan.php`
**Parameters:** `access_token` (string, required)
**Response:** JSON object containing all fields from `loans` and `loan_extended_details` tables.

**Usage:**
Call this API when the user opens the app to check the status (`step`) and pre-fill all forms.

---

### Step-by-Step Flow & API Mapping

#### Step 1: Login & Aadhaar KYC (Existing)
*   **APIs:** `initiate.php`, `verify_email_otp.php`, `aadhar_kyc.php`
*   **Outcome:** User is verified, `access_token` generated, Aadhaar address saved.
*   **Step Value:** 2

#### Step 2: Employment Details (New Step)
*   **API:** `POST /api/app_loan/save_profession_details.php`
*   **Step Value:** 3
*   **Inputs (Salaried):**
    *   `profession`: "Salaried"
    *   `organization_name`: String
    *   `organization_type`: String (Govt, LLP, Pvt Ltd, etc.)
    *   `monthly_in_hand`: Numeric
    *   `salary_credit_mode`: String (RTGS, IMPS, CHEQUE, UPI, CASH)
    *   `salary_slip_1`: Base64 Image (Compulsory)
    *   `salary_slip_2`: Base64 Image (Optional)
    *   `salary_slip_3`: Base64 Image (Optional)
    *   `icard_image`: Base64 Image
*   **Inputs (Self-Employed):**
    *   `profession`: "Self-Employed"
    *   `firm_type`: String (Proprietorship, Partnership, LLP, Pvt Ltd, etc.)
    *   `business_name`: String
    *   `business_vintage`: String
    *   `business_turnover`: String
    *   `net_monthly_income`: Numeric
    *   `business_proof_type`: String (GST, MSME, GUMASTA, BRN, UDHYOG AADHAR)
    *   `business_proof_image`: Base64 Image (Compulsory)
    *   `company_itr`: Base64 Image (2 Years - Compulsory)
    *   `business_image`: Base64 Image
    *   *If Pvt Ltd/Private Limited:*
        *   `incorporation_cert`: Base64 Image
        *   `project_report`: Base64 Image (Optional)

#### Step 3: Family & Address Details (New Step)
*   **API:** `POST /api/app_loan/save_family_details.php`
*   **Step Value:** 4
*   **Inputs:**
    *   `mother_name`: String
    *   `father_name`: String
    *   `marital_status`: "yes" / "no"
    *   `spouse_name`: String (if marital_status is yes)
    *   `house_type`: "rent" / "parental" / "owned"
    *   `rent_agreement`: Base64 Image (Compulsory if house_type is rent)
    *   `electricity_bill`: Base64 Image (if house_type is owned)
    *   `guarantor1_name`: String
    *   `guarantor1_relation`: String
    *   `guarantor1_mobile`: String
    *   `guarantor2_name`: String
    *   `guarantor2_relation`: String
    *   `guarantor2_mobile`: String
    *   `current_address`: String
    *   `is_same_address`: Boolean (true = copy permanent address, false = use current_address)

#### Step 4: Bank Details (New Step)
*   **API:** `POST /api/app_loan/save_bank_details.php`
*   **Step Value:** 5
*   **Inputs:**
    *   `account_holder_name`: String
    *   `account_number`: String
    *   `ifsc_code`: String
    *   `bank_name`: String
    *   `branch_name`: String
    *   `bank_statement`: Base64 PDF/Image
    *   `statement_password`: String (Optional)
    *   `alternate_mobile`: String

### Key Notes for Mobile Devs
1.  **Image Uploads:** Send images as Base64 strings. The API handles decoding and storage.
2.  **Permanent Address:** In Step 3, the "Permanent Address" is fetched from the database (saved during Aadhaar KYC). Display it as read-only.
3.  **Step Tracking:** The `resume_loan` API returns a `step` integer.
    *   `step < 2`: Incomplete KYC.
    *   `step = 2`: KYC Done. Show Employment Form.
    *   `step = 3`: Employment Done. Show Family/Address Form.
    *   `step = 4`: Family Done. Show Bank Form.
    *   `step >= 5`: Application Submitted.
