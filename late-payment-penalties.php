<?php
$page_title = 'Late Payment Penalties - Private Funding | Vardhman Finance';
$meta_desc = 'Understand the 2% to 5% late payment penalties associated with private funding and cheque basis financing. Maintain a good repayment record to avoid extra charges.';
$base_path = './';
require_once 'header.php';
?>

<style>
    .charges-hero {
        background: linear-gradient(135deg, #c31432 0%, #240b36 100%);
        padding: 100px 0 60px;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .charges-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,100 C20,0 50,0 100,100 Z" fill="rgba(255,255,255,0.05)"/></svg>') no-repeat center bottom;
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
        background: rgba(0,0,0,0.3);
        border: 2px solid #e74c3c;
        padding: 15px 30px;
        border-radius: 8px;
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        backdrop-filter: blur(5px);
    }
    .content-section {
        padding: 80px 0;
        background: #fbfbfb;
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
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-left: 5px solid #c31432;
    }
    .main-article h2 {
        color: #240b36;
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
    .alert-box {
        background: #fdf3f4;
        border: 1px solid #f5c6cb;
        color: #721c24;
        padding: 20px;
        margin: 30px 0;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .alert-box i {
        font-size: 2rem;
        color: #c31432;
    }
    .sidebar {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        align-self: start;
        position: sticky;
        top: 100px;
    }
    .sidebar h3 {
        color: #240b36;
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
        background: #fdf3f4;
        color: #c31432;
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
        <h1 class="charges-title">Late Payment Penalties</h1>
        <p class="charges-subtitle">Information regarding 2% to 5% late payment penalties applied to delayed private funding and cheque basis repayments.</p>
        <div class="rate-highlight">
            <i class="fas fa-exclamation-triangle" style="color: #e74c3c;"></i> 2% to 5% Penalties
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="main-article">
                <h2>Consequences of Delayed Repayments</h2>
                <p>When utilizing <strong>Private Funding</strong> or a <strong>Cheque Basis</strong> arrangement, adhering to the agreed-upon repayment schedule is critical. Delays in honoring these commitments disrupt the capital cycle and introduce operational risk. To mitigate this, standard late payment penalties are enforced when scheduled payments are not met by the due date.</p>

                <p>These late payment penalties generally range from <strong>2% to 5%</strong> per month (or part thereof) on the overdue amount. The specific penalty rate applicable to your 2% to 5% bracket is clearly defined in your initial funding agreement.</p>

                <div class="alert-box">
                    <i class="fas fa-clock"></i>
                    <div>
                        <strong style="display: block; font-size: 1.1rem; margin-bottom: 5px;">Timeliness is Crucial</strong>
                        The 2% to 5% penalty is applied strictly to the overdue principal or scheduled instalment amount, calculated from the day following the missed due date.
                    </div>
                </div>

                <h2>Why the 2% to 5% Penalty Exists</h2>
                <p>In the context of private funding, capital liquidity is paramount. The 2% to 5% late payment penalty serves a dual purpose: first, it compensates the funding provider for the administrative burden and opportunity cost associated with the delayed capital; second, it acts as a strong deterrent against financial delinquency, encouraging strict adherence to the cheque basis contract.</p>

                <p>We strongly advise all clients to maintain open communication. If you anticipate a challenge in meeting a scheduled cheque basis repayment, contacting us prior to the due date is always preferable to simply absorbing the 2% to 5% late payment penalties. Proactive communication can sometimes lead to temporary accommodations, although the penalty structure remains standard policy.</p>

                <div style="margin-top: 40px; text-align: center;">
                    <a href="<?php echo $base_path; ?>contact.php" class="btn-hero" style="background: #c31432; color: white; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: bold;">Contact Support</a>
                </div>
            </div>

            <div class="sidebar">
                <h3>Funding Charges & Information</h3>
                <ul class="sidebar-links">
                    <li><a href="service-charges.php"><i class="fas fa-chevron-right"></i> Service Charges (3% - 6%)</a></li>
                    <li><a href="insurance-charges.php"><i class="fas fa-chevron-right"></i> Insurance Charges</a></li>
                    <li><a href="other-charges.php"><i class="fas fa-chevron-right"></i> Other Possible Charges</a></li>
                    <li><a href="processing-fees.php"><i class="fas fa-chevron-right"></i> Processing Fees</a></li>
                    <li><a href="late-payment-penalties.php" class="active"><i class="fas fa-chevron-right"></i> Late Payment Penalties</a></li>
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
