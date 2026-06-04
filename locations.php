<?php
$page_title = 'Locations Serving All Over India | Vardhman Finance';
$meta_desc = 'Vardhman Finance serves businesses and individuals across India. Check our presence in 30+ major cities including Mumbai, Delhi, Bangalore, and more.';
$meta_keywords = 'Vardhman Finance Locations, Pan India Loans, Private Funding Cities, Loan Availability India';

// Enhanced City Data
$cities_data = [
    ["name" => "Mumbai", "slug" => "mumbai", "icon" => "fa-briefcase", "tagline" => "Financial Capital", "desc" => "Hub for corporate finance and trade."],
    ["name" => "Delhi", "slug" => "delhi", "icon" => "fa-landmark", "tagline" => "National Capital", "desc" => "Serving the heart of India's administration."],
    ["name" => "Bangalore", "slug" => "bangalore", "icon" => "fa-laptop-code", "tagline" => "Silicon Valley", "desc" => "Funding tech startups and innovators."],
    ["name" => "Hyderabad", "slug" => "hyderabad", "icon" => "fa-city", "tagline" => "Pharma & Tech", "desc" => "Supporting biotech and IT enterprises."],
    ["name" => "Ahmedabad", "slug" => "ahmedabad", "icon" => "fa-industry", "tagline" => "Industrial Hub", "desc" => "Capital for textiles and manufacturing."],
    ["name" => "Chennai", "slug" => "chennai", "icon" => "fa-cogs", "tagline" => "Detroit of India", "desc" => "Focus on auto and manufacturing units."],
    ["name" => "Kolkata", "slug" => "kolkata", "icon" => "fa-ship", "tagline" => "Eastern Gateway", "desc" => "Connecting commerce in the East."],
    ["name" => "Surat", "slug" => "surat", "icon" => "fa-gem", "tagline" => "Diamond City", "desc" => "Loans for diamond and textile markets."],
    ["name" => "Pune", "slug" => "pune", "icon" => "fa-car", "tagline" => "Auto & IT", "desc" => "Education and automotive industry center."],
    ["name" => "Jaipur", "slug" => "jaipur", "icon" => "fa-hotel", "tagline" => "Pink City", "desc" => "Supporting tourism and heritage businesses."],
    ["name" => "Lucknow", "slug" => "lucknow", "icon" => "fa-monument", "tagline" => "City of Nawabs", "desc" => "Growing hub for SMEs and retail."],
    ["name" => "Kanpur", "slug" => "kanpur", "icon" => "fa-shoe-prints", "tagline" => "Leather City", "desc" => "Industrial finance for leather exports."],
    ["name" => "Nagpur", "slug" => "nagpur", "icon" => "fa-orange", "tagline" => "Orange City", "desc" => "Logistics and trade center of India."],
    ["name" => "Indore", "slug" => "indore", "icon" => "fa-utensils", "tagline" => "Food Capital", "desc" => "Fastest growing commercial city."],
    ["name" => "Thane", "slug" => "thane", "icon" => "fa-building", "tagline" => "Lake City", "desc" => "Rapid urbanization and housing finance."],
    ["name" => "Bhopal", "slug" => "bhopal", "icon" => "fa-water", "tagline" => "City of Lakes", "desc" => "Government and industrial sector loans."],
    ["name" => "Visakhapatnam", "slug" => "visakhapatnam", "icon" => "fa-anchor", "tagline" => "Port City", "desc" => "Maritime and heavy industry funding."],
    ["name" => "Pimpri-Chinchwad", "slug" => "pimpri-chinchwad", "icon" => "fa-tools", "tagline" => "Industrial Twin", "desc" => "Manufacturing belt finance."],
    ["name" => "Patna", "slug" => "patna", "icon" => "fa-book-reader", "tagline" => "Historic Center", "desc" => "Emerging market for trade loans."],
    ["name" => "Vadodara", "slug" => "vadodara", "icon" => "fa-flask", "tagline" => "Chemical Hub", "desc" => "Petrochemicals and engineering focus."],
    ["name" => "Ghaziabad", "slug" => "ghaziabad", "icon" => "fa-train", "tagline" => "Gateway of UP", "desc" => "Real estate and industrial loans."],
    ["name" => "Ludhiana", "slug" => "ludhiana", "icon" => "fa-tshirt", "tagline" => "Manchester of India", "desc" => "Hosiery and industrial goods."],
    ["name" => "Agra", "slug" => "agra", "icon" => "fa-dungeon", "tagline" => "Taj City", "desc" => "Tourism and handicraft financing."],
    ["name" => "Nashik", "slug" => "nashik", "icon" => "fa-wine-glass-alt", "tagline" => "Wine Capital", "desc" => "Agriculture and industrial loans."],
    ["name" => "Faridabad", "slug" => "faridabad", "icon" => "fa-tractor", "tagline" => "Industrial City", "desc" => "Manufacturing and export support."],
    ["name" => "Meerut", "slug" => "meerut", "icon" => "fa-dumbbell", "tagline" => "Sports City", "desc" => "Sports goods manufacturing hub."],
    ["name" => "Rajkot", "slug" => "rajkot", "icon" => "fa-cogs", "tagline" => "Engineering Hub", "desc" => "Foundry and machine parts industry."],
    ["name" => "Kalyan-Dombivli", "slug" => "kalyan-dombivli", "icon" => "fa-home", "tagline" => "Smart City", "desc" => "Housing and infrastructure loans."],
    ["name" => "Vasai-Virar", "slug" => "vasai-virar", "icon" => "fa-warehouse", "tagline" => "Growth Corridor", "desc" => "Small scale industries and logistics."],
    ["name" => "Varanasi", "slug" => "varanasi", "icon" => "fa-om", "tagline" => "Spiritual Capital", "desc" => "Textiles and tourism finance."]
];

