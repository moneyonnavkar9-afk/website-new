<?php
$page_title = 'Improve CIBIL Score | Credit Repair Services | Vardhman Finance';
$meta_desc = 'Boost your CIBIL score with Vardhman Finance. Expert credit repair, dispute resolution, and personalized strategies to reach 750+ score for better loan approvals.';
$meta_keywords = 'Improve CIBIL Score, Credit Repair India, Fix Bad Credit, Increase CIBIL Score, Credit Counseling, Remove Negative Remarks CIBIL';
$extra_styles = '
<style>
    .cibil-hero {
        background: linear-gradient(135deg, var(--primary-dark), #1a1a2e);
        padding: 140px 0 100px;
        color: white;
        text-align: center;
        position: relative;
    }
    .cibil-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("assets/pattern.png");
        opacity: 0.05;
    }
    .score-meter {
        width: 200px;
        height: 100px;
        background: linear-gradient(90deg, #ff4d4d, #ffad33, #5cd65c);
        border-radius: 100px 100px 0 0;
        margin: 0 auto 30px;
        position: relative;
    }
    .score-needle {
        width: 4px;
        height: 90px;
        background: white;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform-origin: bottom center;
        transform: rotate(45deg); /* Pointing to green area */
        border-radius: 2px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }
    .score-circle {
        width: 20px;
        height: 20px;
        background: white;
        border-radius: 50%;
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
    }
    .feature-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s;
        border: 1px solid #eee;
        height: 100%;
    }
    .feature-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-gold);
    }
    .icon-box {
        width: 60px;
        height: 60px;
        background: var(--light-bg);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--primary-blue);
        margin-bottom: 20px;
    }
    .breakdown-bar {
        height: 10px;
        border-radius: 5px;
        background: #eee;
        margin-bottom: 10px;
        overflow: hidden;
    }
    .breakdown-fill {
        height: 100%;
        background: var(--accent-gold);
    }
    .myth-box {
        background: #fff5f5;
        border-left: 4px solid #ff4d4d;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 0 8px 8px 0;
    }
    .fact-box {
        background: #f0fff4;
        border-left: 4px solid #5cd65c;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 0 8px 8px 0;
    }
</style>
';
$base_path = './';
include 'header.php';
?>

<!-- 1. HERO SECTION -->
<div class="cibil-hero">
    <div class="container fade-in" style="position: relative; z-index: 2;">
        <div class="score-meter">
            <div class="score-needle"></div>
            <div class="score-circle"></div>
        </div>
        <span class="pill" style="background: var(--accent-gold); color: var(--primary-dark); margin-bottom: 20px;">Credit Health Optimization</span>
        <h1 style="font-size: 3rem; margin-bottom: 20px; font-weight: 700;">Unlock Financial Freedom with 750+ CIBIL</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; max-width: 800px; margin: 0 auto 40px;">
            A high credit score is your gateway to lower interest rates and faster loan approvals. Don't let past mistakes block your future growth.
        </p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="#consult-form" class="btn-hero btn-gold">Get Free Analysis</a>
            <a href="#strategy" class="btn-hero btn-outline">See Our Strategy</a>
        </div>
    </div>
</div>

