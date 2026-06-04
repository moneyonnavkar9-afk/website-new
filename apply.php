<?php
$page_title = 'Apply for Loan | Vardhman Private Funding';
$meta_desc = 'Start your loan application with Vardhman Finance. fast processing, minimal documentation, and secure private funding.';
include 'header.php';
?>

<section class="section-padding" style="background: var(--light-bg); padding-top: 120px;">
    <div class="container">
        <div class="section-header fade-in">
            <h2>Start Your Application</h2>
            <p>Complete the form below and our credit desk will contact you shortly.</p>
        </div>
        <div class="contact-grid" style="justify-content: center;">
            <form class="contact-form fade-in" style="max-width: 600px; width: 100%; margin: 0 auto;" onsubmit="alert('Thank you! Your application has been received. Our credit desk will contact you shortly.'); return false;">
                <label for="name">Full Name</label>
                <input id="name" type="text" placeholder="Enter your name" required>

                <label for="phone">Phone Number</label>
                <input id="phone" type="tel" placeholder="Mobile number" required>

                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="Enter your email" required>

                <label for="loanType">Loan Type</label>
                <select id="loanType">
                    <option value="" disabled selected>Select Loan Type</option>
                    <option>Personal Loan</option>
                    <option>Business Loan</option>
                    <option>Home Loan</option>
                    <option>Car Loan</option>
                    <option>Overdraft/Cash Credit</option>
                    <option>Medical Loan</option>
                    <option>Loan Against Securities</option>
                    <option>Professional Loan</option>
                    <option>Gold Loan</option>
                    <option>Machinery Loan</option>
                    <option>Export Finance</option>
                    <option>Startup Finance</option>
                    <option>Secured Business Loan</option>
                    <option>Lease Rental Discounting</option>
                    <option>Bridge Finance</option>
                    <option>Private Client Lending</option>
                    <option>Structured Debt</option>
                    <option>Pre-IPO Finance</option>
                </select>

                <label for="amount">Required Amount</label>
                <select id="amount">
                    <option>₹1L – ₹10L</option>
                    <option>₹10L – ₹25L</option>
                    <option>₹25L – ₹50L</option>
                    <option>₹50L – ₹1Cr</option>
                    <option>₹1Cr – ₹5Cr</option>
                    <option>₹5Cr – ₹25Cr</option>
                    <option>₹25Cr+</option>
                </select>

                <label for="message">Additional Details (Optional)</label>
                <textarea id="message" placeholder="Briefly describe your funding requirement..."></textarea>

                <button type="submit" class="btn-hero btn-gold" style="width:100%;">Submit Application</button>

                <p style="margin-top: 15px; font-size: 0.85rem; color: #666; text-align: center;">
                    <i class="fas fa-lock"></i> Your data is secure and will only be used for loan processing.
                </p>
                <div style="margin-top: 15px; background: rgba(197, 160, 89, 0.1); border-left: 3px solid var(--accent-gold); padding: 10px; border-radius: 4px;">
                    <p style="margin: 0; font-size: 0.85rem; color: var(--primary-dark); font-weight: 600;">
                        <i class="fas fa-info-circle" style="color: var(--accent-gold);"></i> Note: Private Funding & Unsecured Cheque Basis funding Service Charge Advance 3% to 6%
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
