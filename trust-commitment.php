<?php
$page_title = "Trust Commitment | Vardhman Finance";
$meta_desc = "Vardhman Financial Services operates strictly on the absolute pillars of Trust, Transparency, and highly calculated financial Responsibility.";
$meta_keywords = "Trust Commitment, Financial Responsibility, Transparency, Corporate Ethics, Vardhman Finance";
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
        <div class="detail-icon"><i class="fas fa-award"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Trust Commitment</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">The non-negotiable operational principles underlying our financial empire.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>The Unbreakable Foundation of Capital</h2>
            <p>Vardhman Financial Services fundamentally and fiercely believes that the absolute foundational bedrock of any large-scale financial service network cannot be built purely on algorithms or marketing; it must be built entirely upon:</p>

            <div style="background: linear-gradient(135deg, rgba(10,35,66,0.03) 0%, rgba(212,175,55,0.05) 100%); border: 1px solid rgba(212,175,55,0.3); border-radius: 20px; padding: 60px 40px; text-align: center; margin: 50px 0; box-shadow: 0 15px 35px rgba(0,0,0,0.03);">
                <div style="font-size: 2.8rem; color: var(--accent-gold); font-weight: 800; letter-spacing: 2px; text-transform: uppercase; text-shadow: 0 4px 10px rgba(0,0,0,0.05); margin-bottom: 20px;">
                    Trust, Transparency, &<br>Absolute Responsibility
                </div>
                <div style="width: 100px; height: 4px; background: var(--primary-dark); margin: 0 auto;"></div>
            </div>

            <h2 style="margin-top: 50px;">Engineering Confidence</h2>
            <p>The company aggressively and continuously works strictly toward building deeply entrenched, structurally sound long-term trust with absolutely both our elite private investors and our massive commercial/retail customer base.</p>

            <ul style="list-style-type: none; padding: 0; display: grid; gap: 20px; margin-top: 40px;">
                <li style="display: flex; gap: 20px; align-items: flex-start; background: white; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 5px 15px rgba(0,0,0,0.02); transition: transform 0.3s ease;">
                    <div style="font-size: 2.5rem; color: var(--emerald);"><i class="fas fa-hand-holding-usd"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 10px; font-size: 1.2rem;">For The Investor</h4>
                        <p style="margin: 0; font-size: 1.05rem; color: #555;">Trust translates into our relentless deployment of massive legal and field verification teams to aggressively vet and subsequently enforce the recovery of deployed capital.</p>
                    </div>
                </li>
                <li style="display: flex; gap: 20px; align-items: flex-start; background: white; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 5px 15px rgba(0,0,0,0.02); transition: transform 0.3s ease;">
                    <div style="font-size: 2.5rem; color: var(--primary-dark);"><i class="fas fa-store"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 10px; font-size: 1.2rem;">For The Customer</h4>
                        <p style="margin: 0; font-size: 1.05rem; color: #555;">Trust manifests as fully transparent, utterly documented legal processes, eliminating hidden financial traps and deploying capital precisely when promised.</p>
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