<!-- 2. WHY CIBIL MATTERS -->
<section class="section-padding" style="background: white;">
    <div class="container">
        <div class="section-title">
            <h2>Why Your Score Matters?</h2>
            <p>Your CIBIL score is more than just a number; it is your financial reputation.</p>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 30px;">
            <div class="col-md-4 fade-in" style="flex: 1; min-width: 300px;">
                <div class="feature-card">
                    <div class="icon-box"><i class="fas fa-percentage"></i></div>
                    <h4>Interest Rates</h4>
                    <p style="color: #666; font-size: 0.95rem;">Banks offer their lowest rates only to customers with scores above 750. A low score can cost you lakhs in extra interest.</p>
                </div>
            </div>
            <div class="col-md-4 fade-in" style="flex: 1; min-width: 300px;">
                <div class="feature-card">
                    <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                    <h4>Loan Approval</h4>
                    <p style="color: #666; font-size: 0.95rem;">Rejection rates skyrocket for scores below 650. High scores ensure your application goes to the "Green Channel" for fast processing.</p>
                </div>
            </div>
            <div class="col-md-4 fade-in" style="flex: 1; min-width: 300px;">
                <div class="feature-card">
                    <div class="icon-box"><i class="fas fa-briefcase"></i></div>
                    <h4>Business Credibility</h4>
                    <p style="color: #666; font-size: 0.95rem;">For entrepreneurs, a poor personal score can block business credit lines, OD limits, and trade finance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SCORE ANALYSIS BREAKDOWN -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container fade-in">
        <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
            <div class="col-lg-6" style="flex: 1; min-width: 300px;">
                <h2 style="color: var(--primary-dark); margin-bottom: 25px;">What Makes Up Your Score?</h2>
                <p style="margin-bottom: 30px; color: #555;">Understanding the algorithm is the first step to mastering it.</p>

                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <strong>Payment History</strong>
                        <span>35%</span>
                    </div>
                    <div class="breakdown-bar"><div class="breakdown-fill" style="width: 35%;"></div></div>
                    <small style="color: #777;">Timely payments of EMIs and Credit Card bills.</small>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <strong>Credit Utilization</strong>
                        <span>30%</span>
                    </div>
                    <div class="breakdown-bar"><div class="breakdown-fill" style="width: 30%; background: var(--primary-blue);"></div></div>
                    <small style="color: #777;">Percentage of credit limit used (Keep it < 30%).</small>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <strong>Credit History Length</strong>
                        <span>15%</span>
                    </div>
                    <div class="breakdown-bar"><div class="breakdown-fill" style="width: 15%; background: var(--emerald);"></div></div>
                    <small style="color: #777;">Age of your oldest credit account.</small>
                </div>

                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <strong>Credit Mix & Enquiries</strong>
                        <span>20%</span>
                    </div>
                    <div class="breakdown-bar"><div class="breakdown-fill" style="width: 20%; background: #d9534f;"></div></div>
                    <small style="color: #777;">Balance of secured/unsecured loans and recent hard checks.</small>
                </div>
            </div>
            <div class="col-lg-6" style="flex: 1; min-width: 300px; text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/6585/6585507.png" alt="Analytics" style="max-width: 80%; opacity: 0.8;">
            </div>
        </div>
    </div>
</section>

<!-- 4. COMMON MYTHS -->
<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Common CIBIL Myths</h2>
            <p>Don't fall for misinformation.</p>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 30px;">
            <div class="col-md-6" style="flex: 1; min-width: 300px;">
                <div class="myth-box">
                    <h4 style="color: #d9534f;"><i class="fas fa-times-circle"></i> Myth</h4>
                    <p>"Checking my own score lowers it."</p>
                </div>
                <div class="fact-box">
                    <h4 style="color: var(--emerald);"><i class="fas fa-check-circle"></i> Fact</h4>
                    <p>Checking your own score is a "Soft Inquiry" and has <strong>zero impact</strong> on your CIBIL.</p>
                </div>
            </div>
            <div class="col-md-6" style="flex: 1; min-width: 300px;">
                <div class="myth-box">
                    <h4 style="color: #d9534f;"><i class="fas fa-times-circle"></i> Myth</h4>
                    <p>"Paying off an old debt removes it instantly."</p>
                </div>
                <div class="fact-box">
                    <h4 style="color: var(--emerald);"><i class="fas fa-check-circle"></i> Fact</h4>
                    <p>Closed accounts stay on your report for years. You need to ensure the status is updated to "Closed" or "Settled".</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. NEGATIVE FACTORS -->
<section class="section-padding" style="background: var(--primary-dark); color: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2 style="color: white;">What Drags You Down?</h2>
            <p style="color: rgba(255,255,255,0.7);">Identify the red flags in your report.</p>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div class="col-md-3" style="flex: 1; min-width: 200px;">
                <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; text-align: center;">
                    <i class="fas fa-calendar-times" style="font-size: 2rem; color: #ff6b6b; margin-bottom: 15px;"></i>
                    <h4>Late Payments</h4>
                    <p style="font-size: 0.9rem; color: #ccc;">Even a single 30-day delay can drop your score by 50-100 points.</p>
                </div>
            </div>
            <div class="col-md-3" style="flex: 1; min-width: 200px;">
                <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; text-align: center;">
                    <i class="fas fa-credit-card" style="font-size: 2rem; color: #ff6b6b; margin-bottom: 15px;"></i>
                    <h4>High Utilization</h4>
                    <p style="font-size: 0.9rem; color: #ccc;">Maxing out credit cards signals financial distress to lenders.</p>
                </div>
            </div>
            <div class="col-md-3" style="flex: 1; min-width: 200px;">
                <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; text-align: center;">
                    <i class="fas fa-handshake-slash" style="font-size: 2rem; color: #ff6b6b; margin-bottom: 15px;"></i>
                    <h4>Settlements</h4>
                    <p style="font-size: 0.9rem; color: #ccc;">"Settled" status implies you couldn't pay the full amount. Aim for "Closed".</p>
                </div>
            </div>
            <div class="col-md-3" style="flex: 1; min-width: 200px;">
                <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; text-align: center;">
                    <i class="fas fa-search" style="font-size: 2rem; color: #ff6b6b; margin-bottom: 15px;"></i>
                    <h4>Too Many Inquiries</h4>
                    <p style="font-size: 0.9rem; color: #ccc;">Applying for too many loans in a short time makes you look credit-hungry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. OUR IMPROVEMENT STRATEGY -->
