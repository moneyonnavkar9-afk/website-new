<?php
$page_title = 'Corporate Social Responsibility | Vardhman Finance';
$meta_description = 'Learn about Vardhman Finance\'s Corporate Social Responsibility (CSR) initiatives, giving back to the community alongside our financial facilitation services.';
require_once 'header.php';
?>

<style>
    .csr-header {
        background: url('assets/images/csr-bg.jpg') center/cover;
        position: relative;
        padding: 100px 0;
        text-align: center;
        color: white;
    }
    .csr-header::before {
        content: '';
        position: absolute;
        top:0; left:0; right:0; bottom:0;
        background: linear-gradient(rgba(10,37,64,0.8), rgba(10,37,64,0.95));
    }
    .csr-header .container {
        position: relative;
        z-index: 2;
    }
    .csr-header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        color: var(--accent-gold);
    }
    .csr-content {
        padding: 80px 0;
        background: #f9fbfd;
    }
    .initiative-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.06);
        margin-bottom: 40px;
        display: flex;
    }
    .initiative-img {
        width: 40%;
        background: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 4rem;
        opacity: 0.8;
    }
    .initiative-text {
        padding: 40px;
        width: 60%;
    }
    .initiative-text h3 {
        color: var(--primary-dark);
        margin-bottom: 15px;
    }
    @media (max-width: 768px) {
        .initiative-card {
            flex-direction: column;
        }
        .initiative-img {
            width: 100%;
            height: 200px;
        }
        .initiative-text {
            width: 100%;
            padding: 25px;
        }
    }
</style>

<section class="csr-header">
    <div class="container">
        <h1>Corporate Social Responsibility</h1>
        <p class="lead max-w-800 mx-auto mt-3">Beyond facilitating private funding, Vardhman Financial Services is committed to making a positive, sustainable impact on the communities we serve.</p>
    </div>
</section>

<section class="csr-content">
    <div class="container max-w-1000">

        <div class="initiative-card">
            <div class="initiative-img">
                <i class="fas fa-book-reader"></i>
            </div>
            <div class="initiative-text">
                <h3>Financial Literacy Programs</h3>
                <p>We believe informed businesses make better decisions. A portion of our resources is dedicated to conducting workshops for MSMEs on understanding credit health, the importance of formal cheque basis transactions, and navigating private funding landscapes effectively.</p>
            </div>
        </div>

        <div class="initiative-card">
            <div class="initiative-img" style="background: var(--emerald);">
                <i class="fas fa-seedling"></i>
            </div>
            <div class="initiative-text">
                <h3>Sustainable Business Support</h3>
                <p>As a facilitator, we actively encourage our investor network to consider environmentally sustainable and socially responsible businesses. We provide preferential structuring and reduced intermediary service charges for businesses demonstrating strong ESG (Environmental, Social, and Governance) practices.</p>
            </div>
        </div>

        <div class="initiative-card">
            <div class="initiative-img" style="background: var(--accent-gold);">
                <i class="fas fa-hands-helping"></i>
            </div>
            <div class="initiative-text">
                <h3>Community Welfare</h3>
                <p>Vardhman Finance contributes to local NGOs and initiatives focused on skill development and poverty alleviation, ensuring that our success as a financial service provider translates into tangible societal benefits.</p>
            </div>
        </div>

        <div class="text-center mt-5 p-4" style="background: white; border-radius: 8px; border: 1px solid #eee;">
            <h4 style="color: var(--primary-dark); font-family: 'Playfair Display', serif;">Our Commitment</h4>
            <p class="mb-0 text-muted">Operating strictly as an intermediary gives us a unique perspective on the economic engine. We are committed to ensuring our facilitation of private capital not only generates business growth but also fosters a more equitable and educated financial ecosystem.</p>
        </div>

    </div>
</section>

<?php require_once 'footer.php'; ?>
