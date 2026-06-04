<?php
$page_title = 'Our Funding Process | Vardhman Finance';
$meta_description = 'Learn about our streamlined private funding process. From application to cheque basis funding, Vardhman Finance facilitates quick and secure capital access.';
require_once 'header.php';
?>

<style>
    .process-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
        color: white;
        padding: 80px 0 60px;
        text-align: center;
        border-bottom: 5px solid var(--accent-gold);
    }
    .process-hero h1 {
        font-size: 3rem;
        margin-bottom: 20px;
        font-family: 'Playfair Display', serif;
    }
    .process-hero p {
        font-size: 1.2rem;
        opacity: 0.9;
        max-width: 800px;
        margin: 0 auto;
    }
    .process-steps {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    .step-card {
        background: white;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        gap: 40px;
        transition: transform 0.3s ease;
        border-left: 4px solid transparent;
    }
    .step-card:hover {
        transform: translateY(-5px);
        border-left-color: var(--accent-gold);
    }
    .step-number {
        font-size: 4rem;
        font-weight: 800;
        color: rgba(212, 175, 55, 0.2); /* Faded Gold */
        line-height: 1;
        min-width: 80px;
    }
    .step-content h3 {
        color: var(--primary-dark);
        margin-bottom: 15px;
        font-size: 1.8rem;
    }
    .step-content p {
        color: var(--text-muted);
        line-height: 1.7;
    }
    .cheque-focus {
        background: #fff;
        padding: 60px 0;
        border-top: 1px dashed #ccc;
        border-bottom: 1px dashed #ccc;
    }
    .cheque-box {
        border: 2px solid var(--accent-gold);
        padding: 30px;
        border-radius: 8px;
        background: #fafafa;
        font-family: 'Courier New', Courier, monospace;
        text-align: center;
        max-width: 700px;
        margin: 0 auto;
    }
    .cheque-box h2 {
        font-family: 'Playfair Display', serif;
        color: var(--primary-dark);
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .step-card {
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 30px 20px;
        }
        .step-number {
            font-size: 3rem;
        }
    }
</style>

<section class="process-hero">
    <div class="container">
        <h1>Our Streamlined Funding Process</h1>
        <p>As a premier Financial Service Provider, Vardhman Finance bridges the gap between ambitious businesses and robust private funding sources. Experience our efficient, transparent, and secure methodology.</p>
    </div>
</section>

<section class="process-steps">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">How We Facilitate Your Growth</h2>
            <p class="section-subtitle">A straightforward path to securing private funding and cheque basis capital.</p>
        </div>

        <div class="step-card slide-in-left">
            <div class="step-number">01</div>
            <div class="step-content">
                <h3>Initial Consultation & Application</h3>
                <p>Begin your journey by submitting a basic profile. Our expert facilitators review your requirements to understand your business objectives and funding needs. We emphasize confidentiality and a clear understanding of your goals right from the start.</p>
            </div>
        </div>

        <div class="step-card slide-in-right">
            <div class="step-number">02</div>
            <div class="step-content">
                <h3>Documentation & Preliminary Assessment</h3>
                <p>Provide necessary KYC and financial documents. Our team conducts a swift preliminary assessment to match your profile with suitable private funding partners. This stage is crucial for structuring the potential financial facilitation.</p>
            </div>
        </div>

        <div class="step-card slide-in-left">
            <div class="step-number">03</div>
            <div class="step-content">
                <h3>Partner Matching & Approval</h3>
                <p>Acting as your intermediary, we present your structured proposal to our network of RBI-registered NBFCs and private investors. Upon favorable review, an in-principle approval is secured, outlining the terms of the private funding.</p>
            </div>
        </div>

        <div class="step-card slide-in-right">
            <div class="step-number">04</div>
            <div class="step-content">
                <h3>Legal & Verification Procedures</h3>
                <p>We facilitate the necessary legal documentation, including e-signing and verifications. Transparency is key; all service charges, processing fees, and terms are clearly communicated before finalization.</p>
            </div>
        </div>

        <div class="step-card slide-in-left">
            <div class="step-number">05</div>
            <div class="step-content">
                <h3>Cheque Basis Disbursement</h3>
                <p>Once all formalities are complete, the funds are disbursed. We specialize in facilitating 'Cheque Basis' funding, ensuring a secure, traceable, and formal transfer of capital to empower your business operations immediately.</p>
            </div>
        </div>
    </div>
</section>

<!-- NEW ANIMATED SECTION: Process Flowchart -->
<section class="section-padding" style="background: var(--primary-dark); color: white; overflow: hidden;">
    <div class="container">
        <div class="section-header text-center zoom-in">
            <h2 style="color: white;">The Velocity of Capital</h2>
            <p style="color: rgba(255,255,255,0.8);">How we compress weeks of waiting into days of execution.</p>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 slide-in-left text-center">
                <div class="position-relative d-inline-block">
                    <!-- Circular nodes connected by a line -->
                    <div style="position: absolute; top: 10%; bottom: 10%; left: 50%; width: 4px; background: rgba(255,255,255,0.1); transform: translateX(-50%); z-index: 1;"></div>

                    <div class="d-flex flex-column gap-5 position-relative" style="z-index: 2;">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="animate-pulse-soft" style="width: 80px; height: 80px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; border: 4px solid var(--accent-gold); box-shadow: 0 0 20px rgba(197, 160, 89, 0.3);">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="animate-pulse-soft" style="width: 80px; height: 80px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; border: 4px solid var(--emerald); box-shadow: 0 0 20px rgba(46, 204, 113, 0.3); animation-delay: 0.5s;">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="animate-pulse-soft" style="width: 80px; height: 80px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; border: 4px solid #7dc8ff; box-shadow: 0 0 20px rgba(125, 200, 255, 0.3); animation-delay: 1s;">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 slide-in-right mt-5 mt-lg-0">
                <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 15px; border-left: 4px solid var(--accent-gold);">
                    <h3 style="color: var(--accent-gold); margin-bottom: 15px;">Day 1: Ingestion</h3>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 0;">We ingest your digital application and bank statements. No physical paperwork required.</p>
                </div>
                <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 15px; border-left: 4px solid var(--emerald); margin-top: 20px;">
                    <h3 style="color: var(--emerald); margin-bottom: 15px;">Day 2: Underwriting</h3>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 0;">Our algorithms and credit team evaluate your cashflow velocity, not just static collateral.</p>
                </div>
                <div style="background: rgba(255,255,255,0.05); padding: 40px; border-radius: 15px; border-left: 4px solid #7dc8ff; margin-top: 20px;">
                    <h3 style="color: #7dc8ff; margin-bottom: 15px;">Day 3: Execution</h3>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 0;">Legal agreements are generated and e-signed. Funds hit your account on a Cheque Basis model.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEW ANIMATED SECTION: Underwriting Approach -->
<section class="section-padding" style="background: var(--light-bg); overflow: hidden;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 slide-in-left">
                <h2 style="color: var(--primary-dark); margin-bottom: 20px;">The Logic Behind Our <span style="color: var(--accent-gold);">Underwriting</span></h2>
                <p style="font-size: 1.1rem; color: #666; margin-bottom: 30px; line-height: 1.8;">Traditional lenders ask "What if you fail?" We ask "How fast can you grow?" This fundamental shift in perspective changes how we evaluate risk.</p>

                <div class="d-flex align-items-start mb-4">
                    <div class="me-3 mt-1 text-center">
                        <div class="animate-pulse-soft" style="width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-blue); font-size: 1.2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 5px;">Cashflow Velocity</h4>
                        <p style="color: #666; font-size: 0.95rem;">We prioritize the speed and consistency of your banking transactions over heavy asset sheets.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="me-3 mt-1 text-center">
                        <div class="animate-pulse-soft" style="width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--emerald); font-size: 1.2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.1); animation-delay: 0.5s;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 5px;">Future Revenue Focus</h4>
                        <p style="color: #666; font-size: 0.95rem;">We lend against incoming contracts and projected growth, recognizing that opportunity is temporary.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 slide-in-right mt-5 mt-lg-0 text-center">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="Data Analysis" class="img-fluid rounded shadow-lg animate-float-soft" style="border: 8px solid white;">
            </div>
        </div>
    </div>
</section>

<section class="cheque-focus">
    <div class="container zoom-in">
        <div class="cheque-box animate-pulse-soft" style="animation-duration: 5s;">
            <h2>The Cheque Basis Advantage</h2>
            <p>At Vardhman Financial Services, we prioritize secure and verifiable financial transactions. Facilitating funding on a <strong>Cheque Basis</strong> ensures complete transparency between you and our investor network. This formalized approach builds trust and provides clear financial records for your business growth.</p>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
