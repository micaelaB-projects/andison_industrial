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

        nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
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
            grid-template-columns: repeat(4, 1fr);
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
        }

        .brand-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .brand-logo {
            width: 100%;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            background: #f8f8f8;
            border-radius: 4px;
            padding: 10px;
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
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .brand-description {
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
            font-size: 13px;
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
        }
    </style>
</head>
<body>
    <?php
        $company_name = "ANDISION INDUSTRIAL";
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
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="brands.php" class="active">Brands</a></li>
                    <li><a href="industries.php">Industries</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <h1 class="page-title">Our Trusted Brands & Partners</h1>
        
        <div class="brands-grid">
            <!-- Row 1 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="color: #0066cc; font-size: 16px;">Panasonic</div>
                </div>
                <div class="brand-name">Panasonic Connect</div>
                <div class="brand-description">Arc Welding Robot & Machine</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="color: #0066cc; font-size: 24px; font-weight: bold;">K</div>
                </div>
                <div class="brand-name">Kobelco</div>
                <div class="brand-description">Welding Electrodes & Filler Wires</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Metrode</div>
                </div>
                <div class="brand-name">Metrode</div>
                <div class="brand-description">Welding Electrodes & Filler Wires</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">DryRod. II</div>
                </div>
                <div class="brand-name">DryRod. II</div>
                <div class="brand-description">Welding Electrode Ovens</div>
            </div>

            <!-- Row 2 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Weldcraft</div>
                </div>
                <div class="brand-name">Weldcraft</div>
                <div class="brand-description">Tig Torch & Accessories</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Truweld</div>
                </div>
                <div class="brand-name">Truweld</div>
                <div class="brand-description">Welding Accessories & Consumables</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Arcair</div>
                </div>
                <div class="brand-name">Arcair</div>
                <div class="brand-description">Gouging Torch</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Magnaflux</div>
                </div>
                <div class="brand-name">Magnaflux</div>
                <div class="brand-description">Dye Penetrants & Inspection</div>
            </div>

            <!-- Row 3 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Tempiletik</div>
                </div>
                <div class="brand-name">Tempiletik</div>
                <div class="brand-description">Temperature Indicating Pens</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Tanaka</div>
                </div>
                <div class="brand-name">Tanaka</div>
                <div class="brand-description">Gas Cutting Equipment</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 28px; font-weight: bold;">C</div>
                </div>
                <div class="brand-name">Chiyoda</div>
                <div class="brand-description">Gas Saving Regulator</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Yutaka</div>
                </div>
                <div class="brand-name">Yutaka</div>
                <div class="brand-description">Welding Gun, Torch</div>
            </div>

            <!-- Row 4 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Hard Workers</div>
                </div>
                <div class="brand-name">Hard Workers</div>
                <div class="brand-description">MIG Welding Wire</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Sayer</div>
                </div>
                <div class="brand-name">Sayer</div>
                <div class="brand-description">Stud Welding Machine</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Aquasoll</div>
                </div>
                <div class="brand-name">Aquasoll</div>
                <div class="brand-description">Water Soluble Purge Paper & Tape</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 24px; font-weight: bold;">SK</div>
                </div>
                <div class="brand-name">SK</div>
                <div class="brand-description">Measuring Gauge</div>
            </div>

            <!-- Row 5 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Coppus</div>
                </div>
                <div class="brand-name">Coppus</div>
                <div class="brand-description">Portable Ventilators</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 20px; font-weight: bold;">GWI</div>
                </div>
                <div class="brand-name">GWI Technologies</div>
                <div class="brand-description">Portable Gas Detector</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text" style="font-size: 20px; font-weight: bold;">RAC</div>
                </div>
                <div class="brand-name">RAC Systems</div>
                <div class="brand-description">Portable Gas Monitors</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Weldas</div>
                </div>
                <div class="brand-name">Weldas</div>
                <div class="brand-description">Industrial Hand Protection</div>
            </div>

            <!-- Row 6 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Uvex</div>
                </div>
                <div class="brand-name">Uvex</div>
                <div class="brand-description">Personal Protective Equipment</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Aces</div>
                </div>
                <div class="brand-name">Aces</div>
                <div class="brand-description">Personal Protection</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Microgard</div>
                </div>
                <div class="brand-name">Microgard</div>
                <div class="brand-description">Chemical Protective Clothing</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Ansell</div>
                </div>
                <div class="brand-name">Ansell</div>
                <div class="brand-description">Industrial Protection Gloves</div>
            </div>

            <!-- Row 7 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Alfra</div>
                </div>
                <div class="brand-name">Alfra</div>
                <div class="brand-description">Magnet Drilling Machine, Deburring Machine</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Bosch</div>
                </div>
                <div class="brand-name">Bosch</div>
                <div class="brand-description">High Performance Power Tools</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Makita</div>
                </div>
                <div class="brand-name">Makita</div>
                <div class="brand-description">Power Tools</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Weller</div>
                </div>
                <div class="brand-name">Weller</div>
                <div class="brand-description">Industrial Wire Brushes</div>
            </div>

            <!-- Row 8 -->
            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Garryson</div>
                </div>
                <div class="brand-name">Garryson</div>
                <div class="brand-description">Tungsten Carbide Burrs</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Spillfyter</div>
                </div>
                <div class="brand-name">Spillfyter</div>
                <div class="brand-description">Oil Absorbent Pads</div>
            </div>

            <div class="brand-card">
                <div class="brand-logo">
                    <div class="brand-logo-text">Dala</div>
                </div>
                <div class="brand-name">Dala</div>
                <div class="brand-description">Industrial Paint Marker</div>
            </div>

            <div class="brand-card">
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
