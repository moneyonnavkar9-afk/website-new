<?php
$page_title = "Funding Performance Report | Vardhman Finance";
$meta_desc = "Vardhman Financial Services reports an exceptional 91% successful funding disbursement ratio.";
$meta_keywords = "Funding Performance, Disbursement, Approval Ratio, Risk Analysis, Financial Services";
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
    .stat-card {
        background: white;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 40px 30px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-gold);
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
        <div class="detail-icon"><i class="fas fa-chart-line"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Funding Performance</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Analyzing our exceptional 91% disbursement success rate.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>Internal Performance Analysis</h2>
            <p>According to the company’s internal performance analysis, we maintain an extraordinarily high disbursement ratio compared to industry standards. This metric stands as a direct testament to our rigorous pre-screening and the deep financial reserves within our private funding network.</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 50px 0;">
                <div class="stat-card" style="border-bottom: 5px solid var(--emerald);">
                    <div style="font-size: 4.5rem; color: var(--emerald); font-weight: 800; margin-bottom: 10px; line-height: 1;">91%</div>
                    <div style="color: var(--primary-dark); font-weight: 700; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 1px;">Successful Disbursements</div>
                    <p style="font-size: 0.95rem; color: #666; margin-top: 15px;">Cases securely funded, documented, and successfully processed through our financial network.</p>
                </div>
                <div class="stat-card" style="border-bottom: 5px solid #e74c3c;">
                    <div style="font-size: 4.5rem; color: #e74c3c; font-weight: 800; margin-bottom: 10px; line-height: 1;">9%</div>
                    <div style="color: var(--primary-dark); font-weight: 700; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 1px;">Risk-Based Rejections</div>
                    <p style="font-size: 0.95rem; color: #666; margin-top: 15px;">Applications deliberately declined post-evaluation to aggressively mitigate investor risk.</p>
                </div>
            </div>

            <h2 style="margin-top: 50px;">Why Our Approval Ratio is Unrivaled</h2>
            <p>This massive approval ratio is the direct, calculated result of three interconnected operational strengths:</p>

            <ul style="list-style-type: none; padding: 0; margin-top: 30px;">
                <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
                    <i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.5rem; margin-top: 5px;"></i>
                    <div>
                        <strong style="display: block; font-size: 1.2rem; color: var(--primary-dark); margin-bottom: 5px;">Hyper-Efficient Verification Process</strong>
                        Our on-ground and digital verification teams perform exhaustive background analysis immediately upon application, ensuring only highly viable requests proceed to final review.
                    </div>
                </li>
                <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
                    <i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.5rem; margin-top: 5px;"></i>
                    <div>
                        <strong style="display: block; font-size: 1.2rem; color: var(--primary-dark); margin-bottom: 5px;">Massive Investor Liquidity</strong>
                        With an extensive, highly liquid private investor base, we rarely face capital constraints that force arbitrary rejections. If the file is secure, the capital is immediately available.
                    </div>
                </li>
                <li style="display: flex; gap: 15px; margin-bottom: 20px; align-items: flex-start;">
                    <i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.5rem; margin-top: 5px;"></i>
                    <div>
                        <strong style="display: block; font-size: 1.2rem; color: var(--primary-dark); margin-bottom: 5px;">A Rigid Legal Foundation</strong>
                        Only cases exhibiting severe documentation flaws, fraudulent signatures, or extreme, unverifiable financial risk are explicitly declined after the primary evaluation phases.
                    </div>
                </li>
            </ul>

            <div style="text-align: center; margin-top: 60px;">
                <a href="company-trust-report.php" class="btn-hero" style="background: var(--light-bg); color: var(--primary-dark); border: 1px solid #e2e8f0; padding: 12px 30px; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fas fa-arrow-left"></i> Back to Trust Report
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>