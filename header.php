<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if (!isset($base_path)) {
        $base_path = './';
    }
    require_once $base_path . 'partner/includs/brand_settings.php';
    require_once $base_path . 'partner/includs/config.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : htmlspecialchars(brand_config('brand_name')) . ' | Specialist Loans for Business Growth'; ?></title>
    <meta name="description" content="<?php echo isset($meta_desc) ? $meta_desc : 'Private Capital & Secured Loans for Ambitious Businesses. Structured funding from ₹25 lakh to ₹25 crore.'; ?>">
    <link rel="icon" type="image/jpeg" href="<?php echo $base_path; ?>assets/favicon.jpeg">
    <?php if(isset($meta_keywords)): ?>
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <?php endif; ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars(brand_site_url()); ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : htmlspecialchars(brand_config('brand_name')); ?>">
    <meta property="og:description" content="<?php echo isset($meta_desc) ? $meta_desc : 'Private Capital & Secured Loans for Ambitious Businesses.'; ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars(brand_asset(brand_config('logo_path'))); ?>">

    <!-- Preconnect for Fonts and CDN -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo $base_path; ?>partner/includs/brand_css.php">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/aurora-theme.css">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/quick-actions.min.css">

    <!-- Page Specific Styles -->
    <?php if(isset($extra_styles)) echo $extra_styles; ?>
