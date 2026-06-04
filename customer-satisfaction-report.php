<?php
$page_title = "Customer Satisfaction Report | Vardhman Finance";
$meta_desc = "Vardhman Financial Services reports an exceptional 97.5% customer satisfaction rate, driven by fast processing and professional service.";
$meta_keywords = "Customer Satisfaction, Vardhman Finance, Financial Services, Customer Service, Satisfaction Rate";
include 'header.php';
?>

<style>
    .detail-hero {
        padding: 180px 0 80px 0;
        background: linear-gradient(135deg, var(--primary-dark) 0%, #1a3a63 100%);
        color: white;
        text-align: center;
        position: relative;
    }
    .detail-hero::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50px;
        background: white;
        clip-path: polygon(0 100%, 100% 100%, 100% 0);
    }
    .detail-icon {
        width: 80px;
        height: 80px;
        background: rgba(212,175,55,0.2);
        color: var(--accent-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        margin: 0 auto 20px auto;
        border: 2px solid rgba(212,175,55,0.5);
    }
    .content-card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        padding: 50px;
        margin-top: -30px;
        position: relative;
        z-index: 10;
        margin-bottom: 60px;
        line-height: 1.8;
        font-size: 1.1rem;
        color: #444;
    }
    .content-card h2 {
        color: var(--primary-dark);
        margin-bottom: 25px;
        font-weight: 700;
        position: relative;
        padding-bottom: 15px;
    }
    .content-card h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: var(--accent-gold);
        border-radius: 2px;
    }
    @media (max-width: 768px) {
        .detail-hero {
            padding: 120px 0 60px 0;
        }
        .content-card {
            padding: 20px;
            margin-top: -20px;
            font-size: 1rem;
        }
        .detail-icon {
            width: 60px;
            height: 60px;
            font-size: 1.8rem;
        }
        .detail-hero h1 {
            font-size: 2.2rem !important;
        }
        .content-card h2 {
            font-size: 1.5rem;
        }
        div[style*="font-size: 1.6rem; font-style: italic"] {
            font-size: 1.2rem !important;
            padding: 30px 20px !important;
            margin: 30px 0 !important;
        }
        li[style*="display: flex; gap: 20px"] {
            flex-direction: column;
            gap: 10px !important;
            padding: 20px !important;
        }
        div[style*="font-size: 3rem; color: rgba(212,175,55,0.15)"] {
            font-size: 2rem !important;
            top: 15px !important;
            left: 15px !important;
            bottom: 15px !important;
            right: 15px !important;
        }
        div[style*="font-size: 4rem; color: var(--accent-gold)"] {
            font-size: 2.5rem !important;
        }
        div[style*="padding: 50px"] {
            padding: 20px !important;
        }
        div[style*="font-size: 8rem;"] {
            font-size: 4rem !important;
            right: -10px !important;
            top: -10px !important;
        }
        div[style*="font-size: 2.5rem;"] {
            font-size: 2rem !important;
        }
        div[style*="font-size: 3.5rem;"] {
            font-size: 2.5rem !important;
        }
        div[style*="display: flex; align-items: center; gap: 30px"] {
            flex-direction: column !important;
            text-align: center !important;
            padding: 20px !important;
        }
        div[style*="display: flex; gap: 30px"] {
            flex-direction: column !important;
            padding: 20px !important;
        }
    }
</style>

<section class="detail-hero">
    <div class="container fade-in">
        <div class="detail-icon"><i class="fas fa-smile"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Customer Satisfaction</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Analyzing our exceptional 97.5% satisfaction rate for FY 2025–2026.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>The Voice of Our Network</h2>
            <p>Our operational mandate is entirely customer-centric. Based directly on massive internal feedback loop data and the final Customer Analysis Report evaluated continuously through the Financial Year 2025–2026, we have engineered an unparalleled service experience across our entire network.</p>

            <div style="text-align: center; margin: 60px 0; background: #f8fafc; padding: 50px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.02); position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; right: 0; width: 150px; height: 150px; background: rgba(212,175,55,0.03); border-radius: 0 0 0 100%;"></div>
                <div style="display: inline-block; position: relative;">
                    <svg width="220" height="220" viewBox="0 0 36 36" class="circular-chart" style="filter: drop-shadow(0 5px 10px rgba(212,175,55,0.2));">
                        <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#e2e8f0" stroke-width="2.5"/>
                        <path class="circle" stroke-dasharray="97.5, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="var(--accent-gold)" stroke-width="3" stroke-linecap="round" animation="progress 1.5s ease-out forwards"/>
                        <text x="18" y="20.8" class="percentage" fill="var(--primary-dark)" font-size="7.5" font-weight="800" text-anchor="middle">97.5%</text>
                    </svg>
                </div>
                <div style="font-size: 1.6rem; font-weight: 800; color: var(--primary-dark); margin-top: 25px; text-transform: uppercase; letter-spacing: 2px;">Customer Satisfaction Rate</div>
            </div>

            <h2 style="margin-top: 50px;">How We Achieved This Metric</h2>
            <p>Customer satisfaction in the massive private funding sector is not simple; it requires flawless execution, immense clarity, and immediate responsiveness. We secured this extraordinary metric strictly through the following non-negotiable service pillars:</p>

            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 40px; margin-top: 30px; box-shadow: 0 10px 20px rgba(0,0,0,0.02);">
                <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; list-style-type: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-rocket" style="color: var(--accent-gold); font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Ultra-Fast Processing Support</strong>
                            Rapid file evaluation and immediate working capital deployment upon verification.
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-search" style="color: var(--accent-gold); font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Transparent Communication</strong>
                            Absolutely zero hidden fees or convoluted clauses. Everything is entirely documented and strictly communicated.
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-gavel" style="color: var(--accent-gold); font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Dedicated Legal Assistance</strong>
                            Professional legal guidance specifically provided where required for structured financial facilitation.
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-lock" style="color: var(--accent-gold); font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Highly Secure Transactions</strong>
                            All private funding transactions operate exclusively over bank-verified, fully auditable digital banking channels.
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-user-tie" style="color: var(--accent-gold); font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Professional Help Desk Services</strong>
                            24/7 dedicated support specifically trained to handle massive operational or technical inquiries.
                        </div>
                    </li>
                </ul>
            </div>

            <div style="text-align: center; margin-top: 60px;">
                <a href="company-trust-report.php" class="btn-hero" style="background: var(--light-bg); color: var(--primary-dark); border: 1px solid #e2e8f0; padding: 12px 30px; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fas fa-arrow-left"></i> Back to Trust Report
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>