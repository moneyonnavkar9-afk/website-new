<?php
$page_title = 'Company Profile & Leadership Team | Vardhman Finance';
$meta_desc = 'Discover the robust company profile, vision, financial milestones, and meet the founding leadership team driving Vardhman Finance to industry leadership.';
$meta_keywords = 'Company Profile, Leadership Team, Founders, Managing Director, CEO, Vision, Stats, Vardhman Finance';
$extra_styles = '
<style>
    .profile-hero {
        background: linear-gradient(rgba(11, 30, 59, 0.95), rgba(11, 30, 59, 0.9)), url("assets/pattern.png");
        padding: 160px 0 100px;
        color: white;
        text-align: center;
        background-size: cover;
        background-position: center;
    }
    .profile-section {
        padding: 80px 0;
        background: #fdfdfd;
    }
    .section-title {
        color: var(--primary-dark);
        margin-bottom: 25px;
        font-weight: 800;
        font-size: 2.2rem;
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .section-title::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: var(--accent-gold);
        margin: 15px auto 0;
        border-radius: 2px;
    }
    .vision-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        border-left: 5px solid var(--accent-gold);
        transition: transform 0.3s ease;
        height: 100%;
    }
    .vision-card:hover {
        transform: translateY(-5px);
    }
    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }
    .stat-box {
        background: linear-gradient(135deg, var(--primary-dark), #1a365d);
        padding: 40px 20px;
        border-radius: 12px;
        text-align: center;
        color: white;
        box-shadow: 0 10px 25px rgba(11, 30, 59, 0.2);
        position: relative;
        overflow: hidden;
    }
    .stat-box::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, transparent 60%);
        pointer-events: none;
    }
    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--accent-gold);
        margin-bottom: 10px;
        display: block;
    }
    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin-top: 60px;
    }
    @media (max-width: 1200px) {
        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 768px) {
        .team-grid {
            grid-template-columns: 1fr;
        }
    }
    .team-member {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        text-align: center;
        padding-bottom: 30px;
        border: 1px solid #f0f0f0;
    }
    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.12);
    }
    .team-img-wrapper {
        width: 100%;
        height: 350px;
        overflow: hidden;
        position: relative;
    }
    .team-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .team-member:hover .team-img-wrapper img {
        transform: scale(1.05);
    }
    .team-img-wrapper::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 80px;
        background: linear-gradient(to top, white, transparent);
    }
    .team-info {
        padding: 20px 30px 0;
        position: relative;
        z-index: 2;
    }
    .team-name {
        color: var(--primary-dark);
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 5px;
    }
    .team-role {
        color: var(--accent-gold);
        font-weight: 600;
        font-size: 1.05rem;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .team-desc {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #f5f6f8;
        color: var(--primary-dark);
        margin: 0 5px;
        transition: all 0.3s;
    }
    .social-links a:hover {
        background: var(--accent-gold);
        color: white;
    }

    /* Graph placeholder styling */
    .graph-container {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-top: 50px;
        position: relative;
    }
    .bar-chart {
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        height: 250px;
        margin-top: 30px;
        padding-bottom: 30px;
        border-bottom: 2px solid #e2e8f0;
        position: relative;
    }
    .bar {
        width: 12%;
        background: linear-gradient(to top, var(--primary-dark), #3b82f6);
        border-radius: 5px 5px 0 0;
        position: relative;
        transition: height 1s ease;
        display: flex;
        justify-content: center;
    }
    .bar::after {
        content: attr(data-value);
        position: absolute;
        bottom: -25px;
        color: #64748b;
        font-weight: 600;
        font-size: 0.85rem;
    }
    .bar::before {
        content: attr(data-amount);
        position: absolute;
        top: -25px;
        color: var(--primary-dark);
        font-weight: 700;
        font-size: 0.9rem;
    }
    .bar:nth-child(even) {
        background: linear-gradient(to top, var(--accent-gold), #fcd34d);
    }
</style>
';

require_once 'header.php';
?>

<section class="profile-hero">
    <div class="container zoom-in">
        <h1 class="display-4 fw-bold mb-4">Company Profile & Leadership</h1>
        <p class="lead mb-0 mx-auto" style="max-width: 800px;">Driven by vision, anchored by trust. Meet the minds and milestones shaping the future of private structured funding in India.</p>
    </div>
</section>

<section class="profile-section" style="background: #f4f6f9;">
    <div class="container">
        <div class="text-center zoom-in">
            <h2 class="section-title">Meet Our Leadership Team</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">The strategic visionaries and operational powerhouses behind Vardhman Finance. Our leaders bring decades of combined experience in banking, corporate law, and structured finance.</p>
        </div>

        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-member slide-in-left">
                <div class="team-img-wrapper">
                    <img src="assets/img/team/manish_kumar_sinha_md.jpg" alt="Manish Kumar Sinha" onerror="this.src='assets/placeholder.jpg'">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Manish Kumar Sinha</h3>
                    <p class="team-role">Managing Director (MD)</p>
                    <p class="team-desc">With over 20 years of expertise in corporate finance, Manish steers the strategic direction of Vardhman. His deep understanding of market dynamics and extensive network of top-tier NBFCs form the backbone of our funding ecosystem.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-member zoom-in" style="transition-delay: 0.2s;">
                <div class="team-img-wrapper">
                    <img src="assets/img/team/manoj_kumar_ceo.jpg" alt="Manoj Kumar" onerror="this.src='assets/placeholder.jpg'">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Manoj Kumar</h3>
                    <p class="team-role">Chief Executive Officer (CEO)</p>
                    <p class="team-desc">Manoj is the operational catalyst of Vardhman. He meticulously orchestrates nationwide operations, ensuring seamless execution of funding requests and upholding our uncompromising standards of client satisfaction.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-member zoom-in" style="transition-delay: 0.4s;">
                <div class="team-img-wrapper">
                    <img src="assets/img/team/dinesh_kandpal_director.jpg" alt="Dinesh kumar" onerror="this.src='assets/placeholder.jpg'">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Dinesh kumar</h3>
                    <p class="team-role">Director of Operations</p>
                    <p class="team-desc">Dinesh leads the critical groundwork of our services. His rigorous approach to risk assessment, underwriting facilitation, and field verifications guarantees that capital flows securely and efficiently to verified businesses.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="team-member slide-in-right">
                <div class="team-img-wrapper">
                    <img src="assets/img/team/surya_advocate_legal.jpg" alt="Advocate Surya" onerror="this.src='assets/placeholder.jpg'">
                </div>
                <div class="team-info">
                    <h3 class="team-name">Advocate Surya</h3>
                    <p class="team-role">Head of Legal & Compliance</p>
                    <p class="team-desc">Advocate Surya is the fortress of Vardhman’s legal integrity. Leading a robust team of corporate lawyers, he ensures absolute regulatory compliance, draft precision, and ironclad legal structuring for every transaction.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile-section">
    <div class="container">
        <!-- NEW ANIMATED SECTION: Leadership Spotlight (Extended) -->
        <div class="row g-5 align-items-center mb-5 pb-5 border-bottom">
            <div class="col-lg-6 slide-in-left">
                <h2 class="section-title text-start">A Message From The MD</h2>
                <p class="fs-5 text-muted mb-4" style="font-style: italic;">"Capital should be a catalyst for growth, not a hurdle to overcome."</p>
                <p class="mb-3 text-muted">Vardhman Finance was built on the core belief that Indian enterprises require agile, structured, and rapid funding to compete globally. Over the past two decades, we have meticulously built an ecosystem that connects high-potential businesses with elite private capital and NBFC partners.</p>
                <p class="mb-4 text-muted">Our focus remains steadfast: to strip away the bureaucratic delays of traditional lending and provide a secure, transparent, and digitally-empowered financial facilitation experience. Your growth is the true measure of our success.</p>
                <div class="d-flex align-items-center mt-4">
                    <img src="assets/img/team/manish_kumar_sinha_md.jpg" alt="Manish Kumar Sinha" class="rounded-circle me-3 border" style="width: 60px; height: 60px; object-fit: cover;" onerror="this.src='assets/placeholder.jpg'">
                    <div>
                        <h5 class="mb-0" style="color: var(--primary-dark);">Manish Kumar Sinha</h5>
                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">Managing Director</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 slide-in-right">
                <div class="position-relative">
                    <div class="animate-pulse-soft position-absolute" style="top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(197, 160, 89, 0.2); border-radius: 50%; z-index: 1;"></div>
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32b7?auto=format&fit=crop&w=800&q=80" alt="Executive Meeting" class="img-fluid rounded-3 position-relative" style="z-index: 2; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 8px solid white;">
                    <div class="animate-float-soft position-absolute" style="bottom: 30px; left: -30px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); z-index: 3; border-left: 4px solid var(--accent-gold);">
                        <h4 style="color: var(--primary-dark); margin-bottom: 5px;">Guiding Principle</h4>
                        <p style="margin: 0; color: #666; font-size: 0.95rem;">Integrity in every transaction.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6 slide-in-left">
                <h2 class="section-title text-start">Our Identity & Vision</h2>
                <p class="fs-5 text-muted mb-4">Vardhman Financial Services is not just a facilitator; we are the strategic bridge between immense capital potential and ambitious business realities.</p>
                <div class="vision-card mb-4">
                    <h4 style="color: var(--primary-dark);"><i class="fas fa-eye" style="color: var(--accent-gold); margin-right: 10px;"></i> Our Vision</h4>
                    <p class="mb-0">To be India's most trusted and transparent financial facilitator, ensuring that every viable business, regardless of size, has unfettered access to structured, secure, and rapid capital through our expansive network of elite NBFCs and private investors.</p>
                </div>
                <div class="vision-card">
                    <h4 style="color: var(--primary-dark);"><i class="fas fa-bullseye" style="color: var(--accent-gold); margin-right: 10px;"></i> Our Mission</h4>
                    <p class="mb-0">To eradicate the complexities of traditional borrowing by employing advanced technology, robust legal frameworks, and unparalleled operational efficiency, delivering financial solutions that are both empowering and definitively secure.</p>
                </div>
            </div>
            <div class="col-lg-6 slide-in-right">
                <div class="position-relative h-100 d-flex align-items-center justify-content-center" style="background: var(--primary-dark); border-radius: 15px; border: 1px solid var(--accent-gold); min-height: 300px;">
                    <div class="text-center p-4">
                        <i class="fas fa-chart-line fa-4x mb-3" style="color: var(--accent-gold); opacity: 0.8;"></i>
                        <h3 style="color: white; font-weight: 600;">Strategic Bridging</h3>
                        <p style="color: #cbd5e1; margin-bottom: 0;">Connecting Capital with Viable Ambitions</p>
                    </div>
                    <div style="position: absolute; bottom: -30px; right: -30px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); max-width: 250px; z-index: 2;">
                        <h4 style="color: var(--accent-gold); font-weight: 800; font-size: 2.5rem; margin-bottom: 0;">20+</h4>
                        <p style="color: var(--primary-dark); font-weight: 600; margin-bottom: 0;">Years of Collective Financial Excellence</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 pt-5" style="border-top: 1px solid #e2e8f0;">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 order-lg-2 slide-in-right">
                    <h2 class="section-title text-start">Our Financial Strategy</h2>
                    <p class="fs-5 text-muted mb-4">A pragmatic, data-driven approach to private lending that balances aggressive growth with rigorous risk management.</p>
                    <p class="mb-3 text-muted">At Vardhman Finance, our financial strategy is built on a foundation of deep market intelligence and a proprietary risk-assessment matrix. We don't just facilitate capital; we architect financial solutions that align perfectly with the borrower's operational cash flows and the investor's return expectations.</p>
                    <p class="mb-4 text-muted">By leveraging advanced predictive analytics and maintaining an expansive network of top-tier NBFCs, we are able to structure debt and secure funding even in complex scenarios where traditional banking frameworks fall short. Our focus is strictly on structured, secured, and rapid capital deployment.</p>

                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Agile Underwriting:</strong> Rapid assessment of collateral and cash flow viability.</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Structured Deals:</strong> Tailored amortization schedules to fit business cycles.</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Strategic Partnerships:</strong> Co-lending arrangements with Tier-1 NBFCs.</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1 slide-in-left">
                    <div class="position-relative">
                        <img src="assets/pattern.png" alt="Strategy Pattern" class="img-fluid rounded-3" style="background: linear-gradient(135deg, #1a365d, var(--primary-dark)); padding: 40px; border: 1px solid #e2e8f0; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                        <div style="position: absolute; top: -20px; left: -20px; background: var(--accent-gold); color: var(--primary-dark); padding: 20px 30px; border-radius: 8px; font-weight: bold; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
                            <i class="fas fa-chart-line me-2"></i> Strategic Growth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 pt-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 slide-in-left">
                    <h2 class="section-title text-start">Market Approach & Reach</h2>
                    <p class="fs-5 text-muted mb-4">Bridging the credit gap across Tier-1, Tier-2, and Tier-3 cities with customized financial products.</p>
                    <p class="mb-3 text-muted">Vardhman Finance recognizes that India's economic engine is powered by diverse enterprises across various geographies. Our market approach is distinctly Pan-India, ensuring that ambitious businesses in emerging markets have the same access to premium structured finance as those in major metropolitan hubs.</p>
                    <p class="mb-4 text-muted">We have systematically built a robust operational infrastructure capable of handling high-volume origination while maintaining stringent quality controls. From initial digital onboarding to comprehensive physical field verifications, our processes are designed for both scale and security.</p>

                    <div class="d-flex align-items-center mt-4 p-3 rounded" style="background: #f8fafc; border-left: 4px solid var(--primary-dark);">
                        <i class="fas fa-globe-asia fa-2x text-muted me-3"></i>
                        <p class="mb-0 fs-6 text-dark"><strong>Pan-India Execution:</strong> Seamless capital facilitation across 24+ states, supported by local legal and verification teams.</p>
                    </div>
                </div>
                <div class="col-lg-6 slide-in-right">
                    <div class="stats-container" style="margin-top: 0;">
                        <div class="stat-box" style="padding: 30px 15px;">
                            <span class="stat-number" style="font-size: 2.5rem;">24+</span>
                            <h6 class="mb-0">States Operational</h6>
                        </div>
                        <div class="stat-box" style="padding: 30px 15px;">
                            <span class="stat-number" style="font-size: 2.5rem;">50K+</span>
                            <h6 class="mb-0">Satisfied Clients</h6>
                        </div>
                        <div class="stat-box" style="padding: 30px 15px;">
                            <span class="stat-number" style="font-size: 2.5rem;">150+</span>
                            <h6 class="mb-0">Investor Network</h6>
                        </div>
                        <div class="stat-box" style="padding: 30px 15px;">
                            <span class="stat-number" style="font-size: 2.5rem;">99.2%</span>
                            <h6 class="mb-0">Success Rate</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NEW ANIMATED SECTION: Milestones & Growth -->
        <div class="mt-5 pt-5" style="border-top: 1px solid #e2e8f0;">
            <div class="text-center zoom-in">
                <h2 class="section-title">Growth Trajectory</h2>
                <p class="text-muted">A testament to our relentless pursuit of financial empowerment across the nation.</p>
            </div>

            <div class="graph-container zoom-in" style="transition-delay: 0.2s;">
                <h5 class="text-center mb-4" style="color: var(--primary-dark);">Annual Funding Facilitation (₹ Crores)</h5>
                <div class="bar-chart">
                    <div class="bar" style="height: 30%;" data-value="2020" data-amount="₹450Cr"></div>
                    <div class="bar" style="height: 45%;" data-value="2021" data-amount="₹680Cr"></div>
                    <div class="bar" style="height: 60%;" data-value="2022" data-amount="₹920Cr"></div>
                    <div class="bar" style="height: 80%;" data-value="2023" data-amount="₹1,250Cr"></div>
                    <div class="bar" style="height: 100%;" data-value="2024 (Proj)" data-amount="₹1,800Cr+"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