</head>
<body>

    <div class="side-shell" aria-live="polite">
        <div class="side-toggle" id="sideToggle">
            Quick Apply
            <small>Instant & CIBIL</small>
        </div>
        <div class="side-panel" id="sidePanel">
            <div class="side-tabs">
                <button class="active" data-form="instant">Instant Form</button>
                <button data-form="cibil">CIBIL Check</button>
            </div>
            <div class="side-form-body active" data-form="instant">
                <input type="text" placeholder="Full Name" aria-label="Full Name">
                <input type="tel" placeholder="Mobile Number" aria-label="Mobile Number">
                <select aria-label="Loan Type">
                    <option>Secured Loan</option>
                    <option>Balance Transfer</option>
                    <option>Bridge Finance</option>
                    <option>Top-up / Enhancement</option>
                    <option>Lease Rental Discounting</option>
                    <option>Working Capital / CC / OD</option>
                </select>
                <input type="number" placeholder="Amount Needed (₹)" aria-label="Amount Needed">
                <button class="btn-hero btn-gold" type="button">Apply Instantly</button>
                <div class="side-mini-actions">
                    <button class="pill-button" type="button"><i class="fas fa-clock"></i> 2-min eligibility</button>
                    <button class="pill-button outline" type="button"><i class="fas fa-clipboard-check"></i> Checklist</button>
                </div>
            </div>
            <div class="side-form-body" data-form="cibil">
                <input type="text" placeholder="Applicant Name" aria-label="Applicant Name">
                <input type="email" placeholder="Email ID" aria-label="Email ID">
                <input type="tel" placeholder="Phone" aria-label="Phone">
                <select aria-label="Residence Type">
                    <option>Owned</option>
                    <option>Rented</option>
                    <option>Company Provided</option>
                    <option>Joint Family</option>
                </select>
                <button class="btn-hero btn-outline" type="button">Get CIBIL Snapshot</button>
                <p style="font-size: 0.85rem; color: var(--text-gray); margin-top: 6px;">Soft inquiry only. No impact on score.
                </p>
            </div>
        </div>
    </div>

    <header>
        <div class="container navbar">
            <a href="<?php echo $base_path; ?>index.php" class="brand-logo">
                <img src="<?php echo htmlspecialchars(brand_asset(brand_config('logo_path'))); ?>" alt="<?php echo htmlspecialchars(brand_config('brand_name')); ?> Logo" width="582" height="auto" loading="eager">
            </a>
            <div class="nav-links">
                <div class="mobile-nav-header">
                    <img src="<?php echo htmlspecialchars(brand_asset(brand_config('logo_path'))); ?>" alt="<?php echo htmlspecialchars(brand_config('brand_name')); ?> Logo" width="582" height="auto" loading="lazy">
                </div>
                <ul class="nav-list">
                    <li><a href="<?php echo $base_path; ?>index.php" class="nav-item">Home</a></li>

                    <li class="dropdown-parent">
                        <a href="javascript:void(0)" class="nav-item">About <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-inner">
                                <div class="mega-column">
                                    <h4 class="mega-title">Who We Are</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>about.php">About Us</a></li>
                                        <li><a href="<?php echo $base_path; ?>company-profile.php">Company Profile & Leadership</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-title">Our Trust</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>company-trust-report.php">Company Trust Report</a></li>
                                        <li><a href="<?php echo $base_path; ?>trustpilot-reviews.php">Trustpilot Reviews</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column" style="flex: 0.8; border: none; display: flex; align-items: center;">
                                    <div style="background: var(--light-bg); padding: 20px; border-radius: 12px; text-align: center; width: 100%;">
                                        <i class="fas fa-building" style="font-size: 2.5rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                                        <h5 style="color: var(--primary-dark); margin-bottom: 8px;">Discover Vardhman</h5>
                                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Learn more about our legacy and vision.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown-parent">
                        <a href="javascript:void(0)" class="nav-item">Apply Loan <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-inner">
                            <div class="mega-column">
                                <h4 class="mega-title">Retail & Personal</h4>
                                <ul>
                                    <li><a href="<?php echo $base_path; ?>loans/personal-loan.php">Personal Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/home-loan.php">Home Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/car-loan.php">Car Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/gold-loan.php">Gold Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/medical-loan.php">Medical Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/professional-loan.php">Professional Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/loan-against-securities.php">Loan Against Securities</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/private-client-lending.php">Private Client Lending</a></li>
                                </ul>
                            </div>
                            <div class="mega-column">
                                <h4 class="mega-title">Business & Corporate</h4>
                                <ul>
                                    <li><a href="<?php echo $base_path; ?>loans/business-loan.php">Business Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/secured-business-loan.php">Secured Business Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/machinery-loan.php">Machinery Loan</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/export-finance.php">Export Finance</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/lease-rental-discounting.php">Lease Rental Discounting</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/startup-finance.php">Startup Finance</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/bridge-finance.php">Bridge Finance</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/overdraft.php">Overdraft / CC</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/structured-debt.php">Structured Debt</a></li>
                                    <li><a href="<?php echo $base_path; ?>loans/pre-ipo-finance.php">Pre-IPO Finance</a></li>
                                </ul>
                            </div>
                            <div class="mega-column" style="flex: 0.8; border: none; display: flex; align-items: center;">
                                <div style="background: var(--light-bg); padding: 20px; border-radius: 12px; text-align: center; width: 100%;">
                                    <i class="fas fa-headset" style="font-size: 2.5rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                                    <h5 style="color: var(--primary-dark); margin-bottom: 8px;">Need Help?</h5>
                                    <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Our experts can guide you to the right loan product.</p>
                                    <a href="<?php echo $base_path; ?>contact.php" class="pill-button" style="font-size: 0.8rem;">Talk to Us</a>
                                </div>
                            </div>
                            </div> <!-- End mega-menu-inner -->
                        </div>
                    </li>

                    <li class="dropdown-parent">
                        <a href="javascript:void(0)" class="nav-item">Private Funding <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-inner">
                                <div class="mega-column">
                                    <h4 class="mega-title">Main Services</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>instant-funding.php">Instant Private Funding</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/funding-blogs.php">All Funding Insights</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-title">Top Private Funding Topics</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>resources/check-basis-private-funding.php">Check Basis Funding</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/unsecured-private-funding-without-collateral.php">Unsecured Funding</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/same-day-private-funding-digital-process.php">Same Day Digital Process</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/pan-india-private-funding.php">Pan India Private Funding</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/high-amount-private-funding-without-guarantee.php">High Amount No Guarantee</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column" style="flex: 0.8; border: none; display: flex; align-items: center;">
                                    <div style="background: var(--light-bg); padding: 20px; border-radius: 12px; text-align: center; width: 100%;">
                                        <i class="fas fa-money-check-alt" style="font-size: 2.5rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                                        <h5 style="color: var(--primary-dark); margin-bottom: 8px;">Need Funds Fast?</h5>
                                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Explore our private funding solutions tailored for your business needs.</p>
                                        <a href="<?php echo $base_path; ?>instant-funding.php" class="pill-button" style="font-size: 0.8rem;">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown-parent">
                        <a href="javascript:void(0)" class="nav-item">Join <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-inner">
                                <div class="mega-column">
                                    <h4 class="mega-title">Partner With Us</h4>
                                    <ul>
                                        <li><a href="https://vardhmanfinance.com/partner/join/step1.php?tp=dsa">Join as DSA</a></li>
                                        <li><a href="https://vardhmanfinance.com/partner/join/step1.php?tp=minibranch">Join as Minibranch</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-title">Employee Zone</h4>
                                    <ul>
                                        <li><a href="https://vardhmanfinance.com/partner/portal/employee-login.php">Employee Login</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column" style="flex: 0.8; border: none; display: flex; align-items: center;">
                                    <div style="background: var(--light-bg); padding: 20px; border-radius: 12px; text-align: center; width: 100%;">
                                        <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                                        <h5 style="color: var(--primary-dark); margin-bottom: 8px;">Grow With Us</h5>
                                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Become a part of our success story.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><a href="<?php echo $base_path; ?>blogs.php" class="nav-item">Blog</a></li>

                    <li class="dropdown-parent">
                        <a href="<?php echo $base_path; ?>resources/index.php" class="nav-item">Insights <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu mega-menu">
                            <div class="mega-menu-inner">
                                <div class="mega-column">
                                    <h4 class="mega-title">Explore</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>locations.php">Locations</a></li>
                                        <li><a href="<?php echo $base_path; ?>cibil-improve.php">CIBIL Improve</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-title">Expert Guides</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>resources/cibil-score-guide.php">CIBIL Score Guide</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/personal-loan-vs-credit-card.php">Loan vs Credit Card</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/home-loan-tax-benefits.php">Home Loan Tax Benefits</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/gold-loan-explained.php">Gold Loan Explained</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/debt-consolidation-tips.php">Debt Consolidation</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/business-loan-documents.php">Business Loan Docs</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-title">Financial Glossary</h4>
                                    <ul>
                                        <li><a href="<?php echo $base_path; ?>resources/repo-rate.php">Repo Rate</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/amortization-schedule.php">Amortization</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/collateral.php">Collateral</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/credit-utilization-ratio.php">Credit Utilization</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/foreclosure.php">Foreclosure</a></li>
                                        <li><a href="<?php echo $base_path; ?>resources/npa.php">NPA (Non-Performing Asset)</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column" style="flex: 0.8; border: none; display: flex; align-items: center;">
                                    <div style="background: var(--light-bg); padding: 20px; border-radius: 12px; text-align: center; width: 100%;">
                                        <i class="fas fa-book-reader" style="font-size: 2.5rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                                        <h5 style="color: var(--primary-dark); margin-bottom: 8px;">Knowledge Hub</h5>
                                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 15px;">Explore all 20+ financial topics.</p>
                                        <a href="<?php echo $base_path; ?>resources/index.php" class="pill-button" style="font-size: 0.8rem;">View All Insights</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li><a href="<?php echo $base_path; ?>contact.php" class="cta-btn nav-item">Contact Us</a></li>
                </ul>
                <div class="mobile-nav-footer">
                    <a href="tel:18002034320" class="btn-hero btn-gold" style="width: 100%; text-align: center; justify-content: center; margin: 0 0 15px;"><i class="fas fa-phone-alt"></i> Call Expert</a>
                    <div class="socials" style="justify-content: center;">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>
    <style>
        /* Dropdown Styles */
        .nav-links, .nav-list {
            height: 100%;
        }

        .dropdown-parent {
            height: 100%; /* Ensure hover area covers full header height */
            display: flex;
            align-items: center;
            position: relative; /* Added relative positioning */
        }
        .dropdown-menu {
            display: none;
            position: fixed; /* Fixed to viewport for full width effect */
            top: 80px; /* Header height */
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px 0;
            z-index: 1100; /* Higher than header and other elements */
            border-top: 1px solid #eee;
            margin-top: -1px; /* Slight overlap to ensure connectivity */
        }

        .dropdown-parent:hover {
            z-index: 1201; /* Ensure the hovered parent is stacked above siblings */
        }

        .dropdown-parent:hover .dropdown-menu {
            display: block; /* Change to block, inner container handles flex */
            animation: slideDown 0.3s ease-out;
            z-index: 1200; /* Ensure active menu is above others */
        }

        /* Bridge to ensure hover persistence if there's a sub-pixel gap */
        .dropdown-parent::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px; /* Increased bridge height for better stability */
            transform: translateY(100%);
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Inner container for centering content */
        .mega-menu-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 40px;
        }

        .mega-column {
            flex: 1;
            padding: 0 20px;
            border-left: 1px solid #eee;
        }
        .mega-column:first-child {
            border-left: none;
        }
        .mega-title {
            color: var(--primary-dark);
            font-size: 1rem;
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--accent-gold);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .mega-column ul {
            padding: 0;
            margin: 0;
        }
        .mega-column li {
            list-style: none;
            margin-bottom: 5px;
        }
        .mega-column li a {
            display: block;
            padding: 8px 10px;
            color: #555;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s;
            border-radius: 4px;
        }
        .mega-column li a:hover {
            background: var(--light-bg);
            color: var(--accent-gold);
            padding-left: 15px;
        }

        @media (max-width: 1024px) {
             .dropdown-menu {
                left: 0; /* Align left on smaller desktops */
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                overflow-y: auto;
                max-height: 100vh;
            }

            .dropdown-menu {
                position: static;
                width: 100%;
                box-shadow: none;
                background: transparent;
                padding: 0 0 0 10px;
                border: none;
                display: none !important; /* Managed by JS toggle or hover on parent */
            }

            .dropdown-parent:hover .dropdown-menu,
            .dropdown-parent.active .dropdown-menu {
                display: block !important;
            }

            .mega-menu-inner {
                flex-direction: column;
                gap: 0;
                padding: 0;
            }

            .mega-column {
                border-left: none;
                padding: 10px 0;
                margin-bottom: 10px;
            }

            /* Hide the extra promo column on mobile to save space */
            .mega-column:last-child {
                display: none;
            }

            .mega-title {
                color: var(--accent-gold);
                border-bottom: 1px solid rgba(255,255,255,0.1);
                margin-top: 15px;
            }
            .mega-column li a {
                color: rgba(255,255,255,0.7);
                padding: 10px 0;
            }
            .mega-column li a:hover {
                background: transparent;
                color: white;
                padding-left: 5px;
            }
        }
    </style>
