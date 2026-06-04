<?php
$page_title = 'Careers | Vardhman Finance';
$meta_description = 'Join Vardhman Finance. Build a career in financial facilitation, private funding analysis, and relationship management. Explore current openings.';
require_once 'header.php';
?>

<style>
    .careers-header {
        background: var(--primary);
        color: white;
        padding: 80px 0;
        text-align: center;
    }
    .careers-header h1 {
        font-family: 'Playfair Display', serif;
        margin-bottom: 15px;
    }
    .culture-section {
        padding: 60px 0;
        background: #fff;
    }
    .culture-card {
        padding: 30px;
        background: #f8f9fa;
        border-radius: 8px;
        height: 100%;
        border-top: 4px solid var(--accent-gold);
    }
    .culture-card h4 {
        color: var(--primary-dark);
        margin-bottom: 15px;
    }
    .openings-section {
        padding: 60px 0;
        background: #f4f7f6;
    }
    .job-listing {
        background: white;
        border: 1px solid #e0e0e0;
        padding: 25px;
        margin-bottom: 20px;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: box-shadow 0.3s;
    }
    .job-listing:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .job-info h4 {
        margin: 0 0 5px;
        color: var(--primary-dark);
    }
    .job-meta {
        color: #666;
        font-size: 0.9rem;
    }
    @media (max-width: 768px) {
        .job-listing {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
    }
</style>

<section class="careers-header">
    <div class="container">
        <h1>Shape the Future of Financial Facilitation</h1>
        <p class="lead">Join a team dedicated to connecting ambition with capital through private funding.</p>
    </div>
</section>

<section class="culture-section">
    <div class="container">
        <h2 class="text-center mb-5 section-title">Life at Vardhman</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="culture-card">
                    <h4>Professional Growth</h4>
                    <p>As a leading intermediary in private funding, you'll gain unparalleled exposure to diverse industries, complex financial structuring, and elite investor networks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="culture-card">
                    <h4>Ethical Practices</h4>
                    <p>Integrity is our core. We pride ourselves on absolute transparency, ensuring our facilitation of cheque basis funding adheres to the highest ethical and regulatory standards.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="culture-card">
                    <h4>Collaborative Environment</h4>
                    <p>Work alongside seasoned financial analysts, legal experts, and relationship managers in a supportive environment that values innovative solutions to capital challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="openings-section">
    <div class="container">
        <h2 class="mb-4 text-center">Current Openings</h2>

        <div class="job-listing">
            <div class="job-info">
                <h4>Private Funding Analyst</h4>
                <div class="job-meta">
                    <span class="me-3"><i class="fas fa-map-marker-alt"></i> Hyderabad</span>
                    <span><i class="fas fa-briefcase"></i> Full-time</span>
                </div>
                <p class="mt-2 text-muted mb-0">Evaluate business profiles and structure proposals for our network of private investors.</p>
            </div>
            <button class="btn btn-outline-primary">Apply Now</button>
        </div>

        <div class="job-listing">
            <div class="job-info">
                <h4>Partner Relationship Manager</h4>
                <div class="job-meta">
                    <span class="me-3"><i class="fas fa-map-marker-alt"></i> Multiple Locations</span>
                    <span><i class="fas fa-briefcase"></i> Full-time</span>
                </div>
                <p class="mt-2 text-muted mb-0">Liaise with RBI-registered NBFCs and maintain strong relationships to facilitate smooth funding processes.</p>
            </div>
            <button class="btn btn-outline-primary">Apply Now</button>
        </div>

        <div class="job-listing">
            <div class="job-info">
                <h4>Legal & Compliance Executive</h4>
                <div class="job-meta">
                    <span class="me-3"><i class="fas fa-map-marker-alt"></i> Hyderabad</span>
                    <span><i class="fas fa-briefcase"></i> Full-time</span>
                </div>
                <p class="mt-2 text-muted mb-0">Ensure all cheque basis funding documentation and intermediary agreements comply with regulatory standards.</p>
            </div>
            <button class="btn btn-outline-primary">Apply Now</button>
        </div>

        <div class="mt-5 text-center">
            <p>Don't see a perfect fit? Send your resume to <strong>careers@vardhmanfinance.com</strong></p>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
