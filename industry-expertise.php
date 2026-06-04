<?php
$page_title = 'Industry Expertise | Vardhman Finance';
$meta_description = 'Explore Vardhman Finance\'s industry-specific expertise in facilitating private funding and cheque basis capital across various sectors in India.';
require_once 'header.php';
?>

<style>
    .expertise-header {
        background: url('assets/images/expertise-bg.jpg') center/cover;
        position: relative;
        padding: 100px 0;
        color: white;
    }
    .expertise-header::before {
        content: '';
        position: absolute;
        top:0; left:0; right:0; bottom:0;
        background: rgba(10, 37, 64, 0.9);
    }
    .expertise-header .container {
        position: relative;
        z-index: 2;
        text-align: center;
    }
    .expertise-header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
    }
    .industry-grid {
        padding: 80px 0;
        background: #f8f9fa;
    }
    .industry-card {
        background: white;
        padding: 40px 30px;
        border-radius: 8px;
        margin-bottom: 30px;
        border-top: 3px solid transparent;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .industry-card:hover {
        border-top-color: var(--accent-gold);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .industry-icon {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 20px;
    }
    .industry-card h3 {
        color: var(--primary-dark);
        font-size: 1.4rem;
        margin-bottom: 15px;
    }
    .intermediary-footer {
        background: white;
        padding: 60px 0;
        border-top: 1px solid #eee;
        text-align: center;
    }
</style>

<section class="expertise-header">
    <div class="container">
        <h1>Industry Expertise</h1>
        <p class="lead max-w-800 mx-auto">Tailored private funding facilitation requires deep sector knowledge. We understand the unique financial dynamics of your industry.</p>
    </div>
</section>

<section class="industry-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="industry-card">
                    <i class="fas fa-industry industry-icon"></i>
                    <h3>Manufacturing</h3>
                    <p>Facilitating capital for machinery upgrades, facility expansion, and working capital needs through structured private funding.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="industry-card">
                    <i class="fas fa-building industry-icon"></i>
                    <h3>Real Estate & Construction</h3>
                    <p>Expertise in structuring bridge finance and project-based funding, connecting developers with capable private investors.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="industry-card">
                    <i class="fas fa-shopping-cart industry-icon"></i>
                    <h3>Retail & Wholesale</h3>
                    <p>Providing rapid facilitation for inventory financing and expansion plans, heavily utilizing secure cheque basis transactions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="industry-card">
                    <i class="fas fa-laptop-code industry-icon"></i>
                    <h3>IT & Services</h3>
                    <p>Understanding the intangible asset nature of tech firms to match them with forward-thinking private funding partners.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="industry-card">
                    <i class="fas fa-heartbeat industry-icon"></i>
                    <h3>Healthcare</h3>
                    <p>Facilitating equipment finance and clinic expansions through our network of healthcare-focused NBFCs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="industry-card">
                    <i class="fas fa-truck industry-icon"></i>
                    <h3>Logistics</h3>
                    <p>Structuring financial solutions for fleet expansion and supply chain optimization via private capital avenues.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="intermediary-footer">
    <div class="container">
        <h2 style="font-family: 'Playfair Display', serif; color: var(--primary-dark);">Cross-Sector Financial Facilitation</h2>
        <p class="max-w-800 mx-auto mt-3 text-muted">Regardless of your sector, Vardhman Financial Services acts as your dedicated intermediary. We leverage our industry knowledge not to lend directly, but to expertly package your proposal and facilitate the optimal private or cheque basis funding arrangement with our partners.</p>
    </div>
</section>

<?php require_once 'footer.php'; ?>
