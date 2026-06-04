// Mobile Menu Toggle
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-links");
        const navItems = document.querySelectorAll(".nav-item");

        if (hamburger && navMenu) {
            hamburger.addEventListener("click", () => {
                hamburger.classList.toggle("active");
                navMenu.classList.toggle("active");
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!hamburger.contains(e.target) && !navMenu.contains(e.target) && navMenu.classList.contains('active')) {
                    hamburger.classList.remove("active");
                    navMenu.classList.remove("active");
                }
            });
        }

        navItems.forEach(item => {
            item.addEventListener("click", () => {
                // If it's the dropdown toggle, don't close menu immediately on mobile
                if (item.parentElement.classList.contains('dropdown-parent') && window.innerWidth <= 768) {
                    return;
                }
                if (hamburger) hamburger.classList.remove("active");
                if (navMenu) navMenu.classList.remove("active");
            });
        });

        // Mobile Dropdown Toggle
        const dropdownParents = document.querySelectorAll('.dropdown-parent > a');
        dropdownParents.forEach(link => {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    const parent = link.parentElement;
                    parent.classList.toggle('active');
                }
            });
        });

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            if (question) {
                question.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            }
        });

        // Scroll Animation (Fade In)
        // Note: CSS now defaults to opacity: 1 (visible) for safety.
        // We add '.animate-ready' to hide elements only if JS runs successfully.

        const fadeElements = document.querySelectorAll('.fade-in');

        // Helper to reveal everything no matter what
        const revealAllSections = () => {
            fadeElements.forEach(el => {
                el.classList.add('visible');
                el.classList.remove('animate-ready');
            });
        };

        if ('IntersectionObserver' in window) {
            try {
                const observerOptions = { threshold: 0.1 };
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            entry.target.classList.remove('animate-ready'); // Remove hidden state
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);

                fadeElements.forEach(el => {
                    // Only hide if we are sure we can animate it
                    // el.classList.add('animate-ready');
                    // Better approach: Don't force hide. Let CSS handle it if needed, or just let it animate from visible to visible.
                    // But to respect the existing design, we will only add 'animate-ready' if we are sure observer is working.
                    el.classList.add('animate-ready');
                    observer.observe(el);
                });

                // Fallback: If animation gets stuck (e.g. tab backgrounded), force visibility
                setTimeout(revealAllSections, 1000); // quicker fail-safe reveal

                // Ensure everything is revealed once the page is fully loaded (e.g. slow devices)
                window.addEventListener('load', revealAllSections);
            } catch (e) {
                console.error('Fade-in initialization failed', e);
                revealAllSections();
            }
        } else {
            // Browser doesn't support IntersectionObserver; keep content visible
            revealAllSections();
        }

        // Side form toggle and tabs
        const sideShell = document.querySelector('.side-shell');
        const sideToggle = document.getElementById('sideToggle');
        const sideTabButtons = document.querySelectorAll('.side-tabs button');
        const sideForms = document.querySelectorAll('.side-form-body');

        if(sideToggle && sideShell) {
            sideToggle.setAttribute('aria-expanded', 'false');

            sideToggle.addEventListener('click', () => {
                const isOpen = sideShell.classList.toggle('open');
                sideToggle.setAttribute('aria-expanded', isOpen);
            });
        }

        if(sideTabButtons) {
            sideTabButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    sideTabButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    const target = btn.getAttribute('data-form');
                    sideForms.forEach(form => {
                        form.classList.toggle('active', form.getAttribute('data-form') === target);
                    });
                });
            });
        }

        // Growth Chart (Big Bull Image)
        const growthCtx = document.getElementById('growthChart');
        if (growthCtx && typeof Chart !== 'undefined') {
            try {
                new Chart(growthCtx, {
                    type: 'line',
                    data: {
                        labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
                        datasets: [{
                            label: 'Funds Deployed (₹ Crores)',
                            data: [120, 180, 250, 400, 580, 750],
                            borderColor: '#c5a059',
                            backgroundColor: 'rgba(197, 160, 89, 0.1)',
                            borderWidth: 3,
                            pointBackgroundColor: '#1a4f8a',
                            pointBorderColor: '#fff',
                            pointRadius: 6,
                            pointHoverRadius: 8,
                            fill: true,
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                backgroundColor: '#0b1e3b',
                                titleColor: '#c5a059',
                                bodyFont: { size: 14 }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: { color: 'rgba(255,255,255,0.1)' },
                                title: { display: true, text: 'Amount in ₹ Crores', color: '#fff' },
                                ticks: { color: '#fff' }
                            },
                            x: {
                                grid: { display: false },
                                ticks: { color: '#fff' }
                            }
                        }
                    }
                });
            } catch (e) {
                console.error("Chart init failed", e);
            }
        }

        // EMI Calculator
        const amountInput = document.getElementById('loanAmount');
        const rateInput = document.getElementById('interestRate');
        const tenureInput = document.getElementById('tenureMonths');
        const calculateBtn = document.getElementById('calculateEmi');
        const emiValue = document.getElementById('emiValue');
        const interestValue = document.getElementById('interestValue');
        const totalValue = document.getElementById('totalValue');
        const emiChart = document.getElementById('emiChart');
        const emiPercent = document.getElementById('emiPercent');
        const emiTableBody = document.querySelector('#emiTable tbody');
        const emiScheduleContainer = document.getElementById('emiScheduleContainer');
        const downloadPdfBtn = document.getElementById('downloadPdf');

        const formatRupees = (num) => `₹${Math.round(num).toLocaleString('en-IN')}`;

        function calculateEmi() {
            if(!amountInput) return; // Guard clause

            const P = parseFloat(amountInput.value) || 0;
            const annualRate = parseFloat(rateInput.value) || 0;
            const n = parseInt(tenureInput.value, 10) || 0;
            const r = annualRate / 12 / 100;

            if (P <= 0 || r <= 0 || n <= 0) {
                if(emiValue) emiValue.textContent = '₹0';
                if(interestValue) interestValue.textContent = '₹0';
                if(totalValue) totalValue.textContent = '₹0';
                if(emiChart) emiChart.style.background = 'conic-gradient(var(--accent-gold) 0deg, var(--accent-gold) 0deg, rgba(255,255,255,0.22) 0deg 360deg)';
                if(emiPercent) emiPercent.textContent = '0%';
                if(emiScheduleContainer) emiScheduleContainer.style.display = 'none';
                return;
            }

            const emi = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
            const total = emi * n;
            const interest = total - P;
            const interestAngle = Math.min(360, Math.max(0, (interest / total) * 360));
            const interestPercent = Math.min(100, Math.max(0, (interest / total) * 100));

            if(emiValue) emiValue.textContent = formatRupees(emi);
            if(interestValue) interestValue.textContent = formatRupees(interest);
            if(totalValue) totalValue.textContent = formatRupees(total);
            if(emiChart) emiChart.style.background = `conic-gradient(var(--accent-gold) 0deg ${interestAngle}deg, rgba(255,255,255,0.22) ${interestAngle}deg 360deg)`;
            if(emiPercent) emiPercent.textContent = `${interestPercent.toFixed(0)}%`;

            // Generate Schedule
            generateSchedule(P, r, n, emi);
        }

        function generateSchedule(principal, monthlyRate, months, emi) {
            let balance = principal;
            let html = '';

            for (let i = 1; i <= months; i++) {
                const interest = balance * monthlyRate;
                const principalPayment = emi - interest;
                balance -= principalPayment;

                if (balance < 0) balance = 0;

                html += `
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #eee;">${i}</td>
                        <td style="padding: 12px; text-align: right; border-bottom: 1px solid #eee;">${formatRupees(principalPayment)}</td>
                        <td style="padding: 12px; text-align: right; border-bottom: 1px solid #eee;">${formatRupees(interest)}</td>
                        <td style="padding: 12px; text-align: right; border-bottom: 1px solid #eee;">${formatRupees(emi)}</td>
                        <td style="padding: 12px; text-align: right; border-bottom: 1px solid #eee;">${formatRupees(balance)}</td>
                    </tr>
                `;
            }

            if(emiTableBody) emiTableBody.innerHTML = html;
            if(emiScheduleContainer) emiScheduleContainer.style.display = 'block';
        }

        // PDF Download
        if(downloadPdfBtn) {
            downloadPdfBtn.addEventListener('click', async () => {
                if (!window.jspdf) {
                    console.error("jsPDF not loaded");
                    alert("PDF generation is not available properly. Please check your internet connection.");
                    return;
                }
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF();

                // Helper to load image
                const loadImage = (url) => {
                    return new Promise((resolve, reject) => {
                        const img = new Image();
                        img.src = url;
                        img.onload = () => resolve(img);
                        img.onerror = reject;
                    });
                };

                let logoImg = null;
                try {
                    // Try to load the logo
                    logoImg = await loadImage('assets/logo.png');
                } catch (e) {
                    console.warn("Logo not found, proceeding without it.");
                }

                const addLetterhead = (pdfDoc) => {
                    const totalPages = pdfDoc.internal.getNumberOfPages();
                    for (let i = 1; i <= totalPages; i++) {
                        pdfDoc.setPage(i);

                        // --- Header ---
                        if(logoImg) {
                            // Add Logo
                             pdfDoc.addImage(logoImg, 'PNG', 14, 10, 40, 12); // Adjust aspect ratio as needed
                        } else {
                            // Fallback Text Logo
                            pdfDoc.setFontSize(22);
                            pdfDoc.setTextColor(11, 30, 59);
                            pdfDoc.setFont('helvetica', 'bold');
                            pdfDoc.text("Vardhman Finance", 14, 20);
                        }

                        // Header Contact Info (Right Aligned)
                        pdfDoc.setFontSize(9);
                        pdfDoc.setTextColor(100);
                        pdfDoc.setFont('helvetica', 'normal');
                        pdfDoc.text("Private Funding Division", 196, 15, { align: 'right' });
                        pdfDoc.text("Hyderabad · Telangana · India", 196, 20, { align: 'right' });
                        pdfDoc.text("www.vardhmanfinance.com", 196, 25, { align: 'right' });

                        // Horizontal Line
                        pdfDoc.setDrawColor(197, 160, 89); // Gold
                        pdfDoc.setLineWidth(0.5);
                        pdfDoc.line(14, 30, 196, 30);


                        // --- Watermark ---
                        const GState = window.jspdf.GState;
                        if (GState) {
                            pdfDoc.saveGraphicsState();
                            pdfDoc.setGState(new GState({ opacity: 0.05 }));
                            pdfDoc.setFontSize(60);
                            pdfDoc.setTextColor(11, 30, 59); // Dark Blue
                            pdfDoc.text("Vardhman Finance", pdfDoc.internal.pageSize.width / 2, pdfDoc.internal.pageSize.height / 2, { align: 'center', angle: 45 });
                            pdfDoc.restoreGraphicsState();
                        }

                        // --- Footer ---
                        const pageHeight = pdfDoc.internal.pageSize.height;
                        pdfDoc.setDrawColor(200);
                        pdfDoc.line(14, pageHeight - 15, 196, pageHeight - 15);

                        pdfDoc.setFontSize(8);
                        pdfDoc.setTextColor(150);
                        pdfDoc.text("Vardhman Finance - Confidential | Generated on " + new Date().toLocaleDateString(), 14, pageHeight - 10);
                        pdfDoc.text("Page " + i + " of " + totalPages, 196, pageHeight - 10, { align: 'right' });
                    }
                };

                // Add Title
                doc.setFontSize(16);
                doc.setTextColor(11, 30, 59);
                doc.setFont('helvetica', 'bold');
                doc.text("Loan Amortization Schedule", 14, 45);

                // Add Loan Details Box
                doc.setFillColor(248, 249, 250);
                doc.rect(14, 50, 182, 25, 'F');

                doc.setFontSize(11);
                doc.setTextColor(50);

                // Use Rs. instead of Symbol for PDF compatibility
                const loanAmtFormatted = parseFloat(amountInput.value).toLocaleString('en-IN');
                const emiClean = emiValue.textContent.replace(/[^\d.]/g, '');
                const emiFormatted = parseFloat(emiClean).toLocaleString('en-IN');

                doc.text(`Loan Amount: Rs. ${loanAmtFormatted}`, 20, 60);
                doc.text(`Interest Rate: ${rateInput.value}% p.a.`, 20, 68);

                doc.text(`Tenure: ${tenureInput.value} Months`, 110, 60);
                doc.text(`Monthly EMI: Rs. ${emiFormatted}`, 110, 68);

                // Prepare table data
                const tableData = [];
                const rows = emiTableBody.querySelectorAll('tr');
                rows.forEach(row => {
                    const cols = row.querySelectorAll('td');
                    const rowData = [];
                    cols.forEach(col => {
                        let text = col.innerText.replace('₹', 'Rs. ');
                        rowData.push(text);
                    });
                    tableData.push(rowData);
                });

                // Add Table
                doc.autoTable({
                    head: [['Month', 'Principal', 'Interest', 'Total Payment', 'Balance']],
                    body: tableData,
                    startY: 85,
                    theme: 'grid',
                    headStyles: { fillColor: [11, 30, 59], textColor: [255, 255, 255], fontStyle: 'bold' },
                    alternateRowStyles: { fillColor: [249, 249, 249] },
                    styles: { fontSize: 9, cellPadding: 3, lineColor: [220, 220, 220] },
                    margin: { top: 85 },
                    didDrawPage: function (data) {
                        // Header is handled by addLetterhead
                    }
                });

                addLetterhead(doc);
                doc.save("Vardhman_EMI_Schedule.pdf");
            });
        }

        if(calculateBtn) calculateBtn.addEventListener('click', calculateEmi);
        [amountInput, rateInput, tenureInput].forEach(input => {
            if(input) input.addEventListener('change', calculateEmi);
        });

        // Initial Calculation
        if(calculateBtn) {
             setTimeout(calculateEmi, 500);
        }

        // Header Scroll Effect
        const header = document.querySelector('header');
        if(header) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        }


