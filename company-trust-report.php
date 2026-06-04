<?php
$page_title = "Company Trust Report | Vardhman Finance";
$meta_desc = "Vardhman Financial Services Company Trust Report - Marketing Version. Discover our strong operational structure, high approval ratio, and growing financial network.";
$meta_keywords = "Company Trust Report, Vardhman Finance, Financial Network, Investor Trust, Working Capital";
include 'header.php';
?>

<style>
    :root {
        --primary-dark: #0A2342;
        --accent-gold: #D4AF37;
        --light-bg: #f8fafc;
        --emerald: #10b981;
    }

    .trust-hero {
        padding-top: 150px;
        background: linear-gradient(135deg, var(--light-bg) 0%, #e2e8f0 100%);
        padding-bottom: 50px;
    }

    .report-card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.06);
        padding: 50px;
        position: relative;
        overflow: hidden;
    }

    .report-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--primary-dark), var(--accent-gold));
    }

    .section-block {
        margin-bottom: 50px;
        padding: 30px;
        border-radius: 12px;
        background: white;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .section-block:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border-color: rgba(212,175,55,0.3);
    }

    .section-title {
        color: var(--primary-dark);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.6rem;
        font-weight: 700;
        transition: color 0.3s ease;
    }

    .section-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .section-link:hover .section-title {
        color: var(--accent-gold);
    }

    .section-icon-wrapper {
        width: 45px;
        height: 45px;
        background: rgba(212,175,55,0.1);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-gold);
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .read-more-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 25px;
        background: var(--light-bg);
        color: var(--primary-dark);
        border: 1px solid #e2e8f0;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        margin-top: 25px;
        transition: all 0.3s ease;
    }

    .read-more-btn:hover {
        background: var(--primary-dark);
        color: white;
        border-color: var(--primary-dark);
        transform: translateX(5px);
    }

    .read-more-btn i {
        transition: transform 0.3s ease;
    }

    .read-more-btn:hover i {
        transform: translateX(3px);
    }

    .email-link {
        word-wrap: break-word;
        overflow-wrap: anywhere;
        word-break: break-all;
        hyphens: auto;
        display: inline-block;
        max-width: 100%;
    }

    .badge-marketing {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%);
        color: #b48e1e;
        border-radius: 30px;
        font-weight: 700;
        font-size: 0.9rem;
        margin-bottom: 25px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border: 1px solid rgba(212, 175, 55, 0.3);
    }

    .stat-card {
        background: white;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        transition: transform 0.3s ease, border-color 0.3s ease;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-gold);
    }

    .team-card {
        padding: 25px;
        border-radius: 12px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .team-card:hover {
        background: white;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-color: rgba(212,175,55,0.3);
    }
    .team-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--accent-gold);
    }

    @media (max-width: 768px) {
        .trust-hero {
            padding-top: 100px;
            padding-bottom: 30px;
        }
        .report-card {
            padding: 20px;
        }
        .section-block {
            padding: 20px;
            margin-bottom: 30px;
        }
        .section-title {
            font-size: 1.3rem;
        }
        .stat-card {
            padding: 20px;
        }
        .trust-hero h1 {
            font-size: 1.8rem !important;
        }
        .trust-hero .btn-hero {
            width: 100%;
            justify-content: center;
        }
        .badge-marketing {
            font-size: 0.8rem;
            padding: 6px 15px;
        }
        .report-card > div:first-child p {
            font-size: 1rem !important;
        }
        div[style*="font-size: 1.4rem; font-style: italic"] {
            font-size: 1.1rem !important;
            padding: 30px 20px !important;
            margin: 20px 0 !important;
        }
        div[style*="font-size: 3rem; color: var(--emerald)"] {
            font-size: 2.2rem !important;
        }
        div[style*="font-size: 3rem; color: #e74c3c"] {
            font-size: 2.2rem !important;
        }
        div[style*="background: linear-gradient(135deg, var(--primary-dark) 0%, #1a3a63 100%);"] {
            padding: 25px 20px !important;
            flex-direction: column;
            gap: 20px !important;
        }
        div[style*="width: 2px;"] {
            width: 100% !important;
            height: 2px !important;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.2), transparent) !important;
        }
        div[style*="font-size: 3rem; color: var(--accent-gold)"] {
            font-size: 2.2rem !important;
        }
        .circular-chart {
            width: 140px;
            height: 140px;
        }
        div[style*="font-size: 4rem; color: var(--accent-gold)"] {
            font-size: 2.5rem !important;
        }
        div[style*="font-size: 2.5rem; color: var(--emerald)"] {
            font-size: 2rem !important;
        }
        div[style*="margin-top: 30px; padding: 30px; background: linear-gradient(135deg, var(--primary-dark)"] {
            padding: 20px !important;
        }
        div[style*="text-align: center; font-size: 2rem; color: var(--accent-gold)"] {
            font-size: 1.4rem !important;
            margin: 25px 0 !important;
        }
    }
