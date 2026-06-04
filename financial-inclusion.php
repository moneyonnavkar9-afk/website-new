<?php
$page_title = 'Financial Inclusion | Vardhman Finance';
$meta_description = 'Discover Vardhman Finance\'s commitment to financial inclusion by facilitating accessible private funding for underserved businesses across India.';
require_once 'header.php';
?>

<style>
    .inclusion-hero {
        background: var(--primary-dark);
        color: white;
        padding: 80px 0;
        text-align: center;
        border-bottom: 4px solid var(--emerald);
    }
    .inclusion-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        margin-bottom: 20px;
    }
    .content-section {
        padding: 80px 0;
        background: #fff;
    }
    .focus-area {
        display: flex;
        align-items: flex-start;
        gap: 30px;
        margin-bottom: 50px;
    }
    .focus-icon {
        background: rgba(46, 204, 113, 0.1);
        color: var(--emerald);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        flex-shrink: 0;
    }
    .focus-text h3 {
        color: var(--primary-dark);
        margin-bottom: 15px;
    }
    .focus-text p {
        color: #555;
        line-height: 1.7;
    }
    .cheque-note {
        background: #fdfbf7;
        border: 1px dashed var(--accent-gold);
        padding: 30px;
        border-radius: 8px;
        margin-top: 40px;
    }
    @media (max-width: 768px) {
        .focus-area {
            flex-direction: column;
            text-align: center;
            align-items: center;
        }
    }
</style>

<section class="inclusion-hero">
    <div class="container">
        <h1>Driving Financial Inclusion</h1>
        <p class="lead max-w-800 mx-auto">Empowering businesses across India by bridging the gap between untapped potential and secure private funding.</p>
    </div>
</section>

<section class="content-section">
    <div class="container max-w-900">

        <div class="focus-area">
            <div class="focus-icon"><i class="fas fa-map-marked-alt"></i></div>
            <div class="focus-text">
                <h3>Reaching Beyond Metros</h3>
                <p>While traditional banking often concentrates on major urban centers, our facilitation network actively seeks to connect businesses in Tier 2 and Tier 3 cities with reliable private funding sources, promoting balanced regional growth.</p>
            </div>
        </div>

        <div class="focus-area">
            <div class="focus-icon"><i class="fas fa-store"></i></div>
            <div class="focus-text">
                <h3>Empowering MSMEs</h3>
                <p>Micro, Small, and Medium Enterprises are the backbone of the economy. We specialize in structuring their profiles to make them attractive to our network of NBFCs and private investors, facilitating capital access that might otherwise be unavailable.</p>
            </div>
        </div>

        <div class="focus-area">
            <div class="focus-icon"><i class="fas fa-hands-helping"></i></div>
            <div class="focus-text">
                <h3>Alternative Credit Evaluation</h3>
                <p>Operating as an intermediary allows us to look beyond rigid traditional credit scores. We present a holistic view of your business's health and potential to our partners, facilitating funding based on realistic operational strength.</p>
            </div>
        </div>

        <div class="cheque-note">
            <h4 style="color: var(--primary);"><i class="fas fa-money-check"></i> Formalizing the Informal via Cheque Basis</h4>
            <p class="mb-0 mt-2">A key aspect of our inclusion strategy is facilitating transactions strictly on a <strong>Cheque Basis</strong>. This approach brings informal business requirements into the formalized financial sector, creating a documented credit history that benefits the borrower's long-term financial health while ensuring transparency and security for the private investor.</p>
        </div>

        <div class="mt-5 text-center">
            <p class="text-muted text-sm"><em>Disclaimer: Vardhman Financial Services is a Financial Service Provider and Intermediary. We facilitate financial inclusion by connecting businesses with our partner network; we do not provide direct lending.</em></p>
        </div>

    </div>
</section>

<?php require_once 'footer.php'; ?>