// --- 2026 UI/UX POLISH: GLOBAL RESPONSIVE + ANIMATION ENHANCEMENTS ---
document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Smooth in-view reveal for shared classes across pages.
    const revealTargets = document.querySelectorAll('.scroll-reveal, .slide-in-left, .slide-in-right, .zoom-in');
    if (revealTargets.length) {
        if ('IntersectionObserver' in window && !prefersReducedMotion) {
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });

            revealTargets.forEach((item) => revealObserver.observe(item));
        } else {
            revealTargets.forEach((item) => item.classList.add('in-view'));
        }
    }

    // Animate metric counters when visible.
    const counters = document.querySelectorAll('[data-counter]');
    const animateCounter = (element) => {
        const target = Number(element.getAttribute('data-counter')) || 0;
        const duration = 1300;
        const start = performance.now();

        const tick = (time) => {
            const progress = Math.min((time - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            element.textContent = Math.floor(target * eased).toLocaleString('en-IN');
            if (progress < 1) requestAnimationFrame(tick);
        };

        requestAnimationFrame(tick);
    };

    if (counters.length) {
        if ('IntersectionObserver' in window && !prefersReducedMotion) {
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting && !entry.target.dataset.counted) {
                        entry.target.dataset.counted = '1';
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.35 });

            counters.forEach((counter) => counterObserver.observe(counter));
        } else {
            counters.forEach((counter) => {
                if (!counter.dataset.counted) {
                    counter.dataset.counted = '1';
                    counter.textContent = (Number(counter.getAttribute('data-counter')) || 0).toLocaleString('en-IN');
                }
            });
        }
    }

    // Animated progress bars.
    const fills = document.querySelectorAll('.lane-fill[data-fill]');
    if (fills.length) {
        fills.forEach((fill) => {
            const value = fill.getAttribute('data-fill') || '0%';
            fill.style.width = '0';
            fill.style.transition = prefersReducedMotion ? 'none' : 'width 1s cubic-bezier(.2,.8,.2,1)';

            requestAnimationFrame(() => {
                fill.style.width = value;
            });
        });
    }

    // Header micro-interaction on scroll.
    const headerEl = document.querySelector('header');
    if (headerEl) {
        const toggleHeaderState = () => {
            headerEl.classList.toggle('scrolled', window.scrollY > 12);
        };
        toggleHeaderState();
        window.addEventListener('scroll', toggleHeaderState, { passive: true });
    }
});
