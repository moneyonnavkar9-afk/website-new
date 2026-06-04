<?php
$page_title = 'Why Choose Us | Vardhman Finance';
$meta_description = 'Discover why Vardhman Finance is the preferred facilitator for private funding. Expertise, transparency, and tailored financial solutions for your business.';
require_once 'header.php';
?>

<style>
    .why-hero {
        background: url('assets/images/why-us-bg.jpg') center/cover no-repeat;
        position: relative;
        padding: 100px 0;
        color: white;
        text-align: center;
    }
    .why-hero::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(10, 37, 64, 0.85); /* Primary dark overlay */
    }
    .why-hero .container {
        position: relative;
        z-index: 2;
    }
    .why-hero h1 {
        font-size: 3.5rem;
        font-family: 'Playfair Display', serif;
        margin-bottom: 20px;
    }
    .reasons-grid {
        padding: 80px 0;
        background: #fff;
    }
    .reason-item {
        padding: 40px 30px;
        text-align: center;
        border: 1px solid #eee;
        border-radius: 8px;
        transition: all 0.3s ease;
        height: 100%;
    }
    .reason-item:hover {
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        border-color: var(--accent-gold);
    }
    .reason-icon {
        width: 80px;
        height: 80px;
        background: rgba(212, 175, 55, 0.1);
        color: var(--accent-gold);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 25px;
    }
    .reason-item h3 {
        color: var(--primary-dark);
        margin-bottom: 15px;
        font-size: 1.4rem;
    }
    .reason-item p {
        color: var(--text-muted);
        line-height: 1.6;
    }
    .trust-banner {
        background: var(--primary-dark);
        color: white;
        padding: 60px 0;
        text-align: center;
    }
    .trust-banner h2 {
        color: var(--accent-gold);
        font-family: 'Playfair Display', serif;
    }
</style>

<section class="why-hero">
    <div class="container">
        <h1>Why Choose Vardhman Finance?</h1>
        <p class="lead">Your trusted intermediary for private funding and specialized financial facilitation.</p>
    </div>
</section>

<!-- NEW ANIMATED SECTION: Competitor Comparison -->
<section class="section-padding" style="background: var(--light-bg); overflow: hidden;">
    <div class="container">
        <div class="section-header text-center zoom-in">
            <h2>The Vardhman Difference</h2>
            <p>See how our facilitation model compares to traditional avenues.</p>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-5 slide-in-left">
                <div style="background: white; border-radius: 15px; padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 5px solid #d9534f;">
                    <h3 style="color: #d9534f; margin-bottom: 20px; text-align: center;">Traditional Banks</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: #d9534f; font-size: 1.2rem;"></i>
                            <span style="color: #666;">Rigid underwriting models</span>
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: #d9534f; font-size: 1.2rem;"></i>
                            <span style="color: #666;">30-60 day processing times</span>
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: #d9534f; font-size: 1.2rem;"></i>
                            <span style="color: #666;">High collateral requirements</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: #d9534f; font-size: 1.2rem;"></i>
                            <span style="color: #666;">Standardized loan products</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 text-center my-4 my-lg-0 zoom-in" style="transition-delay: 0.2s;">
                <div class="animate-pulse-soft mx-auto" style="width: 60px; height: 60px; background: var(--primary-dark); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 1.2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                    VS
                </div>
            </div>

            <div class="col-lg-5 slide-in-right" style="transition-delay: 0.4s;">
                <div style="background: var(--primary-dark); border-radius: 15px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.15); border-top: 5px solid var(--accent-gold); position: relative; transform: scale(1.05); z-index: 2;">
                    <div style="position: absolute; top: -15px; right: 20px; background: var(--accent-gold); color: var(--primary-dark); padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-weight: bold;">Your Advantage</div>
                    <h3 style="color: white; margin-bottom: 20px; text-align: center;">Vardhman Facilitation</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-check-circle" style="color: var(--emerald); font-size: 1.2rem;"></i>
                            <span style="color: rgba(255,255,255,0.9);">Flexible, intent-based evaluation</span>
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-check-circle" style="color: var(--emerald); font-size: 1.2rem;"></i>
                            <span style="color: rgba(255,255,255,0.9);">Approvals within 48 hours</span>
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-check-circle" style="color: var(--emerald); font-size: 1.2rem;"></i>
                            <span style="color: rgba(255,255,255,0.9);">Unsecured/Cheque-basis options</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-check-circle" style="color: var(--emerald); font-size: 1.2rem;"></i>
                            <span style="color: rgba(255,255,255,0.9);">Tailored private investor matching</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reasons-grid">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4 slide-in-left">
                <div class="reason-item">
                    <div class="reason-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Expert Facilitation</h3>
                    <p>We operate as a dedicated Financial Service Provider, connecting you with the right private funding partners tailored to your specific business needs.</p>
                </div>
            </div>
            <div class="col-md-4 zoom-in" style="transition-delay: 0.2s;">
                <div class="reason-item">
                    <div class="reason-icon animate-pulse-soft"><i class="fas fa-money-check-alt"></i></div>
                    <h3>Cheque Basis Focus</h3>
                    <p>Our strong emphasis on cheque basis funding ensures secure, formal, and transparent capital infusion, providing peace of mind for both businesses and investors.</p>
                </div>
            </div>
            <div class="col-md-4 slide-in-right" style="transition-delay: 0.4s;">
                <div class="reason-item">
                    <div class="reason-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Speed & Agility</h3>
                    <p>In the world of private funding, timing is everything. Our streamlined processes reduce bureaucratic delays, facilitating faster access to capital.</p>
                </div>
            </div>
            <div class="col-md-4 slide-in-left">
                <div class="reason-item">
                    <div class="reason-icon animate-pulse-soft"><i class="fas fa-shield-alt"></i></div>
                    <h3>Uncompromising Security</h3>
                    <p>We employ ISO 27001 certified, 256-bit SSL encrypted systems to ensure your sensitive business data is protected throughout the facilitation process.</p>
                </div>
            </div>
            <div class="col-md-4 zoom-in" style="transition-delay: 0.2s;">
                <div class="reason-item">
                    <div class="reason-icon"><i class="fas fa-balance-scale"></i></div>
                    <h3>Complete Transparency</h3>
                    <p>No hidden fees. We maintain absolute clarity on service charges (typically 3% to 6% for private funding) and all associated costs before you commit.</p>
                </div>
            </div>
            <div class="col-md-4 slide-in-right" style="transition-delay: 0.4s;">
                <div class="reason-item">
                    <div class="reason-icon animate-pulse-soft"><i class="fas fa-network-wired"></i></div>
                    <h3>Extensive Network</h3>
                    <p>Benefit from our vast network of RBI-registered NBFCs and elite private investors, ensuring we find the optimal financial match for your unique profile.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEW ANIMATED SECTION: Trust Metrics -->
