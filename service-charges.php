<?php
$page_title = 'Service Charges - Private Funding | Vardhman Finance';
$meta_desc = 'Understanding the service charges for private funding and cheque basis funding. Learn about our 3% to 6% transparent service fee structure.';
$base_path = './';
require_once 'header.php';
?>

<style>
    .charges-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #1a2a40 100%);
        padding: 100px 0 60px;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .charges-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, transparent 60%);
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
    .rate-highlight {
        display: inline-block;
        background: rgba(255,255,255,0.1);
        border: 1px solid var(--accent-gold);
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--accent-gold);
        backdrop-filter: blur(5px);
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
    .feature-box {
        background: var(--light-bg);
        border-left: 4px solid var(--accent-gold);
        padding: 20px;
        margin: 30px 0;
        border-radius: 0 8px 8px 0;
    }
    .feature-box h3 {
        color: var(--primary-dark);
        margin-bottom: 10px;
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
        <h1 class="charges-title">Service Charges</h1>
        <p class="charges-subtitle">Transparent and competitive service fees for Private Funding and Cheque Basis solutions.</p>
        <div class="rate-highlight">
            <i class="fas fa-percentage"></i> 3% to 6%
        </div>
    </div>
</div>

<!-- NEW ANIMATED SECTION: Transparency Guarantee -->
<div class="section-padding" style="background: white; border-bottom: 1px solid #eee;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 slide-in-left">
                <div class="position-relative d-inline-block">
                    <div class="animate-pulse-soft position-absolute" style="top: -20px; left: -20px; width: 100px; height: 100px; background: rgba(33, 196, 140, 0.2); border-radius: 50%; z-index: 1;"></div>
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=600&q=80" alt="Clear Contract" class="img-fluid rounded-3 position-relative" style="z-index: 2; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border: 8px solid white;">
                    <div class="animate-float-soft position-absolute" style="bottom: 20px; right: -30px; background: var(--primary-dark); color: white; padding: 15px 25px; border-radius: 10px; z-index: 3; box-shadow: 0 10px 25px rgba(0,0,0,0.2); border-left: 4px solid var(--emerald);">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-shield-check text-success me-3" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="mb-0 text-white">0% Hidden Fees</h5>
                                <p class="mb-0 text-muted" style="font-size: 0.85rem;">What you see is what you pay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 slide-in-right mt-5 mt-lg-0">
                <h2 style="color: var(--primary-dark); margin-bottom: 20px;">The Vardhman <span style="color: var(--accent-gold);">Transparency Guarantee</span></h2>
                <p style="font-size: 1.1rem; color: #555; margin-bottom: 25px; line-height: 1.8;">We believe that the cost of capital should be as clear as the capital itself. Our Service Charge (3% to 6%) is fully disclosed in your initial term sheet, long before any commitment is made.</p>

                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 15px; display: flex; align-items: start;">
                        <i class="fas fa-check-circle mt-1 me-3" style="color: var(--emerald); font-size: 1.2rem;"></i>
                        <div>
                            <strong style="color: var(--primary-dark); display: block; margin-bottom: 5px;">No Last-Minute Deductions</strong>
                            <span style="color: #666; font-size: 0.95rem;">Your disbursed amount is exactly what was agreed upon.</span>
                        </div>
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: start;">
                        <i class="fas fa-check-circle mt-1 me-3" style="color: var(--emerald); font-size: 1.2rem;"></i>
                        <div>
                            <strong style="color: var(--primary-dark); display: block; margin-bottom: 5px;">Clear Amortization Schedules</strong>
                            <span style="color: #666; font-size: 0.95rem;">Every EMI breakdown is provided upfront in PDF format.</span>
                        </div>
                    </li>
                    <li style="display: flex; align-items: start;">
                        <i class="fas fa-check-circle mt-1 me-3" style="color: var(--emerald); font-size: 1.2rem;"></i>
                        <div>
                            <strong style="color: var(--primary-dark); display: block; margin-bottom: 5px;">Flat Fee Structure</strong>
                            <span style="color: #666; font-size: 0.95rem;">The service charge covers end-to-step processing. No multiple layered fees.</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="main-article slide-in-left">
                <h2>Understanding Service Charges</h2>
                <p>When securing <strong>Private Funding</strong> or operating on a <strong>Cheque Basis</strong>, a standard service charge is applicable to facilitate the seamless execution and swift processing of your capital requirements. At Vardhman Finance, we pride ourselves on absolute transparency regarding all associated costs.</p>

                <p>Our service charges typically range between <strong>3% and 6%</strong> of the total funding amount. This specific percentage is determined based on the complexity of the funding structure, the risk assessment profile, and the speed at which the capital needs to be deployed.</p>

                <!-- NEW ANIMATED SECTION: Charge Breakdown Pie Layout -->
                <div class="my-5 p-4 zoom-in" style="background: var(--primary-dark); border-radius: 12px; color: white; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--accent-gold); margin-bottom: 25px; text-align: center;">What Does The 3-6% Cover?</h3>
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <div class="position-relative mx-auto" style="width: 180px; height: 180px;">
                                <!-- CSS Pie Chart representation -->
                                <div class="animate-pulse-soft" style="width: 100%; height: 100%; border-radius: 50%; background: conic-gradient(var(--accent-gold) 0% 40%, var(--emerald) 40% 75%, #7dc8ff 75% 100%);"></div>
                                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 120px; height: 120px; background: var(--primary-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <span style="font-size: 1.8rem; font-weight: bold; color: white;">100%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li style="margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="display: inline-block; width: 16px; height: 16px; background: var(--accent-gold); border-radius: 4px; margin-right: 15px;"></span>
                                    <div>
                                        <strong style="display: block; color: white;">Due Diligence & Underwriting (40%)</strong>
                                        <span style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Financial analysis, cashflow modeling, and risk assessment.</span>
                                    </div>
                                </li>
                                <li style="margin-bottom: 15px; display: flex; align-items: center;">
                                    <span style="display: inline-block; width: 16px; height: 16px; background: var(--emerald); border-radius: 4px; margin-right: 15px;"></span>
                                    <div>
                                        <strong style="display: block; color: white;">Legal & Compliance (35%)</strong>
                                        <span style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Agreement drafting, e-stamp duties, and regulatory checks.</span>
                                    </div>
                                </li>
                                <li style="display: flex; align-items: center;">
                                    <span style="display: inline-block; width: 16px; height: 16px; background: #7dc8ff; border-radius: 4px; margin-right: 15px;"></span>
                                    <div>
                                        <strong style="display: block; color: white;">Operational Execution (25%)</strong>
                                        <span style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Platform tech, field verification (if required), and rapid payout routing.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="feature-box slide-in-right">
                    <h3><i class="fas fa-check-circle" style="color: var(--accent-gold);"></i> Comprehensive Facilitation</h3>
                    <p style="margin-bottom: 0;">The service charge encompasses the comprehensive evaluation of your business profile, the structuring of the private funding arrangement, operational facilitation, and the expedited processing required for cheque basis execution.</p>
                </div>

                <h2>Why a Percentage-Based Fee?</h2>
                <p>A percentage-based service fee ranging from 3% to 6% ensures that the cost of facilitation is directly proportionate to the scale of the funding provided. This structure aligns our operational efforts with your capital needs, ensuring that whether you require a modest operational boost or a substantial capital injection, the service fee remains equitable and standard within the private funding sector.</p>

                <p>Unlike traditional institutions that may present a complex web of hidden fees, our approach to private funding is straightforward. The agreed-upon service charge is communicated upfront before any financial commitments are finalized, ensuring you have a clear understanding of the net capital you will receive.</p>

                <div style="margin-top: 40px; text-align: center;">
                    <a href="<?php echo $base_path; ?>contact.php" class="btn-hero btn-gold">Consult an Expert</a>
                </div>
            </div>

            <div class="sidebar slide-in-right">
                <h3>Funding Charges & Information</h3>
                <ul class="sidebar-links">
                    <li><a href="service-charges.php" class="active"><i class="fas fa-chevron-right"></i> Service Charges (3% - 6%)</a></li>
                    <li><a href="insurance-charges.php"><i class="fas fa-chevron-right"></i> Insurance Charges</a></li>
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
