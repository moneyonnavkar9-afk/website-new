<?php
$page_title = "Company Overview | Vardhman Finance";
$meta_desc = "Vardhman Financial Services operates as a leading financial facilitator and private funding network, driving rapid financial networking across 24 states in India.";
$meta_keywords = "Company Overview, Vardhman Finance, Private Funding, Financial Facilitator, Networking, Cheque Basis";
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
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    .feature-box {
        background: #f8fafc;
        padding: 30px;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        transition: transform 0.3s ease;
    }
    .feature-box:hover {
        transform: translateY(-5px);
        border-color: var(--accent-gold);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .feature-box i {
        font-size: 2rem;
        color: var(--emerald);
        margin-bottom: 15px;
    }
    .feature-box h4 {
        color: var(--primary-dark);
        margin-bottom: 10px;
        font-size: 1.2rem;
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
        <div class="detail-icon"><i class="fas fa-building"></i></div>
        <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 15px;">Company Overview</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">Building a resilient and expansive private financial network across India.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="content-card">
            <h2>The Vardhman Foundation</h2>
            <p>Vardhman Financial Services is unequivocally recognized as one of the most rapidly growing private financial service networks in India. We specialize in providing highly structured Private Funding Unsecured Cheque Basis Solutions, meticulously designed for both growing businesses and individuals in need of robust financial support.</p>

            <p>At our core, the company operates as an elite financial service facilitator and a massive private funding network. Our primary function is bridging the crucial gap between highly verified, capable investors and legitimate customers who require immediate working capital or strategic business funding.</p>

            <h2 style="margin-top: 50px;">Our Core Objectives</h2>
            <p>Our operational mandate is driven by a singular focus: delivering excellence in financial facilitation. We achieve this through our uncompromising core objectives:</p>

            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-rocket"></i>
                    <h4>Fast Financial Solutions</h4>
                    <p style="font-size: 0.95rem; margin: 0;">In the modern economy, timing is critical. We guarantee rapid processing and evaluation to ensure working capital reaches businesses exactly when they need it most.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-search-dollar"></i>
                    <h4>Absolute Transparency</h4>
                    <p style="font-size: 0.95rem; margin: 0;">We operate with completely open ledgers regarding our processes, fees, and timelines. No hidden terms, no sudden surprises—just pure financial clarity.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Secure Networking</h4>
                    <p style="font-size: 0.95rem; margin: 0;">Security is our bedrock. We employ advanced verification protocols to safeguard the identities and capital of both our investors and our customers.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-headset"></i>
                    <h4>Reliable Support</h4>
                    <p style="font-size: 0.95rem; margin: 0;">From application to final settlement, our dedicated operational, legal, and cyber teams provide unwavering support at every single step of the journey.</p>
                </div>
            </div>

            <div style="margin-top: 50px; padding: 30px; background: linear-gradient(135deg, rgba(212,175,55,0.1) 0%, rgba(212,175,55,0.02) 100%); border-left: 5px solid var(--accent-gold); border-radius: 0 12px 12px 0;">
                <h3 style="color: var(--primary-dark); margin-bottom: 15px;"><i class="fas fa-map-marked-alt" style="color: var(--accent-gold);"></i> Expansive National Footprint</h3>
                <p style="margin: 0; font-size: 1.05rem;">Backed by an incredibly strong operational structure and an exponentially growing financial network, Vardhman Financial Services is currently active and fully operational in <strong>24 states across India</strong>, bringing structured financial solutions to millions.</p>
            </div>

            <div style="text-align: center; margin-top: 50px;">
                <a href="company-trust-report.php" class="btn-hero" style="background: var(--light-bg); color: var(--primary-dark); border: 1px solid #e2e8f0; padding: 12px 30px; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fas fa-arrow-left"></i> Back to Trust Report
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>