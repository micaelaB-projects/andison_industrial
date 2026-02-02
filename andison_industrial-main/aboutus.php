<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ANDISON INDUSTRIAL</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: white;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #2b00d9 0%, #2b00b0 100%);
            color: white;
            padding: 14px 0;
        }

        .header-top {
            display: flex;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            gap: 20px;
            margin-bottom: 12px;
        }

        .logo {
            font-size: 16px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 0 0 auto;
        }

        .logo-box {
            background: transparent;
            color: #2b00d9;
            padding: 0;
            border-radius: 0;
            font-weight: 800;
            letter-spacing: 0.6px;
        }

        .logo-box img {
            height: 50px;
            width: auto;
            display: block;
        }

    /* SEARCH BAR */
    .search-bar {
        flex: 1 1 auto;
        display: flex;
        justify-content: center;
        max-width: 600px;
        margin: 0 auto;
    }

    .search-bar .search-field {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 8px;
        position: relative;
    }

    .search-bar input {
        width: 100%;
        height: 40px;
        padding: 10px 16px 10px 40px;
        border: 2px solid rgba(255,255,255,0.3);
        border-radius: 6px;
        font-size: 15px;
        background: rgba(255,255,255,0.95);
        color: #333;
    }

    .search-bar input::placeholder {
        color: #999;
    }

    .search-bar .search-field::before {
        content: '🔍';
        position: absolute;
        left: 12px;
        font-size: 16px;
        pointer-events: none;
        color: #666;
    }

    .search-icon {
        display: none;
    }

    /* RIGHT ACTIONS */
    .header-right {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-left: auto;
    }

    .inquiry-btn {
        background: #00d894;
        color: #002b2b;
        border: none;
        padding: 10px 18px;
        border-radius: 999px;
        font-weight: 800;
        cursor: pointer;
        box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        font-size: 13px;
    }

    .inquiry-btn:hover {
        filter: brightness(0.95);
    }

    .header-contact {
        display: flex;
        align-items: center;
        gap: 14px;
        font-size: 13px;
        flex: 0 0 auto;
    }

    .contact-link {
        color: rgba(255,255,255,0.95);
        text-decoration: none;
        font-weight: 600;
        padding-bottom: 8px;
        white-space: nowrap;
        position: relative;
        display: inline-block;
        font-size: 13px;
    }

    .contact-link::after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%) scaleX(0);
        transform-origin: center;
        width: 64px;
        height: 3px;
        background: rgba(255,255,255,0.18);
        bottom: -6px;
        border-radius: 2px;
        transition: transform 220ms ease;
    }

    .contact-link:hover::after,
    .contact-link:focus-visible::after {
        transform: translateX(-50%) scaleX(1);
    }

    /* Contact popover */
    .contact-dropdown {
        position: relative;
        display: inline-block;
    }

    .contact-popover {
        position: absolute;
        left: 50%;
        top: calc(100% + 12px);
        width: 320px;
        background: #fff;
        color: #111;
        border-radius: 8px;
        padding: 14px 16px;
        box-shadow: 0 10px 30px rgba(10,10,20,0.12);
        opacity: 0;
        visibility: hidden;
        transform: translateX(-50%) translateY(-6px) scale(0.98);
        transition: opacity 180ms ease, transform 180ms ease, visibility 180ms;
        z-index: 120;
    }

    .contact-popover::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: -8px;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #fff;
        filter: drop-shadow(0 -1px 0 rgba(0,0,0,0.03));
    }

    .contact-dropdown:hover:not(.closed) .contact-popover,
    .contact-dropdown:focus-within:not(.closed) .contact-popover {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0) scale(1);
    }

    .contact-close {
        position: absolute;
        top: 8px;
        right: 8px;
        background: transparent;
        border: none;
        color: #666;
        font-weight: 700;
        font-size: 24px;
        cursor: pointer;
        padding: 4px 8px;
        border-radius: 6px;
        line-height: 1;
    }

    .contact-close:hover { 
        background: rgba(0,0,0,0.06); 
        color: #333; 
    }

    /* when user explicitly closes, keep hidden until they move away */
    .contact-dropdown.closed .contact-popover {
        opacity: 0 !important;
        visibility: hidden !important;
        transform: translateX(-50%) translateY(-6px) scale(0.98) !important;
    }

    .contact-list { 
        list-style: none; 
        margin: 0; 
        padding: 6px 0; 
    }
    .contact-list li { 
        display:flex; 
        gap:12px; 
        align-items:center; 
        padding:10px 6px; 
    }
    .contact-list .icon { 
        font-size:18px; 
        width:28px; 
        text-align:center; 
        color:#111; 
    }
    .contact-list a { 
        color: #111; 
        text-decoration:none; 
        font-weight:600; 
    }
    .contact-list a:hover { 
        text-decoration:underline; 
    }

        /* Navigation */
        nav {
            position: relative;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(10px);
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            min-height: 52px;
            gap: 18px;
            justify-content: flex-start;
            padding-left: 160px; /* space for the left Browse toggle */
            position: relative;
        }

        /* Pin the browse toggle to the left side of the nav area */
        .browse-products-wrapper {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 80;
        }

        .menu-toggle {
            background: transparent;
            border: none;
            color: white;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 14px;
            cursor: pointer;
            font-size: 15px;
        }

        .menu-toggle:hover {
            color: #00d4aa;
        }

        .hamburger {
            font-size: 18px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 28px;
            margin: 0;
            padding: 0;
            flex-wrap: nowrap;
            overflow: visible;
        }

        nav li {
            position: relative;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            padding: 12px 6px;
            display: block;
            transition: color 0.2s;
            position: relative;
            font-weight: 500;
        }

        nav a:hover {
            color: #00d4aa;
        }

        nav a.active {
            border-bottom: 3px solid #00d4aa;
            padding-bottom: 9px;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .page-title {
            text-align: center;
            font-size: 42px;
            font-weight: bold;
            color: #333;
            margin-bottom: 50px;
        }

        /* About Section */
        .about-section {
            margin-bottom: 60px;
        }

        .about-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #0015d1;
            margin-bottom: 20px;
            border-bottom: 3px solid #00d894;
            padding-bottom: 10px;
        }

        .about-section p {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Two Column Layout */
        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
        }

        .two-column-image {
            background: #f0f0f0;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 300px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .two-column-image img {
            max-width: 100%;
            height: auto;
            max-height: 300px;
        }

        .two-column-text h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        .two-column-text p {
            margin-bottom: 15px;
        }

        /* Values Grid */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .value-card {
            background: linear-gradient(135deg, #f5f5f5 0%, #fff 100%);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #0015d1;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .value-card h4 {
            font-size: 18px;
            font-weight: bold;
            color: #0015d1;
            margin-bottom: 12px;
        }

        .value-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* History Timeline */
        .timeline {
            position: relative;
            padding: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: linear-gradient(180deg, #0015d1 0%, #00d894 100%);
        }

        .timeline-item {
            margin-bottom: 40px;
            display: flex;
            gap: 30px;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            flex: 1;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-top: 3px solid #0015d1;
        }

        .timeline-year {
            font-size: 24px;
            font-weight: bold;
            color: #0015d1;
            margin-bottom: 8px;
        }

        .timeline-description {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
        }

        .timeline-dot {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: #0015d1;
            border: 4px solid white;
            border-radius: 50%;
            z-index: 10;
            margin-top: 15px;
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .team-member {
            text-align: center;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .team-avatar {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #2b00d9 0%, #2b00b0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
        }

        .team-info {
            padding: 20px;
        }

        .team-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .team-position {
            font-size: 14px;
            color: #0015d1;
            margin-bottom: 10px;
        }

        .team-bio {
            font-size: 13px;
            color: #666;
            line-height: 1.5;
        }

        /* Footer */
        footer {
            background: #0015d1;
            color: white;
            padding: 30px 20px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-copyright {
            font-size: 13px;
        }

        .footer-links {
            display: flex;
            gap: 25px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            font-size: 10px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #00d894;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .two-column {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .timeline::before {
                left: 20px;
            }

            .timeline-item,
            .timeline-item:nth-child(odd) {
                flex-direction: column;
                margin-left: 60px;
            }

            .timeline-dot {
                left: 10px;
            }
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 32px;
            }

            .about-section h2 {
                font-size: 24px;
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .nav-container {
                justify-content: space-between;
                padding-left: 20px;
            }

            nav ul {
                flex-wrap: wrap;
                gap: 15px;
            }

            .header-top {
                flex-wrap: wrap;
                gap: 15px;
            }

            .search-bar {
                order: 3;
                width: 100%;
                max-width: 100%;
                margin: 0;
            }
        }

        @media (max-width: 600px) {
            .page-title {
                font-size: 28px;
            }

            .about-section h2 {
                font-size: 20px;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .main-content {
                padding: 30px 15px;
            }
        }
    </style>
</head>
<body>
    <?php
        $company_name = "ANDISON INDUSTRIAL";
        
        // Contact information
        $phone = "+1(234) 567 8900";
        $phone2 = "+1(234) 567 8900";
        $phone3 = "+1(639) 977 803 7398";
        $email = "info@andison-industrial.com";
    ?>

    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="logo">
                <div class="logo-box"><img src="assets/image-removebg-preview.png" alt="Andison Industrial" /></div>
            </div>

            <div class="search-bar">
                <div class="search-field">
                    <input type="text" placeholder="Search for products">
                </div>
            </div>

            <div class="header-right">
                <button class="inquiry-btn">INQUIRY LIST</button>
                <div class="header-contact">
                    <div class="contact-dropdown" tabindex="0" aria-haspopup="true">
                        <a href="#contact" class="contact-link" aria-label="Contact Us">Contact Us ▾</a>
                        <div class="contact-popover" role="menu" aria-hidden="true">
                            <button class="contact-close" aria-label="Close contact popover">✕</button>
                            <ul class="contact-list">
                                <li><span class="icon">📞</span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                                <li><span class="icon">📞</span><a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a></li>
                                <li><span class="icon">📞</span><a href="tel:<?php echo $phone3; ?>"><?php echo $phone3; ?></a></li>
                                <li><span class="icon">📧</span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav>
            <div class="nav-container">
                <button class="menu-toggle" id="browseToggle">
                    <span class="hamburger">☰</span>
                    <span>BROWSE PRODUCTS</span>
                </button>
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="aboutus.php" class="active">About Us</a>
                    </li>
                    <li>
                        <a href="brands.php">Brands</a>
                    </li>
                    <li>
                        <a href="industries.php">Industries</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="page-title">About ANDISON INDUSTRIAL</h1>

        <!-- Company Overview -->
        <div class="about-section">
            <h2>Our Company</h2>
            <p>
                ANDISON INDUSTRIAL is a leading distributor of premium industrial products and solutions. With over a decade of experience in the industrial sector, we pride ourselves on delivering high-quality equipment, materials, and services to businesses across various industries.
            </p>
            <p>
                Our commitment to excellence, innovation, and customer satisfaction has made us a trusted partner for thousands of businesses seeking reliable industrial solutions.
            </p>
        </div>

        <!-- Two Column: Our Story -->
        <div class="two-column">
            <div class="two-column-text">
                <h3>Our Story</h3>
                <p>
                    Founded in 2010, ANDISON INDUSTRIAL began as a small family business with a vision to transform the industrial supply chain. Through dedication and hard work, we have grown into a respected industry leader.
                </p>
                <p>
                    Our journey has been marked by continuous innovation, strategic partnerships with global brands, and an unwavering focus on meeting our customers' evolving needs. Today, we serve as a one-stop destination for industrial procurement.
                </p>
            </div>
            <div class="two-column-image">
                <div style="font-size: 80px; color: #0015d1;">📦</div>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="values-grid">
            <div class="value-card">
                <h4>Our Mission</h4>
                <p>
                    To provide superior industrial products and services that empower businesses to operate efficiently and safely. We strive to be the most reliable partner in industrial procurement.
                </p>
            </div>
            <div class="value-card">
                <h4>Our Vision</h4>
                <p>
                    To be the leading industrial solutions provider recognized for innovation, quality, and exceptional customer service across Asia and beyond.
                </p>
            </div>
            <div class="value-card">
                <h4>Our Values</h4>
                <p>
                    Integrity, quality, innovation, reliability, and customer-centricity are the core values that guide every decision we make and shape our corporate culture.
                </p>
            </div>
        </div>

        <!-- Core Values Section -->
        <div class="about-section" style="margin-top: 60px;">
            <h2>Why Choose Us?</h2>
            <div class="values-grid">
                <div class="value-card">
                    <h4>Premium Quality Products</h4>
                    <p>We source only the highest quality products from trusted global manufacturers and suppliers.</p>
                </div>
                <div class="value-card">
                    <h4>Expert Support</h4>
                    <p>Our knowledgeable team provides expert guidance and technical support to ensure optimal solutions.</p>
                </div>
                <div class="value-card">
                    <h4>Competitive Pricing</h4>
                    <p>We offer competitive pricing without compromising on quality or service excellence.</p>
                </div>
                <div class="value-card">
                    <h4>Fast Delivery</h4>
                    <p>Our efficient logistics network ensures quick and reliable delivery of your orders.</p>
                </div>
                <div class="value-card">
                    <h4>Extensive Inventory</h4>
                    <p>We maintain a comprehensive inventory of products across multiple industries and sectors.</p>
                </div>
                <div class="value-card">
                    <h4>Long-term Partnerships</h4>
                    <p>We focus on building lasting relationships with our customers through trust and reliability.</p>
                </div>
            </div>
        </div>

        <!-- Leadership Team -->
        <div class="about-section" style="margin-top: 60px;">
            <h2>Our Leadership</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-avatar">👔</div>
                    <div class="team-info">
                        <div class="team-name">John Anderson</div>
                        <div class="team-position">Founder & CEO</div>
                        <div class="team-bio">Visionary leader with 25+ years in industrial distribution.</div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-avatar">👩‍💼</div>
                    <div class="team-info">
                        <div class="team-name">Maria Santos</div>
                        <div class="team-position">Operations Manager</div>
                        <div class="team-bio">Expert in supply chain management and logistics optimization.</div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-avatar">👨‍💼</div>
                    <div class="team-info">
                        <div class="team-name">David Chen</div>
                        <div class="team-position">Sales Director</div>
                        <div class="team-bio">Dedicated to building strong customer relationships and partnerships.</div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-avatar">👩‍💻</div>
                    <div class="team-info">
                        <div class="team-name">Sarah Johnson</div>
                        <div class="team-position">Customer Service Lead</div>
                        <div class="team-bio">Committed to delivering exceptional support and solutions.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Milestones -->
        <div class="about-section" style="margin-top: 60px;">
            <h2>Our Journey</h2>
            <div class="timeline">
                <div style="position: relative; padding-bottom: 40px;">
                    <div class="timeline-dot" style="margin-top: 0;"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2010</div>
                        <div class="timeline-description">ANDISON INDUSTRIAL was founded with a focus on quality and customer service.</div>
                    </div>
                </div>
                <div style="position: relative; padding-bottom: 40px; margin-left: 40px;">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2013</div>
                        <div class="timeline-description">Expanded operations and opened our first regional distribution center.</div>
                    </div>
                </div>
                <div style="position: relative; padding-bottom: 40px; margin-left: 40px;">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2016</div>
                        <div class="timeline-description">Established strategic partnerships with major international brands.</div>
                    </div>
                </div>
                <div style="position: relative; padding-bottom: 40px; margin-left: 40px;">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2019</div>
                        <div class="timeline-description">Launched our digital platform for enhanced customer convenience.</div>
                    </div>
                </div>
                <div style="position: relative; padding-bottom: 40px; margin-left: 40px;">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-description">Achieved record growth and expanded to serve 50+ countries.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-copyright">
                <p>&copy; 2023 <?php echo $company_name; ?>. All rights reserved.</p>
            </div>
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#sitemap">Sitemap</a>
            </div>
        </div>
    </footer>

    <script>
        // Manage aria states for contact dropdown (improves accessibility)
        (function(){
            var dropdowns = document.querySelectorAll('.contact-dropdown');
            dropdowns.forEach(function(dd){
                var pop = dd.querySelector('.contact-popover');
                var link = dd.querySelector('.contact-link');
                dd.addEventListener('keydown', function(e){
                    if(e.key === 'Escape') { link.blur(); pop.setAttribute('aria-hidden','true'); }
                });
                dd.addEventListener('focusin', function(){ pop.setAttribute('aria-hidden','false'); dd.setAttribute('aria-expanded','true'); });
                dd.addEventListener('focusout', function(){ setTimeout(function(){ if(!dd.contains(document.activeElement)){ pop.setAttribute('aria-hidden','true'); dd.setAttribute('aria-expanded','false'); } }, 10); });
                dd.addEventListener('mouseenter', function(){ 
                    if(dd.classList.contains('closed')) return;
                    pop.setAttribute('aria-hidden','false'); dd.setAttribute('aria-expanded','true'); 
                });
                dd.addEventListener('mouseleave', function(){ pop.setAttribute('aria-hidden','true'); dd.setAttribute('aria-expanded','false'); dd.classList.remove('closed'); });

                var closeBtn = dd.querySelector('.contact-close');
                if(closeBtn){
                    closeBtn.addEventListener('click', function(e){
                        e.stopPropagation();
                        e.preventDefault();
                        pop.setAttribute('aria-hidden','true');
                        dd.setAttribute('aria-expanded','false');
                        dd.classList.add('closed');
                        document.activeElement.blur();
                    });
                }
            });
        })();
    </script>
</body>
</html>    