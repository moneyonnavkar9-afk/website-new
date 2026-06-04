<?php
$page_title = "Trustpilot Reviews | Vardhman Finance";
$meta_desc = "Read our 400+ Trustpilot reviews. See why our clients trust Vardhman Finance for their private funding needs.";
include 'header.php';
?>

<section class="section-padding" style="padding-top: 150px; background: var(--light-bg);">
    <div class="container fade-in">
        <div class="section-header">
            <h2>Trustpilot Reviews</h2>
            <p>We are proud to have helped thousands of businesses achieve their financial goals.</p>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); display: inline-block; margin-top: 20px;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 15px;">
                    <img src="https://cdn.trustpilot.net/brand-assets/4.1.0/logo-black.svg" alt="Trustpilot Logo" style="height: 40px;">
                </div>
                <div style="font-size: 2rem; font-weight: bold; color: var(--primary-dark); margin-bottom: 10px;">
                    4.9 / 5.0
                </div>
                <div style="color: #00b67a; font-size: 1.5rem; margin-bottom: 10px;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div style="font-size: 1.1rem; color: var(--text-gray);">
                    Based on <strong>400+ reviews</strong>
                </div>
            </div>
        </div>

        <style>
            .tp-reviews-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
                margin-top: 40px;
            }
            .tp-review-card {
                background: white;
                padding: 25px;
                border-radius: 10px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                border: 1px solid rgba(0,0,0,0.05);
                transition: transform 0.3s ease;
                display: flex;
                flex-direction: column;
            }
            .tp-review-card:hover {
                transform: translateY(-5px);
            }
            .tp-review-header {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
            }
            .tp-review-avatar {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: #00b67a;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
                font-weight: bold;
                margin-right: 15px;
            }
            .tp-review-author h4 {
                margin: 0;
                font-size: 1.1rem;
                color: var(--primary-dark);
            }
            .tp-review-date {
                font-size: 0.85rem;
                color: var(--text-gray);
            }
            .tp-review-stars {
                color: #00b67a;
                margin-bottom: 15px;
                font-size: 0.9rem;
            }
            .tp-review-text {
                font-size: 0.95rem;
                color: #4a5568;
                line-height: 1.6;
                flex-grow: 1;
            }
            .tp-verified {
                display: flex;
                align-items: center;
                gap: 5px;
                font-size: 0.8rem;
                color: #00b67a;
                margin-top: 15px;
                font-weight: bold;
            }
        </style>

        <div class="tp-reviews-grid">
            <!-- Review 1 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">AK</div>
                    <div class="tp-review-author">
                        <h4>Amit Kumar</h4>
                        <div class="tp-review-date">2 days ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Very professional team. Got my secured business loan processed in record time. The team at Vardhman was very helpful and transparent about all the charges."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 2 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">SP</div>
                    <div class="tp-review-author">
                        <h4>Sneha Patel</h4>
                        <div class="tp-review-date">1 week ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Their Cheque Basis funding is a lifesaver. When traditional banks rejected my application due to CIBIL issues, Vardhman looked at my current cash flow and approved my funding."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 3 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">RS</div>
                    <div class="tp-review-author">
                        <h4>Rajiv Sharma</h4>
                        <div class="tp-review-date">2 weeks ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Excellent experience with Lease Rental Discounting. The property evaluation was done quickly and the entire process was seamless. Highly recommend Vardhman Finance."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 4 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">MV</div>
                    <div class="tp-review-author">
                        <h4>Meera Verma</h4>
                        <div class="tp-review-date">3 weeks ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "I needed working capital urgently for my factory. Vardhman Finance disbursed the amount against my machinery within 4 days. Very impressed with their speed."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 5 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">DK</div>
                    <div class="tp-review-author">
                        <h4>Deepak Kapoor</h4>
                        <div class="tp-review-date">1 month ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Transparent communication from day one. They clearly explained the service charges and processing fees. No hidden costs. Very reliable private lender."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 6 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">NG</div>
                    <div class="tp-review-author">
                        <h4>Nidhi Gupta</h4>
                        <div class="tp-review-date">1 month ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "The customer support team is fantastic. They guided me through every step of the loan application. The mobile app makes it so easy to track my EMIs."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 7 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">PJ</div>
                    <div class="tp-review-author">
                        <h4>Prashant Joshi</h4>
                        <div class="tp-review-date">1 month ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Best option for bridge finance. My construction project was stalled, and they provided the necessary funds quickly based on the asset value. Great service."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 8 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">KT</div>
                    <div class="tp-review-author">
                        <h4>Kiran Tiwari</h4>
                        <div class="tp-review-date">2 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "I applied for a professional loan as a CA to expand my office. The process was completely paperless and very fast. Highly satisfied with the outcome."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 9 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">SM</div>
                    <div class="tp-review-author">
                        <h4>Sunil Mishra</h4>
                        <div class="tp-review-date">2 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Vardhman Finance has a very straightforward approach. They valued my property fairly and offered a competitive interest rate. Good experience."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 10 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">AA</div>
                    <div class="tp-review-author">
                        <h4>Anita Agarwal</h4>
                        <div class="tp-review-date">2 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Very cooperative staff. They helped me with a balance transfer that significantly reduced my EMI burden. The transition was smooth and hassle-free."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 11 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">VJ</div>
                    <div class="tp-review-author">
                        <h4>Vikram Jain</h4>
                        <div class="tp-review-date">3 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "I was looking for startup finance. Most places asked for too much equity. Vardhman offered a debt structure that worked perfectly for us. Truly grateful."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 12 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">PR</div>
                    <div class="tp-review-author">
                        <h4>Pooja Rajput</h4>
                        <div class="tp-review-date">3 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Their gold loan process is very fast. I needed emergency funds and they processed it within hours. The secure vault facility gave me peace of mind."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 13 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">YK</div>
                    <div class="tp-review-author">
                        <h4>Yash Kumar</h4>
                        <div class="tp-review-date">3 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Good company for heavy machinery loans. The documentation is simple compared to traditional banks. They understand business needs better."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 14 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">SS</div>
                    <div class="tp-review-author">
                        <h4>Shalini Singh</h4>
                        <div class="tp-review-date">4 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "The process for unsecured cheque basis funding was incredibly smooth. They focus on intent and banking history rather than just CIBIL scores."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 15 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">MB</div>
                    <div class="tp-review-author">
                        <h4>Mohit Bansal</h4>
                        <div class="tp-review-date">4 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Took an export finance loan from them. It helped me manage my cash flow cycles perfectly. The team is very knowledgeable about international trade."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 16 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">RD</div>
                    <div class="tp-review-author">
                        <h4>Riya Das</h4>
                        <div class="tp-review-date">5 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Highly recommended for anyone looking for private funding. They are transparent, quick, and very professional in their dealings."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 17 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">HN</div>
                    <div class="tp-review-author">
                        <h4>Harish Nair</h4>
                        <div class="tp-review-date">5 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "The credit desk was very helpful. They provided an indicative sanction within 48 hours. Really fast processing times compared to others in the market."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>

            <!-- Review 18 -->
            <div class="tp-review-card fade-in">
                <div class="tp-review-header">
                    <div class="tp-review-avatar">GC</div>
                    <div class="tp-review-author">
                        <h4>Gaurav Chawla</h4>
                        <div class="tp-review-date">6 months ago</div>
                    </div>
                </div>
                <div class="tp-review-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <div class="tp-review-text">
                    "Excellent company. Their asset-first underwriting approach is brilliant. They genuinely want to help businesses grow. Five stars from my side."
                </div>
                <div class="tp-verified"><i class="fas fa-check-circle"></i> Verified Customer</div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
