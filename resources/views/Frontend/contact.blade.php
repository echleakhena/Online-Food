<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodExpress - Contact Us</title>
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
            --primary-dark: #0c056b;
            --secondary: #2ec4b6;
            --dark: #031654;
            --light: #f8f9fa;
            --gray: #8a8a8a;
            --white: #ffffff;
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

        /* Page Title */
        .page-title {
            background: var(--primary);
            color: var(--white);
            padding: 100px 0 50px;
            text-align: center;
        }

        .page-title h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .page-title p {
            font-size: 1.2rem;
            color: #f0f0f0;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .contact-container {
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
        }

        .contact-info, .contact-form {
            flex: 1;
            min-width: 300px;
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .contact-info h3, .contact-form h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .contact-info p {
            margin-bottom: 15px;
            color: var(--gray);
            font-size: 15px;
        }

        .contact-info i {
            color: var(--primary);
            margin-right: 10px;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 14px;
            outline: none;
            transition: var(--transition);
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 10px rgba(3,11,87,0.2);
        }

        .contact-form textarea {
            resize: none;
            height: 150px;
        }

        .contact-form button {
            align-self: flex-start;
        }

        /* Map Section */
        .map-container {
            margin-top: 50px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
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

        .footer-column p, .footer-links a {
            color: #bbb;
            margin-bottom: 10px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a:hover {
            color: var(--primary);
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

        /* Responsive */
        @media (max-width: 992px) {
            .contact-container {
                flex-direction: column;
            }
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
            </div>
        </nav>
    </div>
</header>

<!-- Page Title -->
<section class="page-title">
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! Send us a message or visit us in person.</p>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container contact-container">

        <!-- Contact Info -->
        <div class="contact-info">
            <h3>Get in Touch</h3>
            <p><i class="fas fa-map-marker-alt"></i> 123 Food Street, City</p>
            <p><i class="fas fa-phone"></i> +1 234 567 8900</p>
            <p><i class="fas fa-envelope"></i> info@foodexpress.com</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h3>Send Us a Message</h3>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

    </div>

    <!-- Map -->
    <div class="container map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.3786770696133!2d104.82065607513395!3d11.52467028867329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fbd312449f5%3A0xaf3393bc9eda7678!2sBELTEI%20International%20University%20(Campus%202%2C%20Chaom%20Chao%20Flyover)!5e0!3m2!1sen!2skh!4v1756699946326!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>FoodExpress</h3>
                <p>Delivering delicious food to your doorstep. Order from the best restaurants in town.</p>
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
            <p>&copy; 2025 FoodExpress. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
