<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Trusted Brands & Partners - ANDISION INDUSTRIAL</title>
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
            background: #0015d1;
            color: white;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 15px 20px;
        }

        .logo {
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .search-bar {
            flex: 1;
            max-width: 500px;
            margin: 0 30px;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 4px;
            padding: 0 10px;
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .search-icon {
            color: #666;
            font-size: 18px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .inquiry-btn {
            background: #00d4aa;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s;
        }

        .inquiry-btn:hover {
            background: #00b88a;
        }

        .contact-link {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .contact-link:hover {
            color: #00d4aa;
        }

        /* Navigation */
        nav {
            background: #000d8a;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
        }

        .menu-toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-size: 14px;
            padding: 12px 0;
            margin-right: 30px;
            cursor: pointer;
        }

        .hamburger {
            font-size: 20px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav li {
            position: relative;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            padding: 12px 0;
            display: block;
            transition: color 0.3s;
            position: relative;
        }

        nav a:hover {
            color: #00d4aa;
        }

        nav a.active {
            border-bottom: 2px solid #00d4aa;
        }

        /* Navigation Dropdown/Preview */
        .nav-dropdown {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            background: white;
            min-width: 400px;
            max-width: 700px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            padding: 35px;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
            z-index: 1000;
            margin-top: 10px;
        }

        nav li:nth-child(3) .nav-dropdown {
            max-width: 1500px;
            min-width: 1150px;
            padding: 40px;
        }

        nav li:hover .nav-dropdown {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateX(-50%) translateY(0);
        }

        .nav-dropdown::before {
            content: '';
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: 8px solid transparent;
            border-bottom-color: white;
        }

        .dropdown-title {
            font-size: 24px;
            font-weight: bold;
            color: #0015d1;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .dropdown-content {
            color: #666;
            line-height: 1.8;
            font-size: 15px;
        }

        .dropdown-content p {
            margin-bottom: 10px;
        }

        .dropdown-link {
            display: inline-block;
            margin-top: 20px;
            color: #0015d1;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: color 0.3s;
        }

        .dropdown-link:hover {
            color: #00d4aa;
        }

       /* BRANDS DROPDOWN – FINAL SPACING FIX */
        .brands-list {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            row-gap: 28px;          /* ⬅️ laki ng pagitan bawat row */
            column-gap: 36px;      /* pagitan bawat column */
            margin-top: 28px;
        }

        /* BRAND ITEM TEXT */
        .brand-item {
            font-size: 15px;
            font-weight: 500;
            line-height: 1.4;      /* controlled height */
            padding: 2px 0;
            white-space: normal;   /* ⬅️ ALLOW WRAP */
        }

        /* PARA SA MAHABANG BRAND NAMES */
        .brand-item {
            max-width: 100%;
            word-break: break-word;
        }


        /* Main Content */
        .main-content {
            max-width: 1400px;
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

        /* Brands Grid */
        .brands-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 25px;
        }

        .brand-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .brand-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .brand-card::before {
            content: attr(data-brand-name);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(-8px);
            background: #0015d1;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease, transform 0.3s ease;
            z-index: 100;
            margin-bottom: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .brand-card::after {
            content: '';
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(-3px);
            border: 6px solid transparent;
            border-top-color: #0015d1;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease, transform 0.3s ease;
            z-index: 100;
        }

        .brand-card:hover::before {
            opacity: 1;
            transform: translateX(-50%) translateY(-8px);
        }

        .brand-card:hover::after {
            opacity: 1;
            transform: translateX(-50%) translateY(-3px);
        }

        .brand-logo {
            width: 100%;
            height: 80px;   /* smaller */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            background: #f8f8f8;
            border-radius: 4px;
            padding: 8px;
        }

        .brand-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .brand-logo-text {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .brand-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 4px;
        }

        .brand-description {
            font-size: 12px;
            color: #666;
            line-height: 1.3;
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
            color: #00d4aa;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .brands-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 900px) {
            .brands-grid {
                grid-template-columns: repeat(2, 1fr);
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
            .brands-grid {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 32px;
            }

            nav ul {
                flex-wrap: wrap;
                gap: 15px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }

            .brands-list {
                grid-template-columns: repeat(3, 1fr);
            }

            nav li:nth-child(3) .nav-dropdown {
                max-width: 100%;
                min-width: 300px;
            }
        }
    </style>
</head>
<body>
    <?php
        $company_name = "ANDISON INDUSTRIAL";
    ?>

    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="logo"><?php echo $company_name; ?></div>
            <div class="search-bar">
                <span class="search-icon">🔍</span>
                <input type="text" placeholder="Search for products">
            </div>
            <div class="header-right">
                <button class="inquiry-btn">INQUIRY LIST</button>
                <a href="#contact" class="contact-link">Contact Us</a>
            </div>
        </div>

        <!-- Navigation -->
        <nav>
            <div class="nav-container">
                <div class="menu-toggle">
                    <span class="hamburger">☰</span>
                    <span>OUR PRODUCTS</span>
                </div>
                <ul>
                    <li>
                        <a href="home.php">Home</a>
                        <div class="nav-dropdown">
                            <div class="dropdown-title">Home</div>
                            <div class="dropdown-content">
                                <p>Welcome to ANDISION INDUSTRIAL. We provide innovative industrial solutions and cutting-edge products for your business needs.</p>
                                <p>Explore our wide range of products, trusted brands, and professional services.</p>
                                <a href="home.php" class="dropdown-link">Visit Home Page →</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                        <div class="nav-dropdown">
                            <div class="dropdown-title">About Us</div>
                            <div class="dropdown-content">
                                <p>ANDISION INDUSTRIAL is a leading provider of industrial solutions, specializing in welding equipment, power tools, safety equipment, and more.</p>
                                <p>With years of experience, we are committed to delivering quality products and exceptional service to our clients.</p>
                                <a href="about.php" class="dropdown-link">Learn More →</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="brands.php" class="active">Brands</a>
                        <div class="nav-dropdown">
                            <div class="dropdown-title">Our Trusted Brands & Partners</div>
                            <div class="dropdown-content">
                                <div class="brands-list">
                                    <div class="brand-item">ACES</div>
                                    <div class="brand-item">ALFRA</div>
                                    <div class="brand-item">ANSELL</div>
                                    <div class="brand-item">AQUASOL</div>
                                    <div class="brand-item">ARCAIR</div>
                                    <div class="brand-item">BOSCH</div>
                                    <div class="brand-item">BW TECHNOLOGIES</div>
                                    <div class="brand-item">CHIYODA</div>
                                    <div class="brand-item">COPPUS</div>
                                    <div class="brand-item">DALO</div>
                                    <div class="brand-item">DRYROD II</div>
                                    <div class="brand-item">GARRYSON</div>
                                    <div class="brand-item">HARD WORKER</div>
                                    <div class="brand-item">KOBELCO</div>
                                    <div class="brand-item">MAGNAFLUX</div>
                                    <div class="brand-item">MAKITA</div>
                                    <div class="brand-item">METRODE</div>
                                    <div class="brand-item">MICROGUARD</div>
                                    <div class="brand-item">MOTOLITE</div>
                                    <div class="brand-item">PANASONIC CONNECT</div>
                                    <div class="brand-item">RAE SYSTEMS</div>
                                    <div class="brand-item">SOYER</div>
                                    <div class="brand-item">SPILFYTER</div>
                                    <div class="brand-item">TANAKA</div>
                                    <div class="brand-item">TEMPILSTICK</div>
                                    <div class="brand-item">TRUWELD</div>
                                    <div class="brand-item">UVEX</div>
                                    <div class="brand-item">WELDAS</div>
                                    <div class="brand-item">WELDCRAFT</div>
                                    <div class="brand-item">WEILER</div>
                                    <div class="brand-item">YUTAKA</div>
                                </div>
                               
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="industries.php">Industries</a>
                        <div class="nav-dropdown">
                            <div class="dropdown-title">Industries We Serve</div>
                            <div class="dropdown-content">
                                <p>We serve various industries including manufacturing, construction, automotive, shipbuilding, and more.</p>
                                <p>Our products and solutions are designed to meet the specific needs of each industry sector.</p>
                                <a href="industries.php" class="dropdown-link">Explore Industries →</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                        <div class="nav-dropdown">
                            <div class="dropdown-title">Our Services</div>
                            <div class="dropdown-content">
                                <p>We offer comprehensive services including product consultation, technical support, training, and after-sales service.</p>
                                <p>Our team of experts is ready to assist you with your industrial needs.</p>
                                <a href="services.php" class="dropdown-link">View Services →</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                        <div class="nav-dropdown">
                            <div class="dropdown-title">Get In Touch</div>
                            <div class="dropdown-content">
                                <p>We reply in less than 24 hours, Mondays to Saturdays.</p>
                                <p><strong>Phone:</strong> (+632) 8584-4958 | (+6343) 425-4126 | (+63) 977 803 7398</p>
                                <p><strong>Email:</strong> ask_us@andisonindustrial.com</p>
                                <a href="contact.php" class="dropdown-link">Contact Us →</a>
                            </div>
                        </div>
                    </li>
            </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="page-title">Our Trusted Brands & Partners</h1>
        
        <div class="brands-grid">
            <!-- Row 1 -->
            <div class="brand-card" data-brand-name="Panasonic Connect">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="color: #0066cc; font-size: 16px;">Panasonic</div>
                </div>
                <div class="brand-name">Panasonic Connect</div>
                <div class="brand-description">Arc Welding Robot & Machine</div>
            </div>

            <div class="brand-card" data-brand-name="Kobelco">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="color: #0066cc; font-size: 24px; font-weight: bold;">K</div>
                </div>
                <div class="brand-name">Kobelco</div>
                <div class="brand-description">Welding Electrodes & Filler Wires</div>
            </div>

            <div class="brand-card" data-brand-name="Metrode">
                <div class="brand-logo">
                    <div class="brand-logo-text">Metrode</div>
                </div>
                <div class="brand-name">Metrode</div>
                <div class="brand-description">Welding Electrodes & Filler Wires</div>
            </div>

            <div class="brand-card" data-brand-name="DryRod. II">
                <div class="brand-logo">
                    <div class="brand-logo-text">DryRod. II</div>
                </div>
                <div class="brand-name">DryRod. II</div>
                <div class="brand-description">Welding Electrode Ovens</div>
            </div>

            <!-- Row 2 -->
            <div class="brand-card" data-brand-name="Weldcraft">
                <div class="brand-logo">
                    <div class="brand-logo-text">Weldcraft</div>
                </div>
                <div class="brand-name">Weldcraft</div>
                <div class="brand-description">Tig Torch & Accessories</div>
            </div>

            <div class="brand-card" data-brand-name="Truweld">
                <div class="brand-logo">
                    <div class="brand-logo-text">Truweld</div>
                </div>
                <div class="brand-name">Truweld</div>
                <div class="brand-description">Welding Accessories & Consumables</div>
            </div>

            <div class="brand-card" data-brand-name="Arcair">
                <div class="brand-logo">
                    <div class="brand-logo-text">Arcair</div>
                </div>
                <div class="brand-name">Arcair</div>
                <div class="brand-description">Gouging Torch</div>
            </div>

            <div class="brand-card" data-brand-name="Magnaflux">
                <div class="brand-logo">
                    <div class="brand-logo-text">Magnaflux</div>
                </div>
                <div class="brand-name">Magnaflux</div>
                <div class="brand-description">Dye Penetrants & Inspection</div>
            </div>

            <!-- Row 3 -->
            <div class="brand-card" data-brand-name="Tempiletik">
                <div class="brand-logo">
                    <div class="brand-logo-text">Tempiletik</div>
                </div>
                <div class="brand-name">Tempiletik</div>
                <div class="brand-description">Temperature Indicating Pens</div>
            </div>

            <div class="brand-card" data-brand-name="Tanaka">
                <div class="brand-logo">
                    <div class="brand-logo-text">Tanaka</div>
                </div>
                <div class="brand-name">Tanaka</div>
                <div class="brand-description">Gas Cutting Equipment</div>
            </div>

            <div class="brand-card" data-brand-name="Chiyoda">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 28px; font-weight: bold;">C</div>
                </div>
                <div class="brand-name">Chiyoda</div>
                <div class="brand-description">Gas Saving Regulator</div>
            </div>

            <div class="brand-card" data-brand-name="Yutaka">
                <div class="brand-logo">
                    <div class="brand-logo-text">Yutaka</div>
                </div>
                <div class="brand-name">Yutaka</div>
                <div class="brand-description">Welding Gun, Torch</div>
            </div>

            <!-- Row 4 -->
            <div class="brand-card" data-brand-name="Hard Workers">
                <div class="brand-logo">
                    <div class="brand-logo-text">Hard Workers</div>
                </div>
                <div class="brand-name">Hard Workers</div>
                <div class="brand-description">MIG Welding Wire</div>
            </div>

            <div class="brand-card" data-brand-name="Soyer">
                <div class="brand-logo">
                    <div class="brand-logo-text">Soyer</div>
                </div>
                <div class="brand-name">Soyer</div>
                <div class="brand-description">Stud Welding Machine</div>
            </div>

            <div class="brand-card" data-brand-name="Aquasoll">
                <div class="brand-logo">
                    <div class="brand-logo-text">Aquasoll</div>
                </div>
                <div class="brand-name">Aquasoll</div>
                <div class="brand-description">Water Soluble Purge Paper & Tape</div>
            </div>

            <div class="brand-card" data-brand-name="SK">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 24px; font-weight: bold;">SK</div>
                </div>
                <div class="brand-name">SK</div>
                <div class="brand-description">Measuring Gauge</div>
            </div>

            <!-- Row 5 -->
            <div class="brand-card" data-brand-name="Coppus">
                <div class="brand-logo">
                    <div class="brand-logo-text">Coppus</div>
                </div>
                <div class="brand-name">Coppus</div>
                <div class="brand-description">Portable Ventilators</div>
            </div>

            <div class="brand-card" data-brand-name="GWI Technologies">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 20px; font-weight: bold;">GWI</div>
                </div>
                <div class="brand-name">GWI Technologies</div>
                <div class="brand-description">Portable Gas Detector</div>
            </div>

            <div class="brand-card" data-brand-name="RAC Systems">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 20px; font-weight: bold;">RAC</div>
                </div>
                <div class="brand-name">RAC Systems</div>
                <div class="brand-description">Portable Gas Monitors</div>
            </div>

            <div class="brand-card" data-brand-name="Weldas">
                <div class="brand-logo">
                    <div class="brand-logo-text">Weldas</div>
                </div>
                <div class="brand-name">Weldas</div>
                <div class="brand-description">Industrial Hand Protection</div>
            </div>

            <!-- Row 6 -->
            <div class="brand-card" data-brand-name="Uvex">
                <div class="brand-logo">
                    <div class="brand-logo-text">Uvex</div>
                </div>
                <div class="brand-name">Uvex</div>
                <div class="brand-description">Personal Protective Equipment</div>
            </div>

            <div class="brand-card" data-brand-name="Aces">
                <div class="brand-logo">
                    <div class="brand-logo-text">Aces</div>
                </div>
                <div class="brand-name">Aces</div>
                <div class="brand-description">Personal Protection</div>
            </div>

            <div class="brand-card" data-brand-name="Microgard">
                <div class="brand-logo">
                    <div class="brand-logo-text">Microgard</div>
                </div>
                <div class="brand-name">Microgard</div>
                <div class="brand-description">Chemical Protective Clothing</div>
            </div>

            <div class="brand-card" data-brand-name="Ansell">
                <div class="brand-logo">
                    <div class="brand-logo-text">Ansell</div>
                </div>
                <div class="brand-name">Ansell</div>
                <div class="brand-description">Industrial Protection Gloves</div>
        </div>

            <!-- Row 7 -->
            <div class="brand-card" data-brand-name="Alfra">
                <div class="brand-logo">
                    <div class="brand-logo-text">Alfra</div>
                </div>
                <div class="brand-name">Alfra</div>
                <div class="brand-description">Magnet Drilling Machine, Deburring Machine</div>
            </div>

            <div class="brand-card" data-brand-name="Bosch">
                <div class="brand-logo">
                    <div class="brand-logo-text">Bosch</div>
                    </div>
                <div class="brand-name">Bosch</div>
                <div class="brand-description">High Performance Power Tools</div>
                    </div>

            <div class="brand-card" data-brand-name="Makita">
                <div class="brand-logo">
                    <div class="brand-logo-text">Makita</div>
                </div>
                <div class="brand-name">Makita</div>
                <div class="brand-description">Power Tools</div>
                </div>

            <div class="brand-card" data-brand-name="Weller">
                <div class="brand-logo">
                    <div class="brand-logo-text">Weller</div>
                    </div>
                <div class="brand-name">Weller</div>
                <div class="brand-description">Industrial Wire Brushes</div>
                    </div>

            <!-- Row 8 -->
            <div class="brand-card" data-brand-name="Garryson">
                <div class="brand-logo">
                    <div class="brand-logo-text">Garryson</div>
                </div>
                <div class="brand-name">Garryson</div>
                <div class="brand-description">Tungsten Carbide Burrs</div>
            </div>

            <div class="brand-card" data-brand-name="Spillfyter">
                <div class="brand-logo">
                    <div class="brand-logo-text">Spillfyter</div>
                </div>
                <div class="brand-name">Spillfyter</div>
                <div class="brand-description">Oil Absorbent Pads</div>
        </div>

            <div class="brand-card" data-brand-name="Dala">
                <div class="brand-logo">
                    <div class="brand-logo-text">Dala</div>
                </div>
                <div class="brand-name">Dala</div>
                <div class="brand-description">Industrial Paint Marker</div>
            </div>

            <div class="brand-card" data-brand-name="Motolite">
                <div class="brand-logo">
                    <div class="brand-logo-text">Motolite</div>
                </div>
                <div class="brand-name">Motolite</div>
                <div class="brand-description">Car & Truck Batteries</div>
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
</body>
</html>
