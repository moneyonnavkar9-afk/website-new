<?php
$page_title = "Recovery Performance | Vardhman Finance";
$meta_desc = "Vardhman Financial Services maintains an exceptionally high financial recovery ratio protecting our massive private investor network.";
$meta_keywords = "Recovery Performance, Financial Recovery, Default Mitigation, Investor Protection, Vardhman Finance";
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
        <div class="detail-icon"><i class="fas fa-shield-alt"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Recovery Performance</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Uncompromising financial protection for our private investors.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>The Armor of Our Financial Ecosystem</h2>
            <p>A funding network is ultimately defined by its ability to reliably and securely recover its deployed capital. Vardhman Financial Services actively engineers and aggressively maintains an incredibly powerful, systematic financial recovery structure designed explicitly to protect investor liquidity from defaults.</p>
            <p>Our raw recovery performance data statistically dominates the unorganized private funding sector, demonstrating an irrefutable capacity for relentless capital retrieval.</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin: 60px 0;">
                <div style="background: white; border: 1px solid #e2e8f0; padding: 40px; border-radius: 16px; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.05); transition: transform 0.3s ease;">
                    <div style="position: absolute; right: -30px; top: -30px; font-size: 12rem; color: rgba(16, 185, 129, 0.04);"><i class="fas fa-chart-bar"></i></div>
                    <div style="position: relative; z-index: 1;">
                        <div style="font-size: 4rem; color: var(--emerald); font-weight: 800; margin-bottom: 5px; line-height: 1;">87%</div>
                        <div style="color: var(--primary-dark); font-weight: 800; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 2px; margin-bottom: 15px;">5-Year Recovery Ratio</div>
                        <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Our absolute long-term sustained recovery average, proving the structural durability of our comprehensive credit assessments.</p>
                    </div>
                </div>
                <div style="background: white; border: 1px solid #e2e8f0; padding: 40px; border-radius: 16px; position: relative; overflow: hidden; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.05); transition: transform 0.3s ease;">
                    <div style="position: absolute; right: -30px; top: -30px; font-size: 12rem; color: rgba(16, 185, 129, 0.04);"><i class="fas fa-chart-pie"></i></div>
                    <div style="position: relative; z-index: 1;">
                        <div style="font-size: 4rem; color: var(--emerald); font-weight: 800; margin-bottom: 5px; line-height: 1;">92.3%</div>
                        <div style="color: var(--primary-dark); font-weight: 800; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 2px; margin-bottom: 15px;">Avg Yearly Recovery Ratio</div>
                        <p style="font-size: 0.95rem; color: #666; margin: 0; line-height: 1.6;">Our current aggressive annualized recovery metric, reflecting the escalating effectiveness of our massively expanded recovery team.</p>
                    </div>
                </div>
            </div>

            <h2 style="margin-top: 50px;">The Methodology of Capital Protection</h2>
            <p>This stellar, sustained performance is not incidental; it deeply reflects the merciless effectiveness of our synchronized operational architecture. We do not rely on hope; we rely on immense legal leverage and boots on the ground.</p>

            <div style="background: white; border: 1px solid #e2e8f0; border-radius: 16px; padding: 40px; margin-top: 30px; box-shadow: 0 10px 20px rgba(0,0,0,0.02);">
                <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; list-style-type: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-user-secret" style="color: var(--accent-gold); font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">A Colossal Field Recovery Team</strong>
                            Our 30,000+ member recovery force conducts unrelenting field monitoring entirely preventing default snowballing.
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-balance-scale" style="color: var(--accent-gold); font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Massive Legal Infrastructure</strong>
                            An 8,200+ strong legal department engineered to rapidly deploy Section 138 (Cheque Bounce) and recovery litigation efficiently.
                        </div>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 15px;">
                        <i class="fas fa-file-signature" style="color: var(--accent-gold); font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <strong style="display: block; color: var(--primary-dark); font-size: 1.1rem; margin-bottom: 5px;">Airtight Pre-Execution Documentation</strong>
                            All capital is strictly backed by the meticulous execution of Legal Declarations (Ghoshna Patra) and legally verified Cheques.
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