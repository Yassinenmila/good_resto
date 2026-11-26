<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Perle de Tanger | Gastronomie & Vue Panoramique</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <style>
        /* ==========================================================================
           1. CSS VARIABLES & RESET
           ========================================================================== */
        :root {
            --bg-dark: #0f1419;
            --bg-card: #182026;
            --bg-card-hover: #1f2a33;
            --primary-amber: #d97706;
            --primary-hover: #b45309;
            --terracotta: #c2410c;
            --gold-accent: #f59e0b;
            --text-light: #f3f4f6;
            --text-muted: #9ca3af;
            --text-dark: #1f2937;
            --border-color: rgba(255, 255, 255, 0.1);
            --font-serif: 'Playfair Display', Georgia, serif;
            --font-sans: 'Inter', system-ui, -apple-system, sans-serif;
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--bg-dark);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ==========================================================================
           2. TYPOGRAPHY & COMMON COMPONENTS
           ========================================================================== */
        h1, h2, h3, h4, .font-serif {
            font-family: var(--font-serif);
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .section-padding {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 3.5rem auto;
        }

        .section-title .badge {
            color: var(--gold-accent);
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 0.75rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 1rem;
        }

        .section-title p {
            color: var(--text-muted);
            font-size: 1.05rem;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.875rem 1.75rem;
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-amber), var(--terracotta));
            color: #fff;
            box-shadow: 0 4px 15px rgba(217, 119, 6, 0.35);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(217, 119, 6, 0.5);
            background: linear-gradient(135deg, #e68208, #d34813);
        }

        .btn-outline {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-light);
            border: 1px solid var(--border-color);
            backdrop-filter: blur(10px);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            color: #fff;
            transform: translateY(-2px);
        }

        /* ==========================================================================
           3. HEADER & NAVIGATION
           ========================================================================== */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 1.25rem 0;
        }

        header.scrolled {
            background-color: rgba(15, 20, 25, 0.95);
            backdrop-filter: blur(12px);
            padding: 0.85rem 0;
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: #fff;
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, var(--gold-accent), var(--terracotta));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-family: var(--font-serif);
            color: #fff;
            font-size: 1.2rem;
            box-shadow: 0 0 10px rgba(245, 158, 11, 0.4);
        }

        .logo-text {
            font-family: var(--font-serif);
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .logo-text span {
            color: var(--gold-accent);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--gold-accent);
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* ==========================================================================
           4. HERO SECTION
           ========================================================================== */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, rgba(15, 20, 25, 0.4), var(--bg-dark)), 
                        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            padding-top: 5rem;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, rgba(15,20,25,0.2) 0%, rgba(15,20,25,0.85) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1.25rem;
            background: rgba(245, 158, 11, 0.15);
            border: 1px solid rgba(245, 158, 11, 0.3);
            border-radius: 9999px;
            color: var(--gold-accent);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            backdrop-filter: blur(8px);
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.15;
            color: #fff;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .hero h1 span {
            background: linear-gradient(135deg, #fbbf24, #f97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            color: #e5e7eb;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.25rem;
            flex-wrap: wrap;
        }

        /* Hero Features Cards */
        .hero-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: rgba(24, 32, 38, 0.65);
            border: 1px solid var(--border-color);
            backdrop-filter: blur(12px);
            padding: 1.5rem;
            border-radius: 16px;
            text-align: left;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            border-color: rgba(245, 158, 11, 0.4);
            background: rgba(24, 32, 38, 0.85);
        }

        .feature-icon {
            font-size: 1.75rem;
            background: rgba(217, 119, 6, 0.15);
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-card h3 {
            font-size: 1.1rem;
            color: #fff;
            margin-bottom: 0.25rem;
        }

        .feature-card p {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin: 0;
        }

        /* ==========================================================================
           5. ABOUT SECTION
           ========================================================================== */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            height: 480px;
            object-fit: cover;
            border-radius: 24px;
            box-shadow: var(--shadow-lg);
        }

        .about-experience-badge {
            position: absolute;
            bottom: -20px;
            right: -20px;
            background: linear-gradient(135deg, var(--bg-card), #26333d);
            border: 1px solid var(--border-color);
            padding: 1.5rem 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow-lg);
            text-align: center;
        }

        .about-experience-badge .number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--gold-accent);
            font-family: var(--font-serif);
            line-height: 1;
        }

        .about-experience-badge .text {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-top: 0.25rem;
        }

        .about-text h3 {
            font-size: 2.2rem;
            line-height: 1.25;
            color: #fff;
            margin-bottom: 1.25rem;
        }

        .about-text p {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
        }

        .highlights-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }

        .highlights-list li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-light);
            font-weight: 500;
        }

        .highlights-list li span {
            color: var(--gold-accent);
            font-weight: bold;
        }

        /* ==========================================================================
           6. MENU PREVIEW SECTION
           ========================================================================== */
        .menu-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .tab-btn {
            background: var(--bg-card);
            color: var(--text-muted);
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            border: 1px solid var(--border-color);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .tab-btn.active, .tab-btn:hover {
            background: var(--primary-amber);
            color: #fff;
            border-color: var(--primary-amber);
            box-shadow: 0 4px 12px rgba(217, 119, 6, 0.3);
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .menu-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            border-color: rgba(245, 158, 11, 0.3);
            box-shadow: var(--shadow-lg);
            background: var(--bg-card-hover);
        }

        .menu-img-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .menu-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .menu-card:hover .menu-img-wrapper img {
            transform: scale(1.08);
        }

        .menu-category-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: rgba(15, 20, 25, 0.85);
            backdrop-filter: blur(8px);
            color: var(--gold-accent);
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            border: 1px solid rgba(245, 158, 11, 0.2);
        }

        .menu-info {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .menu-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 0.5rem;
        }

        .menu-title {
            font-size: 1.2rem;
            color: #fff;
            font-weight: 600;
        }

        .menu-price {
            color: var(--gold-accent);
            font-weight: 700;
            font-size: 1.15rem;
            font-family: var(--font-serif);
            white-space: nowrap;
        }

        .menu-desc {
            color: var(--text-muted);
            font-size: 0.875rem;
            line-height: 1.5;
            margin-top: 0.5rem;
        }

        /* ==========================================================================
           7. BOOKING / RESERVATION SECTION
           ========================================================================== */
        .booking-section {
            background: linear-gradient(to bottom, var(--bg-dark), #141b22, var(--bg-dark));
            position: relative;
        }

        .booking-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 28px;
            padding: 3rem;
            box-shadow: var(--shadow-lg);
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .booking-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gold-accent), var(--terracotta));
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-group label {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-light);
        }

        .form-control {
            background: rgba(15, 20, 25, 0.7);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 0.85rem 1rem;
            color: #fff;
            font-family: var(--font-sans);
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--gold-accent);
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
            background: rgba(15, 20, 25, 0.9);
        }

        select.form-control {
            cursor: pointer;
        }

        select.form-control option {
            background: var(--bg-dark);
            color: #fff;
        }

        /* Success Message Alert */
        .booking-success {
            display: none;
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #10b981;
            padding: 1.25rem;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 500;
        }

        /* ==========================================================================
           8. LOCATION & AMBIANCE SECTION
           ========================================================================== */
        .location-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: stretch;
        }

        .location-info {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 1.25rem;
            margin-bottom: 1.75rem;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            width: 48px;
            height: 48px;
            background: rgba(217, 119, 6, 0.15);
            color: var(--gold-accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .info-text h4 {
            font-size: 1.1rem;
            color: #fff;
            margin-bottom: 0.25rem;
        }

        .info-text p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .map-card {
            border-radius: 24px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            position: relative;
            min-height: 380px;
            background: #202b36;
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            min-height: 380px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(15, 20, 25, 0.6), rgba(15, 20, 25, 0.8)),
                        url('https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?auto=format&fit=crop&w=800&q=80') center/cover;
            text-align: center;
            padding: 2rem;
        }

        .map-placeholder h3 {
            font-size: 1.75rem;
            color: #fff;
            margin-bottom: 0.5rem;
        }

        .map-placeholder p {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
            max-width: 320px;
        }

        /* ==========================================================================
           9. FOOTER
           ========================================================================== */
        footer {
            background-color: #0b0e12;
            border-top: 1px solid var(--border-color);
            padding: 4rem 0 2rem 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 3rem;
            margin-bottom: 3.5rem;
        }

        .footer-brand p {
            color: var(--text-muted);
            margin-top: 1rem;
            font-size: 0.95rem;
            max-width: 320px;
        }

        .footer-column h4 {
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 1.25rem;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--gold-accent);
        }

        .newsletter-form {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .newsletter-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border-color);
            border-radius: 9999px;
            padding: 0.6rem 1rem;
            color: #fff;
            font-size: 0.85rem;
            width: 100%;
        }

        .newsletter-input:focus {
            outline: none;
            border-color: var(--gold-accent);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        /* ==========================================================================
           10. RESPONSIVE DESIGN (MEDIA QUERIES)
           ========================================================================== */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.75rem;
            }

            .hero-features {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .about-grid, .location-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .about-experience-badge {
                right: 10px;
                bottom: 10px;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 75%;
                max-width: 300px;
                background-color: var(--bg-card);
                flex-direction: column;
                justify-content: center;
                gap: 2rem;
                padding: 2rem;
                box-shadow: -5px 0 25px rgba(0,0,0,0.5);
                transition: right 0.4s ease;
            }

            .nav-links.active {
                right: 0;
            }

            .mobile-toggle {
                display: block;
                z-index: 1001;
            }

            .hero h1 {
                font-size: 2.25rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .booking-card {
                padding: 1.75rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: span 1;
            }

            .highlights-list {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- ==========================================
         HEADER / NAVIGATION
         ========================================== -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">P</div>
                <div class="logo-text">La Perle <span>de Tanger</span></div>
            </a>

            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#about" onclick="toggleMenu()">À Propos</a></li>
                    <li><a href="#menu" onclick="toggleMenu()">Notre Menu</a></li>
                    <li><a href="#booking" onclick="toggleMenu()">Réservation</a></li>
                    <li><a href="#location" onclick="toggleMenu()">Contact & Accès</a></li>
                    <li>
                        <a href="#booking" class="btn btn-primary" onclick="toggleMenu()" style="padding: 0.6rem 1.25rem;">
                            Réserver une Table
                        </a>
                    </li>
                </ul>
            </nav>

            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle navigation">
                &#9776;
            </button>
        </div>
    </header>

    <!-- ==========================================
         HERO SECTION
         ========================================== -->
    <section class="hero" id="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span>✨ Gastronomie & Vue sur le Détroit</span>
                </div>
                <h1>Une Expérience Culinaire <span>Inoubliable à Tanger</span></h1>
                <p>
                    Dégustez la finesse de la cuisine marocaine authentique et la fraîcheur des produits de la mer Mediterranean dans un cadre somptueux surplombant l'océan.
                </p>
                <div class="hero-actions">
                    <a href="#booking" class="btn btn-primary">
                        <span>Réserver une Table</span>
                        &rarr;
                    </a>
                    <a href="#menu" class="btn btn-outline">
                        <span>Découvrir le Menu</span>
                    </a>
                </div>

                <!-- Feature Highlights -->
                <div class="hero-features">
                    <div class="feature-card">
                        <div class="feature-icon">🐟</div>
                        <div>
                            <h3>Produits de la Mer</h3>
                            <p>Pêche fraîche du jour au Détroit de Gibraltar.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🌅</div>
                        <div>
                            <h3>Terrasse Panoramique</h3>
                            <p>Vue imprenable sur la baie et couchers de soleil.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🍷</div>
                        <div>
                            <h3>Service d'Exception</h3>
                            <p>Une hospitalité marocaine chaleureuse et raffinée.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         ABOUT SECTION
         ========================================== -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=800&q=80" alt="Plat Signature Tanger">
                    <div class="about-experience-badge">
                        <div class="number">15+</div>
                        <div class="text">Ans d'Excellence Culinaire</div>
                    </div>
                </div>
                <div class="about-text">
                    <div class="section-title" style="text-align: left; margin-bottom: 1.5rem;">
                        <span class="badge">Notre Histoire</span>
                        <h2>La rencontre entre Tradition marocaine & Modernité</h2>
                    </div>
                    <p>
                        Niché sur les hauteurs pittoresques de Tanger, <strong>La Perle de Tanger</strong> célèbre la richesse gastronomique du Nord du Maroc. Entre épices envoûtantes, tajines mijotés avec passion et grillades de poissons fraîchement capturés, chaque plat raconte une histoire.
                    </p>
                    <p>
                        Que ce soit pour un dîner romantique au coucher du soleil ou un déjeuner d'affaires sur notre terrasse vue mer, nous promettons une immersion sensorielle unique.
                    </p>

                    <ul class="highlights-list">
                        <li><span>✓</span> Ingrédients 100% Bio & Locaux</li>
                        <li><span>✓</span> Maîtres Chefs Étoilés</li>
                        <li><span>✓</span> Salon VIP & Événements</li>
                        <li><span>✓</span> Ambiance Musicale Andalouse</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         MENU PREVIEW SECTION
         ========================================== -->
    <section class="section-padding" id="menu" style="background-color: rgba(15, 20, 25, 0.5);">
        <div class="container">
            <div class="section-title">
                <span class="badge">Carte & Menu</span>
                <h2>Nos Spécialités Gourmandes</h2>
                <p>Découvrez une sélection raffinée de nos meilleurs plats élaborés avec soin par nos chefs.</p>
            </div>

            <!-- Menu Category Tabs -->
            <div class="menu-tabs">
                <button class="tab-btn active" onclick="filterMenu('all')">Tout</button>
                <button class="tab-btn" onclick="filterMenu('entrees')">Entrées</button>
                <button class="tab-btn" onclick="filterMenu('poissons')">Délices de la Mer</button>
                <button class="tab-btn" onclick="filterMenu('plats')">Plats Principaux</button>
                <button class="tab-btn" onclick="filterMenu('desserts')">Desserts</button>
            </div>

            <!-- Menu Grid Container -->
            <div class="menu-grid" id="menuGrid">
                
                <!-- Item 1 -->
                <div class="menu-card" data-category="poissons">
                    <div class="menu-img-wrapper">
                        <span class="menu-category-badge">Mer</span>
                        <img src="https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80" alt="Pastilla aux Fruits de Mer">
                    </div>
                    <div class="menu-info">
                        <div class="menu-header">
                            <h3 class="menu-title">Pastilla aux Fruits de Mer</h3>
                            <span class="menu-price">180 MAD</span>
                        </div>
                        <p class="menu-desc">Feuilleté traditionnel croustillant garni de crevettes royales, calamars et vermicelles assaisonnés au citron vert.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="menu-card" data-category="plats">
                    <div class="menu-img-wrapper">
                        <span class="menu-category-badge">Tradition</span>
                        <img src="https://images.unsplash.com/photo-1541518763669-27fef04b14da?auto=format&fit=crop&w=600&q=80" alt="Tajine d'Agneau">
                    </div>
                    <div class="menu-info">
                        <div class="menu-header">
                            <h3 class="menu-title">Tajine d'Agneau aux Pruneaux</h3>
                            <span class="menu-price">160 MAD</span>
                        </div>
                        <p class="menu-desc">Viande d'agneau tendre mijotée aux épices douces, pruneaux caramélisés, amandes grillées et graines de sésame.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="menu-card" data-category="poissons">
                    <div class="menu-img-wrapper">
                        <span class="menu-category-badge">Mer</span>
                        <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=600&q=80" alt="Loup de Mer Grillé">
                    </div>
                    <div class="menu-info">
                        <div class="menu-header">
                            <h3 class="menu-title">Loup de Mer au Four</h3>
                            <span class="menu-price">220 MAD</span>
                        </div>
                        <p class="menu-desc">Poisson entier pêché du jour, mariné à la charmoula tangéroise et accompagné de légumes de saison sautés.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="menu-card" data-category="entrees">
                    <div class="menu-img-wrapper">
                        <span class="menu-category-badge">Entrée</span>
                        <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" alt="Assortiment de Salades Marocaines">
                    </div>
                    <div class="menu-info">
                        <div class="menu-header">
                            <h3 class="menu-title">Zaalouk & Salades Marocaines</h3>
                            <span class="menu-price">90 MAD</span>
                        </div>
                        <p class="menu-desc">Sélection de 6 salades chaudes et froides traditionnelles : caviar d'aubergine, zeste d'orange aux carottes et coulis de tomates.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="menu-card" data-category="plats">
                    <div class="menu-img-wrapper">
                        <span class="menu-category-badge">Signature</span>
                        <img src="https://images.unsplash.com/photo-1585937421612-70a008356fbe?auto=format&fit=crop&w=600&q=80" alt="Couscous Royal">
                    </div>
                    <div class="menu-info">
                        <div class="menu-header">
                            <h3 class="menu-title">Couscous Royal Tangérois</h3>
                            <span class="menu-price">190 MAD</span>
                        </div>
                        <p class="menu-desc">Semoule fine à la vapeur, sept légumes frais, agneau moelleux, poulet fermier et brochettes de merguez maison.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="menu-card" data-category="desserts">
                    <div class="menu-img-wrapper">
                        <span class="menu-category-badge">Dessert</span>
                        <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=600&q=80" alt="Pastilla au Lait">
                    </div>
                    <div class="menu-info">
                        <div class="menu-header">
                            <h3 class="menu-title">Pastilla au Lait & Fleur d'Oranger</h3>
                            <span class="menu-price">65 MAD</span>
                        </div>
                        <p class="menu-desc">Feuilles de pastilla croustillantes, crème diplomate parfumée à la fleur d’oranger et amandes concassées.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         BOOKING / RESERVATION SECTION
         ========================================== -->
    <section class="section-padding booking-section" id="booking">
        <div class="container">
            <div class="section-title">
                <span class="badge">Réservation en Ligne</span>
                <h2>Réservez Votre Table</h2>
                <p>Assurez-vous d'avoir la meilleure table avec vue sur mer en réservant en quelques clics.</p>
            </div>

            <div class="booking-card">
                <div class="booking-success" id="bookingSuccess">
                    🎉 Merci ! Votre demande de réservation a été reçue. Nous vous contacterons sous peu pour confirmer votre table.
                </div>

                <form id="reservationForm" onsubmit="handleReservation(event)">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="fullname">Nom Complet *</label>
                            <input type="text" id="fullname" class="form-control" placeholder="M. / Mme Nom" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Numéro de Téléphone *</label>
                            <input type="tel" id="phone" class="form-control" placeholder="+212 600-000000" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date de Réservation *</label>
                            <input type="date" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="time">Heure *</label>
                            <select id="time" class="form-control" required>
                                <option value="">Choisir une heure</option>
                                <option value="12:30">12:30 (Déjeuner)</option>
                                <option value="13:30">13:30 (Déjeuner)</option>
                                <option value="19:30">19:30 (Dîner)</option>
                                <option value="20:30">20:30 (Dîner)</option>
                                <option value="21:30">21:30 (Dîner)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="guests">Nombre d'Invités *</label>
                            <select id="guests" class="form-control" required>
                                <option value="2">2 Personnes</option>
                                <option value="4">4 Personnes</option>
                                <option value="6">6 Personnes</option>
                                <option value="8+">Groupe / Événement (8+)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="seating">Zone Souhaitée</label>
                            <select id="seating" class="form-control">
                                <option value="terrasse">Terrasse Panoramique (Vue Mer)</option>
                                <option value="interieur">Salle Principale Climatisée</option>
                                <option value="vip">Salon VIP Marrakchi</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label for="notes">Demandes Spéciales / Allergies</label>
                            <textarea id="notes" class="form-control" rows="3" placeholder="Anniversaire, régime particulier..."></textarea>
                        </div>

                        <div class="form-group full-width" style="margin-top: 1rem;">
                            <button type="submit" class="btn btn-primary" style="width: 100%; font-size: 1.1rem;">
                                Confirmer la Réservation
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ==========================================
         LOCATION & AMBIANCE SECTION
         ========================================== -->
    <section class="section-padding" id="location">
        <div class="container">
            <div class="section-title">
                <span class="badge">Où Nous Trouver</span>
                <h2>Localisation & Horaires</h2>
                <p>Au cœur de Tanger, facilement accessible depuis le centre-ville et le front de mer.</p>
            </div>

            <div class="location-grid">
                <!-- Info Left -->
                <div class="location-info">
                    <div>
                        <div class="info-item">
                            <div class="info-icon">📍</div>
                            <div class="info-text">
                                <h4>Adresse</h4>
                                <p>Boulevard de la Corniche, Cap Spartel Road, Tanger 90000, Maroc</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">📞</div>
                            <div class="info-text">
                                <h4>Téléphone & WhatsApp</h4>
                                <p>+212 539 94 00 11 / +212 661 23 45 67</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">⏰</div>
                            <div class="info-text">
                                <h4>Horaires d'Ouverture</h4>
                                <p>Lundi - Dimanche : 12:00 - 23:30<br><small style="color: var(--gold-accent);">Service continu 7j/7</small></p>
                            </div>
                        </div>

                        <div class="info-item">
                            <div class="info-icon">🚗</div>
                            <div class="info-text">
                                <h4>Parking</h4>
                                <p>Parking privé gratuit avec service de voiturier disponible.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 2rem;">
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline" style="width: 100%;">
                            Ouvrir dans Google Maps 🗺️
                        </a>
                    </div>
                </div>

                <!-- Interactive Map / Location Preview -->
                <div class="map-card">
                    <div class="map-placeholder">
                        <h3>Vue sur la Baie de Tanger</h3>
                        <p>Venez profiter d'un panorama exceptionnel sur la rencontre de la Méditerranée et de l'Atlantique.</p>
                        <a href="#booking" class="btn btn-primary">Réserver Ma Vue</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         FOOTER
         ========================================== -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <div class="logo-icon">P</div>
                        <div class="logo-text">La Perle <span>de Tanger</span></div>
                    </a>
                    <p>
                        L'adresse incontournable de la haute gastronomie marocaine et méditerranéenne à Tanger. Savourez l'authenticité et la fraîcheur.
                    </p>
                </div>

                <div class="footer-column">
                    <h4>Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="#hero">Accueil</a></li>
                        <li><a href="#about">À Propos</a></li>
                        <li><a href="#menu">Notre Menu</a></li>
                        <li><a href="#booking">Réservations</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Informations</h4>
                    <ul class="footer-links">
                        <li><a href="#location">Emplacement</a></li>
                        <li><a href="#">Privatisation</a></li>
                        <li><a href="#">Événements & Mariages</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Newsletter</h4>
                    <p style="color: var(--text-muted); font-size: 0.85rem;">Inscrivez-vous pour recevoir nos offres spéciales et invitations VIP.</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Merci de votre inscription!');">
                        <input type="email" placeholder="Votre email..." class="newsletter-input" required>
                        <button type="submit" class="btn btn-primary" style="padding: 0.6rem 1rem;">OK</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 La Perle de Tanger. Tous droits réservés.</p>
                <p>Conçu avec passion à Tanger 🇲🇦</p>
            </div>
        </div>
    </footer>

    <!-- ==========================================
         VANILLA JAVASCRIPT LOGIC
         ========================================== -->
    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle logic
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        document.getElementById('mobileToggle').addEventListener('click', toggleMenu);

        // Menu category filtering function
        function filterMenu(category) {
            const cards = document.querySelectorAll('.menu-card');
            const buttons = document.querySelectorAll('.tab-btn');

            // Update active state on buttons
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');

            // Filter items
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Reservation form submission handler
        function handleReservation(event) {
            event.preventDefault();
            const successBox = document.getElementById('bookingSuccess');
            const form = document.getElementById('reservationForm');
            
            // Show confirmation message smoothly
            successBox.style.display = 'block';
            form.reset();

            // Scroll up to show success box clearly
            successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // Set minimum date for reservation picker (today)
        const dateInput = document.getElementById('date');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
        }
    </script>
</body>
</html>