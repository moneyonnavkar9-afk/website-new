# Loan Application API - Fetch Data Documentation

## Overview
This documentation covers the newly added `GET` method support for the loan application API endpoints. This allows the mobile application to fetch the saved state of a user's application at any step by providing the `access_token`.

**Base URL:** `https://your-domain.com/api/app_loan/`
**Response Format:** JSON

---

## 1. Fetch Aadhaar KYC Details
**Endpoint:** `aadhar_kyc.php`
**Method:** `GET`

**Parameters:**
- `access_token` (string, required)

**Success Response:**
```json
{
    "success": true,
    "message": "Aadhaar details fetched.",
    "data": {
        "aadhar_number": "123456789012",
        "name": "John Doe",
        "address": "123 St, City",
        "dob": "1990-01-01",
        "gender": "Male",
        "father_name": "Father Name",
        "aadhar_front_image": "https://...",
        "aadhar_back_image": "https://...",
        "photo_url": "https://...", // Aadhaar Photo or Selfie
        "is_verified": true,
        "step": 2
    }
}
```

---

## 2. Fetch PAN Details
**Endpoint:** `verify_pan.php`
**Method:** `GET`

**Parameters:**
- `access_token` (string, required)

**Success Response:**
```json
{
    "success": true,
    "message": "PAN details fetched.",
    "data": {
        "pan_number": "ABCDE1234F",
        "pan_image": "https://...",
        "additional_doc": "https://...",
        "step": 3
    }
}
```

---

## 3. Fetch Personal Details
**Endpoint:** `save_personal_details.php`
**Method:** `GET`

**Parameters:**
- `access_token` (string, required)

**Success Response:**
```json
{
    "success": true,
    "message": "Personal details fetched.",
    "data": {
        "name": "John Doe",
        "dob": "1990-01-01",
        "gender": "Male",
        "father_name": "Father Name",
        "address": "123 St, City",
        "paddress": "Permanent Address",
        "pincode": "110001",
        "city": "Delhi",
        "district": "New Delhi",
        "photo_url": "https://...",
        "step": 4
    }
}
```

---

## 4. Fetch Family Details
**Endpoint:** `save_family_details.php`
**Method:** `GET`

**Parameters:**
- `access_token` (string, required)

**Success Response:**
```json
{
    "success": true,
    "message": "Family details fetched.",
    "data": {
        "mother_name": "Jane Doe",
        "guarantor1_name": "G1 Name",
        "guarantor1_mobile": "9876543210",
        "guarantor2_name": "G2 Name",
        "guarantor2_mobile": "9876543211",
        "marital_status": "single",
        "spouse_name": "",
        "grelation1": "friend",
        "grelation2": "brother",
        "step": 5
    }
}
```

---

## 5. Fetch Profession Details
**Endpoint:** `save_profession_details.php`
**Method:** `GET`

**Parameters:**
- `access_token` (string, required)

**Success Response:**
```json
{
    "success": true,
    "message": "Profession details fetched.",
    "data": {
        "profession": "Salaried",
        "company_name": "Tech Corp",
        "monthly_in_hand": 50000,
        "salary_slip": "https://...",
        "electricity_bill": "https://...",
        "blank_cheque": "https://...",
        "blank_cheque2": "https://...",
        "gst_no": "",
        "office_name": "Tech Park",
        "organization": "Private Ltd",
        "business_type": "",
        "business_vintage": "",
        "company_itr": "",
        "step": 6
    }
}
```

---

## 6. Fetch Bank Details
**Endpoint:** `save_bank_details.php`
**Method:** `GET`

**Parameters:**
- `access_token` (string, required)

**Success Response:**
```json
{
    "success": true,
    "message": "Bank details fetched.",
    "data": {
        "account_holder_name": "John Doe",
        "account_number": "1234567890",
        "ifsc_code": "BANK0000123",
        "bank_name": "My Bank",
        "branch_name": "Main Branch",
        "bank_statement_path": "https://...",
        "alternate_mobile": "9876543212",
        "selected_loan_amount": 500000,
        "step": 6
    }
}
```
