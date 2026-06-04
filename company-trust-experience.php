<?php
$page_title = "Company Trust & Experience | Vardhman Finance";
$meta_desc = "Vardhman Financial Services brings over 26 years of trusted experience in private financial facilitation.";
$meta_keywords = "Company Trust, Experience, Vardhman Finance, Private Financial Services";
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
        div[style*="font-size: 3rem; color: rgba(212,175,55,0.15)"] {
            font-size: 2rem !important;
            top: 15px !important;
            left: 15px !important;
            bottom: 15px !important;
            right: 15px !important;
        }
        li[style*="display: flex; gap: 20px"] {
            flex-direction: column;
            gap: 10px !important;
            padding: 20px !important;
        }
    }
</style>

<section class="detail-hero">
    <div class="container fade-in">
        <div class="detail-icon"><i class="fas fa-handshake"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Trust & Experience</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Building confidence through 26 years of financial excellence.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>A Legacy of Financial Networking</h2>
            <p>Vardhman Financial Services represents a highly distinguished financial network built on more than <strong style="color: var(--primary-dark);">26 years of verified experience</strong> in the complex field of private financial services.</p>

            <p>Over the decades, our firm has not merely survived economic shifts, but actively built an unshakeable, trusted ecosystem. This platform seamlessly connects capable investors and ambitious customers through professional, legally sound financial facilitation.</p>

            <div style="text-align: center; font-size: 1.6rem; font-style: italic; color: var(--primary-dark); margin: 50px 0; padding: 50px 40px; background: linear-gradient(135deg, rgba(10,35,66,0.03) 0%, rgba(212,175,55,0.05) 100%); border-radius: 16px; border: 1px solid rgba(212,175,55,0.2); position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.02);">
                <i class="fas fa-quote-left" style="position: absolute; top: 25px; left: 25px; font-size: 3rem; color: rgba(212,175,55,0.15);"></i>
                "Trust is not built by words — it is built by unwavering commitment, rigorous compliance, and decades of proven performance."
                <i class="fas fa-quote-right" style="position: absolute; bottom: 25px; right: 25px; font-size: 3rem; color: rgba(212,175,55,0.15);"></i>
            </div>

            <h2 style="margin-top: 50px;">The Pillars of Our Experience</h2>
            <ul style="list-style-type: none; padding: 0; display: grid; gap: 20px; margin-top: 30px;">
                <li style="display: flex; gap: 20px; align-items: flex-start; background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid var(--accent-gold);">
                    <div style="font-size: 2rem; color: var(--accent-gold);"><i class="fas fa-history"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Enduring Relationships</h4>
                        <p style="margin: 0; font-size: 1rem;">This foundational principle has helped the company establish deeply rooted, long-term relationships with thousands of high-net-worth investors and millions of satisfied retail and commercial customers.</p>
                    </div>
                </li>
                <li style="display: flex; gap: 20px; align-items: flex-start; background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid var(--primary-dark);">
                    <div style="font-size: 2rem; color: var(--primary-dark);"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Market Resilience</h4>
                        <p style="margin: 0; font-size: 1rem;">Through decades of market cycles, our proven private funding models have demonstrated absolute resilience, protecting capital while fueling economic growth across the nation.</p>
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