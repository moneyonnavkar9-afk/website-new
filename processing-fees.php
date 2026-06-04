<?php
$page_title = 'Processing Fees - Private Funding | Vardhman Finance';
$meta_desc = 'Learn about the processing fees for private funding and cheque basis financing, typically ranging from 2% to 5% to cover thorough credit assessment and administrative costs.';
$base_path = './';
require_once 'header.php';
?>

<style>
    .charges-hero {
        background: linear-gradient(135deg, #182848 0%, #4b6cb7 100%);
        padding: 100px 0 60px;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .charges-hero::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50%;
        background: linear-gradient(to top, rgba(255,255,255,0.1), transparent);
        z-index: 0;
    }
    .charges-hero .container {
        position: relative;
        z-index: 1;
    }
    .charges-title {
        font-size: 3rem;
        margin-bottom: 20px;
        color: #fff;
    }
    .charges-subtitle {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
        color: rgba(255,255,255,0.9);
    }
    .rate-highlight {
        display: inline-block;
        background: rgba(255,255,255,0.15);
        border: 1px solid rgba(255,255,255,0.4);
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        backdrop-filter: blur(5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    .content-section {
        padding: 80px 0;
        background: #f4f6f9;
    }
    .content-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }
    .main-article {
        background: white;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .main-article h2 {
        color: #182848;
        margin-bottom: 20px;
        font-size: 2rem;
        position: relative;
        padding-bottom: 10px;
    }
    .main-article h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: #4b6cb7;
    }
    .main-article p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    .info-card {
        background: #e8f0fe;
        border: 1px solid #d2e3fc;
        padding: 25px;
        margin: 30px 0;
        border-radius: 8px;
        display: flex;
        gap: 20px;
        align-items: start;
    }
    .info-card i {
        font-size: 2rem;
        color: #1a73e8;
        margin-top: 5px;
    }
    .info-card-content h3 {
        color: #182848;
        margin-bottom: 10px;
        font-size: 1.2rem;
    }
    .sidebar {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        align-self: start;
        position: sticky;
        top: 100px;
    }
    .sidebar h3 {
        color: #182848;
        margin-bottom: 20px;
        font-size: 1.3rem;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }
    .sidebar-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sidebar-links li {
        margin-bottom: 12px;
    }
    .sidebar-links a {
        display: flex;
        align-items: center;
        color: #555;
        text-decoration: none;
        padding: 10px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }
    .sidebar-links a:hover, .sidebar-links a.active {
        background: #e8f0fe;
        color: #1a73e8;
        padding-left: 15px;
    }
    .sidebar-links a i {
        margin-right: 10px;
        font-size: 0.9rem;
    }
    @media (max-width: 992px) {
        .content-grid {
            grid-template-columns: 1fr;
        }
        .sidebar {
            position: static;
        }
    }
</style>

<div class="charges-hero">
    <div class="container">
        <h1 class="charges-title">Processing Fees</h1>
        <p class="charges-subtitle">Transparent processing fees ranging from 2% to 5% to facilitate thorough evaluation and structuring of your cheque basis funding.</p>
        <div class="rate-highlight">
            <i class="fas fa-cog fa-spin" style="margin-right: 10px;"></i> 2% to 5% Range
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="main-article">
                <h2>The Purpose of Processing Fees</h2>
                <p>In the landscape of <strong>Private Funding</strong>, executing a <strong>Cheque Basis</strong> transaction requires meticulous due diligence, rigorous credit assessment, and comprehensive administrative structuring. To cover the operational costs associated with these critical steps, a standard processing fee is applied to all approved funding requests.</p>

                <p>This fee typically ranges from <strong>2% to 5%</strong> of the total private funding amount. The exact percentage within this range is determined by factors such as the complexity of your financial profile, the volume of documentation that must be analyzed, and the specialized resources required to finalize the cheque basis transaction.</p>

                <div class="info-card">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <div class="info-card-content">
                        <h3>What is Included in the Processing Fee?</h3>
                        <p style="margin-bottom: 0; color: #555; font-size: 1rem;">The 2% to 5% processing fee directly funds the internal mechanisms required to approve your request. This includes detailed financial audits, rigorous background and credit evaluations, administrative overhead, and the legal structuring of your specific private funding agreement.</p>
                    </div>
                </div>

                <h2>Non-Refundable Evaluation Standard</h2>
                <p>It is important to understand that processing fees are generally non-refundable once the evaluation process has commenced. The effort and resources expended by our credit assessment team occur regardless of the final approval outcome. However, in most successful private funding and cheque basis executions, this fee is simply deducted from the disbursed capital, meaning no upfront out-of-pocket expense is required from your end.</p>

                <p>By maintaining a transparent 2% to 5% fee structure, we ensure that our operational standards remain exceptionally high, allowing us to deploy private funding efficiently and securely.</p>

                <div style="margin-top: 40px; text-align: center;">
                    <a href="<?php echo $base_path; ?>contact.php" class="btn-hero" style="background: #1a73e8; color: white; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: bold;">Inquire About Processing Costs</a>
                </div>
            </div>

            <div class="sidebar">
                <h3>Funding Charges & Information</h3>
                <ul class="sidebar-links">
                    <li><a href="service-charges.php"><i class="fas fa-chevron-right"></i> Service Charges (3% - 6%)</a></li>
                    <li><a href="insurance-charges.php"><i class="fas fa-chevron-right"></i> Insurance Charges</a></li>
                    <li><a href="other-charges.php"><i class="fas fa-chevron-right"></i> Other Possible Charges</a></li>
                    <li><a href="processing-fees.php" class="active"><i class="fas fa-chevron-right"></i> Processing Fees</a></li>
                    <li><a href="late-payment-penalties.php"><i class="fas fa-chevron-right"></i> Late Payment Penalties</a></li>
                    <li><a href="legal-documentation-charges.php"><i class="fas fa-chevron-right"></i> Legal & Documentation</a></li>
                    <li><a href="foreclosure-charges.php"><i class="fas fa-chevron-right"></i> Foreclosure Charges</a></li>
                    <li><a href="cheque-bounce-penalties.php"><i class="fas fa-chevron-right"></i> Cheque Bounce Penalties</a></li>
                    <li><a href="verification-charges.php"><i class="fas fa-chevron-right"></i> Verification Charges</a></li>
                    <li><a href="stamp-duty-charges.php"><i class="fas fa-chevron-right"></i> Stamp Duty / E-Sign</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
