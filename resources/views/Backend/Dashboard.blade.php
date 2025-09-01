@extends('Backend.Layout.App')
@section('content')
      <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="page-title">
                <h2>Dashboard</h2>
                <p>Welcome back, Admin! Here's what's happening today.</p>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="notifications">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </div>
                <div class="user-profile">
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=ff6b35&color=fff" alt="Admin User">
                    <div class="user-info">
                        <h4>Admin User</h4>
                        <p>Administrator</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="dashboard-cards">
            @foreach($orders as $order)
            <div class="card stat-card">
                <div class="icon orders-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="info">
                    <h3>{{$totalOrders }}</h3>
                    <p>Total Orders</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i>
                        <span>12% since last month</span>
                    </div>
                </div>
            </div>
            <div class="card stat-card">
                <div class="icon revenue-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="info">
                    <h3>{{$totalRevenue }}</h3>
                    <p>Total Revenue</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i>
                        <span>8% since last month</span>
                    </div>
                </div>
            </div>
            <div class="card stat-card">
                <div class="icon customers-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="info">
                    <h3>{{$totalCustomers }}</h3>
                    <p>Total Customers</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i>
                        <span>5% since last month</span>
                    </div>
                </div>
            </div>
            <div class="card stat-card">
                <div class="icon rating-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="info">
                    <h3>4.8</h3>
                    <p>Average Rating</p>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i>
                        <span>0.2 since last month</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Charts and Recent Orders -->
        <div class="charts-orders">
            <div class="chart-container">
                <div class="chart-header">
                    <h2>Revenue Overview</h2>
                    <div class="chart-actions">
                        <button class="active">Weekly</button>
                        <button>Monthly</button>
                        <button>Yearly</button>
                    </div>
                </div>
                <div class="chart">
                    <div class="chart-bar" style="height: 65%;">
                        <span class="value">$1,250</span>
                        <span>Mon</span>
                    </div>
                    <div class="chart-bar" style="height: 80%;">
                        <span class="value">$1,540</span>
                        <span>Tue</span>
                    </div>
                    <div class="chart-bar" style="height: 60%;">
                        <span class="value">$1,150</span>
                        <span>Wed</span>
                    </div>
                    <div class="chart-bar" style="height: 90%;">
                        <span class="value">$1,780</span>
                        <span>Thu</span>
                    </div>
                    <div class="chart-bar" style="height: 75%;">
                        <span class="value">$1,420</span>
                        <span>Fri</span>
                    </div>
                    <div class="chart-bar" style="height: 95%;">
                        <span class="value">$1,890</span>
                        <span>Sat</span>
                    </div>
                    <div class="chart-bar" style="height: 85%;">
                        <span class="value">$1,630</span>
                        <span>Sun</span>
                    </div>
                </div>
            </div>
            <div class="recent-orders">
                <div class="orders-header">
                    <h2>Recent Orders</h2>
                    <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="order-item">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pizza">
                    <div class="order-info">
                        <h4>Margherita Pizza</h4>
                        <p>#ORD-0025 | 12:30 PM</p>
                    </div>
                    <span class="order-status delivered">Delivered</span>
                </div>
                <div class="order-item">
                    <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Burger">
                    <div class="order-info">
                        <h4>Classic Burger</h4>
                        <p>#ORD-0026 | 12:45 PM</p>
                    </div>
                    <span class="order-status preparing">Preparing</span>
                </div>
                <div class="order-item">
                    <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pasta">
                    <div class="order-info">
                        <h4>Spaghetti Marinara</h4>
                        <p>#ORD-0027 | 1:15 PM</p>
                    </div>
                    <span class="order-status preparing">Preparing</span>
                </div>
                <div class="order-item">
                    <img src="https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Salad">
                    <div class="order-info">
                        <h4>Caesar Salad</h4>
                        <p>#ORD-0028 | 1:30 PM</p>
                    </div>
                    <span class="order-status delivered">Delivered</span>
                </div>
            </div>
        </div>

        <!-- Popular Items -->
        <div class="section-header">
            <h2>Popular Items</h2>
            <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="popular-items">
            <div class="food-card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pizza">
                <div class="food-info">
                    <h3>Margherita Pizza</h3>
                    <p><i class="fas fa-star rating"></i> 4.8 (124 reviews)</p>
                    <div class="price">
                        $12.99
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="food-card">
                <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Burger">
                <div class="food-info">
                    <h3>Classic Burger</h3>
                    <p><i class="fas fa-star rating"></i> 4.7 (98 reviews)</p>
                    <div class="price">
                        $9.99
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="food-card">
                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pasta">
                <div class="food-info">
                    <h3>Spaghetti Marinara</h3>
                    <p><i class="fas fa-star rating"></i> 4.6 (87 reviews)</p>
                    <div class="price">
                        $11.49
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="food-card">
                <img src="https://images.unsplash.com/photo-1484980972926-edee96e0960d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Salad">
                <div class="food-info">
                    <h3>Caesar Salad</h3>
                    <p><i class="fas fa-star rating"></i> 4.5 (76 reviews)</p>
                    <div class="price">
                        $8.99
                        <div class="add-to-cart">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection