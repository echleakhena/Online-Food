<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TastyBites - Food Delivery Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #ff6b35;
            --primary-light: #ff9e68;
            --primary-dark: #e85a00;
            --secondary: #2ec4b6;
            --dark: #1f1f1f;
            --dark-light: #2d2d2d;
            --light: #f8f9fa;
            --light-gray: #e9ecef;
            --success: #4caf50;
            --warning: #ff9800;
            --danger: #f44336;
            --gray: #8a8a8a;
            --card-bg: #ffffff;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: var(--dark);
            color: white;
            padding: 25px 20px;
            transition: var(--transition);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo i {
            font-size: 32px;
            margin-right: 12px;
            color: var(--primary);
            background: rgba(255, 107, 53, 0.15);
            padding: 10px;
            border-radius: 10px;
        }

        .logo h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 14px 18px;
            margin: 6px 0;
            border-radius: 10px;
            cursor: pointer;
            transition: var(--transition);
            color: #fff;
            text-decoration: none;
        }

        .menu-item:hover, .menu-item.active {
            background: var(--dark-light);
            transform: translateX(5px);
        }

        .menu-item.active {
            background: linear-gradient(90deg, rgba(255, 107, 53, 0.2) 0%, transparent 100%);
            border-left: 4px solid var(--primary);
        }

        .menu-item i {
            margin-right: 15px;
            font-size: 20px;
            width: 24px;
            text-align: center;
        }

        .menu-item span {
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 30px;
            margin-left: 280px;
            overflow-y: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--light-gray);
        }

        .page-title h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }

        .page-title p {
            color: var(--gray);
            margin-top: 5px;
            font-size: 14px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            padding: 12px 20px;
            border-radius: 12px;
            width: 300px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .search-bar:focus-within {
            box-shadow: 0 0 0 2px var(--primary-light);
        }

        .search-bar input {
            border: none;
            outline: none;
            margin-left: 10px;
            width: 100%;
            font-size: 14px;
            background: transparent;
        }

        .notifications {
            position: relative;
            cursor: pointer;
        }

        .notifications i {
            font-size: 20px;
            color: var(--gray);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger);
            color: white;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
        }

        .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .user-profile:hover {
            background: var(--light-gray);
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
            border: 2px solid var(--primary-light);
        }

        .user-info h4 {
            font-size: 14px;
            font-weight: 600;
        }

        .user-info p {
            font-size: 12px;
            color: var(--gray);
        }

        /* Dashboard Cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-card {
            display: flex;
            align-items: center;
        }

        .stat-card .icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-right: 20px;
            transition: var(--transition);
        }

        .stat-card:hover .icon {
            transform: scale(1.1);
        }

        .orders-icon { background: rgba(33, 150, 243, 0.15); color: #2196f3; }
        .revenue-icon { background: rgba(76, 175, 80, 0.15); color: var(--success); }
        .customers-icon { background: rgba(255, 107, 53, 0.15); color: var(--primary); }
        .rating-icon { background: rgba(255, 152, 0, 0.15); color: var(--warning); }

        .stat-card .info h3 {
            font-size: 28px;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .stat-card .info p {
            color: var(--gray);
            font-size: 14px;
            font-weight: 500;
        }

        .trend {
            display: flex;
            align-items: center;
            margin-top: 8px;
            font-size: 13px;
            font-weight: 500;
        }

        .trend.up {
            color: var(--success);
        }

        .trend.down {
            color: var(--danger);
        }

        /* Charts and Orders */
        .charts-orders {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }

        .chart-container {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--shadow);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .chart-header h2 {
            font-size: 18px;
            font-weight: 600;
        }

        .chart-actions {
            display: flex;
            gap: 10px;
        }

        .chart-actions button {
            background: var(--light);
            border: none;
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .chart-actions button.active {
            background: var(--primary);
            color: white;
        }

        .chart {
            height: 280px;
            background: #f9f9f9;
            border-radius: 12px;
            display: flex;
            align-items: flex-end;
            padding: 15px;
            gap: 18px;
        }

        .chart-bar {
            flex: 1;
            background: linear-gradient(to top, var(--primary), var(--primary-light));
            border-radius: 6px 6px 0 0;
            position: relative;
            transition: height 0.5s ease;
            cursor: pointer;
        }

        .chart-bar:hover {
            opacity: 0.9;
        }

        .chart-bar span {
            position: absolute;
            bottom: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            font-weight: 500;
            color: var(--gray);
        }

        .chart-bar .value {
            position: absolute;
            top: -25px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            color: var(--dark);
        }

        /* Recent Orders */
        .recent-orders {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--shadow);
        }

        .orders-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .orders-header h2 {
            font-size: 18px;
            font-weight: 600;
        }

        .view-all {
            color: var(--primary);
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .view-all i {
            margin-left: 5px;
            transition: var(--transition);
        }

        .view-all:hover i {
            transform: translateX(3px);
        }

        .order-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid var(--light-gray);
            transition: var(--transition);
        }

        .order-item:hover {
            background: rgba(255, 107, 53, 0.03);
            transform: translateX(5px);
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-item img {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 15px;
        }

        .order-info {
            flex: 1;
        }

        .order-info h4 {
            font-size: 15px;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .order-info p {
            font-size: 13px;
            color: var(--gray);
        }

        .order-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .delivered { background: rgba(76, 175, 80, 0.15); color: var(--success); }
        .preparing { background: rgba(255, 152, 0, 0.15); color: var(--warning); }
        .cancelled { background: rgba(244, 67, 54, 0.15); color: var(--danger); }

        /* Popular Items */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: 20px;
            font-weight: 600;
        }

        .popular-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .food-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .food-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .food-card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            transition: var(--transition);
        }

        .food-card:hover img {
            transform: scale(1.05);
        }

        .food-info {
            padding: 18px;
        }

        .food-info h3 {
            font-size: 16px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .food-info p {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }

        .food-info .rating {
            color: var(--warning);
            margin-right: 5px;
        }

        .food-info .price {
            color: var(--primary);
            font-weight: bold;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-to-cart {
            background: var(--primary);
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
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

        /* Responsive */
        @media (max-width: 1200px) {
            .charts-orders {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 992px) {
            .sidebar {
                width: 80px;
                padding: 20px 10px;
            }
            .sidebar .logo h1, .sidebar .menu-item span {
                display: none;
            }
            .sidebar .logo {
                justify-content: center;
                padding-bottom: 15px;
                margin-bottom: 30px;
            }
            .sidebar .logo i {
                margin-right: 0;
            }
            .sidebar .menu-item {
                justify-content: center;
                padding: 15px;
            }
            .sidebar .menu-item i {
                margin-right: 0;
            }
            .main-content {
                margin-left: 80px;
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            .header-right {
                width: 100%;
                justify-content: space-between;
            }
            .search-bar {
                width: 100%;
            }
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
            .popular-items {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 0;
                padding: 0;
                overflow: hidden;
            }
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
            .user-info {
                display: none;
            }
        }
    </style>
</head>
<body>
   
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <i class="fas fa-utensils"></i>
            <h1>E-Food</h1>
        </div>
        <a href="{{ url('admin/Admin') }}" class="menu-item active">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('food.list') }}" class="menu-item">
            <i class="fas fa-utensils"></i>
            <span>E-Food</span>
        </a>
        <a href="{{ route('order.list') }}" class="menu-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Orders</span>
        </a>
        <a href="{{ route('customer.list') }}" class="menu-item">
            <i class="fas fa-users"></i>
            <span>Customers</span>
        </a>
        <a href="{{ route('payment.list') }}" class="menu-item">
            <i class="fas fa-credit-card"></i>
            <span>Payment</span>
        </a>
        <a href="{{ route('report.list') }}" class="menu-item">
            <i class="fas fa-chart-bar"></i>
            <span>Report</span>
        </a>
    </div>

     <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>