<section id="strategy" class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
            <div class="col-lg-6" style="flex: 1; min-width: 300px;">
                <h2 style="color: var(--primary-dark); margin-bottom: 25px;">How Vardhman Helps</h2>
                <p style="margin-bottom: 20px; color: #555;">We don't just advise; we execute. Our expert team works with bureaus and banks on your behalf.</p>
                <ul class="fa-ul" style="margin-left: 20px; font-size: 1.05rem; color: #444; line-height: 1.8;">
                    <li><span class="fa-li"><i class="fas fa-check" style="color: var(--accent-gold);"></i></span>Comprehensive Report Analysis</li>
                    <li><span class="fa-li"><i class="fas fa-check" style="color: var(--accent-gold);"></i></span>Identifying Errors & Filing Disputes</li>
                    <li><span class="fa-li"><i class="fas fa-check" style="color: var(--accent-gold);"></i></span>Negotiating Settlements with Lenders</li>
                    <li><span class="fa-li"><i class="fas fa-check" style="color: var(--accent-gold);"></i></span>Debt Consolidation Strategies</li>
                    <li><span class="fa-li"><i class="fas fa-check" style="color: var(--accent-gold);"></i></span>Personalized Credit Building Plan</li>
                </ul>
            </div>
            <div class="col-lg-6" style="flex: 1; min-width: 300px;">
                 <div style="background: var(--light-bg); padding: 40px; border-radius: 20px; text-align: center;">
                    <i class="fas fa-chart-line" style="font-size: 4rem; color: var(--primary-blue); margin-bottom: 20px;"></i>
                    <h3 style="margin-bottom: 15px;">Average Improvement</h3>
                    <div style="font-size: 3rem; font-weight: 700; color: var(--primary-dark); margin-bottom: 10px;">
                        +150 <span style="font-size: 1.5rem;">Points</span>
                    </div>
                    <p style="color: #666;">In 6-9 Months*</p>
                    <small style="color: #999;">*Depending on individual case complexity</small>
                 </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. BENEFITS OF 750+ -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container fade-in">
        <div class="section-title">
            <h2>The Power of 750+</h2>
        </div>
        <div class="feature-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div class="feature-card" style="text-align: center;">
                <i class="fas fa-tags" style="font-size: 2rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                <h4>Pre-Approved Offers</h4>
                <p style="font-size: 0.9rem; color: #666;">Get credit cards and loans without lengthy paperwork.</p>
            </div>
            <div class="feature-card" style="text-align: center;">
                <i class="fas fa-arrow-down" style="font-size: 2rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                <h4>Lower ROI</h4>
                <p style="font-size: 0.9rem; color: #666;">Save up to 2-3% on interest rates for home and car loans.</p>
            </div>
            <div class="feature-card" style="text-align: center;">
                <i class="fas fa-hourglass-half" style="font-size: 2rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                <h4>Higher Limits</h4>
                <p style="font-size: 0.9rem; color: #666;">Access larger loan amounts and higher credit card limits.</p>
            </div>
            <div class="feature-card" style="text-align: center;">
                <i class="fas fa-hand-holding-usd" style="font-size: 2rem; color: var(--accent-gold); margin-bottom: 15px;"></i>
                <h4>Negotiation Power</h4>
                <p style="font-size: 0.9rem; color: #666;">You dictate terms, not the bank.</p>
            </div>
        </div>
    </div>
</section>

