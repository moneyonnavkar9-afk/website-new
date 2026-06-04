<?php
$page_title = 'Our Story & History | Vardhman Finance';
$meta_description = 'Learn about the history and evolution of Vardhman Finance. Decades of experience in facilitating private funding and cheque basis financial solutions.';
require_once 'header.php';
?>

<style>
    .story-hero {
        padding: 80px 0;
        background-color: #f4f7f6;
        border-bottom: 1px solid #e0e0e0;
    }
    .story-hero h1 {
        color: var(--primary-dark);
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
    }
    .story-hero p {
        color: var(--text-color);
        font-size: 1.1rem;
    }
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 60px auto;
        padding: 20px;
    }
    .timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        background-color: var(--accent-gold);
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
    }
    .timeline-item {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
    }
    .timeline-item::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        right: -10px;
        background-color: white;
        border: 4px solid var(--primary);
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }
    .left { left: 0; }
    .right { left: 50%; }
    .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
    }
    .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
    }
    .right::after { left: -10px; }
    .content {
        padding: 20px 30px;
        background-color: white;
        position: relative;
        border-radius: 6px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .content h2 {
        color: var(--primary);
        font-size: 1.5rem;
        margin-bottom: 10px;
    }
    @media screen and (max-width: 600px) {
        .timeline::after { left: 31px; }
        .timeline-item { width: 100%; padding-left: 70px; padding-right: 25px; }
        .timeline-item::before { left: 60px; border: medium solid white; border-width: 10px 10px 10px 0; border-color: transparent white transparent transparent; }
        .left::after, .right::after { left: 21px; }
        .right { left: 0%; }
    }
    .mission-vision {
        background: var(--primary-dark);
        color: white;
        padding: 60px 0;
    }
</style>

<section class="story-hero text-center">
    <div class="container">
        <h1>Our Journey</h1>
        <p class="mt-3 max-w-800 mx-auto">From a modest advisory firm to a leading Financial Service Provider. Discover how Vardhman Financial Services has been shaping the landscape of private funding facilitation.</p>
    </div>
</section>

<div class="container">
    <div class="timeline">
        <div class="timeline-item left">
            <div class="content">
                <h2>The Beginning</h2>
                <p>Founded with a vision to bridge the gap between burgeoning businesses and accessible capital, Vardhman Financial Services started as a dedicated advisory group focused on understanding complex financial needs.</p>
            </div>
        </div>
        <div class="timeline-item right">
            <div class="content">
                <h2>Structuring the Network</h2>
                <p>Recognizing the need for reliable private funding, we established robust relationships with RBI-registered NBFCs and high-net-worth investors, transitioning into a formal facilitation role.</p>
            </div>
        </div>
        <div class="timeline-item left">
            <div class="content">
                <h2>Pioneering Cheque Basis Funding</h2>
                <p>To ensure maximum security and transparency, we shifted our core focus to facilitating 'Cheque Basis' funding. This formalized the private lending sector we operated in, building immense trust among our clients and partners.</p>
            </div>
        </div>
        <div class="timeline-item right">
            <div class="content">
                <h2>Digital Transformation</h2>
                <p>Embracing technology, we integrated secure, 256-bit SSL encrypted digital platforms to streamline applications, document verification, and communication, making the facilitation process faster than ever.</p>
            </div>
        </div>
        <div class="timeline-item left">
            <div class="content">
                <h2>Present Day</h2>
                <p>Today, Vardhman operates strictly as a premier intermediary. We do not lend directly; instead, our expertise lies in flawlessly connecting ambitious enterprises with the exact private funding solutions they require to thrive.</p>
            </div>
        </div>
    </div>
</div>

<section class="mission-vision">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 style="color: var(--accent-gold); font-family: 'Playfair Display', serif;">Our Mission</h3>
                <p>To serve as the most trusted and efficient intermediary in the financial sector, providing seamless access to private and cheque basis funding for businesses across India.</p>
            </div>
            <div class="col-md-6">
                <h3 style="color: var(--accent-gold); font-family: 'Playfair Display', serif;">Our Vision</h3>
                <p>To redefine financial facilitation by ensuring absolute transparency, fostering secure investor partnerships, and empowering businesses to achieve their full potential without capital constraints.</p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
