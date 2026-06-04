<?php
$page_title = 'Cyber Fraud Recovery Report | Vardhman Finance';
$meta_desc = 'Report unauthorized or fraudulent transactions securely. Our cyber security team will investigate your claim.';
$meta_keywords = 'Cyber Fraud, Report Fraud, Unauthorized Transactions, Vardhman Finance Security';
$extra_styles = '
<style>
    .fraud-hero {
        background: linear-gradient(rgba(11, 30, 59, 0.95), rgba(11, 30, 59, 0.9)), url("assets/pattern.png");
        padding: 140px 0 80px;
        color: white;
        text-align: center;
        background-size: cover;
        background-position: center;
    }
    .form-container {
        background: #ffffff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(11, 30, 59, 0.1);
        max-width: 850px;
        margin: -80px auto 60px;
        position: relative;
        z-index: 10;
        border: 1px solid #f1f5f9;
    }
    .step-indicator {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
        position: relative;
        padding: 0 20px;
    }
    .step-indicator::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 30px;
        right: 30px;
        height: 3px;
        background: #e2e8f0;
        z-index: 1;
        transform: translateY(-50%);
        border-radius: 2px;
    }
    .step {
        width: 45px;
        height: 45px;
        background: #f8fafc;
        border: 2px solid #e2e8f0;
        color: #64748b;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.1rem;
        position: relative;
        z-index: 2;
        transition: all 0.4s ease;
    }
    .step.active {
        background: var(--primary-dark);
        border-color: var(--primary-dark);
        color: white;
        box-shadow: 0 0 0 6px rgba(11, 30, 59, 0.15);
        transform: scale(1.1);
    }
    .step.completed {
        background: var(--accent-gold);
        border-color: var(--accent-gold);
        color: white;
    }
    .form-step {
        display: none;
        animation: fadeIn 0.5s ease;
    }
    .form-step.active {
        display: block;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .form-label {
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
        font-size: 0.95rem;
    }
    .form-control, .form-select {
        border-radius: 10px;
        padding: 14px 18px;
        border: 2px solid #e2e8f0;
        background-color: #f8fafc;
        transition: all 0.3s ease;
        font-size: 1rem;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--accent-gold);
        background-color: #ffffff;
        box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.15);
        outline: none;
    }
    .input-group-text {
        border-radius: 10px 0 0 10px;
        border: 2px solid #e2e8f0;
        border-right: none;
        background-color: #f1f5f9;
        font-weight: 600;
        color: #64748b;
    }
    .input-group .form-control {
        border-radius: 0 10px 10px 0;
    }
    .btn-action {
        background: linear-gradient(135deg, var(--primary-dark), #1e3a8a);
        color: white;
        border: none;
        padding: 14px 35px;
        border-radius: 10px;
        font-weight: 700;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(11, 30, 59, 0.2);
    }
    .btn-action:hover {
        background: linear-gradient(135deg, var(--accent-gold), #fbbf24);
        color: var(--primary-dark);
        box-shadow: 0 6px 20px rgba(212, 175, 55, 0.3);
        transform: translateY(-2px);
    }
    .btn-secondary-action {
        background: #f1f5f9;
        color: #475569;
        border: 2px solid #e2e8f0;
        padding: 12px 30px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-secondary-action:hover {
        background: #e2e8f0;
        color: var(--primary-dark);
    }
    .form-step-title {
        color: var(--primary-dark);
        font-weight: 800;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px dashed #e2e8f0;
        font-size: 1.5rem;
    }
</style>
';

require_once 'header.php';
?>

<section class="fraud-hero">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3"><i class="fas fa-shield-alt text-warning"></i> Cyber Fraud Reporting</h1>
        <p class="lead mb-0 mx-auto" style="max-width: 700px;">If you have experienced unauthorized transactions or suspect cyber fraud related to your account, please submit the details below. Our security team will investigate immediately.</p>
    </div>
</section>

<section style="background: #f8fafc; padding-bottom: 80px;">
    <div class="container">
        <div class="form-container">
            <div class="step-indicator">
                <div class="step active" id="indicator-1">1</div>
                <div class="step" id="indicator-2">2</div>
                <div class="step" id="indicator-3">3</div>
            </div>

            <form id="fraudForm" enctype="multipart/form-data">
                <!-- Step 1: Verification -->
                <div class="form-step active" id="step-1">
                    <h4 class="form-step-title"><i class="fas fa-user-check text-warning me-2"></i> Step 1: Contact Verification</h4>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Mobile Number</label>
                            <div class="input-group">
                                <span class="input-group-text">+91</span>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="10-digit mobile number" required pattern="[0-9]{10}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn-action px-5" id="btnSendOtp">Send OTPs <i class="fas fa-paper-plane ms-2"></i></button>
                    </div>

                    <div id="otpSection" style="display: none; background: #fff8eb; border: 1px solid #fde68a; padding: 30px; border-radius: 12px; margin-top: 30px; box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);">
                        <h6 class="mb-4 text-center" style="color: #b45309; font-weight: 700;"><i class="fas fa-lock me-2"></i> Enter Verification Codes</h6>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label text-sm text-center w-100">Mobile OTP</label>
                                <input type="text" class="form-control text-center fs-4 letter-spacing-2" id="mobileOtp" placeholder="• • • • • •" style="letter-spacing: 5px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-sm text-center w-100">Email OTP</label>
                                <input type="text" class="form-control text-center fs-4 letter-spacing-2" id="emailOtp" placeholder="• • • • • •" style="letter-spacing: 5px;">
                            </div>
                        </div>
                        <div class="text-center mt-4 pt-2">
                            <button type="button" class="btn-action" style="background: var(--primary-dark); width: auto; min-width: 200px;" id="btnVerifyOtp">Verify & Continue <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Fraud Details -->
                <div class="form-step" id="step-2">
                    <h4 class="form-step-title"><i class="fas fa-exclamation-triangle text-danger me-2"></i> Step 2: Fraud Details</h4>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="form-label">Date of Incident</label>
                            <input type="date" class="form-control" id="fraudDate" name="fraud_date" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Mode of Fraud</label>
                            <select class="form-select" id="fraudMode" name="fraud_mode" required>
                                <option value="">Select Option...</option>
                                <option value="UPI">UPI Transaction</option>
                                <option value="Credit/Debit Card">Credit/Debit Card</option>
                                <option value="Net Banking">Net Banking</option>
                                <option value="Phishing Link">Phishing Link / SMS</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Total Number of Unauthorized Transactions</label>
                        <input type="number" class="form-control" id="transactionCount" name="transaction_count" min="1" required>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn-secondary-action" onclick="prevStep(1)">Back</button>
                        <button type="button" class="btn-action" onclick="nextStep(3)">Continue</button>
                    </div>
                </div>

                <!-- Step 3: Evidence -->
                <div class="form-step" id="step-3">
                    <h4 class="form-step-title"><i class="fas fa-file-invoice me-2 text-info"></i> Step 3: Evidence & Notes</h4>

                    <div class="mb-4">
                        <label class="form-label">Transaction Numbers / UTRs</label>
                        <textarea class="form-control" id="transactionNumbers" name="transaction_numbers" rows="2" placeholder="E.g., UTR123456789, TXN987654321" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Detailed Note on Incident</label>
                        <textarea class="form-control" id="extraDetails" name="extra_details" rows="4" placeholder="Please describe exactly what happened in as much detail as possible..." required></textarea>
                    </div>

                    <div class="mb-4 p-4" style="background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 12px; text-align: center;">
                        <i class="fas fa-cloud-upload-alt text-muted mb-3" style="font-size: 2rem;"></i><br>
                        <label class="form-label d-block mb-2">Upload Screenshot / Evidence</label>
                        <input class="form-control mx-auto" style="max-width: 400px; background: white;" type="file" id="screenshot" name="screenshot" accept="image/png, image/jpeg, application/pdf" required>
                        <div class="form-text mt-2 text-muted">Max file size: 5MB (JPG, PNG, PDF only)</div>
                    </div>

                    <div id="submitError" class="alert alert-danger" style="display:none;"></div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn-secondary-action" onclick="prevStep(2)">Back</button>
                        <button type="submit" class="btn-action" id="btnSubmitForm">Submit Report</button>
                    </div>
                </div>
            </form>

            <div id="successMessage" style="display: none; text-align: center; padding: 40px 20px;">
                <i class="fas fa-check-circle text-success" style="font-size: 4rem; margin-bottom: 20px;"></i>
                <h3 style="color: var(--primary-dark);">Report Submitted Successfully</h3>
                <p class="text-muted">Your cyber fraud report has been securely transmitted to our investigation team. You will receive an email confirmation shortly.</p>
                <a href="index.php" class="btn-action mt-3 d-inline-block text-decoration-none">Return to Home</a>
            </div>

        </div>
    </div>
</section>

<script>
    // Navigation logic
    function nextStep(step) {
        // Basic HTML5 validation before proceeding
        let form = document.getElementById('fraudForm');
        let currentStepEl = document.querySelector('.form-step.active');
        let inputs = currentStepEl.querySelectorAll('input, select, textarea');
        let isValid = true;

        inputs.forEach(input => {
            if(!input.checkValidity()) {
                input.reportValidity();
                isValid = false;
            }
        });

        if(!isValid) return;

        document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
        document.getElementById('step-' + step).classList.add('active');

        document.getElementById('indicator-' + (step-1)).classList.remove('active');
        document.getElementById('indicator-' + (step-1)).classList.add('completed');
        document.getElementById('indicator-' + step).classList.add('active');
    }

    function prevStep(step) {
        document.querySelectorAll('.form-step').forEach(el => el.classList.remove('active'));
        document.getElementById('step-' + step).classList.add('active');

        document.getElementById('indicator-' + (step+1)).classList.remove('active');
        document.getElementById('indicator-' + step).classList.remove('completed');
        document.getElementById('indicator-' + step).classList.add('active');
    }

    // OTP Logic (Simulated for Frontend demo before tying into actual API)
    document.getElementById('btnSendOtp').addEventListener('click', function() {
        let mobile = document.getElementById('mobile').value;
        let email = document.getElementById('email').value;

        if(!mobile || !email || mobile.length < 10) {
            alert("Please enter a valid mobile number and email address.");
            return;
        }

        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        this.disabled = true;

        // AJAX to send OTPs
        let formData = new FormData();
        formData.append('action', 'send_otp');
        formData.append('mobile', mobile);
        formData.append('email', email);

        fetch('api/submit_fraud_report.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.status === 'success') {
                document.getElementById('btnSendOtp').style.display = 'none';
                document.getElementById('otpSection').style.display = 'block';
                // Remove readonly if any
                document.getElementById('mobile').readOnly = true;
                document.getElementById('email').readOnly = true;
            } else {
                alert(data.message || "Failed to send OTP.");
                document.getElementById('btnSendOtp').innerHTML = 'Send OTPs';
                document.getElementById('btnSendOtp').disabled = false;
            }
        })
        .catch(err => {
            alert("Network error. Please try again.");
            document.getElementById('btnSendOtp').innerHTML = 'Send OTPs';
            document.getElementById('btnSendOtp').disabled = false;
        });
    });

    document.getElementById('btnVerifyOtp').addEventListener('click', function() {
        let mobileOtp = document.getElementById('mobileOtp').value;
        let emailOtp = document.getElementById('emailOtp').value;

        if(!mobileOtp || !emailOtp) {
            alert("Please enter both OTPs.");
            return;
        }

        this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verifying...';
        this.disabled = true;

        let formData = new FormData();
        formData.append('action', 'verify_otp');
        formData.append('mobile_otp', mobileOtp);
        formData.append('email_otp', emailOtp);

        fetch('api/submit_fraud_report.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.status === 'success') {
                nextStep(2);
            } else {
                alert(data.message || "Invalid OTPs.");
                this.innerHTML = 'Verify & Continue';
                this.disabled = false;
            }
        })
        .catch(err => {
            alert("Network error.");
            this.innerHTML = 'Verify & Continue';
            this.disabled = false;
        });
    });

    // Form Submission
    document.getElementById('fraudForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let submitBtn = document.getElementById('btnSubmitForm');
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        submitBtn.disabled = true;
        document.getElementById('submitError').style.display = 'none';

        let formData = new FormData(this);
        formData.append('action', 'submit_report');

        fetch('api/submit_fraud_report.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if(data.status === 'success') {
                document.getElementById('fraudForm').style.display = 'none';
                document.getElementById('successMessage').style.display = 'block';
                document.querySelector('.step-indicator').style.display = 'none';
            } else {
                document.getElementById('submitError').innerText = data.message || "Submission failed.";
                document.getElementById('submitError').style.display = 'block';
                submitBtn.innerHTML = 'Submit Report';
                submitBtn.disabled = false;
            }
        })
        .catch(err => {
            document.getElementById('submitError').innerText = "Network error. Please try again.";
            document.getElementById('submitError').style.display = 'block';
            submitBtn.innerHTML = 'Submit Report';
            submitBtn.disabled = false;
        });
    });
</script>

<?php require_once 'footer.php'; ?>