</style>

<section class="trust-hero">
    <div class="container fade-in">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;">
            <div>
                <h1 style="color: var(--primary-dark); margin: 0; font-size: 2.5rem; font-weight: 800;">Company Trust Report</h1>
                <p style="color: #666; margin-top: 5px; font-size: 1.1rem;">Building confidence through transparency</p>
            </div>
            <a href="assets/pdf/company-trust-report.pdf" download class="btn-hero btn-gold" style="display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(212,175,55,0.3);">
                <i class="fas fa-file-pdf"></i> Download PDF Report
            </a>
        </div>

        <div class="report-card">

            <div style="text-align: center; margin-bottom: 50px; padding-bottom: 40px; border-bottom: 2px dashed #e2e8f0;">
                <span class="badge-marketing"><i class="fas fa-star"></i> Marketing Version</span>
                <p style="font-size: 1.2rem; color: #444; max-width: 850px; margin: 0 auto; line-height: 1.6;">Vardhman Financial Services is not just a financial service network — it is a trusted platform connecting investors and businesses through structured, secure, and transparent financial solutions.</p>
            </div>

            <!-- 1. Company Overview -->
            <div class="section-block">
                <a href="company-overview.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-building"></i></div>
                        1. Company Overview
                    </h3>
                </a>
                <p>Vardhman Financial Services is one of the rapidly growing private financial service networks in India, providing Private Funding Unsecured Cheque Basis Solutions for businesses and individuals who require financial support.</p>
                <p>The company operates as a financial service facilitator and private funding network, connecting verified investors with customers who require working capital or business funding.</p>

                <div style="background: var(--light-bg); border-left: 4px solid var(--primary-dark); padding: 25px; margin: 25px 0; border-radius: 0 12px 12px 0;">
                    <strong style="color: var(--primary-dark); display: block; margin-bottom: 15px; font-size: 1.1rem;">Our core objective is to provide:</strong>
                    <ul style="list-style-type: none; padding: 0; margin: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--emerald);"></i> Fast financial solutions</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--emerald);"></i> Transparent processes</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--emerald);"></i> Secure financial networking</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--emerald);"></i> Reliable support</li>
                    </ul>
                </div>
                <p>With a strong operational structure and growing financial network, Vardhman Financial Services is currently active in 24 states across India.</p>

                <a href="company-overview.php" class="read-more-btn">Read Full Overview <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 2. Company Trust & Experience -->
            <div class="section-block">
                <a href="company-trust-experience.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-handshake"></i></div>
                        2. Company Trust & Experience
                    </h3>
                </a>
                <p>Vardhman Financial Services represents a financial network built on more than <strong style="color: var(--primary-dark);">26 years of experience</strong> in private financial services.</p>
                <p>Over the years, the company has built a trusted ecosystem connecting investors and customers through professional financial facilitation.</p>

                <div style="text-align: center; font-size: 1.4rem; font-style: italic; color: var(--primary-dark); margin: 35px 0; padding: 40px 30px; background: linear-gradient(135deg, rgba(10,35,66,0.03) 0%, rgba(212,175,55,0.05) 100%); border-radius: 16px; border: 1px solid rgba(212,175,55,0.2); position: relative;">
                    <i class="fas fa-quote-left" style="position: absolute; top: 20px; left: 20px; font-size: 2rem; color: rgba(212,175,55,0.2);"></i>
                    "Trust is not built by words — it is built by commitment and performance."
                    <i class="fas fa-quote-right" style="position: absolute; bottom: 20px; right: 20px; font-size: 2rem; color: rgba(212,175,55,0.2);"></i>
                </div>
                <p>This principle has helped the company establish a long-term relationship with thousands of investors and millions of customers.</p>

                <a href="company-trust-experience.php" class="read-more-btn">Explore Our Legacy <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 3. Funding Performance Report -->
            <div class="section-block">
                <a href="funding-performance-report.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-chart-line"></i></div>
                        3. Funding Performance Report
                    </h3>
                </a>
                <p>According to the company’s internal performance analysis:</p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin: 30px 0;">
                    <div class="stat-card">
                        <div style="font-size: 3rem; color: var(--emerald); font-weight: 800; margin-bottom: 10px; line-height: 1;">91%</div>
                        <div style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Successful Disbursements</div>
                    </div>
                    <div class="stat-card">
                        <div style="font-size: 3rem; color: #e74c3c; font-weight: 800; margin-bottom: 10px; line-height: 1;">9%</div>
                        <div style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Risk-Based Rejections</div>
                    </div>
                </div>

                <p>This high approval ratio reflects the company\'s efficient verification process, strong investor network, and structured financial system. Only cases with incomplete documentation or higher financial risk are declined after evaluation.</p>

                <a href="funding-performance-report.php" class="read-more-btn">View Performance Details <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 4. Working Capital Strength -->
            <div class="section-block">
                <a href="working-capital-strength.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-rupee-sign"></i></div>
                        4. Working Capital Strength
                    </h3>
                </a>
                <p>The financial growth of Vardhman Financial Services can be clearly seen through its expanding Working Capital Structure.</p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin: 30px 0;">
                    <div style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); border-radius: 12px; padding: 30px; text-align: center; border: 1px solid #cbd5e1;">
                        <div style="font-size: 2.2rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 10px;">₹105 Crore</div>
                        <div style="color: #555; font-weight: 600; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Financial Year 2025–2026</div>
                    </div>
                    <div style="background: linear-gradient(135deg, rgba(212,175,55,0.15) 0%, rgba(212,175,55,0.05) 100%); border-radius: 12px; padding: 30px; text-align: center; border: 2px solid rgba(212,175,55,0.3); position: relative; overflow: hidden;">
                        <div style="position: absolute; top: 0; right: 0; background: var(--accent-gold); color: white; padding: 3px 15px; font-size: 0.7rem; font-weight: 700; border-bottom-left-radius: 12px; text-transform: uppercase; letter-spacing: 1px;">Projected</div>
                        <div style="font-size: 2.5rem; color: var(--accent-gold); font-weight: 800; margin-bottom: 10px; text-shadow: 0 2px 4px rgba(0,0,0,0.05);">₹1778 Crore</div>
                        <div style="color: var(--primary-dark); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Financial Year 2026–2027</div>
                    </div>
                </div>

                <p>This growth reflects the increasing investor confidence and expansion of financial operations within the company network.</p>

                <a href="working-capital-strength.php" class="read-more-btn">Read Financial Analysis <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 5. Investor Network Strength -->
            <div class="section-block">
                <a href="investor-network-strength.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-users-cog"></i></div>
                        5. Investor Network Strength
                    </h3>
                </a>
                <p>The investor network of Vardhman Financial Services is one of the most important pillars of the company. For the Financial Year 2026–2027, the total investor funding capacity is approximately <strong style="color: var(--accent-gold); font-size: 1.2rem; background: rgba(212,175,55,0.1); padding: 2px 8px; border-radius: 4px;">₹3205 Crore</strong>.</p>

                <div style="background: linear-gradient(135deg, var(--primary-dark) 0%, #1a3a63 100%); color: white; border-radius: 16px; padding: 40px 30px; margin: 30px 0; display: flex; flex-wrap: wrap; justify-content: space-around; gap: 30px; box-shadow: 0 10px 30px rgba(10,35,66,0.2);">
                    <div style="text-align: center;">
                        <div style="font-size: 3rem; color: var(--accent-gold); font-weight: 800; margin-bottom: 5px; line-height: 1;">846+</div>
                        <div style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 1px; color: #cbd5e1; font-weight: 600;">Active Investors</div>
                    </div>
                    <div style="width: 2px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.2), transparent);"></div>
                    <div style="text-align: center;">
                        <div style="font-size: 3rem; color: var(--accent-gold); font-weight: 800; margin-bottom: 5px; line-height: 1;">1480+</div>
                        <div style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 1px; color: #cbd5e1; font-weight: 600;">Registered Investors</div>
                    </div>
                </div>
                <p>These investors have helped the company build a reliable Private Funding Investment Network across India.</p>

                <a href="investor-network-strength.php" class="read-more-btn">View Network Structure <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 6. Customer Satisfaction Report -->
            <div class="section-block">
                <a href="customer-satisfaction-report.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-smile"></i></div>
                        6. Customer Satisfaction Report
                    </h3>
                </a>
                <p>Based on the Customer Analysis Report for Financial Year 2025–2026:</p>

                <div style="text-align: center; margin: 40px 0; background: #f8fafc; padding: 30px; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="display: inline-block; position: relative;">
                        <svg width="180" height="180" viewBox="0 0 36 36" class="circular-chart">
                            <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#e2e8f0" stroke-width="3"/>
                            <path class="circle" stroke-dasharray="97.5, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="var(--accent-gold)" stroke-width="3" stroke-linecap="round" animation="progress 1.5s ease-out forwards"/>
                            <text x="18" y="20.35" class="percentage" fill="var(--primary-dark)" font-size="8" font-weight="bold" text-anchor="middle">97.5%</text>
                        </svg>
                    </div>
                    <div style="font-size: 1.3rem; font-weight: 700; color: var(--primary-dark); margin-top: 20px; text-transform: uppercase; letter-spacing: 1px;">Customer Satisfaction Rate</div>
                </div>

                <p>Customer satisfaction has been achieved through:</p>
                <div style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 25px; margin-top: 20px;">
                    <ul style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px; list-style-type: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.2rem;"></i> Fast processing support</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.2rem;"></i> Transparent communication</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.2rem;"></i> Legal assistance</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.2rem;"></i> Secure transactions</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check-circle" style="color: var(--accent-gold); font-size: 1.2rem;"></i> Professional service</li>
                    </ul>
                </div>

                <a href="customer-satisfaction-report.php" class="read-more-btn">Read Full Report <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 7. Customer Base -->
            <div class="section-block">
                <a href="customer-base.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-users"></i></div>
                        7. Customer Base
                    </h3>
                </a>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin: 30px 0;">
                    <div style="background: white; border-radius: 16px; padding: 35px; text-align: center; box-shadow: 0 4px 25px rgba(0,0,0,0.05); border: 1px solid #f1f5f9; border-bottom: 5px solid var(--primary-dark); transition: transform 0.3s ease;">
                        <div style="width: 70px; height: 70px; background: #f8fafc; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                            <i class="fas fa-history" style="font-size: 2rem; color: var(--primary-dark);"></i>
                        </div>
                        <p style="color: #666; font-weight: 500; margin-bottom: 15px;">Over the past 30 years, we have served more than:</p>
                        <div style="font-size: 2.5rem; color: var(--primary-dark); font-weight: 800; line-height: 1.2;">1.3 Million+</div>
                        <div style="font-size: 1.1rem; color: var(--accent-gold); font-weight: 700; text-transform: uppercase; margin-top: 5px;">(13 Lakh+) Customers</div>
                    </div>
                    <div style="background: white; border-radius: 16px; padding: 35px; text-align: center; box-shadow: 0 4px 25px rgba(0,0,0,0.05); border: 1px solid #f1f5f9; border-bottom: 5px solid var(--accent-gold); transition: transform 0.3s ease;">
                        <div style="width: 70px; height: 70px; background: rgba(212,175,55,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                            <i class="fas fa-laptop-house" style="font-size: 2rem; color: var(--accent-gold);"></i>
                        </div>
                        <p style="color: #666; font-weight: 500; margin-bottom: 15px;">Through digital platforms and online services:</p>
                        <div style="font-size: 2.5rem; color: var(--primary-dark); font-weight: 800; line-height: 1.2;">270,000+</div>
                        <div style="font-size: 1.1rem; color: var(--accent-gold); font-weight: 700; text-transform: uppercase; margin-top: 5px;">Online Digital Customers</div>
                    </div>
                </div>
                <p style="text-align: center; color: #555; font-size: 1.1rem; font-weight: 500; padding: 15px; background: #f8fafc; border-radius: 8px;">The company continues to expand its digital financial service infrastructure.</p>

                <a href="customer-base.php" class="read-more-btn">View Demographics <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 8. Nationwide Presence -->
            <div class="section-block">
                <a href="nationwide-presence.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-map-marked-alt"></i></div>
                        8. Nationwide Presence
                    </h3>
                </a>
                <div style="display: flex; align-items: center; gap: 20px; background: linear-gradient(135deg, rgba(10,35,66,0.02) 0%, rgba(10,35,66,0.05) 100%); padding: 30px; border-radius: 12px; margin: 25px 0; border: 1px solid rgba(10,35,66,0.1);">
                    <div style="font-size: 4rem; color: var(--accent-gold); font-weight: 800; line-height: 1;">24</div>
                    <div>
                        <div style="font-size: 1.2rem; color: var(--primary-dark); font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">States Across India</div>
                        <p style="margin: 5px 0 0 0; color: #555;">Making it one of the largest growing private financial networks in the country.</p>
                    </div>
                </div>
                <p>The company’s long-term vision is to establish a nationwide financial network covering all states of India.</p>

                <a href="nationwide-presence.php" class="read-more-btn">See Our Locations <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 9. Recovery Performance -->
            <div class="section-block">
                <a href="recovery-performance.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                        9. Recovery Performance
                    </h3>
                </a>
                <p>The company maintains a strong financial recovery system to protect investor interests. Recovery performance data shows:</p>

                <div style="display: flex; gap: 25px; flex-wrap: wrap; margin: 30px 0;">
                    <div style="flex: 1; min-width: 250px; background: white; border: 1px solid #e2e8f0; padding: 30px; border-radius: 12px; position: relative; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <div style="position: absolute; right: -20px; top: -20px; font-size: 8rem; color: rgba(16, 185, 129, 0.05);"><i class="fas fa-chart-bar"></i></div>
                        <div style="position: relative; z-index: 1;">
                            <div style="font-size: 2.5rem; color: var(--emerald); font-weight: 800; margin-bottom: 5px; line-height: 1;">87%</div>
                            <div style="color: var(--primary-dark); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">5-Year Recovery Ratio</div>
                        </div>
                    </div>
                    <div style="flex: 1; min-width: 250px; background: white; border: 1px solid #e2e8f0; padding: 30px; border-radius: 12px; position: relative; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <div style="position: absolute; right: -20px; top: -20px; font-size: 8rem; color: rgba(16, 185, 129, 0.05);"><i class="fas fa-chart-pie"></i></div>
                        <div style="position: relative; z-index: 1;">
                            <div style="font-size: 2.5rem; color: var(--emerald); font-weight: 800; margin-bottom: 5px; line-height: 1;">92.3%</div>
                            <div style="color: var(--primary-dark); font-weight: 700; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Avg Yearly Recovery Ratio</div>
                        </div>
                    </div>
                </div>

                <p>This performance reflects the effectiveness of the company’s recovery system, field monitoring teams, and legal support structure.</p>

                <a href="recovery-performance.php" class="read-more-btn">Understand Our Process <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 10. Operational Team Strength -->
            <div class="section-block">
                <a href="operational-team-strength.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-network-wired"></i></div>
                        10. Operational Team Strength
                    </h3>
                </a>
                <p style="margin-bottom: 30px; font-size: 1.1rem;">Vardhman Financial Services operates with a massive operational network across India.</p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
                    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); border: 1px solid #f1f5f9; position: relative;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: var(--primary-dark); border-top-left-radius: 12px; border-top-right-radius: 12px;"></div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h4 style="color: var(--primary-dark); margin: 0; font-size: 1.2rem;">Field Verification</h4>
                            <span style="background: rgba(212,175,55,0.1); color: var(--accent-gold); padding: 5px 12px; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">8,690+</span>
                        </div>
                        <p style="font-size: 0.95rem; color: #666; margin-bottom: 15px;">On-ground checks including:</p>
                        <ul style="font-size: 0.9rem; color: #555; padding-left: 20px; line-height: 1.6;">
                            <li>Business verification</li>
                            <li>Background validation</li>
                            <li>Document authentication</li>
                            <li>Risk analysis</li>
                        </ul>
                    </div>

                    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); border: 1px solid #f1f5f9; position: relative;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: var(--accent-gold); border-top-left-radius: 12px; border-top-right-radius: 12px;"></div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h4 style="color: var(--primary-dark); margin: 0; font-size: 1.2rem;">Recovery Team</h4>
                            <span style="background: rgba(212,175,55,0.1); color: var(--accent-gold); padding: 5px 12px; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">30,656+</span>
                        </div>
                        <p style="font-size: 0.95rem; color: #666; line-height: 1.6;">Dedicated members working to ensure strict financial discipline and timely recovery within the extensive funding network.</p>
                    </div>

                    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.04); border: 1px solid #f1f5f9; position: relative;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: var(--primary-dark); border-top-left-radius: 12px; border-top-right-radius: 12px;"></div>
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                            <h4 style="color: var(--primary-dark); margin: 0; font-size: 1.2rem;">Legal Department</h4>
                            <span style="background: rgba(212,175,55,0.1); color: var(--accent-gold); padding: 5px 12px; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">8,200+</span>
                        </div>
                        <p style="font-size: 0.95rem; color: #666; margin-bottom: 15px;">Legal support in areas like:</p>
                        <ul style="font-size: 0.9rem; color: #555; padding-left: 20px; line-height: 1.6;">
                            <li>Contract management</li>
                            <li>Legal consultation</li>
                            <li>Recovery legal processes</li>
                            <li>Dispute resolution</li>
                        </ul>
                    </div>
                </div>

                <a href="operational-team-strength.php" class="read-more-btn">View Full Team Analytics <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 11. Leadership Team -->
            <div class="section-block">
                <a href="leadership-team.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-user-tie"></i></div>
                        11. Leadership Team
                    </h3>
                </a>
                <p style="margin-bottom: 30px;">The company is supported by highly experienced professionals responsible for driving different operational areas.</p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
                    <div class="team-card">
                        <h5 style="color: #666; margin-bottom: 8px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Credit Manager</h5>
                        <strong style="display: block; margin-bottom: 12px; color: var(--primary-dark); font-size: 1.1rem;">Mr. Shri Krishna Govind Bhai Patel</strong>
                        <p style="font-size: 0.9rem; color: #555; margin: 0; line-height: 1.5;">Responsible for credit evaluation and financial risk assessment.</p>
                    </div>

                    <div class="team-card">
                        <h5 style="color: #666; margin-bottom: 8px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Vice President</h5>
                        <strong style="display: block; margin-bottom: 8px; color: var(--primary-dark); font-size: 1.1rem;">Mr. Shri Sumit Agrawal</strong>
                        <a href="mailto:vc.sumit@vardhmanfinance.com" class="email-link" style="font-size: 0.9rem; color: var(--accent-gold); margin-bottom: 12px; display: inline-flex; align-items: center; gap: 5px; font-weight: 500;"><i class="fas fa-envelope"></i> vc.sumit@vardhmanfinance.com</a>
                        <p style="font-size: 0.9rem; color: #555; margin: 0; line-height: 1.5;">Responsible for strategic operations and investor relations.</p>
                    </div>

                    <div class="team-card">
                        <h5 style="color: #666; margin-bottom: 8px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Head of Legal Department</h5>
                        <strong style="display: block; margin-bottom: 8px; color: var(--primary-dark); font-size: 1.1rem;">Mr. Shri Avdhesh Kumar Rajput</strong>
                        <a href="mailto:legal@vardhmanfinance.com" class="email-link" style="font-size: 0.9rem; color: var(--accent-gold); margin-bottom: 12px; display: inline-flex; align-items: center; gap: 5px; font-weight: 500;"><i class="fas fa-envelope"></i> legal@vardhmanfinance.com</a>
                        <p style="font-size: 0.9rem; color: #555; margin: 0; line-height: 1.5;">Oversees all legal operations and compliance management.</p>
                    </div>

                    <div class="team-card">
                        <h5 style="color: #666; margin-bottom: 8px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Cybersecurity President</h5>
                        <strong style="display: block; margin-bottom: 8px; color: var(--primary-dark); font-size: 1.1rem;">Mr. Surya Pratap Singh Shekhawat</strong>
                        <a href="mailto:advocate.surya@vardhmanfinance.com" class="email-link" style="font-size: 0.9rem; color: var(--accent-gold); margin-bottom: 12px; display: inline-flex; align-items: center; gap: 5px; font-weight: 500;"><i class="fas fa-envelope"></i> advocate.surya@vardhmanfinance.com</a>
                        <p style="font-size: 0.9rem; color: #555; margin: 0; line-height: 1.5;">Responsible for digital security systems and cybersecurity operations.</p>
                    </div>
                </div>

                <div style="margin-top: 30px; padding: 30px; background: linear-gradient(135deg, var(--primary-dark) 0%, #153661 100%); color: white; border-radius: 12px; text-align: center; box-shadow: 0 10px 25px rgba(10,35,66,0.2);">
                    <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px auto; font-size: 1.5rem; color: var(--accent-gold);">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h5 style="color: var(--accent-gold); margin-bottom: 10px; font-size: 1.2rem;">Cyber Help Desk</h5>
                    <a href="mailto:cyber-help@vardhmanfinance.com" class="email-link" style="color: white; font-size: 1.1rem; text-decoration: underline; text-underline-offset: 4px; margin-bottom: 15px; font-weight: 600;">cyber-help@vardhmanfinance.com</a>
                    <p style="font-size: 0.95rem; opacity: 0.8; margin: 0; max-width: 600px; margin: 0 auto;">Provides digital and cybersecurity assistance for customers and investors.</p>
                </div>

                <a href="leadership-team.php" class="read-more-btn">Meet Our Leaders <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 12. Company Vision -->
            <div class="section-block">
                <a href="company-vision.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-eye"></i></div>
                        12. Company Vision
                    </h3>
                </a>
                <p style="font-size: 1.1rem; margin-bottom: 25px;">The long-term vision of Vardhman Financial Services is:</p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px;">
                    <div style="padding: 20px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; display: flex; align-items: flex-start; gap: 15px; transition: all 0.3s ease;">
                        <div style="width: 45px; height: 45px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;"><i class="fas fa-link"></i></div>
                        <div style="font-weight: 500; color: var(--primary-dark); line-height: 1.5; padding-top: 10px;">To build a strong and transparent Private Funding Network in India</div>
                    </div>
                    <div style="padding: 20px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; display: flex; align-items: flex-start; gap: 15px; transition: all 0.3s ease;">
                        <div style="width: 45px; height: 45px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;"><i class="fas fa-hand-holding-heart"></i></div>
                        <div style="font-weight: 500; color: var(--primary-dark); line-height: 1.5; padding-top: 10px;">To strengthen trust between investors and customers</div>
                    </div>
                    <div style="padding: 20px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; display: flex; align-items: flex-start; gap: 15px; transition: all 0.3s ease;">
                        <div style="width: 45px; height: 45px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;"><i class="fas fa-bolt"></i></div>
                        <div style="font-weight: 500; color: var(--primary-dark); line-height: 1.5; padding-top: 10px;">To provide fast financial solutions in the digital era</div>
                    </div>
                    <div style="padding: 20px; background: white; border: 1px solid #e2e8f0; border-radius: 12px; display: flex; align-items: flex-start; gap: 15px; transition: all 0.3s ease;">
                        <div style="width: 45px; height: 45px; background: rgba(212,175,55,0.1); color: var(--accent-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;"><i class="fas fa-balance-scale"></i></div>
                        <div style="font-weight: 500; color: var(--primary-dark); line-height: 1.5; padding-top: 10px;">To operate with legal compliance and transparency</div>
                    </div>
                </div>

                <a href="company-vision.php" class="read-more-btn">Read Our Future Roadmap <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 13. Trust Commitment -->
            <div class="section-block">
                <a href="trust-commitment.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper"><i class="fas fa-award"></i></div>
                        13. Trust Commitment
                    </h3>
                </a>
                <p>Vardhman Financial Services strongly believes that the foundation of financial services is:</p>
                <div style="text-align: center; font-size: 2rem; color: var(--accent-gold); font-weight: 800; margin: 40px 0; letter-spacing: 1.5px; text-transform: uppercase; text-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    Trust, Transparency & Responsibility
                </div>
                <p>The company continues to work towards building long-term trust with both investors and customers through highly responsible financial practices.</p>

                <a href="trust-commitment.php" class="read-more-btn">View Our Pledges <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- 14. Closing Statement -->
            <div class="section-block" style="border: 2px solid var(--accent-gold); background: #fcfbf7;">
                <a href="closing-statement.php" class="section-link">
                    <h3 class="section-title">
                        <div class="section-icon-wrapper" style="background: var(--accent-gold); color: white;"><i class="fas fa-flag-checkered"></i></div>
                        14. Closing Statement
                    </h3>
                </a>
                <p style="font-size: 1.1rem; color: var(--primary-dark);"><strong>The company remains firmly committed to:</strong></p>
                <ul style="list-style-type: none; padding: 0; margin: 20px 0 30px 0; font-size: 1.05rem; color: #444;">
                    <li style="margin-bottom: 15px; padding-left: 35px; position: relative;"><i class="fas fa-check" style="color: white; background: var(--accent-gold); width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; position: absolute; left: 0; top: 2px;"></i> Protecting investor interests at all costs</li>
                    <li style="margin-bottom: 15px; padding-left: 35px; position: relative;"><i class="fas fa-check" style="color: white; background: var(--accent-gold); width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; position: absolute; left: 0; top: 2px;"></i> Supporting sustainable business growth</li>
                    <li style="margin-bottom: 15px; padding-left: 35px; position: relative;"><i class="fas fa-check" style="color: white; background: var(--accent-gold); width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; position: absolute; left: 0; top: 2px;"></i> Maintaining absolute transparency in financial operations</li>
                </ul>
                <p style="font-size: 1.2rem; color: var(--primary-dark); font-weight: 700; line-height: 1.6; border-top: 1px solid rgba(212,175,55,0.3); padding-top: 25px;">With this vision, Vardhman Financial Services continues to expand its network and strengthen its formidable presence in the Indian financial ecosystem.</p>

                <a href="closing-statement.php" class="read-more-btn" style="background: var(--primary-dark); color: white;">Read Final Remarks <i class="fas fa-arrow-right"></i></a>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>