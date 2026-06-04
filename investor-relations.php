<?php
$page_title = 'Investor Relations | Vardhman Finance';
$meta_description = 'Information for investors partnering with Vardhman Finance. We facilitate secure, high-yield private funding opportunities on a cheque basis.';
require_once 'header.php';
?>

<style>
    .investor-hero {
        background: linear-gradient(rgba(10, 37, 64, 0.9), rgba(10, 37, 64, 0.9)), url('assets/images/investor-bg.jpg') center/cover;
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    .investor-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        color: var(--accent-gold);
        margin-bottom: 20px;
    }
    .proposition-section {
        padding: 80px 0;
        background: #fff;
    }
    .prop-box {
        border: 1px solid #e0e0e0;
        padding: 40px;
        border-radius: 8px;
        text-align: center;
        height: 100%;
        transition: box-shadow 0.3s;
    }
    .prop-box:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    .prop-box i {
        font-size: 3rem;
        color: var(--primary);
        margin-bottom: 20px;
    }
    .intermediary-notice {
        background: #f8f9fa;
        border-left: 5px solid var(--accent-gold);
        padding: 30px;
        margin: 40px 0;
        font-style: italic;
    }
    .contact-investor {
        background: var(--primary-dark);
        color: white;
        padding: 60px 0;
        text-align: center;
    }
</style>

<section class="investor-hero">
    <div class="container">
        <h1>Investor Relations</h1>
        <p class="lead max-w-800 mx-auto">Partner with India's premier financial facilitator. We curate and present highly vetted private funding opportunities secured via formal cheque basis transactions.</p>
    </div>
</section>

<section class="proposition-section">
    <div class="container">
        <h2 class="text-center section-title mb-5">Our Value Proposition to Investors</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="prop-box">
                    <i class="fas fa-search-dollar"></i>
                    <h3>Rigorous Vetting</h3>
                    <p>We conduct deep preliminary assessments on all businesses seeking capital, ensuring you are presented only with proposals that meet strict risk-reward criteria.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prop-box">
                    <i class="fas fa-file-signature"></i>
                    <h3>Cheque Basis Security</h3>
                    <p>Our focus on cheque basis funding means every transaction is formally documented, providing a clear legal framework and enhanced security for your capital deployment.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prop-box">
                    <i class="fas fa-chart-line"></i>
                    <h3>Portfolio Diversification</h3>
                    <p>Gain access to a diverse range of industries and credit profiles, allowing you to diversify your private funding portfolio efficiently through our facilitation platform.</p>
                </div>
            </div>
        </div>

        <div class="intermediary-notice">
            <strong>Important Legal Notice:</strong> Vardhman Financial Services operates strictly as an intermediary and Financial Service Provider. We facilitate the connection between vetted borrowers and private investors. We do not hold investment funds, nor do we directly lend capital. All private funding transactions are executed directly between the investor and the borrower, facilitated by our comprehensive documentation and structuring services.
        </div>
    </div>
</section>

<section class="contact-investor">
    <div class="container">
        <h2 style="color: var(--accent-gold); font-family: 'Playfair Display', serif;">Explore Partnership Opportunities</h2>
        <p class="mb-4">Are you representing an NBFC or acting as a private investor looking for structured funding opportunities?</p>
        <a href="mailto:investors@vardhmanfinance.com" class="btn-hero btn-gold">Contact Investor Relations</a>
    </div>
</section>

<?php require_once 'footer.php'; ?>
