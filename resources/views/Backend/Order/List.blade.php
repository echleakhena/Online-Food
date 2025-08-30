@extends('Backend.Layout.App')

@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>Order Management</h2>
            <p>View and manage all customer orders</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search orders..." id="orderSearch">
            </div>
            <div class="notifications">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="user-profile">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Profile">
                <div class="user-info">
                    <h4>Admin User</h4>
                    <p>Restaurant Manager</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Filters -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h3>Filter Orders</h3>
            <div style="display: flex; gap: 15px;">
                <select class="filter-select">
                    <option value="all">All Statuses</option>
                    <option value="pending">Pending</option>
                    <option value="preparing">Preparing</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
                <select class="filter-select">
                    <option value="all">All Dates</option>
                    <option value="today">Today</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
            </div>
        </div>
    </div>

  
    <!-- Orders Table -->
    <div class="card">
        <div class="orders-header">
            <h2>Recent Orders</h2>
            <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
        </div>
        
        <div class="orders-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Order ID</th>
                        <th style="text-align: left; padding: 15px 10px;">Customer</th>
                        <th style="text-align: left; padding: 15px 10px;">Items</th>
                        <th style="text-align: left; padding: 15px 10px;">Total</th>
                        <th style="text-align: left; padding: 15px 10px;">Date</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#TB-3248</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>Sarah Johnson</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">2 Items</td>
                        <td style="padding: 15px 10px;">$32.50</td>
                        <td style="padding: 15px 10px;">10 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="order-status delivered">Delivered</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#TB-3245</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>David Wilson</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">4 Items</td>
                        <td style="padding: 15px 10px;">$62.40</td>
                        <td style="padding: 15px 10px;">9 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="order-status cancelled">Cancelled</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#TB-3244</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>Jennifer Lee</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">2 Items</td>
                        <td style="padding: 15px 10px;">$29.95</td>
                        <td style="padding: 15px 10px;">8 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="order-status preparing">Preparing</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing 1 to 5 of 142 orders
            </div>
            <div style="display: flex; gap: 10px;">
                <button class="pagination-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn">4</button>
                <button class="pagination-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Additional styles for the order page */
    .filter-select {
        padding: 10px 15px;
        border-radius: 8px;
        border: 1px solid var(--light-gray);
        background: white;
        color: var(--dark);
        font-size: 14px;
        cursor: pointer;
    }
    
    .filter-btn {
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        background: var(--primary);
        color: white;
        font-size: 14px;
        cursor: pointer;
        transition: var(--transition);
    }
    
    .filter-btn:hover {
        background: var(--primary-dark);
    }
    
    .action-btn {
        width: 35px;
        height: 35px;
        border-radius: 8px;
        border: none;
        margin: 0 5px;
        cursor: pointer;
        transition: var(--transition);
    }
    
    .view-btn {
        background: rgba(33, 150, 243, 0.15);
        color: #2196f3;
    }
    
    .view-btn:hover {
        background: rgba(33, 150, 243, 0.25);
    }
    
    .edit-btn {
        background: rgba(255, 152, 0, 0.15);
        color: var(--warning);
    }
    
    .edit-btn:hover {
        background: rgba(255, 152, 0, 0.25);
    }
    
    .pagination-btn {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        border: 1px solid var(--light-gray);
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }
    
    .pagination-btn:hover, .pagination-btn.active {
        background: var(--primary);
        color: white;
        border-color: var(--primary);
    }
    
    .orders-table {
        overflow-x: auto;
    }
    
    @media (max-width: 992px) {
        .orders-table {
            overflow-x: scroll;
        }
    }
    
    @media (max-width: 768px) {
        .filter-select {
            width: 100%;
            margin-bottom: 10px;
        }
        
        .filter-btn {
            width: 100%;
        }
    }
</style>

<script>
    // Simple JavaScript for interactivity
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('orderSearch');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('.orders-table tbody tr');
                
                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
        
        // Pagination buttons
        const paginationButtons = document.querySelectorAll('.pagination-btn');
        paginationButtons.forEach(button => {
            button.addEventListener('click', function() {
                paginationButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>
@endsection