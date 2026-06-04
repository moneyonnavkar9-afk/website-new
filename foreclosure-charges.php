<?php
$page_title = 'Foreclosure & Prepayment Charges - Private Funding | Vardhman Finance';
$meta_desc = 'Discover the 2% to 5% foreclosure and prepayment charges that may apply if you choose to settle your private funding or cheque basis account early.';
$base_path = './';
require_once 'header.php';
?>

<style>
    .charges-hero {
        background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
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
        height: 100px;
        background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="rgba(255,255,255,0.05)"/></svg>') no-repeat center bottom;
        background-size: cover;
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
        background: rgba(255,255,255,0.1);
        border: 1px solid #7cb342;
        padding: 15px 30px;
        border-radius: 5px;
        font-size: 1.5rem;
        font-weight: 700;
        color: #7cb342;
        backdrop-filter: blur(5px);
    }
    .content-section {
        padding: 80px 0;
        background: #fdfdfd;
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
        border-top: 5px solid #203a43;
    }
    .main-article h2 {
        color: #203a43;
        margin-bottom: 20px;
        font-size: 2rem;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    }
    .main-article p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    .foreclosure-box {
        background: #f1f8e9;
        padding: 25px;
        margin: 30px 0;
        border-left: 5px solid #7cb342;
        border-radius: 0 5px 5px 0;
    }
    .foreclosure-box h3 {
        color: #33691e;
        margin-bottom: 15px;
        font-size: 1.2rem;
        display: flex;
        align-items: center;
    }
    .foreclosure-box h3 i {
        margin-right: 10px;
        color: #7cb342;
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
        color: #203a43;
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
        background: #f1f8e9;
        color: #33691e;
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
        <h1 class="charges-title">Foreclosure Charges</h1>
        <p class="charges-subtitle">Understand the 2% to 5% foreclosure charges applied when electing to settle your private funding or cheque basis account ahead of schedule.</p>
        <div class="rate-highlight">
            <i class="fas fa-hand-holding-usd"></i> 2% to 5% Early Settlement
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="main-article">
                <h2>The Cost of Early Settlement</h2>
                <p>A significant advantage of <strong>Private Funding</strong> is flexibility. Should your business secure an unexpected influx of capital, you may wish to close your <strong>Cheque Basis</strong> funding account early. Foreclosure and prepayment charges address the financial impact of this early settlement.</p>

                <p>These foreclosure charges generally fall between <strong>2% to 5%</strong> on the outstanding principal balance. The specific percentage within this 2% to 5% band is determined by how early in the funding lifecycle the settlement is requested, and the terms set out in your original private funding agreement.</p>

                <div class="foreclosure-box">
                    <h3><i class="fas fa-calendar-check"></i> Why Does the 2% to 5% Charge Exist?</h3>
                    <p style="margin-bottom: 0;">When private funding is extended, the capital allocation is modeled on a specific return profile over an agreed timeline. Foreclosing early disrupts this model. The 2% to 5% charge helps offset the administrative costs of recalculating and closing the account, as well as the loss of anticipated interest on the cheque basis structure.</p>
                </div>

                <h2>Navigating Prepayment Policies</h2>
                <p>Some private funding agreements include a lock-in period, during which foreclosure is either restricted or incurs the maximum 5% charge. Conversely, settling the cheque basis account closer to its natural conclusion typically incurs the minimum 2% fee.</p>

                <p>We encourage clients to contact our settlement desk before deciding to prepay. A complete calculation of the remaining balance, adjusted for the 2% to 5% foreclosure charge, will be provided, ensuring that you can make an informed financial decision regarding your private funding account closure.</p>

                <div style="margin-top: 40px; text-align: center;">
                    <a href="<?php echo $base_path; ?>contact.php" class="btn-hero" style="background: #203a43; color: white; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: bold;">Request Foreclosure Quote</a>
                </div>
            </div>

            <div class="sidebar">
                <h3>Funding Charges & Information</h3>
                <ul class="sidebar-links">
                    <li><a href="service-charges.php"><i class="fas fa-chevron-right"></i> Service Charges (3% - 6%)</a></li>
                    <li><a href="insurance-charges.php"><i class="fas fa-chevron-right"></i> Insurance Charges</a></li>
                    <li><a href="other-charges.php"><i class="fas fa-chevron-right"></i> Other Possible Charges</a></li>
                    <li><a href="processing-fees.php"><i class="fas fa-chevron-right"></i> Processing Fees</a></li>
                    <li><a href="late-payment-penalties.php"><i class="fas fa-chevron-right"></i> Late Payment Penalties</a></li>
                    <li><a href="legal-documentation-charges.php"><i class="fas fa-chevron-right"></i> Legal & Documentation</a></li>
                    <li><a href="foreclosure-charges.php" class="active"><i class="fas fa-chevron-right"></i> Foreclosure Charges</a></li>
                    <li><a href="cheque-bounce-penalties.php"><i class="fas fa-chevron-right"></i> Cheque Bounce Penalties</a></li>
                    <li><a href="verification-charges.php"><i class="fas fa-chevron-right"></i> Verification Charges</a></li>
                    <li><a href="stamp-duty-charges.php"><i class="fas fa-chevron-right"></i> Stamp Duty / E-Sign</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