<section class="section-padding" style="background: white; overflow: hidden;">
    <div class="container">
        <div class="section-header text-center zoom-in">
            <h2>Quantifying Our Trust</h2>
            <p>Numbers that speak to our reliability as a facilitation partner.</p>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-3 col-6 mb-4 slide-in-left">
                <div class="animate-float-soft" style="font-size: 3rem; color: var(--accent-gold); margin-bottom: 15px;">
                    <i class="fas fa-users"></i>
                </div>
                <h3 style="font-size: 2.5rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 5px;">2,500+</h3>
                <p class="text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px; font-weight: 600;">Clients Assisted</p>
            </div>
            <div class="col-md-3 col-6 mb-4 zoom-in" style="transition-delay: 0.2s;">
                <div class="animate-float-soft" style="font-size: 3rem; color: var(--primary-blue); margin-bottom: 15px; animation-delay: 0.5s;">
                    <i class="fas fa-building"></i>
                </div>
                <h3 style="font-size: 2.5rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 5px;">50+</h3>
                <p class="text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px; font-weight: 600;">NBFC Partners</p>
            </div>
            <div class="col-md-3 col-6 mb-4 zoom-in" style="transition-delay: 0.4s;">
                <div class="animate-float-soft" style="font-size: 3rem; color: var(--emerald); margin-bottom: 15px; animation-delay: 1s;">
                    <i class="fas fa-shield-check"></i>
                </div>
                <h3 style="font-size: 2.5rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 5px;">100%</h3>
                <p class="text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px; font-weight: 600;">Data Privacy</p>
            </div>
            <div class="col-md-3 col-6 mb-4 slide-in-right" style="transition-delay: 0.6s;">
                <div class="animate-float-soft" style="font-size: 3rem; color: #7dc8ff; margin-bottom: 15px; animation-delay: 1.5s;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="font-size: 2.5rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 5px;">22</h3>
                <p class="text-muted text-uppercase" style="font-size: 0.85rem; letter-spacing: 1px; font-weight: 600;">States Covered</p>
            </div>
        </div>
    </div>
</section>

<section class="trust-banner">
    <div class="container zoom-in">
        <h2>Bridging Ambition with Capital</h2>
        <p class="mt-3 max-w-700 mx-auto">Vardhman Financial Services acts strictly as an intermediary. Our expertise lies in understanding your potential and presenting it to the right financial partners, facilitating growth without directly providing the loans ourselves.</p>
    </div>
</section>

<?php require_once 'footer.php'; ?>
