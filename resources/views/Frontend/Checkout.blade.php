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

        .checkout-wrapper {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 40px;
}

.checkout-form, .order-summary {
  background: var(--white);
  padding: 30px;
  border-radius: 12px;
  box-shadow: var(--shadow);
}

.checkout-form h3, .order-summary h3 {
  margin-bottom: 20px;
  font-size: 1.4rem;
  border-bottom: 2px solid var(--light);
  padding-bottom: 10px;
  color: var(--primary);
}

.form-group { margin-bottom: 20px; }
.form-group label { display: block; margin-bottom: 8px; font-weight: 500; }

.form-group input, .form-group select, .form-group textarea {
  width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;
}

.order-item { display: flex; justify-content: space-between; margin-bottom: 12px; }
.order-total { border-top: 2px solid var(--light); margin-top: 15px; padding-top: 15px; font-weight: 700; font-size: 1.2rem; }

.payment-methods label { display: flex; align-items: center; margin-bottom: 10px; cursor: pointer; }
.payment-methods input { margin-right: 10px; }


@media(max-width: 992px) {
  .checkout-wrapper { grid-template-columns: 1fr; }
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


<!-- Checkout Section -->
<section class="container checkout-wrapper" style="margin-top: 40px; margin-bottom: 60px;">

  <!-- Billing & Payment -->
  <div class="checkout-form">
    <h3>Billing Details</h3>
    <form>
      <div class="form-group">
        <label>Full Name *</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label>Email *</label>
        <input type="email" required>
      </div>
      <div class="form-group">
        <label>Phone *</label>
        <input type="tel" required>
      </div>
      <div class="form-group">
        <label>Address *</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label>City *</label>
        <input type="text" required>
      </div>
      <div class="form-group">
        <label>Country *</label>
        <select required>
          <option>Choose...</option>
          <option>Cambodia</option>
          <option>USA</option>
          <option>UK</option>
        </select>
      </div>
      <div class="form-group">
        <label>Order Notes (Optional)</label>
        <textarea rows="4"></textarea>
      </div>

      <h3>Payment Method</h3>
      <div class="payment-methods">
        <label><input type="radio" name="payment" checked> Cash on Delivery</label>
        <label><input type="radio" name="payment"> Credit/Debit Card</label>
        <label><input type="radio" name="payment"> PayPal</label>
      </div>
    </form>
  </div>

  <!-- Order Summary -->
  <div class="order-summary">
    <h3>Your Order</h3>
   
    <button class="btn btn-primary">Place Order</button>
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
<script>

document.addEventListener("DOMContentLoaded", () => {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    const orderSummary = document.querySelector(".order-summary");
    const orderItems = document.createElement("div");
    let total = 0;

    // Render items
    cart.forEach(item => {
        total += item.price * item.quantity;
        orderItems.innerHTML += `
            <div class="order-item">
                <span>${item.name} × ${item.quantity}</span>
                <span>$${(item.price * item.quantity).toFixed(2)}</span>
            </div>
        `;
    });

    orderItems.innerHTML += `
        <div class="order-total"><span>Total: </span><span>$${total.toFixed(2)}</span></div>
    `;

    orderSummary.insertBefore(orderItems, orderSummary.querySelector("button"));

    // ✅ Handle Place Order button
    const placeOrderBtn = orderSummary.querySelector("button");
    placeOrderBtn.addEventListener("click", () => {
        alert("✅ Order placed successfully!");
        localStorage.removeItem("cart"); // clear cart
        window.location.href = "/"; // redirect to homepage (change if needed)
    });
});
</script>

</body>
</html>
