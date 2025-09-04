<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Express - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(45deg, #02013e, #1a1a6e);
            overflow: hidden;
            position: relative;
        }
        
        .background-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .shape:nth-child(1) {
            width: 500px;
            height: 400px;
            top: -100px;
            left: -100px;
            animation: float 15s infinite ease-in-out;
        }
        
        .shape:nth-child(2) {
            width: 300px;
            height: 300px;
            bottom: -50px;
            right: -50px;
            animation: float 18s infinite ease-in-out reverse;
        }
        
        .shape:nth-child(3) {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 70%;
            animation: float 12s infinite ease-in-out;
        }
        
        .container {
            width: 100%;
            max-width: 550px;
            padding: 20px;
            animation: fadeIn 1s ease-out;
        }
        
        .login-box {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px 35px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transform: translateY(0);
            transition: transform 0.3s ease;
        }
        
        .login-box:hover {
            transform: translateY(-5px);
        }
        
        .logo {
            text-align: center;
            margin-bottom: 35px;
            animation: slideDown 0.8s ease;
        }
        
        .logo h1 {
            color: #02013e;
            font-size: 36px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        
        .logo p {
            color: #555;
            margin-top: 8px;
            font-size: 15px;
        }
        
        .input-group {
            margin-bottom: 25px;
            position: relative;
            animation: slideUp 0.8s ease;
        }
        
        .input-group input {
            width: 100%;
            padding: 16px 20px 16px 50px;
            border: 2px solid #e6e6e6;
            background: #f8f9fa;
            border-radius: 12px;
            outline: none;
            font-size: 16px;
            color: #02013e;
            transition: all 0.4s ease;
        }
        
        .input-group input:focus {
            border-color: #02013e;
            background: #fff;
            box-shadow: 0 0 15px rgba(2, 1, 62, 0.2);
            transform: scale(1.02);
        }
        
        .input-group i {
            position: absolute;
            top: 16px;
            left: 18px;
            color: #02013e;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .input-group input:focus + i {
            transform: scale(1.2);
            color: #02013e;
        }
        
        .btn {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(45deg, #02013e, #1a1a6e);
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(2, 1, 62, 0.3);
            animation: pulse 2s infinite;
        }
        
        .btn:hover {
            background: linear-gradient(45deg, #1a1a6e, #02013e);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(2, 1, 62, 0.4);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .extra-options {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 14px;
            animation: fadeIn 1.2s ease;
        }
        
        .remember {
            display: flex;
            align-items: center;
            color: #555;
        }
        
        .remember input {
            margin-right: 8px;
            accent-color: #02013e;
        }
        
        .forgot-password {
            color: #02013e;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .forgot-password:hover {
            color: #1a1a6e;
            text-decoration: underline;
        }
        
        .signup-link {
            text-align: center;
            margin-top: 30px;
            color: #555;
            animation: fadeIn 1.4s ease;
        }
        
        .signup-link a {
            color: #02013e;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .signup-link a:hover {
            color: #1a1a6e;
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideDown {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(5deg); }
            66% { transform: translate(-20px, 20px) rotate(-5deg); }
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(2, 1, 62, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(2, 1, 62, 0); }
            100% { box-shadow: 0 0 0 0 rgba(2, 1, 62, 0); }
        }
        
        /* Responsive Design */
        @media (max-width: 480px) {
            .login-box {
                padding: 30px 25px;
            }
            
            .logo h1 {
                font-size: 28px;
            }
            
            .extra-options {
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="background-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container">
        <div class="login-box">
            <div class="logo">
                <h1>Food Express</h1>
                <p>Sign in to your account</p>
            </div>
            
            <form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="input-group">
        <input type="email" name="email" placeholder="Email" required>
        <i class="fas fa-envelope" style="color: #02013e;"></i>
    </div>

    <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
        <i class="fas fa-lock" style="color: #02013e;"></i>
    </div>

    <button type="submit" class="btn">Login</button>

    <div class="extra-options">
        <label class="remember">
            <input type="checkbox" name="remember"> Remember me
        </label>
        <a href="#" class="forgot-password">Forgot Password?</a>
    </div>
</form>

            
           
        </div>
    </div>

    <script>
        // Add input focus effects with JavaScript for enhanced interaction
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            
            inputs.forEach(input => {
                // Add focus effect
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                // Remove focus effect
                input.addEventListener('blur', function() {
                    if (this.value === "") {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>
</html>