<!-- 8. ACTIONABLE TIPS -->
<section class="section-padding" style="background: white;">
    <div class="container fade-in">
        <div class="section-title">
            <h2>DIY Improvement Tips</h2>
            <p>Start fixing your score today.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div style="background: #f9f9f9; padding: 25px; border-left: 5px solid var(--primary-blue); border-radius: 8px;">
                <h4 style="margin-bottom: 10px;">Automate Payments</h4>
                <p style="color: #666;">Set up auto-debit for Minimum Due amounts to ensure you never miss a deadline, even if you forget.</p>
            </div>
            <div style="background: #f9f9f9; padding: 25px; border-left: 5px solid var(--primary-blue); border-radius: 8px;">
                <h4 style="margin-bottom: 10px;">Request Limit Increase</h4>
                <p style="color: #666;">Ask your bank to increase your credit limit. This instantly lowers your utilization ratio if spending stays constant.</p>
            </div>
            <div style="background: #f9f9f9; padding: 25px; border-left: 5px solid var(--primary-blue); border-radius: 8px;">
                <h4 style="margin-bottom: 10px;">Avoid "Hungry" Behavior</h4>
                <p style="color: #666;">Apply for new credit only when necessary. Space out applications by at least 3-6 months.</p>
            </div>
        </div>
    </div>
</section>

<!-- 9. FAQ -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="container fade-in">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-grid" style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
             <!-- Reuse existing FAQ styles/scripts if global, or inline simple detail/summary -->
             <details style="background: white; padding: 15px; border-radius: 8px; cursor: pointer;">
                 <summary style="font-weight: 600; color: var(--primary-dark);">How long does it take to improve my score?</summary>
                 <p style="margin-top: 10px; color: #666;">It typically takes 30-45 days for a dispute to be resolved, and 3-6 months to see significant score improvement through good payment behavior.</p>
             </details>
             <details style="background: white; padding: 15px; border-radius: 8px; cursor: pointer;">
                 <summary style="font-weight: 600; color: var(--primary-dark);">Can you remove all negative items?</summary>
                 <p style="margin-top: 10px; color: #666;">We can help remove <strong>incorrect</strong>, <strong>unverified</strong>, or <strong>outdated</strong> items. Accurate negative information (like a genuine late payment) usually stays for a fixed period but its impact fades over time.</p>
             </details>
             <details style="background: white; padding: 15px; border-radius: 8px; cursor: pointer;">
                 <summary style="font-weight: 600; color: var(--primary-dark);">Does checking my score here hurt it?</summary>
                 <p style="margin-top: 10px; color: #666;">No. When you check your own score, it is a soft inquiry. It does not affect your CIBIL score.</p>
             </details>
        </div>
    </div>
</section>

<!-- 10. CTA FORM -->
<section id="consult-form" class="section-padding" style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-dark)); color: white;">
    <div class="container fade-in">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 50px; justify-content: center;">
            <div class="col-lg-5" style="flex: 1; min-width: 300px;">
                <h2 style="color: white; margin-bottom: 20px;">Get a Professional Analysis</h2>
                <p style="opacity: 0.9; margin-bottom: 30px;">
                    Fill out the form to schedule a consultation with our Credit Experts. We will analyze your report and build a custom roadmap to 750+.
                </p>
                <ul class="fa-ul" style="margin-left: 20px; line-height: 2;">
                    <li><span class="fa-li"><i class="fas fa-check-circle" style="color: var(--accent-gold);"></i></span>Confidential Review</li>
                    <li><span class="fa-li"><i class="fas fa-check-circle" style="color: var(--accent-gold);"></i></span>No Judgement</li>
                    <li><span class="fa-li"><i class="fas fa-check-circle" style="color: var(--accent-gold);"></i></span>Clear Action Plan</li>
                </ul>
            </div>
            <div class="col-lg-5" style="flex: 1; min-width: 300px;">
                <form class="contact-form" style="background: white; padding: 30px; border-radius: 15px; color: var(--primary-dark);">
                    <h3 style="margin-bottom: 20px; text-align: center;">Request Call Back</h3>
                    <input type="text" placeholder="Full Name" style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px;">
                    <input type="tel" placeholder="Mobile Number" style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px;">
                    <input type="email" placeholder="Email Address" style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px;">
                    <select style="width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 5px;">
                        <option>Current Score (Approx)</option>
                        <option>Below 600</option>
                        <option>600 - 700</option>
                        <option>700 - 750</option>
                        <option>Don't Know</option>
                    </select>
                    <button class="btn-hero btn-gold" type="button" style="width: 100%;">Submit Request</button>
                    <p style="font-size: 0.8rem; text-align: center; margin-top: 15px; color: #777;">
                        By submitting, you authorize Vardhman Finance to contact you.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
