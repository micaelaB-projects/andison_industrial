<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Solutions Inc. - Homepage Redesign</title>
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
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #0015d1 0%, #0011a0 100%);
            color: white;
            padding: 15px 0;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            margin-bottom: 15px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-box {
            background: white;
            color: #0015d1;
            padding: 5px 10px;
            border-radius: 3px;
            font-weight: bold;
        }

        .header-contact {
            display: flex;
            gap: 20px;
            font-size: 13px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .search-bar {
            flex: 1;
            max-width: 400px;
            display: flex;
            gap: 5px;
        }

        .search-bar input {
            flex: 1;
            padding: 8px 12px;
            border: none;
            border-radius: 3px;
        }

        .search-btn {
            background: #00d4aa;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
        }

        .search-btn:hover {
            background: #00b88a;
        }

        /* Navigation */
        nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        nav ul {
            display: flex;
            justify-content: flex-start;
            list-style: none;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav li {
            margin-right: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 10px 0;
            display: block;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #00d4aa;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23888888" width="1200" height="600"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
        }

        .cta-button {
            background: #00d4aa;
            color: white;
            padding: 12px 35px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            background: #00b88a;
        }

        /* Section */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 20px;
        }

        section h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .section-description {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #666;
            line-height: 1.8;
        }

        /* Product Highlights */
        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .product-card {
            background: #f5f5f5;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #888 0%, #666 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
            position: relative;
        }

        .play-btn {
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .play-btn:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        .product-info {
            padding: 20px;
            background: white;
        }

        .product-info h3 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-info p {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
        }

        /* Featured Section */
        .featured-section {
            background: linear-gradient(135deg, #e0f7f4 0%, #d0f0ec 100%);
            padding: 50px 30px;
            border-radius: 8px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        .featured-badge {
            display: inline-block;
            background: #00d4aa;
            color: white;
            padding: 5px 12px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .featured-content h3 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
        }

        .featured-content p {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .featured-btn {
            background: #0015d1;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 3px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .featured-btn:hover {
            background: #0011a0;
        }

        .featured-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #0066cc 0%, #004499 100%);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 60px;
        }

        /* Footer */
        footer {
            background: #0015d1;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
            flex-wrap: wrap;
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

        .footer-copyright {
            font-size: 12px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-top {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
            }

            nav li {
                margin-right: 20px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .featured-section {
                grid-template-columns: 1fr;
            }

            .footer-links {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <?php
        // Set page title
        $page_title = "Home";
        $company_name = "ANDISON INDUSTRIAL";
        
        // Contact information
        $phone = "+1(234) 567 8900";
        $phone2 = "+1(234) 567 8900";
        $email = "info@andison-industrial.com";
    ?>

    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="logo">
                <div class="logo-box"><?php echo $company_name; ?></div>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search products...">
                <button class="search-btn">SEARCH</button>
            </div>
            <div class="header-contact">
                <div class="contact-item">
                    <span>📞</span>
                    <span><?php echo $phone; ?></span>
                </div>
                <div class="contact-item">
                    <span>📧</span>
                    <span><?php echo $email; ?></span>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="brands.php">Brands</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#industries">Industries</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Innovating the Future of Industry</h1>
            <p>Driving progress with cutting-edge industrial solutions and unwavering quality.</p>
            <button class="cta-button">Explore Our Products</button>
        </div>
    </section>

    <!-- Product Highlights & News -->
    <section id="products">
        <div class="container">
            <h2>Product Highlights & News</h2>
            <p class="section-description">
                We will still keep the Youtuube embeded video for product highlights. The video contents will be updated once in a while. 
                Then same as before with News, Events, and Announcements section that can be added.
            </p>

            <div class="highlights-grid">
                <div class="product-card">
                    <div class="product-image">
                        <div class="play-btn">▶</div>
                    </div>
                    <div class="product-info">
                        <h3>Revolutionizing Manufacturing Processes</h3>
                        <p>Discover how our innovative technology is transforming industrial manufacturing.</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image" style="background: linear-gradient(135deg, #004499 0%, #003366 100%);">
                        <div class="play-btn">▶</div>
                    </div>
                    <div class="product-info">
                        <h3>Innovations in Sustainable Industrial Solutions</h3>
                        <p>Learn about our commitment to eco-friendly and sustainable products.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Product -->
    <section>
        <div class="container">
            <div class="featured-section">
                <div class="featured-content">
                    <span class="featured-badge">FEATURED</span>
                    <h3>New Generation Industrial Drills Launched!</h3>
                    <p>Discover our latest advancements in drilling technology offering unparalleled precision and durability for all heavy-duty applications. Explore the future of industrial performance.</p>
                    <button class="featured-btn">Read More</button>
                </div>
                <div class="featured-image">
                    ▶
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
                <a href="#sitemap">Sitemap</a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2026 <?php echo $company_name; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
