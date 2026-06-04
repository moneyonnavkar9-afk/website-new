<?php
$page_title = 'Awards & Recognitions | Vardhman Finance';
$meta_description = 'View the awards and recognitions earned by Vardhman Finance for excellence in facilitating private funding and cheque basis financial services.';
require_once 'header.php';
?>

<style>
    .awards-hero {
        background: var(--primary-dark);
        color: white;
        padding: 80px 0;
        text-align: center;
    }
    .awards-hero h1 {
        font-family: 'Playfair Display', serif;
        color: var(--accent-gold);
        margin-bottom: 20px;
    }
    .awards-section {
        padding: 80px 0;
        background: #fff;
    }
    .award-item {
        text-align: center;
        padding: 40px 20px;
        border: 1px solid #f0f0f0;
        border-radius: 8px;
        margin-bottom: 30px;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .award-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(212, 175, 55, 0.15); /* Gold shadow */
        border-color: var(--accent-gold);
    }
    .award-icon {
        font-size: 4rem;
        color: var(--accent-gold);
        margin-bottom: 20px;
    }
    .award-year {
        display: inline-block;
        background: var(--primary);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: bold;
        margin-bottom: 15px;
    }
    .award-item h3 {
        color: var(--primary-dark);
        font-size: 1.3rem;
        margin-bottom: 10px;
    }
</style>

<section class="awards-hero">
    <div class="container">
        <h1>Excellence Recognized</h1>
        <p class="lead max-w-700 mx-auto">Our dedication to transparent, secure, and efficient private funding facilitation has been acknowledged by industry peers.</p>
    </div>
</section>

<section class="awards-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="award-item">
                    <i class="fas fa-trophy award-icon"></i>
                    <div class="award-year">2023</div>
                    <h3>Excellence in Financial Facilitation</h3>
                    <p class="text-muted text-sm">Awarded for streamlining the connection between MSMEs and private investors with unmatched efficiency.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="award-item">
                    <i class="fas fa-medal award-icon"></i>
                    <div class="award-year">2022</div>
                    <h3>Best Intermediary in Private Funding</h3>
                    <p class="text-muted text-sm">Recognized for our robust network and ethical practices in facilitating large-scale private capital.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="award-item">
                    <i class="fas fa-shield-alt award-icon"></i>
                    <div class="award-year">2022</div>
                    <h3>Secure Transaction Pioneer</h3>
                    <p class="text-muted text-sm">Honored for our strict adherence to formalizing funding through 'Cheque Basis' documentation and secure data practices.</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="award-item">
                    <i class="fas fa-handshake award-icon"></i>
                    <div class="award-year">2021</div>
                    <h3>Outstanding Service Provider</h3>
                    <p class="text-muted text-sm">Acknowledged for maintaining absolute transparency regarding service charges and legal documentation in the private sector.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="award-item">
                    <i class="fas fa-chart-line award-icon"></i>
                    <div class="award-year">2020</div>
                    <h3>MSME Support Initiative</h3>
                    <p class="text-muted text-sm">Commended for our efforts in structuring viable financial profiles for growing businesses to access NBFC capital.</p>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <p style="color: #666; font-style: italic; max-width: 800px; margin: 0 auto;">While awards validate our processes, our true reward is the successful growth of the businesses we facilitate funding for. Vardhman Financial Services remains committed to its role as your trusted financial intermediary.</p>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
