<?php
require_once __DIR__ . '/partner/vendor/autoload.php';

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Trust Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #D4AF37; /* Gold color */
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .logo {
            max-width: 250px;
        }
        h1 {
            color: #0A2342; /* Navy blue */
            font-size: 28px;
            margin-top: 10px;
        }
        h2 {
            color: #0A2342;
            font-size: 20px;
            border-left: 4px solid #D4AF37;
            padding-left: 10px;
            margin-top: 30px;
        }
        p {
            font-size: 14px;
            margin-bottom: 15px;
        }
        ul {
            margin-bottom: 15px;
            font-size: 14px;
        }
        li {
            margin-bottom: 5px;
        }
        .highlight-box {
            background-color: #f4f6f9;
            border-left: 4px solid #0A2342;
            padding: 15px;
            margin: 20px 0;
            font-weight: bold;
        }
        .stats-grid {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        .stats-grid td {
            width: 50%;
            padding: 10px;
            vertical-align: top;
        }
        .stat-card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
        }
        .stat-value {
            font-size: 24px;
            color: #D4AF37;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .stat-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;
            padding-top: 10px;
            margin-top: 40px;
        }
        .page-break {
            page-break-after: always;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="' . __DIR__ . '/assets/logo.png" class="logo" alt="Vardhman Financial Services">
        <h1>Company Trust Report</h1>
        <p style="color: #666; font-style: italic;">Marketing Version</p>
    </div>

    <h2>1. Company Overview</h2>
    <p>Vardhman Financial Services is one of the rapidly growing private financial service networks in India, providing Private Funding Unsecured Cheque Basis Solutions for businesses and individuals who require financial support.</p>
    <p>The company operates as a financial service facilitator and private funding network, connecting verified investors with customers who require working capital or business funding.</p>

    <div class="highlight-box">
        <strong>Our core objective is to provide:</strong>
        <ul style="margin-top: 10px;">
            <li>Fast financial solutions</li>
            <li>Transparent processes</li>
            <li>Secure financial networking</li>
            <li>Reliable support for businesses and investors</li>
        </ul>
    </div>
    <p>With a strong operational structure and growing financial network, Vardhman Financial Services is currently active in 24 states across India.</p>

    <h2>2. Company Trust & Experience</h2>
    <p>Vardhman Financial Services represents a financial network built on more than <strong>26 years of experience</strong> in private financial services.</p>
    <p>Over the years, the company has built a trusted ecosystem connecting investors and customers through professional financial facilitation.</p>
    <div style="text-align: center; font-size: 18px; font-style: italic; color: #0A2342; margin: 30px 0; padding: 20px; background: #fafafa; border-radius: 8px;">
        "Trust is not built by words — it is built by commitment and performance."
    </div>
    <p>This principle has helped the company establish a long-term relationship with thousands of investors and millions of customers.</p>

    <h2>3. Funding Performance Report</h2>
    <p>According to the company’s internal performance analysis:</p>

    <table class="stats-grid">
        <tr>
            <td>
                <div class="stat-card">
                    <span class="stat-value">91%</span>
                    <span class="stat-label">Successful Disbursements</span>
                </div>
            </td>
            <td>
                <div class="stat-card">
                    <span class="stat-value">9%</span>
                    <span class="stat-label">Risk-Based Rejections</span>
                </div>
            </td>
        </tr>
    </table>

    <p style="margin-top: 15px;">This high approval ratio reflects the company\'s efficient verification process, strong investor network, and structured financial system. Only cases with incomplete documentation or higher financial risk are declined after evaluation.</p>

    <h2>4. Working Capital Strength</h2>
    <p>The financial growth of Vardhman Financial Services can be clearly seen through its expanding Working Capital Structure.</p>

    <table class="stats-grid">
        <tr>
            <td>
                <div class="stat-card">
                    <span class="stat-value">₹105 Crore</span>
                    <span class="stat-label">FY 2025–2026</span>
                </div>
            </td>
            <td>
                <div class="stat-card">
                    <span class="stat-value">₹1778 Crore</span>
                    <span class="stat-label">FY 2026–2027</span>
                </div>
            </td>
        </tr>
    </table>

    <p style="margin-top: 15px;">This growth reflects the increasing investor confidence and expansion of financial operations within the company network.</p>

    <div class="page-break"></div>

    <h2>5. Investor Network Strength</h2>
    <p>The investor network of Vardhman Financial Services is one of the most important pillars of the company. For the Financial Year 2026–2027, the total investor funding capacity is approximately <strong>₹3205 Crore</strong>.</p>

    <p><strong>Investor Statistics:</strong></p>
    <ul>
        <li>846+ Active Investors</li>
        <li>1480+ Total Registered Investors</li>
    </ul>
    <p>These investors have helped the company build a reliable Private Funding Investment Network across India.</p>

    <h2>6. Customer Satisfaction Report</h2>
    <p>Based on the Customer Analysis Report for Financial Year 2025–2026:</p>
    <div class="highlight-box" style="text-align: center; font-size: 18px;">
        <strong>97.5% of customers reported satisfaction with the company’s services.</strong>
    </div>
    <p>Customer satisfaction has been achieved through:</p>
    <ul>
        <li>Fast processing support</li>
        <li>Transparent financial communication</li>
        <li>Legal assistance where required</li>
        <li>Secure financial transactions</li>
        <li>Professional customer service</li>
    </ul>

    <h2>7. Customer Base</h2>
    <p>Over the past 30 years, Vardhman Financial Services has served more than:</p>
    <div style="font-size: 22px; color: #0A2342; font-weight: bold; margin: 15px 0;">1.3 Million (13 Lakh+) Customers</div>
    <p>In addition, through digital platforms and online services, the company has served:</p>
    <div style="font-size: 22px; color: #0A2342; font-weight: bold; margin: 15px 0;">270,000+ Online Digital Customers</div>
    <p>The company continues to expand its digital financial service infrastructure.</p>

    <h2>8. Nationwide Presence</h2>
    <p>Vardhman Financial Services operates across <strong>24 states</strong> in India, making it one of the largest growing private financial networks in the country.</p>
    <p>The company’s long-term vision is to establish a nationwide financial network covering all states of India.</p>

    <h2>9. Recovery Performance</h2>
    <p>The company maintains a strong financial recovery system to protect investor interests.</p>

    <table class="stats-grid">
        <tr>
            <td>
                <div class="stat-card">
                    <span class="stat-value">87%</span>
                    <span class="stat-label">5-Year Recovery Ratio</span>
                </div>
            </td>
            <td>
                <div class="stat-card">
                    <span class="stat-value">92.3%</span>
                    <span class="stat-label">Avg Yearly Recovery Ratio</span>
                </div>
            </td>
        </tr>
    </table>

    <p style="margin-top: 15px;">This performance reflects the effectiveness of the company’s recovery system, field monitoring teams, and legal support structure.</p>

    <div class="page-break"></div>

    <h2>10. Operational Team Strength</h2>
    <p>Vardhman Financial Services operates with a large operational network across India.</p>

    <div class="highlight-box">
        <strong style="color: #D4AF37; font-size: 18px;">Field Verification Team: 8690+ Members</strong>
        <p style="margin-top: 10px;">The verification team conducts on-ground checks including:</p>
        <ul>
            <li>Business verification</li>
            <li>Customer background validation</li>
            <li>Document authentication</li>
            <li>Risk analysis</li>
        </ul>
    </div>

    <div class="highlight-box">
        <strong style="color: #D4AF37; font-size: 18px;">Recovery Team: 30,656+ Members</strong>
        <p style="margin-top: 10px;">This team works to ensure financial discipline and timely recovery within the funding network.</p>
    </div>

    <div class="highlight-box">
        <strong style="color: #D4AF37; font-size: 18px;">Legal Department: 8200+ Legal Professionals</strong>
        <p style="margin-top: 10px;">The legal department provides support in areas such as:</p>
        <ul>
            <li>Contract management</li>
            <li>Legal consultation</li>
            <li>Recovery legal processes</li>
            <li>Dispute resolution</li>
        </ul>
    </div>

    <h2>11. Leadership Team</h2>
    <p>The company is supported by experienced professionals responsible for different operational areas.</p>

    <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">
                <strong>Credit Manager</strong><br>
                Mr. Shri Krishna Govind Bhai Patel<br>
                <span style="font-size: 12px; color: #666;">Responsible for credit evaluation and financial risk assessment.</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">
                <strong>Vice President</strong><br>
                Mr. Shri Sumit Agrawal<br>
                Email: vc.sumit@vardhmanfinance.com<br>
                <span style="font-size: 12px; color: #666;">Responsible for strategic operations and investor relations.</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">
                <strong>Head of Legal Department</strong><br>
                Mr. Shri Avdhesh Kumar Rajput<br>
                Email: legal@vardhmanfinance.com<br>
                <span style="font-size: 12px; color: #666;">Oversees all legal operations and compliance management.</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px; border-bottom: 1px solid #eee;">
                <strong>Cybersecurity President</strong><br>
                Mr. Surya Pratap Singh Shekhawat<br>
                Email: advocate.surya@vardhmanfinance.com<br>
                <span style="font-size: 12px; color: #666;">Responsible for digital security systems and cybersecurity operations.</span>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px;">
                <strong>Cyber Help Desk</strong><br>
                Email: cyber-help@vardhmanfinance.com<br>
                <span style="font-size: 12px; color: #666;">Provides digital and cybersecurity assistance for customers and investors.</span>
            </td>
        </tr>
    </table>

    <div class="page-break"></div>

    <h2>12. Company Vision</h2>
    <p>The long-term vision of Vardhman Financial Services is:</p>
    <ul>
        <li>To build a strong and transparent Private Funding Network in India</li>
        <li>To strengthen trust between investors and customers</li>
        <li>To provide fast financial solutions in the digital era</li>
        <li>To operate with legal compliance and transparency</li>
    </ul>

    <h2>13. Trust Commitment</h2>
    <p>Vardhman Financial Services strongly believes that the foundation of financial services is:</p>
    <div style="text-align: center; font-size: 20px; color: #D4AF37; font-weight: bold; margin: 20px 0;">
        Trust, Transparency, and Responsibility
    </div>
    <p>The company continues to work towards building long-term trust with both investors and customers through responsible financial practices.</p>

    <h2>14. Closing Statement</h2>
    <p>Vardhman Financial Services is not just a financial service network — it is a trusted platform connecting investors and businesses through structured financial solutions.</p>
    <p><strong>The company remains committed to:</strong></p>
    <ul>
        <li>Protecting investor interests</li>
        <li>Supporting business growth</li>
        <li>Maintaining transparency in financial operations</li>
    </ul>
    <p>With this vision, Vardhman Financial Services continues to expand its network and strengthen its presence in the Indian financial ecosystem.</p>

    <div class="footer">
        <p>&copy; ' . date('Y') . ' Vardhman Financial Services. All Rights Reserved.</p>
        <p>This is a strictly confidential marketing document intended to showcase our operational strength and trust metrics.</p>
    </div>

</body>
</html>
';

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 15,
    'margin_right' => 15,
    'margin_top' => 15,
    'margin_bottom' => 20,
    'margin_header' => 10,
    'margin_footer' => 10
]);

// Add footer with page number
$mpdf->SetFooter('Vardhman Financial Services | Company Trust Report | Page {PAGENO} of {nb}');

$mpdf->WriteHTML($html);

// Ensure the directory exists
$pdfDir = __DIR__ . '/assets/pdf';
if (!file_exists($pdfDir)) {
    mkdir($pdfDir, 0777, true);
}

// Save the PDF
$pdfPath = $pdfDir . '/company-trust-report.pdf';
$mpdf->Output($pdfPath, \Mpdf\Output\Destination::FILE);

echo "PDF successfully generated and saved to: " . $pdfPath . "\n";
?>
