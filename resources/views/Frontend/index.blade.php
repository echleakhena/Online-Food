<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodExpress - Delicious Food Delivered</title>
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

    </style>
</head>
<body>
    <!-- Header & Navigation -->
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
                   <a href="{{ route('register') }}"> <button class="btn btn-primary" >Sign Up</button></a>
                  <div class="cart-icon">
    <i class="fas fa-shopping-cart"></i>
    <span class="cart-count">0</span>

    <!-- Cart dropdown -->
    <div class="cart-dropdown">
        <h4>Your Cart</h4>
        <ul class="cart-items"></ul>
        <div class="cart-total">
            <span>Subtotal: $<span id="cart-total">0.00</span></span>
        </div>
       <button class="btn btn-primary checkout-btn" onclick="window.location.href='/checkout'">Checkout</button>
      
        <p class="empty-cart">Your cart is empty</p>
    </div>
</div>

                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Delicious food <span>delivered</span> to your door</h1>
                    <p class="hero-subtitle">Order your favorite meals from the best restaurants in town. Fast delivery, fresh food, and great prices.</p>
                    
                    <div class="search-bar">
                        <input type="text" placeholder="What are you craving?">
                        <button>Search</button>
                    </div>
                    
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="stat-text">
                                <h3>15-30 min</h3>
                                <p>Delivery</p>
                            </div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="stat-text">
                                <h3>4.8/5</h3>
                                <p>Customer Rating</p>
                            </div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="stat-text">
                                <h3>200+</h3>
                                <p>Restaurants</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Delicious Food">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <div class="section-title">
                <h2>Browse by Category</h2>
                <p>Explore our diverse food categories and find your favorite dishes</p>
            </div>
            
            <div class="category-grid">
                <div class="category-card">
                    <div class="category-icon bg-1">
                        <i class="fas fa-pizza-slice"></i>
                    </div>
                    <h3>Fast Food</h3>
                    <p>Burgers, pizzas, fries </p>
                    <a href="#" class="btn btn-outline">View Detail</a>
                </div>
                
                <div class="category-card">
                    <div class="category-icon bg-2">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Main Course</h3>
                    <p>Hearty and satisfying dishes</p>
                    <a href="#" class="btn btn-outline">View Detail</a>
                </div>
                
                <div class="category-card">
                    <div class="category-icon bg-3">
                        <i class="fas fa-ice-cream"></i>
                    </div>
                    <h3>Desserts</h3>
                    <p>Sweet treats for every occasion</p>
                    <a href="#" class="btn btn-outline">View Detail</a>
                </div>
                
                <div class="category-card">
                    <div class="category-icon bg-4">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <h3>Drinks</h3>
                    <p>Refreshing beverages</p>
                    <a href="#" class="btn btn-outline">View Detail</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Dishes -->
    <section class="dishes">
        <div class="container">
            <div class="section-title">
                <h2>Popular Dishes</h2>
                <p>Discover our most ordered dishes from around the city</p>
            </div>
            
            <div class="dish-grid">
                <div class="dish-card">
                    <div class="dish-image">
                        <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Burger">
                    </div>
                    <div class="dish-info">
                        <h3>Classic Beef Burger</h3>
                        <p>Juicy beef patty with fresh vegetables and special sauce</p>
                        <div class="dish-meta">
                            <div class="price">$12.99</div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(128)</span>
                            </div>
                        </div>
                    </div>
                    <button class="add-to-cart">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                
                <div class="dish-card">
                    <div class="dish-image">
                        <img src="https://images.unsplash.com/photo-1565299585323-38d6b0865b47?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pizza">
                    </div>
                    <div class="dish-info">
                        <h3>Margherita Pizza</h3>
                        <p>Classic pizza with tomato sauce, mozzarella </p>
                        <div class="dish-meta">
                            <div class="price">$15.99</div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(96)</span>
                            </div>
                        </div>
                    </div>
                    <button class="add-to-cart">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                
                <div class="dish-card">
                    <div class="dish-image">
                        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pasta">
                    </div>
                    <div class="dish-info">
                        <h3>Spaghetti Carbonara</h3>
                        <p>Creamy pasta with bacon, eggs, and parmesan cheese</p>
                        <div class="dish-meta">
                            <div class="price">$14.50</div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(78)</span>
                            </div>
                        </div>
                    </div>
                    <button class="add-to-cart">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
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

    <script>
        
        // Simple JavaScript for interactive elements
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartCount = document.querySelector('.cart-count');
    const cartDropdown = document.querySelector('.cart-dropdown');
    const cartItemsContainer = document.querySelector('.cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    const cartIcon = document.querySelector('.cart-icon');
    const emptyCartMessage = document.querySelector('.empty-cart');

    let cart = [];
    let count = 0;
    let subtotal = 0;

    // Toggle dropdown
    cartIcon.addEventListener('click', () => {
        cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Add to cart
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const dishCard = button.closest('.dish-card');
            const name = dishCard.querySelector('h3').textContent;
            const price = parseFloat(dishCard.querySelector('.price').textContent.replace('$', ''));
            const img = dishCard.querySelector('img').src;

            // Check if item exists
            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.qty += 1;
                existingItem.subtotal = existingItem.qty * existingItem.price;
            } else {
                cart.push({ name, price, img, qty: 1, subtotal: price });
            }

            count++;
            subtotal += price;

            cartCount.textContent = count;
            renderCart();
        });
    });

    // Render cart
    function renderCart() {
        cartItemsContainer.innerHTML = '';

        if (cart.length === 0) {
            emptyCartMessage.style.display = 'block';
        } else {
            emptyCartMessage.style.display = 'none';
        }

        cart.forEach((item, index) => {
            const li = document.createElement('li');
            li.innerHTML = `
                <img src="${item.img}" alt="${item.name}">
                <div class="cart-item-info">
                    <h5>${item.name}</h5>
                    <span>${item.qty} × $${item.price.toFixed(2)}</span>
                </div>
                <div class="cart-item-subtotal">$${item.subtotal.toFixed(2)}</div>
                <button class="remove-item" data-index="${index}">✖</button>
            `;
            cartItemsContainer.appendChild(li);
        });

        cartTotalElement.textContent = subtotal.toFixed(2);

        // Add remove button events
        const removeButtons = document.querySelectorAll('.remove-item');
        removeButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                const index = this.getAttribute('data-index');
                removeFromCart(index);
                e.stopPropagation(); // Prevent dropdown toggle
            });
        });
    }

    function removeFromCart(index) {
        const item = cart[index];
        subtotal -= item.subtotal;
        count -= item.qty;
        cart.splice(index, 1);

        cartCount.textContent = count;
        renderCart();
    }
});


document.addEventListener("DOMContentLoaded", () => {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    const cartCount = document.querySelector(".cart-count");

    // Function to update cart count instantly
    function updateCartCount() {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCount.textContent = totalItems;
    }

    // Run on load
    updateCartCount();

    // Handle add-to-cart buttons
    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", (e) => {
            const card = e.target.closest(".dish-card");
            const name = card.querySelector("h3").textContent;
            const price = parseFloat(card.querySelector(".price").textContent.replace("$", ""));

            // check if item exists in cart
            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name, price, quantity: 1 });
            }

            // Save back to localStorage
            localStorage.setItem("cart", JSON.stringify(cart));

            // Update cart badge instantly
            updateCartCount();
        });
    });
});

    </script>
</body>
</html>