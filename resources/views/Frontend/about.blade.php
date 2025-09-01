<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodExpress - About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
             * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }


        :root {
            --primary: #030b57;
            --primary-light: #0f096c;
            --primary-dark: #0c056b;
            --secondary: #2ec4b6;
            --dark: #031654;
            --light: #f8f9fa;
            --light-gray: #e9ecef;
            --gray: #8a8a8a;
            --white: #ffffff;
            --success: #4caf50;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        /* Header & Navigation */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo i {
            font-size: 32px;
            color: var(--primary);
            margin-right: 10px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }

        .logo-text span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-buttons {
            display: flex;
            align-items: center;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            margin-right: 15px;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }

        .cart-icon {
            position: relative;
            margin-left: 20px;
            font-size: 20px;
            color: var(--dark);
            cursor: pointer;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--primary);
            color: var(--white);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            padding: 80px 0;
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            flex: 1;
            padding-right: 40px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-title span {
            color: var(--primary);
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 30px;
        }

        .search-bar {
            display: flex;
            background: var(--white);
            border-radius: 50px;
            padding: 5px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            max-width: 500px;
        }

        .search-bar input {
            flex: 1;
            border: none;
            outline: none;
            padding: 15px 20px;
            border-radius: 50px;
            font-size: 16px;
        }

        .search-bar button {
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 50px;
            padding: 15px 30px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .search-bar button:hover {
            background: var(--primary-dark);
        }

        .hero-stats {
            display: flex;
            gap: 30px;
        }

        .stat-item {
            display: flex;
            align-items: center;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 107, 53, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
            font-size: 20px;
        }

        .stat-text h3 {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .stat-text p {
            color: var(--gray);
            font-size: 14px;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 850px;
            max-height: 850px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        /* Categories Section */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .categories {
            padding: 80px 0;
            background: var(--white);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .category-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            padding: 30px 20px;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
            color: var(--white);
        }

        .bg-1 { background: linear-gradient(135deg, #ff6b35, #ff9e68); }
        .bg-2 { background: linear-gradient(135deg, #2ec4b6, #6ee7d7); }
        .bg-3 { background: linear-gradient(135deg, #ff9f43, #ffbe76); }
        .bg-4 { background: linear-gradient(135deg, #54a0ff, #7ed6df); }

        .category-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .category-card p {
            color: var(--gray);
            margin-bottom: 20px;
        }

        /* Popular Dishes */
        .dishes {
            padding: 80px 0;
            background: var(--light);
        }

        .dish-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .dish-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .dish-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .dish-image {
            height: 200px;
            overflow: hidden;
        }

        .dish-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .dish-card:hover .dish-image img {
            transform: scale(1.1);
        }

        .dish-info {
            padding: 20px;
        }

        .dish-info h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .dish-info p {
            color: var(--gray);
            margin-bottom: 15px;
            font-size: 14px;
        }

        .dish-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--primary);
        }

        .rating {
            display: flex;
            align-items: center;
            color: #ffc107;
        }

        .add-to-cart {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            color: var(--white);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-to-cart:hover {
            background: var(--primary-dark);
            transform: rotate(90deg);
        }

        /* How it Works */
        .how-it-works {
            padding: 80px 0;
            background: var(--white);
        }

        .steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            padding: 30px;
            border-radius: 20px;
            background: var(--light);
            transition: var(--transition);
        }

        .step:hover {
            background: var(--primary);
            color: var(--white);
        }

        .step:hover p {
            color: var(--white);
        }

        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            margin: 0 auto 20px;
        }

        .step:hover .step-number {
            background: var(--white);
            color: var(--primary);
        }

        .step h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .step p {
            color: var(--gray);
        }

        /* App Download */
        .app-download {
            padding: 80px 0;
            background: linear-gradient(135deg, #ff6b35, #ff9e68);
            color: var(--white);
            text-align: center;
        }

        .app-download .section-title h2,
        .app-download .section-title p {
            color: var(--white);
        }

        .app-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .app-btn {
            display: flex;
            align-items: center;
            background: var(--white);
            color: var(--dark);
            padding: 15px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .app-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .app-btn i {
            font-size: 24px;
            margin-right: 10px;
            color: var(--primary);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: var(--white);
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }

        .footer-column p {
            margin-bottom: 20px;
            color: #bbb;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #444;
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            color: #bbb;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            
            .hero-text {
                padding-right: 0;
                margin-bottom: 40px;
            }
            
            .search-bar {
                margin: 0 auto 30px;
            }
            
            .hero-stats {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 0;
            }
            
            .nav-links {
                margin: 20px 0;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .steps {
                flex-direction: column;
            }
            
            .app-buttons {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 576px) {
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 10px;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 20px;
            }
            
            .category-grid,
            .dish-grid {
                grid-template-columns: 1fr;
            }
        }
        .cart-dropdown {
    position: absolute;
    top: 40px;
    right: 0;
    width: 300px;
    background: white;
    border-radius: 10px;
    box-shadow: var(--shadow);
    padding: 15px;
    display: none; /* hidden by default */
    z-index: 999;
}

.cart-dropdown .empty-cart {
    text-align: center;
    color: var(--gray);
    display: none;
    margin-top: 20px;
}

.cart-items li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
    font-size: 14px;
}

.cart-items img {
    width: 50px;
    height: 50px;
    border-radius: 8px;
    object-fit: cover;
    margin-right: 10px;
}

.cart-item-info {
    flex: 1;
}

.cart-item-info h5 {
    margin: 0;
    font-size: 14px;
    font-weight: 600;
}

.cart-item-info span {
    font-size: 12px;
    color: var(--gray);
}

.remove-item {
    background: none;
    border: none;
    color: red;
    font-size: 18px;
    cursor: pointer;
    margin-left: 10px;
    padding: 0;
    transition: 0.2s;
}

.remove-item:hover {
    color: darkred;
    transform: scale(1.2);
}

.checkout-btn {
    width: 100%;
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #030b57;
            --primary-light: #0f096c;
            --primary-dark: #0c056b;
            --secondary: #2ec4b6;
            --dark: #031654;
            --light: #f8f9fa;
            --light-gray: #e9ecef;
            --gray: #8a8a8a;
            --white: #ffffff;
            --success: #4caf50;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo i {
            font-size: 32px;
            color: var(--primary);
            margin-right: 10px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }

        .logo-text span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .btn {
            padding: 12px 24px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            margin-right: 15px;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }

        footer {
            background: var(--dark);
            color: var(--white);
            padding: 60px 0 30px;
        }

        /* About Us Section */
        .about-hero {
            background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), url('https://images.unsplash.com/photo-1523986371872-9d3ba2e2f9b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            text-align: center;
        }

        .about-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .about-hero p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        .about-section {
            padding: 80px 0;
            background: var(--light);
        }

        .about-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-container img {
            width: 100%;
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .about-text p {
            margin-bottom: 15px;
            color: var(--dark);
            line-height: 1.8;
        }

        .mission-vision {
            display: flex;
            gap: 30px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .mission-vision div {
            background: var(--white);
            padding: 30px;
            border-radius: 20px;
            flex: 1;
            min-width: 250px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .mission-vision div:hover {
            transform: translateY(-5px);
        }

        .mission-vision h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Team Section */
        .team {
            padding: 80px 0;
            background: var(--white);
        }

        .team h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 50px;
            color: var(--primary);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            background: var(--light);
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            transition: var(--transition);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }

        .team-member h4 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        .team-member p {
            color: var(--gray);
            font-size: 14px;
        }

        @media (max-width: 992px) {
            .about-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">
                    <i class="fas fa-utensils"></i>
                    <div class="logo-text">Food<span>Express</span></div>
                </a>
                
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/Menu">Menu</a></li>
                    <li><a href="/about">About</a></li>
                   <li><a href="/contact">Contact</a></li>
                </ul>
                
                <div class="nav-buttons">
                 <button class="btn btn-outline" onclick="window.location.href='/Login'">Login</button>
                    <button class="btn btn-primary">Sign Up</button>
                </div>
            </nav>
        </div>
    </header>

    <!-- About Hero -->
    <section class="about-hero">
        <div class="container">
            <h1>About FoodExpress</h1>
            <p>Delivering delicious food to your doorstep with speed, quality, and care. Discover our story, mission, and the amazing team behind our service.</p>
        </div>
    </section>

    <!-- Company Story -->
    <section class="about-section">
        <div class="container about-container">
            <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Our Story">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Founded with a passion for delivering great food, FoodExpress has grown into a trusted online food delivery platform. We connect customers with top restaurants in their city, offering a wide variety of cuisines to satisfy every craving.</p>
                <p>Our goal is to make food ordering simple, fast, and enjoyable while supporting local restaurants and chefs.</p>

                <div class="mission-vision">
                    <div>
                        <h3>Our Mission</h3>
                        <p>To provide fast, reliable, and delicious food delivery while creating exceptional customer experiences.</p>
                    </div>
                    <div>
                        <h3>Our Vision</h3>
                        <p>To be the most trusted and innovative food delivery service, connecting people with quality meals wherever they are.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <h2>Meet Our Team</h2>
        <div class="container team-grid">
            <div class="team-member">
                <img src="/User/ceo.jpg" alt="John Doe">
                <h4>Ech Leakhena</h4>
                <p>CEO & Founder</p>
            </div>
            <div class="team-member">
                <img src="/User/back.jpg" alt="Jane Smith">
                <h4>Nov Thearith</h4>
                <p>BackEnd Developer</p>
            </div>
           
            <div class="team-member">
                <img src="/User/front.jpg" alt="Sarah Brown">
                <h4>Sath ChhunSeak</h4>
                <p>FrontEnd Developer</p>
            </div>
        </div>
    </section>

   <!-- How it Works -->
    <section class="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>How It Works</h2>
                <p>Getting your favorite food delivered is quick and easy</p>
            </div>
            
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Choose Your Food</h3>
                    <p>Browse through hundreds of dishes from top restaurants</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Place Your Order</h3>
                    <p>Add items to your cart and proceed to checkout</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Track Delivery</h3>
                    <p>Follow your order in real-time as it makes its way to you</p>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Enjoy Your Meal</h3>
                    <p>Sit back, relax, and enjoy delicious food delivered to your door</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>FoodExpress</h3>
                    <p>Delivering delicious food to your doorstep. Order from the best restaurants in town.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Categories</h3>
                    <ul class="footer-links">
                        <li><a href="#">Fast Food</a></li>
                        <li><a href="#">Main Course</a></li>
                        <li><a href="#">Desserts</a></li>
                        <li><a href="#">Drinks</a></li>
                        <li><a href="#">Vegetarian</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Food Street, City</p>
                    <p><i class="fas fa-phone"></i> +1 234 567 8900</p>
                    <p><i class="fas fa-envelope"></i> info@foodexpress.com</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 FoodExpress. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
