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
    justify-content: center; /* Center items when few */
}

.dish-card {
    max-width: 320px; /* Limit card size */
    margin: 0 auto;
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
.category-btn {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    background: var(--light-gray);
    color: var(--dark);
    cursor: pointer;
    border-radius: 8px;
    text-align: left;
    transition: 0.3s;
}

.category-btn:hover, .category-btn.active {
    background: var(--primary);
    color: white;
}
.menu-container {
    display: flex;
    gap: 30px;
    height: 600px; /* total height for the menu section */
}
.sidebar {
    width: 250px;
    background: var(--white); /* sidebar background */
    padding: 20px;
    border-radius: 15px;
    box-shadow: var(--shadow);
    flex-shrink: 0;
}

.sidebar h3 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: var(--primary);
    font-weight: 700;
    border-bottom: 2px solid var(--primary);
    padding-bottom: 10px;
}

.category-list {
    list-style: none;
    padding: 0;
}

.category-list li {
    margin-bottom: 15px;
}

.category-list button {
    width: 100%;
    text-align: left;
    padding: 10px 15px;
    border: none;
    border-radius: 10px;
    background: var(--light-gray);
    color: var(--dark);
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-list button:hover,
.category-list button.active {
    background: var(--primary);
    color: var(--white);
    transform: translateX(5px);
}


.dishes-grid-container {
    flex: 1;
    overflow-y: auto; /* enable vertical scroll */
    max-height: 100%; /* match container height */
}

.dish-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 30px;
    padding-right: 10px; /* avoid scrollbar overlap */
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
        <button class="btn btn-primary checkout-btn">Checkout</button>
        <p class="empty-cart">Your cart is empty</p>
    </div>
</div>

                </div>
            </nav>
        </div>
    </header>


    {{-- <!-- Categories Section -->
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
    </section> --}}

    <section class="dishes">
   <div class="container menu-container">
    <!-- Sidebar -->
    <div class="sidebar">
    <h3>Filter by Category</h3>
    <ul class="category-list">
        <li><button class="active" data-filter="all">All</button></li>
        <li><button data-filter="fast-food">Fast Food</button></li>
        <li><button data-filter="main-course">Main Course</button></li>
        <li><button data-filter="desserts">Desserts</button></li>
        <li><button data-filter="drinks">Drinks</button></li>
    </ul>
</div>


    <!-- Dish Grid -->
    <div class="dishes-grid-container">
        <div class="dish-grid">
          <!-- Fast Food -->
<div class="dish-card" data-category="fast-food">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1604908177523-cb5e85d21a6d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cheese Burger">
    </div>
    <div class="dish-info">
        <h3>Cheese Burger</h3>
        <p>Grilled beef patty with cheddar cheese and fresh veggies</p>
        <div class="dish-meta">
            <div class="price">$13.50</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="fast-food">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="French Fries">
    </div>
    <div class="dish-info">
        <h3>French Fries</h3>
        <p>Crispy golden fries served with ketchup</p>
        <div class="dish-meta">
            <div class="price">$4.99</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<!-- Main Course -->
<div class="dish-card" data-category="main-course">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1603078419372-3f0e03a576f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Grilled Chicken">
    </div>
    <div class="dish-info">
        <h3>Grilled Chicken</h3>
        <p>Marinated grilled chicken served with steamed vegetables</p>
        <div class="dish-meta">
            <div class="price">$18.00</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="main-course">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1627308595229-7830a5c91f9f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Steak">
    </div>
    <div class="dish-info">
        <h3>Beef Steak</h3>
        <p>Juicy steak with garlic butter sauce and mashed potatoes</p>
        <div class="dish-meta">
            <div class="price">$25.00</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="main-course">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1586190848861-99aa4a171e90?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Grilled Salmon">
    </div>
    <div class="dish-info">
        <h3>Grilled Salmon</h3>
        <p>Salmon fillet grilled to perfection with lemon butter</p>
        <div class="dish-meta">
            <div class="price">$22.50</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<!-- Desserts -->
<div class="dish-card" data-category="desserts">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1599785209799-17d59cb7956c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Chocolate Cake">
    </div>
    <div class="dish-info">
        <h3>Chocolate Cake</h3>
        <p>Rich chocolate cake topped with chocolate ganache</p>
        <div class="dish-meta">
            <div class="price">$6.50</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="desserts">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1606755962776-85778b155c7a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ice Cream">
    </div>
    <div class="dish-info">
        <h3>Vanilla Ice Cream</h3>
        <p>Creamy vanilla ice cream served with chocolate sauce</p>
        <div class="dish-meta">
            <div class="price">$5.00</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="desserts">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1617196037508-0a5bce9b0c34?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cupcake">
    </div>
    <div class="dish-info">
        <h3>Strawberry Cupcake</h3>
        <p>Fluffy cupcake topped with fresh strawberries</p>
        <div class="dish-meta">
            <div class="price">$4.50</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<!-- Drinks -->
<div class="dish-card" data-category="drinks">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1551024601-bec78aea704b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Coffee">
    </div>
    <div class="dish-info">
        <h3>Cappuccino</h3>
        <p>Hot espresso with steamed milk foam</p>
        <div class="dish-meta">
            <div class="price">$3.50</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="drinks">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1524594157362-7a50e678ff24?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Smoothie">
    </div>
    <div class="dish-info">
        <h3>Mango Smoothie</h3>
        <p>Refreshing mango smoothie with ice</p>
        <div class="dish-meta">
            <div class="price">$4.99</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

<div class="dish-card" data-category="drinks">
    <div class="dish-image">
        <img src="https://images.unsplash.com/photo-1612190743437-5a7c731f55d0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Lemonade">
    </div>
    <div class="dish-info">
        <h3>Fresh Lemonade</h3>
        <p>Cold lemonade with fresh lemon slices</p>
        <div class="dish-meta">
            <div class="price">$3.00</div>
        </div>
    </div>
    <button class="add-to-cart"><i class="fas fa-plus"></i></button>
</div>

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
   document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.category-list button');
    const dishCards = document.querySelectorAll('.dish-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            dishCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});


 
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



    </script>
</body>
</html>