<?php
$page_title = "Company Vision | Vardhman Finance";
$meta_desc = "Discover the aggressive, future-forward long-term vision of Vardhman Financial Services.";
$meta_keywords = "Company Vision, Financial Future, Private Funding Network, Transparency, Vardhman Finance";
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
    .vision-card {
        padding: 40px;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 20px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(0,0,0,0.02);
    }
    .vision-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.06);
        border-color: rgba(212,175,55,0.4);
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
        <div class="detail-icon"><i class="fas fa-eye"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Company Vision</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Our aggressive blueprint for the future of private financial facilitation in India.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>The Long-Term Corporate Objective</h2>
            <p>Vardhman Financial Services is entirely focused on a massive, structural transformation of the unorganized funding sector. Our aggressively forward-looking, uncompromising vision dictates exactly how we build, scale, and fundamentally manage our immense financial ecosystem.</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin: 50px 0;">
                <div class="vision-card">
                    <div style="width: 80px; height: 80px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;"><i class="fas fa-link"></i></div>
                    <h4 style="color: var(--primary-dark); font-size: 1.3rem; margin: 0; font-weight: 800;">To build a strong and transparent Private Funding Network in India.</h4>
                    <p style="font-size: 1rem; color: #666; margin: 0; line-height: 1.6;">Aggressively eliminating opaque practices by deploying an entirely documented, fully structured, and highly visible financial framework nationwide.</p>
                </div>

                <div class="vision-card">
                    <div style="width: 80px; height: 80px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4 style="color: var(--primary-dark); font-size: 1.3rem; margin: 0; font-weight: 800;">To absolutely strengthen trust between verified investors and customers.</h4>
                    <p style="font-size: 1rem; color: #666; margin: 0; line-height: 1.6;">Acting as an impenetrable mediator that practically guarantees capital safety for the investor while simultaneously ensuring fair access for legitimate businesses.</p>
                </div>

                <div class="vision-card">
                    <div style="width: 80px; height: 80px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;"><i class="fas fa-bolt"></i></div>
                    <h4 style="color: var(--primary-dark); font-size: 1.3rem; margin: 0; font-weight: 800;">To aggressively provide fast financial solutions in the rapid digital era.</h4>
                    <p style="font-size: 1rem; color: #666; margin: 0; line-height: 1.6;">Pouring massive investments into cutting-edge online infrastructure specifically designed to eliminate processing bottlenecks entirely and instantly deploy capital.</p>
                </div>

                <div class="vision-card">
                    <div style="width: 80px; height: 80px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem;"><i class="fas fa-balance-scale"></i></div>
                    <h4 style="color: var(--primary-dark); font-size: 1.3rem; margin: 0; font-weight: 800;">To operate entirely with absolute legal compliance and unyielding transparency.</h4>
                    <p style="font-size: 1rem; color: #666; margin: 0; line-height: 1.6;">Refusing utterly to engage in the shadow economy, demanding absolute legal adherence from both our massive internal teams and external network participants.</p>
                </div>
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