$extra_styles = '
<style>
    .loc-hero {
        background: linear-gradient(rgba(11, 30, 59, 0.9), rgba(11, 30, 59, 0.8)), url("assets/pattern.png");
        padding: 140px 0 100px;
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .loc-hero::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: linear-gradient(to top, #fff, transparent);
    }

    /* Stats Section */
    .loc-stats {
        background: white;
        padding: 40px 0;
        margin-top: -60px;
        position: relative;
        z-index: 10;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        text-align: center;
        border: 1px solid rgba(0,0,0,0.05);
    }
    .loc-stat-item { padding: 10px; border-right: 1px solid #eee; }
    .loc-stat-item:last-child { border-right: none; }
    .loc-stat-item h3 { font-size: 2.5rem; color: var(--accent-gold); margin-bottom: 5px; font-weight: 700; }
    .loc-stat-item p { color: var(--primary-dark); font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }

    /* New Card Styles */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        margin-top: 40px;
    }
    .city-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        text-align: left;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(0,0,0,0.05);
        text-decoration: none;
        color: var(--text-dark);
        display: block;
        position: relative;
        overflow: hidden;
    }
    .city-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--accent-gold);
        opacity: 0;
        transition: 0.3s;
    }
    .city-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-color: rgba(197,160,89,0.3);
    }
    .city-card:hover::before { opacity: 1; }

    .city-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px; }
    .city-icon {
        font-size: 1.8rem;
        color: var(--primary-blue);
        background: rgba(26, 79, 138, 0.08);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        transition: 0.3s;
    }
    .city-card:hover .city-icon { background: var(--primary-blue); color: white; }

    .city-name { font-weight: 700; font-size: 1.2rem; color: var(--primary-dark); }
    .city-tagline { font-size: 0.75rem; color: var(--accent-gold); font-weight: 700; text-transform: uppercase; margin-bottom: 6px; display: block; letter-spacing: 0.5px; }
    .city-desc { font-size: 0.9rem; color: var(--text-gray); line-height: 1.5; }

    /* New Sections Common */
    .section-title { text-align: center; margin-bottom: 50px; }
    .section-title h2 { color: var(--primary-dark); font-size: 2.2rem; margin-bottom: 15px; position: relative; display: inline-block; }
    .section-title h2::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background: var(--accent-gold);
        margin: 10px auto 0;
    }
    .section-title p { color: var(--text-gray); max-width: 600px; margin: 0 auto; line-height: 1.6; }

    /* Regional Focus */
    .region-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; }
    .region-card { background: var(--light-bg); padding: 30px; border-radius: 12px; border-left: 4px solid var(--primary-dark); transition: 0.3s; }
    .region-card:hover { transform: translateY(-5px); background: white; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
    .region-card h4 { color: var(--primary-dark); margin-bottom: 10px; font-size: 1.2rem; font-weight: 700; }
    .region-card p { font-size: 0.95rem; color: var(--text-gray); }

    /* Process */
    .process-row { display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; position: relative; }
    .process-step { flex: 1; min-width: 250px; text-align: center; padding: 20px; position: relative; }
    .step-num { font-size: 4rem; color: rgba(197, 160, 89, 0.15); font-weight: 800; position: absolute; top: -10px; left: 50%; transform: translateX(-50%); z-index: 0; }
    .step-content { position: relative; z-index: 1; margin-top: 20px; }
    .step-content h5 { font-size: 1.2rem; color: var(--primary-dark); margin-bottom: 8px; font-weight: 700; }

    /* Industries */
    .ind-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
    @media (max-width: 992px) { .ind-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 576px) { .ind-grid { grid-template-columns: 1fr; } }
    .ind-item { background: white; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid #eee; transition: 0.3s; }
    .ind-item:hover { border-color: var(--accent-gold); transform: translateY(-5px); box-shadow: 0 8px 20px rgba(0,0,0,0.05); }
    .ind-icon { font-size: 1.8rem; color: var(--primary-blue); margin-bottom: 10px; }
    .ind-item h5 { font-size: 0.95rem; color: var(--primary-dark); }

    /* Testimonials */
    .testi-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
    .testi-card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid var(--accent-gold); position: relative; }
    .testi-loc { color: var(--accent-gold); font-size: 0.8rem; font-weight: 700; margin-bottom: 10px; display: block; text-transform: uppercase; letter-spacing: 1px; }
    .testi-quote { font-style: italic; color: #555; margin-bottom: 15px; font-size: 0.95rem; }
    .testi-auth { font-weight: 700; color: var(--primary-dark); display: flex; align-items: center; gap: 10px; }

    /* FAQ */
    .faq-wrapper { max-width: 800px; margin: 0 auto; }
    .faq-box { background: white; border-radius: 8px; margin-bottom: 15px; border: 1px solid #eee; overflow: hidden; }
    .faq-q { padding: 18px 25px; background: #fafafa; cursor: pointer; font-weight: 600; display: flex; justify-content: space-between; align-items: center; color: var(--primary-dark); transition: 0.3s; }
    .faq-q:hover { background: #f0f0f0; }
    .faq-a { padding: 25px; display: none; color: #666; border-top: 1px solid #eee; line-height: 1.6; }
    .faq-box.active .faq-a { display: block; }
    .faq-icon { transition: transform 0.3s; }
    .faq-box.active .faq-icon { transform: rotate(180deg); color: var(--accent-gold); }

    /* Partner */
    .partner-banner { background: var(--primary-dark); color: white; border-radius: 20px; padding: 50px; text-align: center; position: relative; overflow: hidden; }
    .partner-content { position: relative; z-index: 2; }
    .partner-bg { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url("assets/pattern.png"); opacity: 0.1; z-index: 1; }
</style>
';
$base_path = './';
include 'header.php';
?>

<!-- Hero Section -->
<div class="loc-hero">
    <div class="container">
        <h1 class="fade-in">Funding India's Growth</h1>
        <p class="fade-in" style="margin-top: 15px; font-size: 1.2rem; max-width: 700px; margin-left: auto; margin-right: auto; opacity: 0.9;">
            From metro hubs to industrial towns, Vardhman Finance delivers capital where opportunity exists.
        </p>
    </div>
</div>

<!-- Section 1: Stats -->
<div class="container fade-in">
    <div class="loc-stats">
        <div class="loc-stat-item">
            <h3 class="counter" data-target="30">30+</h3>
            <p>Cities Covered</p>
        </div>
        <div class="loc-stat-item">
            <h3 class="counter" data-target="5000">5000+</h3>
            <p>Happy Clients</p>
        </div>
        <div class="loc-stat-item">
            <h3 class="counter" data-target="24">24h</h3>
            <p>Approval Speed</p>
        </div>
        <div class="loc-stat-item">
            <h3 class="counter" data-target="500">500Cr+</h3>
            <p>Disbursed</p>
        </div>
    </div>
</div>

<!-- Intro Section -->
<section class="section-padding">
    <div class="container">
        <div class="row" style="display: flex; gap: 50px; flex-wrap: wrap; align-items: center;">
            <div style="flex: 1; min-width: 300px;" class="fade-in">
                <span style="color: var(--accent-gold); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">National Reach, Local Touch</span>
                <h2 style="color: var(--primary-dark); margin: 10px 0 20px; font-size: 2.2rem;">Private Funding Without Borders</h2>
                <p style="margin-bottom: 15px; line-height: 1.7; color: #555;">
                    Vardhman Finance has expanded its footprint to cover every major commercial hub in India. We understand that business opportunities are not limited by geography, and neither is our capital.
                </p>
                <p style="line-height: 1.7; color: #555;">
                    Our digital-first approach combined with a strong network of local partners allows us to disburse loans in Mumbai just as fast as we do in our headquarters. Whether you need a <strong>Personal Loan, Business Loan, or Private Funding</strong>, we are just a click away.
                </p>
                <a href="apply.php" class="btn-hero btn-gold" style="margin-left: 0; margin-top: 20px;">Check Eligibility</a>
            </div>
            <div style="flex: 1; min-width: 300px;" class="fade-in">
                 <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&w=800&q=80" alt="India Map Concept" style="width: 100%; border-radius: 12px; box-shadow: 20px 20px 0 var(--light-bg);">
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Regional Focus -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Regional Expertise</h2>
            <p>We tailor our financial products to match the industrial heartbeat of every region.</p>
        </div>
        <div class="region-grid fade-in">
            <div class="region-card">
                <h4>North India</h4>
                <p>Focus on Manufacturing, Trading, and Government Contractors. Serving Delhi NCR, Punjab, and UP with specialized industrial loans.</p>
            </div>
            <div class="region-card">
                <h4>West India</h4>
                <p>Supporting Textiles, Diamonds, and Financial Services. From Mumbai's corporate hubs to Surat's diamond markets.</p>
            </div>
            <div class="region-card">
                <h4>South India</h4>
                <p>Funding IT, Biotech, and Automobiles. Providing capital for startups and established tech firms in Bangalore, Hyderabad, and Chennai.</p>
            </div>
            <div class="region-card">
                <h4>East & Central</h4>
                <p>Boosting Logistics, Mining, and Heavy Industry. Strategic finance for developing corridors in Kolkata, Nagpur, and beyond.</p>
            </div>
        </div>
    </div>
</section>

<!-- City Grid Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center fade-in">
            <span style="color: var(--primary-blue); font-weight: 600;">FIND YOUR CITY</span>
            <h2 style="margin-top: 10px;">Select Your Location</h2>
        </div>

        <div class="grid-container fade-in">
            <?php
            foreach ($cities_data as $city) {
                echo '
                <a href="locations/'.$city['slug'].'.php" class="city-card">
                    <div class="city-header">
                        <span class="city-tagline">'.$city['tagline'].'</span>
                        <div class="city-icon"><i class="fas '.$city['icon'].'"></i></div>
                    </div>
                    <div class="city-name">'.$city['name'].'</div>
                    <p class="city-desc">'.$city['desc'].'</p>
                </a>
                ';
            }
            ?>
        </div>
    </div>
</section>

<!-- Section 3: Process -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title fade-in">
            <h2>How We Serve Remote Locations</h2>
            <p>Our hybrid model ensures you get the speed of fintech with the trust of a bank, no matter where you are.</p>
        </div>
        <div class="process-row fade-in">
            <div class="process-step">
                <div class="step-num">01</div>
                <div class="step-content">
                    <div class="icon-circle" style="margin: 0 auto 15px; background: white; box-shadow: 0 5px 15px rgba(0,0,0,0.1);"><i class="fas fa-laptop"></i></div>
                    <h5>Digital Application</h5>
                    <p style="font-size: 0.9rem; color: #666;">Apply online and upload docs. Our central team processes it instantly.</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-num">02</div>
                <div class="step-content">
                    <div class="icon-circle" style="margin: 0 auto 15px; background: white; box-shadow: 0 5px 15px rgba(0,0,0,0.1);"><i class="fas fa-user-check"></i></div>
                    <h5>Local Verification</h5>
                    <p style="font-size: 0.9rem; color: #666;">Our local field officer visits your premise for a quick physical verification.</p>
                </div>
            </div>
            <div class="process-step">
                <div class="step-num">03</div>
                <div class="step-content">
                    <div class="icon-circle" style="margin: 0 auto 15px; background: white; box-shadow: 0 5px 15px rgba(0,0,0,0.1);"><i class="fas fa-university"></i></div>
                    <h5>Central Disbursal</h5>
                    <p style="font-size: 0.9rem; color: #666;">Once approved, funds are transferred directly from our HQ to your account.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Industries -->
<section class="section-padding">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Industries We Finance</h2>
            <p>Sector-specific expertise for every corner of the nation.</p>
        </div>
        <div class="ind-grid fade-in">
            <div class="ind-item">
                <i class="fas fa-industry ind-icon"></i>
                <h5>Manufacturing</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-shopping-bag ind-icon"></i>
                <h5>Retail & Trading</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-laptop-code ind-icon"></i>
                <h5>IT & Services</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-truck ind-icon"></i>
                <h5>Logistics</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-hotel ind-icon"></i>
                <h5>Hospitality</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-first-aid ind-icon"></i>
                <h5>Healthcare</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-hard-hat ind-icon"></i>
                <h5>Construction</h5>
            </div>
            <div class="ind-item">
                <i class="fas fa-tshirt ind-icon"></i>
                <h5>Textiles</h5>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Testimonials -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Success Stories</h2>
            <p>Voices from across the map.</p>
        </div>
        <div class="testi-grid fade-in">
            <div class="testi-card">
                <span class="testi-loc"><i class="fas fa-map-marker-alt"></i> Mumbai</span>
                <p class="testi-quote">"Needed working capital for my export business urgently. Vardhman's team in Mumbai visited the same day and processed it."</p>
                <div class="testi-auth">
                    <div style="width: 40px; height: 40px; background: #ddd; border-radius: 50%;"></div>
                    <span>Rajesh Mehta</span>
                </div>
            </div>
            <div class="testi-card">
                <span class="testi-loc"><i class="fas fa-map-marker-alt"></i> Bangalore</span>
                <p class="testi-quote">"As a tech startup, traditional banks were slow. Vardhman understood our valuation and funded us in 48 hours."</p>
                <div class="testi-auth">
                    <div style="width: 40px; height: 40px; background: #ddd; border-radius: 50%;"></div>
                    <span>Ananya Reddy</span>
                </div>
            </div>
            <div class="testi-card">
                <span class="testi-loc"><i class="fas fa-map-marker-alt"></i> Delhi</span>
                <p class="testi-quote">"Best rates for machinery loans in NCR. Their process is transparent and zero hidden charges."</p>
                <div class="testi-auth">
                    <div style="width: 40px; height: 40px; background: #ddd; border-radius: 50%;"></div>
                    <span>Vikram Singh</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Partner Program -->
<section class="section-padding">
    <div class="container fade-in">
        <div class="partner-banner">
            <div class="partner-bg"></div>
            <div class="partner-content">
                <h2 style="color: white; margin-bottom: 15px;">Become a Channel Partner</h2>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Are you a CA, Financial Consultant, or Loan Agent? Join our pan-India network and earn high payouts. Represents us in your city.
                </p>
                <a href="contact.php" class="btn-hero btn-gold">Join Network</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: FAQ -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="section-title fade-in">
            <h2>Location FAQ</h2>
        </div>
        <div class="faq-wrapper fade-in">
            <div class="faq-box">
                <div class="faq-q">
                    Do I need to visit your office to apply?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-a">
                    No, our entire application process is digital. You can apply from the comfort of your home or office. Physical verification, if needed, will be done at your location by our field officer.
                </div>
            </div>
            <div class="faq-box">
                <div class="faq-q">
                    Is the interest rate the same for all cities?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-a">
                    Yes, our base interest rates are standardized across India. However, final offers may vary slightly based on local market risks and your credit profile.
                </div>
            </div>
            <div class="faq-box">
                <div class="faq-q">
                    How long does disbursement take for non-metro cities?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-a">
                    We treat all locations with equal priority. Disbursement typically takes 24-72 hours post-approval, regardless of whether you are in a metro or a tier-2 city.
                </div>
            </div>
            <div class="faq-box">
                <div class="faq-q">
                    My city is not listed. Can I still apply?
                    <i class="fas fa-chevron-down faq-icon"></i>
                </div>
                <div class="faq-a">
                    Absolutely! We serve many more locations on a case-to-case basis. Please contact us or fill out the application form, and our team will get back to you.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: CTA -->
<section class="section-padding text-center">
    <div class="container fade-in">
        <h2>Ready to Scale Your Business?</h2>
        <p style="margin: 15px 0 30px;">Get a customized loan offer tailored for your location.</p>
        <a href="apply.php" class="btn-hero btn-gold">Apply Now</a>
    </div>
</section>

<script>
    // FAQ Toggle Script
    document.querySelectorAll('.faq-q').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            parent.classList.toggle('active');
        });
    });

    // Simple Counter Animation
    const counters = document.querySelectorAll('.counter');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                const target = +entry.target.getAttribute('data-target');
                const updateCount = () => {
                    const count = +entry.target.innerText.replace('+','').replace('Cr','').replace('h','');
                    const inc = target / 100;
                    if(count < target) {
                        entry.target.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20);
                    } else {
                        // Restore suffix
                        if(entry.target.getAttribute('data-target') === '500') entry.target.innerText = target + 'Cr+';
                        else if(entry.target.getAttribute('data-target') === '24') entry.target.innerText = target + 'h';
                        else entry.target.innerText = target + '+';
                    }
                };
                updateCount();
                observer.unobserve(entry.target);
            }
        });
    });

    counters.forEach(counter => {
        counter.innerText = '0'; // reset
        observer.observe(counter);
    });
</script>

<?php include 'footer.php'; ?>
