<?php
$page_title = "Leadership Team | Vardhman Finance";
$meta_desc = "Meet the experienced professionals and strategic leaders driving Vardhman Financial Services.";
$meta_keywords = "Leadership Team, Credit Manager, Vice President, Legal Head, Cybersecurity President, Vardhman Finance";
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
    .leader-card {
        padding: 40px;
        border-radius: 16px;
        background: white;
        border: 1px solid #e2e8f0;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    }
    .leader-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        border-color: rgba(212,175,55,0.3);
    }
    .leader-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 6px;
        height: 100%;
        background: var(--accent-gold);
    }
    .email-link {
        word-wrap: break-word;
        overflow-wrap: anywhere;
        word-break: break-all;
        hyphens: auto;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        max-width: 100%;
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
        <div class="detail-icon"><i class="fas fa-user-tie"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Leadership Team</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">The strategic minds directing our vast financial ecosystem.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>The Visionaries Driving the Network</h2>
            <p style="margin-bottom: 40px; font-size: 1.15rem;">Vardhman Financial Services is governed and propelled by a highly disciplined, vastly experienced coalition of elite professionals. This executive board is strictly responsible for architecting, executing, and protecting every massive strategic expansion and daily operational metric across our entire network.</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 35px;">

                <div class="leader-card">
                    <div style="width: 60px; height: 60px; background: rgba(212,175,55,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: var(--accent-gold); font-size: 1.8rem;"><i class="fas fa-chart-pie"></i></div>
                    <h5 style="color: #666; margin-bottom: 10px; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Credit Manager</h5>
                    <strong style="display: block; margin-bottom: 20px; color: var(--primary-dark); font-size: 1.4rem; line-height: 1.4;">Mr. Shri Krishna Govind Bhai Patel</strong>
                    <p style="font-size: 1rem; color: #555; margin: 0; line-height: 1.6;">Commanding ultimate responsibility for rigorous credit evaluation, extreme financial risk assessment, and ensuring flawless pre-deployment viability protocols.</p>
                </div>

                <div class="leader-card">
                    <div style="width: 60px; height: 60px; background: rgba(212,175,55,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: var(--accent-gold); font-size: 1.8rem;"><i class="fas fa-handshake"></i></div>
                    <h5 style="color: #666; margin-bottom: 10px; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Vice President</h5>
                    <strong style="display: block; margin-bottom: 15px; color: var(--primary-dark); font-size: 1.4rem; line-height: 1.4;">Mr. Shri Sumit Agrawal</strong>
                    <a href="mailto:vc.sumit@vardhmanfinance.com" class="email-link" style="font-size: 1rem; color: var(--accent-gold); margin-bottom: 20px; font-weight: 600; text-decoration: none;"><i class="fas fa-envelope"></i> vc.sumit@vardhmanfinance.com</a>
                    <p style="font-size: 1rem; color: #555; margin: 0; line-height: 1.6;">Architecting immense strategic operations, spearheading unprecedented network expansion, and aggressively managing critical relations within our vast private investor syndicate.</p>
                </div>

                <div class="leader-card">
                    <div style="width: 60px; height: 60px; background: rgba(212,175,55,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: var(--accent-gold); font-size: 1.8rem;"><i class="fas fa-balance-scale"></i></div>
                    <h5 style="color: #666; margin-bottom: 10px; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Head of Legal Department</h5>
                    <strong style="display: block; margin-bottom: 15px; color: var(--primary-dark); font-size: 1.4rem; line-height: 1.4;">Mr. Shri Avdhesh Kumar Rajput</strong>
                    <a href="mailto:legal@vardhmanfinance.com" class="email-link" style="font-size: 1rem; color: var(--accent-gold); margin-bottom: 20px; font-weight: 600; text-decoration: none;"><i class="fas fa-envelope"></i> legal@vardhmanfinance.com</a>
                    <p style="font-size: 1rem; color: #555; margin: 0; line-height: 1.6;">Directing a massive army of legal professionals, overseeing absolutely all high-level legal operations, and ensuring completely unassailable corporate and recovery compliance.</p>
                </div>

                <div class="leader-card">
                    <div style="width: 60px; height: 60px; background: rgba(212,175,55,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: var(--accent-gold); font-size: 1.8rem;"><i class="fas fa-shield-virus"></i></div>
                    <h5 style="color: #666; margin-bottom: 10px; font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700;">Cybersecurity President</h5>
                    <strong style="display: block; margin-bottom: 15px; color: var(--primary-dark); font-size: 1.4rem; line-height: 1.4;">Mr. Surya Pratap Singh Shekhawat</strong>
                    <a href="mailto:advocate.surya@vardhmanfinance.com" class="email-link" style="font-size: 1rem; color: var(--accent-gold); margin-bottom: 20px; font-weight: 600; text-decoration: none;"><i class="fas fa-envelope"></i> advocate.surya@vardhmanfinance.com</a>
                    <p style="font-size: 1rem; color: #555; margin: 0; line-height: 1.6;">Enforcing absolute dominance over our digital infrastructure, aggressively designing impenetrable security systems, and executing massive cybersecurity operations to protect digital financial flows.</p>
                </div>
            </div>

            <div style="margin-top: 50px; padding: 50px; background: linear-gradient(135deg, var(--primary-dark) 0%, #153661 100%); color: white; border-radius: 20px; text-align: center; box-shadow: 0 15px 35px rgba(10,35,66,0.2); position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50px; left: -50px; width: 200px; height: 200px; background: rgba(255,255,255,0.02); border-radius: 50%;"></div>
                <div style="position: absolute; bottom: -50px; right: -50px; width: 150px; height: 150px; background: rgba(212,175,55,0.05); border-radius: 50%;"></div>

                <div style="position: relative; z-index: 1;">
                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; font-size: 2.5rem; color: var(--accent-gold);">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 style="color: var(--accent-gold); margin-bottom: 15px; font-size: 2rem; font-weight: 800; letter-spacing: 1px;">Centralized Cyber Help Desk</h3>
                    <a href="mailto:cyber-help@vardhmanfinance.com" class="email-link" style="color: white; font-size: 1.3rem; text-decoration: underline; text-underline-offset: 6px; margin-bottom: 20px; font-weight: 700; transition: color 0.3s ease;">cyber-help@vardhmanfinance.com</a>
                    <p style="font-size: 1.1rem; opacity: 0.8; margin: 0; max-width: 700px; margin: 0 auto; line-height: 1.6;">An elite, dedicated task force explicitly mandated to provide extremely rapid digital protection and advanced cybersecurity assistance instantly for both our expansive customer base and critical investor syndicate.</p>
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