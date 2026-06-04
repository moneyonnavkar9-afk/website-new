<?php
$page_title = 'Insurance Charges - Secure Your Private Funding | Vardhman Finance';
$meta_desc = 'Learn about the insurance charges applicable to secure your private funding and cheque basis facilities. Protect your assets and business continuity.';
$base_path = './';
require_once 'header.php';
?>

<style>
    .charges-hero {
        background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 100%);
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
        background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23d4af37\' fill-opacity=\'0.1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');
        z-index: 0;
    }
    .charges-hero .container {
        position: relative;
        z-index: 1;
    }
    .charges-title {
        font-size: 3rem;
        margin-bottom: 20px;
        color: var(--accent-gold);
    }
    .charges-subtitle {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 30px;
        color: #e0e0e0;
    }
    .icon-highlight {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        background: rgba(255,255,255,0.1);
        border: 2px solid var(--accent-gold);
        border-radius: 50%;
        font-size: 2.5rem;
        color: var(--accent-gold);
        backdrop-filter: blur(5px);
        margin-bottom: 20px;
    }
    .content-section {
        padding: 80px 0;
        background: #f8f9fa;
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
        color: var(--primary-dark);
        margin-bottom: 20px;
        font-size: 2rem;
        border-bottom: 2px solid var(--accent-gold);
        padding-bottom: 10px;
        display: inline-block;
    }
    .main-article p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    .shield-box {
        background: linear-gradient(to right, rgba(212,175,55,0.1), transparent);
        border-left: 4px solid var(--accent-gold);
        padding: 25px;
        margin: 30px 0;
        border-radius: 0 8px 8px 0;
    }
    .shield-box h3 {
        color: var(--primary-dark);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    .shield-box h3 i {
        margin-right: 10px;
        color: var(--accent-gold);
        font-size: 1.5rem;
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
        color: var(--primary-dark);
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
        background: var(--light-bg);
        color: var(--accent-gold);
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
        .charges-title {
            font-size: 2.2rem;
        }
    }
</style>

<div class="charges-hero">
    <div class="container">
        <div class="icon-highlight">
            <i class="fas fa-shield-alt"></i>
        </div>
        <h1 class="charges-title">Insurance Charges</h1>
        <p class="charges-subtitle">Securing your private funding with comprehensive coverage for long-term stability.</p>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="main-article">
                <h2>The Importance of Insurance in Private Funding</h2>
                <p>When engaging in <strong>Private Funding</strong>, securing the capital structure is paramount. Insurance charges are implemented to provide a safety net, ensuring that unexpected life events or business disruptions do not compromise the integrity of the funding arrangement. This protective measure is standard practice for significant cheque basis funding operations.</p>

                <p>The insurance premium is strategically calculated based on the total funding amount and the profile of the primary applicant. By incorporating insurance into the funding structure, both the provider and the recipient gain immense peace of mind, knowing that the capital is safeguarded against unforeseen liabilities.</p>

                <div class="shield-box">
                    <h3><i class="fas fa-user-shield"></i> Why is this Charge Necessary?</h3>
                    <p style="margin-bottom: 0;">In the realm of high-value cheque basis funding, risk mitigation is essential. The insurance charge covers the premium for a policy that guarantees the funding amount in severe circumstances, such as critical illness or unforeseen insolvency, preventing the burden from falling entirely on your estate or business partners.</p>
                </div>

                <h2>How the Charge is Calculated</h2>
                <p>Insurance charges are not arbitrary. They reflect the actual cost of securing a robust policy from our trusted insurance partners. The exact figure depends on several variables, including the duration of the funding term, the quantum of capital extended, and the risk categorization of the enterprise or individual seeking the private funding.</p>

                <p>Unlike standard processing fees, the insurance charge provides a direct, tangible benefit to you by securing the financial legacy of your business operations. This ensures that the private funding mechanism remains a tool for growth, rather than a potential liability during challenging times.</p>

                <div style="margin-top: 40px; text-align: center;">
                    <a href="<?php echo $base_path; ?>contact.php" class="btn-hero btn-gold">Discuss Insurance Options</a>
                </div>
            </div>

            <div class="sidebar">
                <h3>Funding Charges & Information</h3>
                <ul class="sidebar-links">
                    <li><a href="service-charges.php"><i class="fas fa-chevron-right"></i> Service Charges (3% - 6%)</a></li>
                    <li><a href="insurance-charges.php" class="active"><i class="fas fa-chevron-right"></i> Insurance Charges</a></li>
                    <li><a href="other-charges.php"><i class="fas fa-chevron-right"></i> Other Possible Charges</a></li>
                    <li><a href="processing-fees.php"><i class="fas fa-chevron-right"></i> Processing Fees</a></li>
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
