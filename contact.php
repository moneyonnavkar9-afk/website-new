<?php
$page_title = 'Contact Vardhman Finance | Get in Touch for Funding';
$meta_desc = 'Contact Vardhman Finance for instant private funding and secured loans. Visit our Hyderabad office or call us for a consultation.';
$meta_keywords = 'Contact Us, Vardhman Finance Office, Customer Care, Loan Enquiry, Hyderabad Finance Office';
$extra_styles = '
<style>
    .contact-hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("assets/contact-bg.jpg");
        background-color: var(--primary-dark);
        padding: 140px 0 60px;
        color: white;
        text-align: center;
        background-size: cover;
        background-position: center;
    }
    .section-title {
        color: var(--primary-dark);
        margin-bottom: 15px;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }
    .section-title::after {
        content: "";
        display: block;
        width: 60px;
        height: 3px;
        background: var(--accent-gold);
        margin-top: 10px;
    }
    .contact-section {
        padding: 80px 0;
    }
    .bg-light {
        background-color: var(--light-bg);
    }

    /* Contact Cards */
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    .contact-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        text-align: center;
        transition: transform 0.3s;
        border-bottom: 3px solid transparent;
    }
    .contact-card:hover {
        transform: translateY(-5px);
        border-bottom-color: var(--accent-gold);
    }
    .contact-icon {
        width: 70px;
        height: 70px;
        background: var(--light-bg);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--accent-gold);
        font-size: 1.8rem;
    }

    /* Form */
    .form-box {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #555;
    }
    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-family: inherit;
        transition: border-color 0.3s;
    }
    .form-control:focus {
        border-color: var(--accent-gold);
        outline: none;
    }

    /* Map */
    .map-container {
        height: 450px;
        background: #eee;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    /* Dept Emails */
    .dept-list {
        list-style: none;
        padding: 0;
    }
    .dept-list li {
        display: flex;
        justify-content: space-between;
        padding: 15px 0;
        border-bottom: 1px solid #eee;
    }
    .dept-list li:last-child {
        border-bottom: none;
    }
    .dept-name {
        font-weight: 600;
        color: var(--primary-dark);
    }
    .dept-email {
        color: var(--accent-gold);
        text-decoration: none;
    }

    /* FAQ Accordion */
    .accordion-item {
        margin-bottom: 15px;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
    }
    .accordion-header {
        background: white;
        padding: 20px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 600;
        color: var(--primary-dark);
    }
    .accordion-body {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        background: #fcfcfc;
        transition: max-height 0.3s ease-out, padding 0.3s ease;
    }
    .accordion-item.active .accordion-body {
        padding: 20px;
        max-height: 200px;
    }
    .accordion-icon {
        transition: transform 0.3s;
    }
    .accordion-item.active .accordion-icon {
        transform: rotate(180deg);
    }
</style>
';
$base_path = './';
include 'header.php';
?>

<!-- 1. Hero Section -->
<div class="contact-hero">
    <div class="container">
        <h1 class="fade-in">Get in Touch</h1>
        <p class="fade-in" style="font-size: 1.2rem; margin-top: 15px; max-width: 600px; margin-left: auto; margin-right: auto;">
            Have questions about our funding process? We are here to assist you with your financial requirements.
        </p>
    </div>
</div>

<!-- 1.5 NEW ANIMATED SECTION: Support SLA Metrics -->
<section class="section-padding" style="background: var(--light-bg); overflow: hidden;">
    <div class="container">
        <div class="section-header text-center zoom-in">
            <h2>Our Commitment to You</h2>
            <p>We measure our success by the speed and quality of our response.</p>
        </div>
        <div class="row g-4 text-center mt-4">
            <div class="col-md-4 slide-in-left">
                <div style="background: white; padding: 40px 20px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%;">
                    <div class="animate-float-soft" style="font-size: 3rem; color: var(--accent-gold); margin-bottom: 20px;">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3 style="color: var(--primary-dark); font-size: 2.5rem; font-weight: 800; margin-bottom: 10px;">&lt; 30<span style="font-size: 1.2rem;">min</span></h3>
                    <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Call Back Time</h4>
                    <p class="text-muted mb-0">During business hours, our experts will reach out to you in less than half an hour.</p>
                </div>
            </div>
            <div class="col-md-4 zoom-in" style="transition-delay: 0.2s;">
                <div style="background: white; padding: 40px 20px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%;">
                    <div class="animate-float-soft" style="font-size: 3rem; color: var(--primary-blue); margin-bottom: 20px;">
                        <i class="fas fa-check-double"></i>
                    </div>
                    <h3 style="color: var(--primary-dark); font-size: 2.5rem; font-weight: 800; margin-bottom: 10px;">24<span style="font-size: 1.2rem;">hrs</span></h3>
                    <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Query Resolution</h4>
                    <p class="text-muted mb-0">95% of all client inquiries and document requests are resolved within 24 hours.</p>
                </div>
            </div>
            <div class="col-md-4 slide-in-right">
                <div style="background: white; padding: 40px 20px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%;">
                    <div class="animate-float-soft" style="font-size: 3rem; color: var(--emerald); margin-bottom: 20px;">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 style="color: var(--primary-dark); font-size: 2.5rem; font-weight: 800; margin-bottom: 10px;">100<span style="font-size: 1.2rem;">%</span></h3>
                    <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Confidentiality</h4>
                    <p class="text-muted mb-0">Your data and funding inquiries are protected with enterprise-grade encryption.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Contact Info Grid -->
<section class="contact-section">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2 class="section-title">Reach Out to Us</h2>
            <p>Multiple ways to connect with our team.</p>
        </div>
        <div class="contact-grid">
            <div class="contact-card fade-in">
                <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                <h3>Call Us</h3>
                <p style="color: #666; margin: 15px 0;">Speak directly to our credit officers regarding your loan eligibility.</p>
                <a href="tel:18002034320" style="color: var(--primary-blue); font-weight: 700; font-size: 1.1rem;">1800-203-4320</a>
            </div>

            <div class="contact-card fade-in">
                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                <h3>Email Us</h3>
                <p style="color: #666; margin: 15px 0;">Send us your documents, proposals, or general queries.</p>
                <a href="mailto:credit-desk@vardhmanfinance.com" style="color: var(--primary-blue); font-weight: 700; font-size: 1.1rem;">credit-desk@vardhmanfinance.com</a>
            </div>

            <div class="contact-card fade-in">
                <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Office Address</h3>
                <p style="color: #666; margin: 15px 0;">Registered Corporate Office Location.</p>
                <p style="color: var(--primary-dark); font-weight: 600;">12-5-14/5/A, 402, 6th Floor Mah Manor, Masab Tank, Banjara Hills Road, Hyderabad, Telangana, India - 500028</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. Send a Message Form -->
<section class="contact-section bg-light">
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 50px;">
            <div class="col fade-in" style="flex: 1; min-width: 300px;">
                <h2 class="section-title">Send a Message</h2>
                <p style="margin-bottom: 30px; line-height: 1.8; color: #555;">
                    Fill out the form below and our team will get back to you within 24 hours. Whether you need a business loan, personal funding, or have a partnership inquiry, we are here to help.
                </p>
                <div class="form-box">
                    <form onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent. Our team will contact you shortly.');">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+91 98765 43210" required>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <select class="form-control">
                                <option>Loan Enquiry</option>
                                <option>Partnership Proposal</option>
                                <option>Existing Customer Support</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="btn-hero btn-gold" style="width: 100%;">Send Message</button>

                        <div style="margin-top: 20px; background: rgba(197, 160, 89, 0.1); border-left: 3px solid var(--accent-gold); padding: 10px 15px; border-radius: 4px;">
                            <p style="margin: 0; font-size: 0.85rem; color: var(--primary-dark); font-weight: 600;">
                                <i class="fas fa-info-circle" style="color: var(--accent-gold);"></i> Note: Private Funding & Unsecured Cheque Basis funding Service Charge Advance 3% to 6%
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col fade-in" style="flex: 1; min-width: 300px; display: flex; flex-direction: column; justify-content: center;">
                <!-- 5. Department Specific Emails embedded here -->
                <div style="background: white; padding: 30px; border-radius: 10px; margin-bottom: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <h3 style="margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Department Contacts</h3>
                    <ul class="dept-list">
                        <li>
                            <span class="dept-name">New Loan Applications</span>
                            <a href="mailto:apply@vardhmanfinance.com" class="dept-email">apply@vardhmanfinance.com</a>
                        </li>
                        <li>
                            <span class="dept-name">Customer Support</span>
                            <a href="mailto:support@vardhmanfinance.com" class="dept-email">support@vardhmanfinance.com</a>
                        </li>
                        <li>
                            <span class="dept-name">Media & Press</span>
                            <a href="mailto:media@vardhmanfinance.com" class="dept-email">media@vardhmanfinance.com</a>
                        </li>
                        <li>
                            <span class="dept-name">Careers</span>
                            <a href="mailto:hr@vardhmanfinance.com" class="dept-email">hr@vardhmanfinance.com</a>
                        </li>
                    </ul>
                </div>

                <!-- 6. Office Hours -->
                <div style="background: var(--primary-dark); color: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <h3 style="margin-bottom: 20px; color: var(--accent-gold);"><i class="far fa-clock"></i> Office Hours</h3>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <span>Monday - Friday</span>
                        <span>9:30 AM - 6:30 PM</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <span>Saturday</span>
                        <span>10:00 AM - 4:00 PM</span>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Map Integration -->
<section class="contact-section" style="padding-top: 0;">
    <div class="container fade-in">
        <h2 class="section-title" style="margin-bottom: 30px;">Locate Us</h2>
        <div class="map-container">
             <iframe src="https://maps.google.com/maps?q=Mah+Manor,+Masab+Tank,+Hyderabad&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- 6.5 NEW ANIMATED SECTION: Global Reach Map/Pulse -->
<section class="section-padding" style="background: var(--primary-dark); color: white; position: relative; overflow: hidden;">
    <!-- Abstract Map Background -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(circle at 50% 50%, var(--accent-gold) 2px, transparent 2px); background-size: 30px 30px; z-index: 1;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-6 slide-in-left">
                <h2 style="color: white; margin-bottom: 20px;">Pan-India Reach,<br><span style="color: var(--accent-gold);">Localized Support.</span></h2>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; margin-bottom: 30px;">While our process is 100% digital, our understanding of local markets is profound. We fund businesses across all major Indian states with tailored regional expertise.</p>

                <div class="row g-3">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="animate-pulse-soft" style="width: 12px; height: 12px; background: var(--emerald); border-radius: 50%; margin-right: 10px; box-shadow: 0 0 10px var(--emerald);"></div>
                            <span style="font-weight: 600;">Tier 1 Metros</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="animate-pulse-soft" style="width: 12px; height: 12px; background: var(--accent-gold); border-radius: 50%; margin-right: 10px; box-shadow: 0 0 10px var(--accent-gold); animation-delay: 0.5s;"></div>
                            <span style="font-weight: 600;">Tier 2 Growth Hubs</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="animate-pulse-soft" style="width: 12px; height: 12px; background: #7dc8ff; border-radius: 50%; margin-right: 10px; box-shadow: 0 0 10px #7dc8ff; animation-delay: 1s;"></div>
                            <span style="font-weight: 600;">Industrial Corridors</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <div class="animate-pulse-soft" style="width: 12px; height: 12px; background: #ff7675; border-radius: 50%; margin-right: 10px; box-shadow: 0 0 10px #ff7675; animation-delay: 1.5s;"></div>
                            <span style="font-weight: 600;">SEZs & Tech Parks</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 slide-in-right mt-5 mt-lg-0 text-center relative">
                <!-- Visual representation of reach instead of a heavy map image -->
                <div style="position: relative; width: 100%; max-width: 400px; margin: 0 auto; aspect-ratio: 1; background: rgba(255,255,255,0.05); border-radius: 50%; border: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center;">
                    <div class="animate-pulse-soft" style="position: absolute; width: 70%; height: 70%; border-radius: 50%; border: 1px dashed rgba(197, 160, 89, 0.4);"></div>
                    <div class="animate-pulse-soft" style="position: absolute; width: 40%; height: 40%; border-radius: 50%; border: 1px dashed rgba(33, 196, 140, 0.4); animation-delay: 1s;"></div>
                    <i class="fas fa-map-marked-alt animate-float-soft" style="font-size: 5rem; color: var(--accent-gold); position: relative; z-index: 2;"></i>

                    <!-- Floating nodes -->
                    <div class="animate-float-soft" style="position: absolute; top: 20%; left: 20%; background: white; color: var(--primary-dark); padding: 5px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; box-shadow: 0 5px 15px rgba(0,0,0,0.3); animation-delay: 0.2s;">Mumbai</div>
                    <div class="animate-float-soft" style="position: absolute; bottom: 25%; right: 15%; background: white; color: var(--primary-dark); padding: 5px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; box-shadow: 0 5px 15px rgba(0,0,0,0.3); animation-delay: 0.7s;">Bengaluru</div>
                    <div class="animate-float-soft" style="position: absolute; top: 40%; right: 10%; background: white; color: var(--primary-dark); padding: 5px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; box-shadow: 0 5px 15px rgba(0,0,0,0.3); animation-delay: 1.2s;">Delhi NCR</div>
                    <div class="animate-float-soft" style="position: absolute; bottom: 30%; left: 15%; background: white; color: var(--primary-dark); padding: 5px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; box-shadow: 0 5px 15px rgba(0,0,0,0.3); animation-delay: 1.7s;">Hyderabad</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Grievance Redressal -->
<section class="contact-section bg-light">
    <div class="container">
        <div style="background: white; padding: 40px; border-left: 5px solid #d9534f; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
            <h3 style="color: #d9534f; margin-bottom: 15px;">Grievance Redressal</h3>
            <p style="margin-bottom: 15px;">We are committed to providing the highest quality of service. If you are not satisfied with our services, you can escalate the matter.</p>
            <p><strong>Nodal Officer:</strong> Mr. Amit Verma</p>
            <p><strong>Email:</strong> grievance@vardhmanfinance.com</p>
            <p><strong>Phone:</strong> +91 11-4567-8900</p>
            <p style="margin-top: 15px; font-size: 0.9rem; color: #777;">We aim to resolve all grievances within 7 working days.</p>
        </div>
    </div>
</section>

<!-- 8. Regional Branch List -->
<section class="contact-section">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2 class="section-title">Regional Presence</h2>
            <p>Serving clients across key metro cities.</p>
        </div>

        <div style="background-color: rgba(217, 83, 79, 0.05); border: 2px solid #d9534f; border-radius: 8px; padding: 20px; margin: 30px auto 0; text-align: center; max-width: 800px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h4 style="color: #d9534f; margin-bottom: 10px; font-weight: 700; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <i class="fas fa-exclamation-triangle"></i> Important Notice: 100% Digital Processing
            </h4>
            <p style="color: var(--primary-dark); font-size: 0.95rem; margin: 0; line-height: 1.6;">
                Our Private Funding process is entirely digital. To save your valuable time and ours, <strong>there is no need to visit our physical offices</strong>. All processing and verification are seamlessly and securely handled online.
            </p>
        </div>

        <div class="row fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="border: 1px solid #eee; padding: 20px; border-radius: 8px; text-align: center;">
                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Mumbai</h4>
                <p style="font-size: 0.85rem; color: #666; line-height: 1.5; margin: 0;">Shanti Tower Office No.40, 4th Floor Shanti Vihar Rd, Sangam Nagar, Near Balaji Temple, Mumbai, Maharashtra 400037, India</p>
            </div>
            <div style="border: 1px solid #eee; padding: 20px; border-radius: 8px; text-align: center;">
                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Bengaluru</h4>
                <p style="font-size: 0.85rem; color: #666; line-height: 1.5; margin: 0;">Raj Bhavan, Office No.B-1, Ambedkar Veedhi, Sampangi Rama Nagar, Bengaluru, Karnataka 560001, India</p>
            </div>
            <div style="border: 1px solid #eee; padding: 20px; border-radius: 8px; text-align: center;">
                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Chennai</h4>
                <p style="font-size: 0.85rem; color: #666; line-height: 1.5; margin: 0;">15th Floor TVH Lumbini Square, Lumbini Square, Purasaiwakkam, Chennai, Tamil Nadu 600010, India</p>
            </div>
            <div style="border: 1px solid #eee; padding: 20px; border-radius: 8px; text-align: center;">
                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Kolkata</h4>
                <p style="font-size: 0.85rem; color: #666; line-height: 1.5; margin: 0;">254/B, 3rd Floor Chittaranjan Ave, near Girish Park, Manicktala, Azad Hind Bag, Kolkata, West Bengal 700006, India</p>
            </div>
            <div style="border: 1px solid #eee; padding: 20px; border-radius: 8px; text-align: center;">
                <h4 style="color: var(--primary-dark); margin-bottom: 10px;">Hyderabad</h4>
                <p style="font-size: 0.85rem; color: #666; line-height: 1.5; margin: 0;">12-5-14/5/A, 402, 6th Floor Mah Manor, Masab Tank, Banjara Hills Road, Hyderabad, Telangana, India - 500028</p>
            </div>
        </div>
    </div>
</section>

<!-- 9. FAQ Section -->
<section class="contact-section bg-light">
    <div class="container">
        <div class="section-header text-center fade-in">
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        <div class="fade-in" style="max-width: 800px; margin: 30px auto 0;">
            <div class="accordion-item">
                <div class="accordion-header" onclick="this.parentElement.classList.toggle('active')">
                    How long does it take to get funding?
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </div>
                <div class="accordion-body">
                    <p>For unsecured business loans, we can disburse within 48 hours. Secured loans typically take 5-7 working days depending on property verification.</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" onclick="this.parentElement.classList.toggle('active')">
                    What documents do I need to submit?
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </div>
                <div class="accordion-body">
                    <p>Standard KYC, last 12 months bank statements, and business registration proof. For secured loans, property chain documents are required.</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header" onclick="this.parentElement.classList.toggle('active')">
                    Do you charge upfront fees?
                    <i class="fas fa-chevron-down accordion-icon"></i>
                </div>
                <div class="accordion-body">
                    <p>Yes. Private Funding & Unsecured Cheque Basis funding Service Charge Advance 3% to 6%.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10. Social Media Links & Final CTA -->
<section class="contact-section text-center">
    <div class="container fade-in">
        <h2 style="margin-bottom: 20px;">Stay Connected</h2>
        <div style="display: flex; gap: 20px; justify-content: center; margin-bottom: 30px;">
            <a href="#" style="font-size: 2rem; color: #0077b5;"><i class="fab fa-linkedin"></i></a>
            <a href="#" style="font-size: 2rem; color: #3b5998;"><i class="fab fa-facebook-square"></i></a>
            <a href="#" style="font-size: 2rem; color: #1da1f2;"><i class="fab fa-twitter-square"></i></a>
            <a href="#" style="font-size: 2rem; color: #E1306C;"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="bar-strip" style="background: var(--primary-dark); color: white; padding: 40px; border-radius: 10px; max-width: 700px; margin: 0 auto;">
            <h3 style="margin-bottom: 15px; color: var(--accent-gold);">Need Instant Support?</h3>
            <p style="margin-bottom: 25px;">Chat with us on WhatsApp for quick eligibility checks.</p>
            <a href="https://wa.me/917291000223" target="_blank" class="btn-hero btn-gold"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
