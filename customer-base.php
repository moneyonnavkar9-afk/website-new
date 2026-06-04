<?php
$page_title = "Customer Base | Vardhman Finance";
$meta_desc = "Over 30 years, Vardhman Financial Services has successfully served over 1.3 Million customers across India.";
$meta_keywords = "Customer Base, Digital Customers, Client Base, Financial Network, Vardhman Finance";
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
        <div class="detail-icon"><i class="fas fa-users"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Massive Customer Base</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Analyzing our extensive 1.3 Million+ customer network spanning over 3 decades.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>Three Decades of Financial Empowerment</h2>
            <p>Our operational scale and the unshakeable trust we command in the Indian market are best illustrated by our rapidly compounding customer base. Over the intensely competitive span of the past 30 years, our core private funding network and strategic financial services have massively accelerated the growth of individuals and businesses nationwide.</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px; margin: 60px 0;">
                <div style="background: white; border-radius: 20px; padding: 50px 40px; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; border-top: 6px solid var(--primary-dark); position: relative; transition: transform 0.3s ease;">
                    <div style="width: 100px; height: 100px; background: #f8fafc; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; border: 2px solid #e2e8f0;">
                        <i class="fas fa-history" style="font-size: 3.5rem; color: var(--primary-dark);"></i>
                    </div>
                    <p style="color: #666; font-weight: 600; margin-bottom: 20px; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">Over the past 30 years</p>
                    <div style="font-size: 4.5rem; color: var(--primary-dark); font-weight: 800; line-height: 1; margin-bottom: 10px;">1.3M+</div>
                    <div style="font-size: 1.5rem; color: var(--accent-gold); font-weight: 800; text-transform: uppercase; margin-top: 10px; letter-spacing: 2px;">(13 Lakh+) Customers</div>
                    <p style="margin-top: 20px; font-size: 0.95rem; color: #555;">Representing a massive legacy of offline branch services, deep personal network trust, and relentless field-based financial facilitation.</p>
                </div>

                <div style="background: white; border-radius: 20px; padding: 50px 40px; text-align: center; box-shadow: 0 15px 40px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; border-top: 6px solid var(--accent-gold); position: relative; transition: transform 0.3s ease;">
                    <div style="width: 100px; height: 100px; background: rgba(212,175,55,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px auto; border: 2px solid rgba(212,175,55,0.2);">
                        <i class="fas fa-laptop-house" style="font-size: 3.5rem; color: var(--accent-gold);"></i>
                    </div>
                    <p style="color: #666; font-weight: 600; margin-bottom: 20px; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px;">Via Our Advanced Digital Platforms</p>
                    <div style="font-size: 4.5rem; color: var(--primary-dark); font-weight: 800; line-height: 1; margin-bottom: 10px;">270K+</div>
                    <div style="font-size: 1.5rem; color: var(--accent-gold); font-weight: 800; text-transform: uppercase; margin-top: 10px; letter-spacing: 2px;">Digital Operations</div>
                    <p style="margin-top: 20px; font-size: 0.95rem; color: #555;">Reflecting our absolute dominance in the modern era of rapid, highly secure online loan applications and entirely paperless private funding deployment.</p>
                </div>
            </div>

            <h2 style="margin-top: 50px;">The Digital Trajectory</h2>
            <p>The entire financial ecosystem is experiencing a massive digital pivot, and Vardhman Financial Services is leading that charge. While our legacy 1.3 million physical customer base represents our unshakeable historical trust, the exponential growth of our online infrastructure signifies the absolute future of our massive private funding network. We continue to pour immense capital and resources into aggressively expanding this digital financial capability across India.</p>

            <div style="text-align: center; margin-top: 60px;">
                <a href="company-trust-report.php" class="btn-hero" style="background: var(--light-bg); color: var(--primary-dark); border: 1px solid #e2e8f0; padding: 12px 30px; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fas fa-arrow-left"></i> Back to Trust Report
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>