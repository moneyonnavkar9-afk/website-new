<?php
$page_title = 'Instant Private Funding | Urgent Business Loans India | Vardhman Finance';
$meta_desc = 'Get Instant Private Funding for business and personal needs. Fast approval P2P loans, bad credit okay, urgent cash within 24 hours. Secure & Confidential.';
$meta_keywords = 'Private Business Loan India, Urgent Cash Loan, Unsecured Private Funding, P2P Lending India, Bad Credit Loan, Check based loan, Instant Finance Hyderabad';
$extra_styles = '
<style>
    .funding-hero {
        background: linear-gradient(135deg, var(--primary-dark), #0f2c52);
        padding: 160px 0 100px;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .funding-hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("assets/pattern.png");
        opacity: 0.05;
    }
    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }
    .section-title h2 {
        font-size: 2.5rem;
        color: var(--primary-dark);
        margin-bottom: 15px;
    }
    .section-title p {
        color: var(--text-gray);
        max-width: 700px;
        margin: 0 auto;
        font-size: 1.1rem;
    }
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }
    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s;
        border: 1px solid #eee;
    }
    .feature-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-gold);
    }
    .feature-icon {
        width: 60px;
        height: 60px;
        background: rgba(197, 160, 89, 0.1);
        color: var(--accent-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-radius: 10px;
        overflow: hidden;
    }
    .comparison-table th, .comparison-table td {
        padding: 20px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    .comparison-table th {
        background: var(--primary-dark);
        color: white;
        font-weight: 600;
    }
    .comparison-table tr:last-child td {
        border-bottom: none;
    }
    .step-process {
        position: relative;
        padding: 40px 0;
    }
    .step-item {
        display: flex;
        gap: 20px;
        margin-bottom: 40px;
        position: relative;
    }
    .step-number {
        font-size: 3rem;
        font-weight: 800;
        color: rgba(197, 160, 89, 0.2);
        line-height: 1;
    }
    .cta-banner {
        background: linear-gradient(90deg, var(--primary-dark), var(--primary-blue));
        padding: 60px;
        border-radius: 20px;
        color: white;
        text-align: center;
        margin-top: 60px;
    }

    /* FAQ Specific */
    .faq-grid {
        display: grid;
        gap: 20px;
        max-width: 900px;
        margin: 0 auto;
    }
    .faq-card {
        background: white;
        border: 1px solid #eee;
        border-radius: 10px;
        overflow: hidden;
    }
    .faq-header {
        padding: 20px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        color: var(--primary-dark);
        background: #fdfdfd;
    }
    .faq-body {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        color: #666;
        line-height: 1.6;
    }
    .faq-card.active .faq-body {
        padding: 20px;
        max-height: 300px;
        border-top: 1px solid #eee;
    }
    .faq-icon {
        transition: transform 0.3s;
    }
    .faq-card.active .faq-icon {
        transform: rotate(180deg);
    }
</style>
';
$base_path = './';
include 'header.php';
?>

<!-- 1. HERO SECTION -->
<div class="funding-hero">
    <div class="container fade-in" style="position: relative; z-index: 2;">
        <span class="pill" style="background: var(--accent-gold); color: var(--primary-dark); margin-bottom: 20px;">Fast-Track Capital</span>
        <h1 style="font-size: 3.5rem; margin-bottom: 20px; font-weight: 700;">Instant Private Funding</h1>
        <p style="font-size: 1.3rem; opacity: 0.95; max-width: 800px; margin: 0 auto 30px; line-height: 1.6;">
            Secure, confidential, and rapid liquidity solutions for businesses and individuals. <br>Funds disbursed within <strong>24-48 hours</strong>.
        </p>
        <div style="display: inline-block; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); padding: 10px 20px; border-radius: 50px; margin-bottom: 40px;">
            <span style="color: var(--accent-gold); font-weight: bold;"><i class="fas fa-exclamation-circle me-2"></i> Private Funding & Unsecured Cheque Basis funding Service Charge Advance 3% to 6%</span>
        </div>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="https://vardhmanfinance.com/partner/loans/instant/" class="btn-hero btn-gold" style="padding: 16px 45px; font-size: 1.1rem;">Apply for Funding</a>
            <a href="#process" class="btn-hero btn-outline" style="padding: 16px 45px; font-size: 1.1rem;">See Process</a>
        </div>
        <div style="margin-top: 40px; display: flex; justify-content: center; gap: 30px; font-size: 0.9rem; opacity: 0.8;">
            <span><i class="fas fa-check-circle" style="color: var(--emerald);"></i> No CIBIL Impact</span>
            <span><i class="fas fa-check-circle" style="color: var(--emerald);"></i> Minimum Documentation</span>
            <span><i class="fas fa-check-circle" style="color: var(--emerald);"></i> 100% Private</span>
        </div>
    </div>
</div>

<!-- 2. PHILOSOPHY SECTION -->
<section class="section-padding" style="background: white;">
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
            <div class="col-lg-6 fade-in" style="flex: 1; min-width: 300px;">
                <h2 style="font-size: 2.5rem; color: var(--primary-dark); margin-bottom: 25px; line-height: 1.2;">The Logic of <br><span style="color: var(--accent-gold);">Private Capital</span></h2>
                <p style="font-size: 1.1rem; color: #555; margin-bottom: 20px;">
                    In business, <strong>speed is currency</strong>. Traditional banks are designed for stability, not agility. When a supplier offers a cash discount, or a bridge is needed between receivables, waiting 15 days for a bank loan is an opportunity lost.
                </p>
                <p style="font-size: 1.1rem; color: #555; margin-bottom: 20px;">
                    Our <strong>Private Funding Program</strong> is designed to fill this void. We operate on a "Character & Capacity" underwriting model rather than a purely paper-based one.
                </p>
                <ul style="list-style: none; padding: 0; margin-top: 25px;">
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-weight: 600; color: var(--primary-dark);">
                        <i class="fas fa-check" style="background: var(--light-bg); padding: 8px; border-radius: 50%; color: var(--primary-blue);"></i>
                        Bypasses rigid banking protocols
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-weight: 600; color: var(--primary-dark);">
                        <i class="fas fa-check" style="background: var(--light-bg); padding: 8px; border-radius: 50%; color: var(--primary-blue);"></i>
                        Based on current cash flow, not past history
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px; font-weight: 600; color: var(--primary-dark);">
                        <i class="fas fa-check" style="background: var(--light-bg); padding: 8px; border-radius: 50%; color: var(--primary-blue);"></i>
                        Short-term tenures (3 - 18 months)
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 fade-in" style="flex: 1; min-width: 300px;">
                <div style="background: var(--light-bg); padding: 40px; border-radius: 20px; position: relative;">
                    <div style="position: absolute; top: -20px; right: -20px; background: var(--primary-blue); color: white; padding: 20px; border-radius: 15px; text-align: center; box-shadow: 0 10px 20px rgba(0,0,0,0.2);">
                        <span style="display: block; font-size: 2rem; font-weight: 800;">24h</span>
                        <span style="font-size: 0.9rem;">Disbursal</span>
                    </div>
                    <h3 style="margin-bottom: 20px; color: var(--primary-dark);">Funding Highlights</h3>
                    <div style="display: grid; gap: 20px;">
                        <div style="background: white; padding: 15px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-rupee-sign" style="font-size: 1.5rem; color: var(--accent-gold);"></i>
                            <div>
                                <strong>Ticket Size</strong>
                                <p style="margin: 0; font-size: 0.9rem; color: #666;">₹5 Lakhs to ₹5 Crores</p>
                            </div>
                        </div>
                        <div style="background: white; padding: 15px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-calendar-alt" style="font-size: 1.5rem; color: var(--accent-gold);"></i>
                            <div>
                                <strong>Tenure</strong>
                                <p style="margin: 0; font-size: 0.9rem; color: #666;">Flexible (Daily/Weekly/Monthly)</p>
                            </div>
                        </div>
                        <div style="background: white; padding: 15px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-percent" style="font-size: 1.5rem; color: var(--accent-gold);"></i>
                            <div>
                                <strong>ROI</strong>
                                <p style="margin: 0; font-size: 0.9rem; color: #666;">Competitive Flat Rates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. USE CASES -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Who Is This For?</h2>
            <p>Our private capital is industry-agnostic, serving a wide range of immediate financial needs.</p>
        </div>
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-building"></i></div>
                <h3 style="margin-bottom: 10px; color: var(--primary-dark);">SME Owners</h3>
                <p style="color: #666; font-size: 0.95rem;">For working capital gaps, stock procurement, or vendor payments that cannot wait for bank processing.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-hard-hat"></i></div>
                <h3 style="margin-bottom: 10px; color: var(--primary-dark);">Real Estate Developers</h3>
                <p style="color: #666; font-size: 0.95rem;">Last-mile funding for construction completion or bridge finance against property approval.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-briefcase"></i></div>
                <h3 style="margin-bottom: 10px; color: var(--primary-dark);">Consultants & Professionals</h3>
                <p style="color: #666; font-size: 0.95rem;">Chartered Accountants, Doctors, and Lawyers needing practice expansion or equipment finance.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-rocket"></i></div>
                <h3 style="margin-bottom: 10px; color: var(--primary-dark);">Startups & Founders</h3>
                <p style="color: #666; font-size: 0.95rem;">Bridging the gap between seed rounds or funding immediate operational runways without equity dilution.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-globe-asia"></i></div>
                <h3 style="margin-bottom: 10px; color: var(--primary-dark);">Traders & Exporters</h3>
                <p style="color: #666; font-size: 0.95rem;">Immediate liquidity to release shipments or clear customs duties to avoid demurrage charges.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-exclamation-circle"></i></div>
                <h3 style="margin-bottom: 10px; color: var(--primary-dark);">Urgent Personal Needs</h3>
                <p style="color: #666; font-size: 0.95rem;">Medical emergencies, foreclosure prevention, or immediate family settlements.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. COMPARISON -->
<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Private Funding vs. Bank Loans</h2>
            <p>Understand the trade-offs to make the right financial decision.</p>
        </div>
        <div style="overflow-x: auto;">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th style="width: 30%;">Parameter</th>
                        <th style="width: 35%; background: var(--primary-blue);">Vardhman Private Funding</th>
                        <th style="width: 35%; background: #eee; color: #555;">Traditional Banks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Approval Time</strong></td>
                        <td><i class="fas fa-bolt" style="color: var(--accent-gold);"></i> 24 - 48 Hours</td>
                        <td>15 - 45 Days</td>
                    </tr>
                    <tr>
                        <td><strong>CIBIL Requirement</strong></td>
                        <td>Flexible (Case Based)</td>
                        <td>Strict (>750 Mandatory)</td>
                    </tr>
                    <tr>
                        <td><strong>Documentation</strong></td>
                        <td>Minimal (KYC + Banking)</td>
                        <td>Extensive (ITR, Audit, Proj. Report)</td>
                    </tr>
                    <tr>
                        <td><strong>Collateral</strong></td>
                        <td>Not Mandatory (Unsecured Options)</td>
                        <td>Mandatory (>100% Coverage)</td>
                    </tr>
                    <tr>
                        <td><strong>Privacy</strong></td>
                        <td>Confidential (Direct Lender)</td>
                        <td>Reported to Bureaus</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- NEW SECTION: CREDIT POLICY -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Our Credit Policy</h2>
            <p>We look beyond the papers. We fund the person and the potential.</p>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 30px;">
             <div class="col-lg-6" style="flex: 1; min-width: 300px;">
                 <h3 style="color: var(--primary-dark); margin-bottom: 15px;">Underwriting Philosophy</h3>
                 <p style="color: #666; margin-bottom: 20px;">
                     Traditional banks rely heavily on past performance (ITR, Balance Sheets). We focus on <strong>current cash flow</strong> and <strong>repayment intent</strong>. If your business is generating cash today, you are eligible, regardless of what happened two years ago.
                 </p>
                 <ul style="list-style: none; padding: 0;">
                     <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                         <i class="fas fa-check" style="color: var(--accent-gold);"></i> No minimum ITR requirement
                     </li>
                     <li style="margin-bottom: 10px; display: flex; align-items: center; gap: 10px;">
                         <i class="fas fa-check" style="color: var(--accent-gold);"></i> CIBIL defaults ignored if justified
                     </li>
                 </ul>
             </div>
             <div class="col-lg-6" style="flex: 1; min-width: 300px;">
                 <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                     <h4 style="margin-bottom: 15px;">Key Metrics We Check</h4>
                     <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
                         <span>Banking Churning</span>
                         <span style="font-weight: 600;">High Volume</span>
                     </div>
                     <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
                         <span>Cheque Returns</span>
                         <span style="font-weight: 600;">Low / Explained</span>
                     </div>
                     <div style="display: flex; justify-content: space-between;">
                         <span>Business Stability</span>
                         <span style="font-weight: 600;">> 1 Year at Location</span>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</section>

<!-- 4.5 NEW ANIMATED SECTION: Instant Readiness Checker -->
<section class="section-padding" style="background: linear-gradient(135deg, #f6f8ff 0%, #eef4ff 100%); overflow: hidden;">
    <div class="container">
        <div class="section-header text-center zoom-in">
            <h2>Funding Readiness Checker</h2>
            <p>See if you qualify for our instant private capital track.</p>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 slide-in-left">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=800&q=80" alt="Financial Documents" class="img-fluid rounded shadow-lg animate-float-soft" style="border: 5px solid white;">
            </div>
            <div class="col-lg-6 slide-in-right mt-4 mt-lg-0">
                <div class="d-flex align-items-center mb-4 p-3" style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <div class="animate-pulse-soft me-3" style="width: 40px; height: 40px; background: rgba(46, 204, 113, 0.2); color: var(--emerald); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-university"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; color: var(--primary-dark);">Active Bank Account</h4>
                        <p style="margin: 0; color: #666; font-size: 0.9rem;">With recent transaction history (last 6 months)</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4 p-3" style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition-delay: 0.2s;">
                    <div class="animate-pulse-soft me-3" style="width: 40px; height: 40px; background: rgba(197, 160, 89, 0.2); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-money-check"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; color: var(--primary-dark);">Post-Dated Cheques</h4>
                        <p style="margin: 0; color: #666; font-size: 0.9rem;">Ability to provide PDCs for repayment security</p>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4 p-3" style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition-delay: 0.4s;">
                    <div class="animate-pulse-soft me-3" style="width: 40px; height: 40px; background: rgba(26, 79, 138, 0.2); color: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div>
                        <h4 style="margin: 0; color: var(--primary-dark);">Valid KYC Documents</h4>
                        <p style="margin: 0; color: #666; font-size: 0.9rem;">PAN and Aadhaar for instant digital verification</p>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-top text-center text-lg-start">
                    <p style="color: var(--primary-dark); font-weight: 600;">Have these ready? You're 90% there.</p>
                    <a href="https://vardhmanfinance.com/partner/loans/instant/" class="btn-hero btn-gold">Start Application</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. PROCESS -->
<section id="process" class="section-padding" style="background: var(--primary-dark); color: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2 style="color: white;">The Execution Process</h2>
            <p style="color: rgba(255,255,255,0.7);">Simple, transparent, and designed for speed.</p>
        </div>
        <div class="feature-grid">
            <div class="feature-card" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                <div class="step-number">01</div>
                <h3 style="color: white; margin-bottom: 10px;">Apply & Consult</h3>
                <p style="color: rgba(255,255,255,0.7);">Fill the digital form. Our credit officer calls you within 30 mins to understand the requirement.</p>
            </div>
            <div class="feature-card" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                <div class="step-number">02</div>
                <h3 style="color: white; margin-bottom: 10px;">Digital KYC</h3>
                <p style="color: rgba(255,255,255,0.7);">Upload basic docs (PAN, Aadhaar, Bank Statement) securely via our portal or WhatsApp.</p>
            </div>
            <div class="feature-card" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                <div class="step-number">03</div>
                <h3 style="color: white; margin-bottom: 10px;">Field Visit</h3>
                <p style="color: rgba(255,255,255,0.7);">A swift verification visit to your business or residence for physical verification (CPV).</p>
            </div>
            <div class="feature-card" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                <div class="step-number">04</div>
                <h3 style="color: white; margin-bottom: 10px;">Disbursal</h3>
                <p style="color: rgba(255,255,255,0.7);">Agreement signing (Check & Stamp) followed by immediate RTGS transfer.</p>
            </div>
            <div class="feature-card" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                <div class="step-number">05</div>
                <h3 style="color: white; margin-bottom: 10px;">Repayment Setup</h3>
                <p style="color: rgba(255,255,255,0.7);">Automated NACH setup or PDC collection for hassle-free daily/weekly repayments.</p>
            </div>
            <div class="feature-card" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                <div class="step-number">06</div>
                <h3 style="color: white; margin-bottom: 10px;">Closure & NOC</h3>
                <p style="color: rgba(255,255,255,0.7);">Upon full repayment, receive your No Objection Certificate (NOC) instantly.</p>
            </div>
        </div>
    </div>
</section>

<!-- NEW SECTION: WHY CHOOSE VARDHMAN -->
<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Why Choose Vardhman?</h2>
            <p>We are not aggregators. We are direct lenders.</p>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div class="col-md-3" style="flex: 1; min-width: 250px; text-align: center;">
                 <i class="fas fa-hand-holding-usd" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 15px;"></i>
                 <h4>Direct Lender</h4>
                 <p style="color: #666; font-size: 0.9rem;">No middlemen commissions. You deal directly with the source of funds.</p>
            </div>
            <div class="col-md-3" style="flex: 1; min-width: 250px; text-align: center;">
                 <i class="fas fa-stopwatch" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 15px;"></i>
                 <h4>Speed First</h4>
                 <p style="color: #666; font-size: 0.9rem;">Our entire system is optimized for speed, recognizing that opportunity cost is real.</p>
            </div>
            <div class="col-md-3" style="flex: 1; min-width: 250px; text-align: center;">
                 <i class="fas fa-file-contract" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 15px;"></i>
                 <h4>Flexible Terms</h4>
                 <p style="color: #666; font-size: 0.9rem;">Customized repayment schedules (Daily/Weekly) to match your cash flow cycle.</p>
            </div>
             <div class="col-md-3" style="flex: 1; min-width: 250px; text-align: center;">
                 <i class="fas fa-user-secret" style="font-size: 2.5rem; color: var(--primary-blue); margin-bottom: 15px;"></i>
                 <h4>100% Confidential</h4>
                 <p style="color: #666; font-size: 0.9rem;">Your data is never shared with third parties or marketing agencies.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5.5 NEW ANIMATED SECTION: Instant Process Tracker -->
<section class="section-padding" style="background: white; overflow: hidden;">
    <div class="container">
        <div class="section-header text-center zoom-in">
            <h2>The 24-Hour Timeline</h2>
            <p>How we move from application to money in your bank.</p>
        </div>
        <div class="row text-center mt-5 position-relative">
            <!-- Connecting Line -->
            <div class="d-none d-md-block position-absolute" style="top: 50px; left: 10%; right: 10%; height: 4px; background: linear-gradient(90deg, var(--accent-gold), var(--emerald)); z-index: 1;"></div>

            <div class="col-md-3 slide-in-left">
                <div class="position-relative z-index-2 mb-4">
                    <div class="animate-pulse-soft mx-auto" style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 4px solid var(--accent-gold); font-size: 2rem; color: var(--accent-gold); box-shadow: 0 0 20px rgba(197, 160, 89, 0.2);">
                        <i class="fas fa-file-upload"></i>
                    </div>
                </div>
                <h4 style="color: var(--primary-dark);">Hour 0</h4>
                <p class="text-muted">Digital Application & KYC Submission</p>
            </div>

            <div class="col-md-3 slide-in-left" style="transition-delay: 0.2s;">
                <div class="position-relative z-index-2 mb-4">
                    <div class="animate-pulse-soft mx-auto" style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 4px solid var(--primary-blue); font-size: 2rem; color: var(--primary-blue); box-shadow: 0 0 20px rgba(26, 79, 138, 0.2);">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                </div>
                <h4 style="color: var(--primary-dark);">Hour 4</h4>
                <p class="text-muted">Desk Review & Indicative Offer</p>
            </div>

            <div class="col-md-3 slide-in-right" style="transition-delay: 0.4s;">
                <div class="position-relative z-index-2 mb-4">
                    <div class="animate-pulse-soft mx-auto" style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 4px solid #7dc8ff; font-size: 2rem; color: #7dc8ff; box-shadow: 0 0 20px rgba(125, 200, 255, 0.2);">
                        <i class="fas fa-signature"></i>
                    </div>
                </div>
                <h4 style="color: var(--primary-dark);">Hour 12</h4>
                <p class="text-muted">E-Sign & Cheque Collection</p>
            </div>

            <div class="col-md-3 slide-in-right" style="transition-delay: 0.6s;">
                <div class="position-relative z-index-2 mb-4">
                    <div class="animate-pulse-soft mx-auto" style="width: 100px; height: 100px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 4px solid var(--emerald); font-size: 2rem; color: var(--emerald); box-shadow: 0 0 20px rgba(46, 204, 113, 0.2);">
                        <i class="fas fa-university"></i>
                    </div>
                </div>
                <h4 style="color: var(--primary-dark);">Hour 24</h4>
                <p class="text-muted">RTGS Disbursal to your Account</p>
            </div>
        </div>
    </div>
</section>

<!-- NEW SECTION: RECENT DISBURSALS -->
<section class="section-padding" style="background: #f8f9fa; border-top: 1px solid #eee; border-bottom: 1px solid #eee;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Recent Disbursals</h2>
            <p>Real businesses we funded this week.</p>
        </div>
        <div style="display: flex; gap: 20px; overflow-x: auto; padding-bottom: 20px;">
            <div style="background: white; padding: 20px; border-radius: 8px; min-width: 280px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <div style="color: var(--emerald); font-weight: 700; margin-bottom: 5px;">₹ 15,00,000</div>
                <div style="font-weight: 600; color: var(--primary-dark);">Garment Manufacturer</div>
                <div style="font-size: 0.85rem; color: #777;">Hyderabad · For Raw Material</div>
                <div style="font-size: 0.8rem; color: #999; margin-top: 10px;"><i class="fas fa-clock"></i> Disbursed in 26 Hours</div>
            </div>
            <div style="background: white; padding: 20px; border-radius: 8px; min-width: 280px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <div style="color: var(--emerald); font-weight: 700; margin-bottom: 5px;">₹ 8,50,000</div>
                <div style="font-weight: 600; color: var(--primary-dark);">Restaurant Owner</div>
                <div style="font-size: 0.85rem; color: #777;">Banjara Hills · Renovation</div>
                <div style="font-size: 0.8rem; color: #999; margin-top: 10px;"><i class="fas fa-clock"></i> Disbursed in 18 Hours</div>
            </div>
            <div style="background: white; padding: 20px; border-radius: 8px; min-width: 280px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <div style="color: var(--emerald); font-weight: 700; margin-bottom: 5px;">₹ 25,00,000</div>
                <div style="font-weight: 600; color: var(--primary-dark);">Software Startup</div>
                <div style="font-size: 0.85rem; color: #777;">Hitech City · Bridge Funding</div>
                <div style="font-size: 0.8rem; color: #999; margin-top: 10px;"><i class="fas fa-clock"></i> Disbursed in 30 Hours</div>
            </div>
            <div style="background: white; padding: 20px; border-radius: 8px; min-width: 280px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                <div style="color: var(--emerald); font-weight: 700; margin-bottom: 5px;">₹ 5,00,000</div>
                <div style="font-weight: 600; color: var(--primary-dark);">Retail Trader</div>
                <div style="font-size: 0.85rem; color: #777;">Begum Bazar · Stock Purchase</div>
                <div style="font-size: 0.8rem; color: #999; margin-top: 10px;"><i class="fas fa-clock"></i> Disbursed in 12 Hours</div>
            </div>
        </div>
    </div>
</section>

<!-- NEW SECTION: INDUSTRY VERTICALS -->
<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Industries We Serve</h2>
        </div>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            <div style="text-align: center; width: 120px;">
                <div style="width: 80px; height: 80px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: var(--accent-gold); font-size: 2rem;">
                    <i class="fas fa-industry"></i>
                </div>
                <h5 style="color: var(--primary-dark);">Manufacturing</h5>
            </div>
            <div style="text-align: center; width: 120px;">
                <div style="width: 80px; height: 80px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: var(--accent-gold); font-size: 2rem;">
                    <i class="fas fa-store"></i>
                </div>
                <h5 style="color: var(--primary-dark);">Retail & Trading</h5>
            </div>
            <div style="text-align: center; width: 120px;">
                <div style="width: 80px; height: 80px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: var(--accent-gold); font-size: 2rem;">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h5 style="color: var(--primary-dark);">IT & Services</h5>
            </div>
            <div style="text-align: center; width: 120px;">
                <div style="width: 80px; height: 80px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: var(--accent-gold); font-size: 2rem;">
                    <i class="fas fa-truck"></i>
                </div>
                <h5 style="color: var(--primary-dark);">Logistics</h5>
            </div>
            <div style="text-align: center; width: 120px;">
                <div style="width: 80px; height: 80px; background: var(--light-bg); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: var(--accent-gold); font-size: 2rem;">
                    <i class="fas fa-hotel"></i>
                </div>
                <h5 style="color: var(--primary-dark);">Hospitality</h5>
            </div>
        </div>
    </div>
</section>

<!-- 6. DOCUMENTS & ELIGIBILITY -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
            <div class="col fade-in" style="flex: 1; min-width: 300px;">
                <h3 style="color: var(--primary-dark); margin-bottom: 20px;">Eligibility Checklist</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; display: flex; align-items: center; gap: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                        <i class="fas fa-check-circle" style="color: var(--emerald);"></i>
                        <span>Minimum Age: 23 Years</span>
                    </li>
                    <li style="background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; display: flex; align-items: center; gap: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                        <i class="fas fa-check-circle" style="color: var(--emerald);"></i>
                        <span>Business Vintage: Min 1 Year</span>
                    </li>
                    <li style="background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; display: flex; align-items: center; gap: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                        <i class="fas fa-check-circle" style="color: var(--emerald);"></i>
                        <span>Monthly Turnover: > ₹2 Lakhs</span>
                    </li>
                    <li style="background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; display: flex; align-items: center; gap: 15px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                        <i class="fas fa-check-circle" style="color: var(--emerald);"></i>
                        <span>Location: Hyderabad & Pan-India</span>
                    </li>
                </ul>
            </div>
            <div class="col fade-in" style="flex: 1; min-width: 300px;">
                <h3 style="color: var(--primary-dark); margin-bottom: 20px;">Required Documents</h3>
                <div style="background: white; padding: 30px; border-radius: 15px; border-left: 5px solid var(--primary-blue); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <ul style="padding-left: 20px; line-height: 2;">
                        <li><strong>KYC:</strong> PAN Card, Aadhaar Card, Voter ID</li>
                        <li><strong>Financials:</strong> Last 6 months Bank Statement (PDF)</li>
                        <li><strong>Address Proof:</strong> Electricity Bill / Rent Agreement</li>
                        <li><strong>Business Proof:</strong> GST Certificate / MSME / Udyam</li>
                        <li><strong>Banking:</strong> Cancelled Cheque (for verification)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. FAQ SECTION -->
<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-grid">
            <div class="faq-card">
                <div class="faq-header" onclick="this.parentElement.classList.toggle('active')">
                    <span>What is the interest rate for private finance?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-body">
                    <p>Since these are unsecured, short-term risky loans, interest rates are higher than banks, typically ranging from 2% to 3% per month depending on the profile and tenure. However, we offer reducing balance options.</p>
                </div>
            </div>
            <div class="faq-card">
                <div class="faq-header" onclick="this.parentElement.classList.toggle('active')">
                    <span>Do you require any upfront processing fee?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-body">
                    <p>Absolutely NOT. Vardhman Finance has a strict "No Upfront Fee" policy. Any processing charges are deducted from the loan amount during disbursal only.</p>
                </div>
            </div>
            <div class="faq-card">
                <div class="faq-header" onclick="this.parentElement.classList.toggle('active')">
                    <span>How fast is the disbursal?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-body">
                    <p>For Hyderabad cases, we can disburse within 24 hours. For outstation cases, it may take 48-72 hours subject to physical verification.</p>
                </div>
            </div>
            <div class="faq-card">
                <div class="faq-header" onclick="this.parentElement.classList.toggle('active')">
                    <span>Can I repay early?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-body">
                    <p>Yes, we do not have a lock-in period. You can close the loan anytime by paying the principal and interest accrued till date. Foreclosure charges may apply as per agreement.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. CTA BANNER -->
<section class="container fade-in" style="margin-bottom: 80px;">
    <div class="cta-banner">
        <h2 style="color: white; margin-bottom: 20px;">Need Funds urgently? Don't wait.</h2>
        <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 30px;">
            Speak directly to our credit manager. No IVR. No bots.
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="tel:18002034320" class="btn-hero btn-gold"><i class="fas fa-phone-alt"></i> Call Now</a>
            <a href="https://wa.me/917291000223" class="btn-hero btn-outline"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
