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
        background: linear-gradient(90deg, #2a00d7, #3a00ff);
        color: white;
    }

    .header-top {
        display: flex;
        align-items: center;
        gap: 25px;
        max-width: 1400px;
        margin: 0 auto;
        padding: 16px 24px;
    }

    .logo {
        background: white;
        color: #2a00d7;
        font-weight: 800;
        padding: 10px 18px;
        border-radius: 6px;
        font-size: 16px;
        letter-spacing: 0.5px;
    }

    /* SEARCH BAR */
    .search-bar {
        flex: 1;
        max-width: 600px;
        display: flex;
        align-items: center;
        background: #f3f3f8;
        border-radius: 30px;
        padding: 6px 16px;
    }

    .search-bar input {
        background: transparent;
        border: none;
        outline: none;
        flex: 1;
        font-size: 14px;
    }

    .search-icon {
        font-size: 16px;
        color: #666;
    }

    /* RIGHT ACTIONS */
    .header-right {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .inquiry-btn {
        background: #00e3a5;
        color: #003b2a;
        font-weight: 700;
        border-radius: 24px;
        padding: 10px 22px;
        font-size: 13px;
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
          }

          .nav-container {
              max-width: 1400px;
              margin: 0 auto;
              padding: 0 20px;
              display: flex;
              align-items: center;
              min-height: 52px;
              gap: 18px;
              justify-content: flex-start;
              padding-left: 200px; /* space for the left Browse toggle */
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

          /* Browse Products Dropdown */

          .browse-products-dropdown {
              position: absolute;
              top: calc(100% + 12px);
              left: 0;
              background: white;
              min-width: 1150px;
              max-width: 1500px;
              box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
              border-radius: 8px;
              padding: 40px;
              opacity: 0;
              visibility: hidden;
              pointer-events: none;
              transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
              z-index: 1000;
              margin-top: 10px;
              transform: translateY(10px);
          }

          .browse-products-wrapper:hover .browse-products-dropdown,
          .browse-products-dropdown:hover {
              opacity: 1;
              visibility: visible;
              pointer-events: auto;
              transform: translateY(0);
          }

          .browse-products-dropdown::before {
              content: '';
              position: absolute;
              bottom: 100%;
              left: 20px;
              border: 8px solid transparent;
              border-bottom-color: white;
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
              grid-template-columns: repeat(6, 1fr);
              row-gap: 12px;        
              column-gap: 30px;      /* pagitan bawat column */
              margin-top: 28px;
          }

          /* BRAND ITEM TEXT */
          .brand-item {
              font-size: 14px;
              font-weight: 400;
              line-height: 1.6;      /* controlled height */
              padding: 6px 8px;
              white-space: normal;   /* ⬅️ ALLOW WRAP */
              border-radius: 4px;
              transition: background 0.2s ease;
              cursor: pointer;
              color: #666;
              max-width: 100%;
              word-break: break-word;
          }

          .brand-item:hover {
              background: #e0f0f5;
              color: #333;
          }


          /* Main Content */
          .main-content {
              max-width: 1400px;
              margin: 0 auto;
              padding: 60px 20px;
          }

          .page-title {
              text-align: left;
              font-size: 42px;
              font-weight: bold;
              color: #333;
              margin-bottom: 50px;
          }

          /* Content Layout with Sidebar */
          .content-wrapper {
              display: flex;
              gap: 40px;
              align-items: flex-start;
          }

          /* Brand List Sidebar */
          .brand-sidebar {
              flex: 0 0 200px;
              background: #f8f9fa;
              padding: 20px;
              border-radius: 8px;
              max-height: 600px;
              overflow-y: auto;
              position: sticky;
              top: 20px;
          }

          .brand-sidebar h3 {
              font-size: 16px;
              font-weight: bold;
              color: #333;
              margin-bottom: 15px;
              padding-bottom: 10px;
              border-bottom: 2px solid #0015d1;
          }

          .brand-sidebar-list {
              list-style: none;
              padding: 0;
              margin: 0;
          }

          .brand-sidebar-list li {
              margin-bottom: 8px;
          }

          .brand-sidebar-list a {
              color: #333;
              text-decoration: none;
              font-size: 14px;
              font-weight: 500;
              display: block;
              padding: 6px 8px;
              border-radius: 4px;
              transition: background 0.2s ease;
          }

          .brand-sidebar-list a:hover {
              background: #e0f0f5;
              color: #333;
          }

          /* Brands Grid */
          .brands-grid-wrapper {
              flex: 1;
          }

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
              transition: transform 0.3s, box-shadow 0.3s, z-index 0s;
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: center;
              position: relative;
              cursor: pointer;
              z-index: 1;
          }

          .brand-card:hover {
              transform: translateY(-5px);
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
              z-index: 1000;
          }

          .brand-card::before {
              content: attr(data-brand-name) '\A' attr(data-brand-description);
              position: absolute;
              bottom: 100%;
              left: 50%;
              transform: translateX(-50%) translateY(-8px);
              background: #0015d1;
              color: white;
              padding: 12px 20px;
              border-radius: 6px;
              font-size: 13px;
              font-weight: 600;
              white-space: pre;
              text-align: center;
              opacity: 0;
              pointer-events: none;
              transition: opacity 0.3s ease, transform 0.3s ease;
              z-index: 1001;
              margin-bottom: 8px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
              line-height: 1.5;
              max-width: 300px;
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
              z-index: 1001;
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

          /* Contact Section */
          .contact-section {
              background: linear-gradient(135deg, #e0f7f4 0%, #d0f0ec 100%);
              padding: 60px 20px;
              margin-top: 60px;
          }

          .contact-container {
              max-width: 1200px;
              margin: 0 auto;
          }

          .contact-section h2 {
              text-align: center;
              font-size: 36px;
              font-weight: bold;
              color: #333;
              margin-bottom: 40px;
          }

          .contact-grid {
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
              gap: 30px;
              margin-top: 30px;
          }

          .contact-item {
              background: white;
              padding: 30px;
              border-radius: 8px;
              box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
              text-align: center;
              transition: transform 0.3s, box-shadow 0.3s;
          }

          .contact-item:hover {
              transform: translateY(-5px);
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
          }

          .contact-icon {
              font-size: 40px;
              margin-bottom: 15px;
          }

          .contact-item h3 {
              font-size: 20px;
              font-weight: bold;
              color: #333;
              margin-bottom: 15px;
          }

          .contact-item a {
              color: #0015d1;
              text-decoration: none;
              font-size: 16px;
              font-weight: 600;
              transition: color 0.3s;
          }

          .contact-item a:hover {
              color: #00d4aa;
              text-decoration: underline;
          }

          .contact-item p {
              color: #666;
              font-size: 16px;
              margin: 0;
          }

          /* Responsive */
          @media (max-width: 1200px) {
              .brands-grid {
                  grid-template-columns: repeat(3, 1fr);
              }

              .content-wrapper {
                  flex-direction: column;
              }

              .brand-sidebar {
                  flex: 1;
                  max-height: none;
                  position: static;
                  width: 100%;
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

              .contact-section h2 {
                  font-size: 28px;
              }

              .contact-grid {
                  grid-template-columns: 1fr;
                  gap: 20px;
              }

              .nav-container {
                  justify-content: space-between;
                  padding-left: 20px;
              }

              nav ul {
                  position: static;
                  transform: none;
                  left: auto;
                  margin: 8px auto 0;
                  justify-content: center;
                  flex-wrap: wrap;
                  gap: 15px;
              }

              .menu-toggle {
                  position: static;
                  transform: none;
                  left: auto;
                  top: auto;
                  padding: 6px 10px;
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
          
          // Contact information
          $phone = "+1(234) 567 8900";
          $phone2 = "+1(234) 567 8900";
          $phone3 = "+1(639) 977 803 7398";
          $email = "info@andison-industrial.com";
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
                  <div class="browse-products-wrapper">
                      <button class="menu-toggle" id="browseToggle">
                          <span class="hamburger">☰</span>
                          <span>BROWSE PRODUCTS</span>
                      </button>
                      <div class="browse-products-dropdown">
                          <div class="dropdown-title">Our Trusted Brands & Partners</div>
                          <div class="dropdown-content">
                              <div class="brands-list">
                                  <!-- Column 1 -->
                                  <div class="brand-item">ACES</div>
                                  <div class="brand-item">CHIYODA</div>
                                  <div class="brand-item">MAGNAFLUX</div>
                                  <div class="brand-item">SOYER</div>
                                  <div class="brand-item">WELDCRAFT</div>
                                  
                                  <!-- Column 2 -->
                                  <div class="brand-item">ALFRA</div>
                                  <div class="brand-item">COPPUS</div>
                                  <div class="brand-item">MAKITA</div>
                                  <div class="brand-item">SPILFYTER</div>
                                  <div class="brand-item">WEILER</div>
                                  
                                  <!-- Column 3 -->
                                  <div class="brand-item">ANSELL</div>
                                  <div class="brand-item">DALO</div>
                                  <div class="brand-item">METRODE</div>
                                  <div class="brand-item">TANAKA</div>
                                  <div class="brand-item">YUTAKA</div>
                                  
                                  <!-- Column 4 -->
                                  <div class="brand-item">AQUASOL</div>
                                  <div class="brand-item">DRYROD II</div>
                                  <div class="brand-item">MICROGUARD</div>
                                  <div class="brand-item">TEMPILSTICK</div>
                                  <div class="brand-item">TRUWELD</div>
                                  
                                  <!-- Column 5 -->
                                  <div class="brand-item">ARCAIR</div>
                                  <div class="brand-item">GARRYSON</div>
                                  <div class="brand-item">MOTOLITE</div>
                                  <div class="brand-item">UVEX</div>
                                  <div class="brand-item">WELDAS</div>
                                  
                                  <!-- Column 6 -->
                                  <div class="brand-item">BOSCH</div>
                                  <div class="brand-item">HARD WORKER</div>
                                  <div class="brand-item">PANASONIC CONNECT</div>
                                  <div class="brand-item">BW TECHNOLOGIES</div>
                                  <div class="brand-item">KOBELCO</div>
                                  <div class="brand-item">RAE SYSTEMS</div>
                              </div>
                          </div>
                      </div>
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
          
          

              <!-- Brands Grid -->
              <div class="brands-grid-wrapper">
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
                      // ignore hover if user explicitly closed; mouseleave will clear
                      if(dd.classList.contains('closed')) return;
                      pop.setAttribute('aria-hidden','false'); dd.setAttribute('aria-expanded','true'); 
                  });
                  dd.addEventListener('mouseleave', function(){ pop.setAttribute('aria-hidden','true'); dd.setAttribute('aria-expanded','false'); dd.classList.remove('closed'); });

                  // close button behavior
                  var closeBtn = dd.querySelector('.contact-close');
                  if(closeBtn){
                      closeBtn.addEventListener('click', function(e){
                          e.stopPropagation();
                          e.preventDefault();
                          pop.setAttribute('aria-hidden','true');
                          dd.setAttribute('aria-expanded','false');
                          dd.classList.add('closed');
                          // blur everything in the dropdown to remove :focus-within
                          document.activeElement.blur();
                      });
                  }
              });
          })();
      </script>
      <script>
          // Auto-set data-brand-description attribute from .brand-description text
          (function(){
              var brandCards = document.querySelectorAll('.brand-card');
              brandCards.forEach(function(card){
                  var descElement = card.querySelector('.brand-description');
                  if(descElement){
                      card.setAttribute('data-brand-description', descElement.textContent.trim());
                  }
              });
          })();
      </script>
  </body>
  </html>
