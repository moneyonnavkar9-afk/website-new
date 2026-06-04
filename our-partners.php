<?php
$page_title = 'Our Partners | Vardhman Finance';
$meta_description = 'Discover the network of RBI-registered NBFCs and private investors that power Vardhman Finance’s private funding facilitation services.';
require_once 'header.php';
?>

<style>
    .partners-hero {
        padding: 80px 0;
        background-color: #fafafa;
        border-bottom: 2px solid var(--primary);
        text-align: center;
    }
    .partners-hero h1 {
        color: var(--primary-dark);
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
    }
    .network-section {
        padding: 80px 0;
    }
    .partner-category {
        margin-bottom: 60px;
    }
    .partner-category h2 {
        color: var(--accent-gold);
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }
    .network-card {
        background: #fff;
        border: 1px solid #eaeaea;
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        transition: transform 0.3s;
    }
    .network-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .network-card i {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 15px;
    }
    .facilitator-role {
        background: var(--primary-dark);
        color: white;
        padding: 50px;
        border-radius: 12px;
        margin-top: 40px;
        text-align: center;
    }
</style>

<section class="partners-hero">
    <div class="container">
        <h1>Our Financial Network</h1>
        <p class="lead max-w-700 mx-auto mt-3">The strength of a Financial Service Provider lies in its network. We collaborate with top-tier institutions to facilitate robust private funding solutions.</p>
    </div>
</section>

<section class="network-section">
    <div class="container">

        <div class="partner-category">
            <h2>RBI-Registered NBFCs</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="network-card">
                        <i class="fas fa-university"></i>
                        <h4>Institutional Lenders</h4>
                        <p class="text-muted text-sm">We partner with regulated Non-Banking Financial Companies to offer structured, compliant, and large-scale funding facilitations.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="network-card">
                        <i class="fas fa-building"></i>
                        <h4>Specialized Financiers</h4>
                        <p class="text-muted text-sm">Connecting businesses with NBFCs that specialize in specific sectors, ensuring tailored financial solutions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="network-card">
                        <i class="fas fa-landmark"></i>
                        <h4>Regional Partners</h4>
                        <p class="text-muted text-sm">A widespread network allowing us to facilitate funding for businesses across various geographical locations in India.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="partner-category">
            <h2>Private Investors & Syndicates</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="network-card">
                        <i class="fas fa-user-tie"></i>
                        <h4>High-Net-Worth Individuals (HNIs)</h4>
                        <p class="text-muted text-sm">Facilitating direct private funding from HNIs looking for secure, cheque basis investment opportunities in growing businesses.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="network-card">
                        <i class="fas fa-users-cog"></i>
                        <h4>Investment Syndicates</h4>
                        <p class="text-muted text-sm">Collaborating with groups of investors to pool resources for larger private funding requirements, expertly structured by our team.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="facilitator-role">
            <h3 style="color: var(--accent-gold); font-family: 'Playfair Display', serif;">The Power of Intermediation</h3>
            <p class="mt-3">Vardhman Financial Services acts strictly as a facilitator. We do not provide direct loans. Our expertise is evaluating your business needs and matching them with the appropriate entity from our extensive partner network, managing the complex documentation required for secure, cheque basis funding.</p>
        </div>

    </div>
</section>

<?php require_once 'footer.php'; ?>
