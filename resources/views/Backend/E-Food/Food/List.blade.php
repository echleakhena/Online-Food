@extends('Backend.Layout.App')
@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>Food Management</h2>
            <p>Manage your food items and menu</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search food items..." id="foodSearch">
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

    <!-- Food Actions -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>Food Items</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <select class="filter-select">
                    <option value="all">All Categories</option>
                    <option value="main">Main Courses</option>
                    <option value="appetizer">Appetizers</option>
                    <option value="dessert">Desserts</option>
                    <option value="beverage">Beverages</option>
                </select>
                <select class="filter-select">
                    <option value="all">All Status</option>
                    <option value="active">Available</option>
                    <option value="inactive">Unavailable</option>
                </select>
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
                <button class="add-food-btn" id="addFoodBtn">
                    <i class="fas fa-plus"></i> Add New Food
                </button>
            </div>
        </div>
    </div>

    <!-- Food Items Table -->
    <div class="card">
        <div class="orders-header">
            <h2>All Food Items</h2>
            <a href="#" class="view-all">Export Data <i class="fas fa-download"></i></a>
        </div>
        
        <div class="food-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Food Item</th>
                        <th style="text-align: left; padding: 15px 10px;">Category</th>
                        <th style="text-align: left; padding: 15px 10px;">Price</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: left; padding: 15px 10px;">Created</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">Classic Burger</div>
                                    <div style="font-size: 13px; color: var(--gray);">#FOOD-2001</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">Main Course</td>
                        <td style="padding: 15px 10px;">$12.99</td>
                        <td style="padding: 15px 10px;">
                            <span class="food-status available">Available</span>
                        </td>
                        <td style="padding: 15px 10px;">15 Jan 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing 1 to 5 of 15 food items
            </div>
            <div style="display: flex; gap: 10px;">
                <button class="pagination-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Additional styles for the food page */
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
    
    .add-food-btn {
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        background: var(--secondary);
        color: white;
        font-size: 14px;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .add-food-btn:hover {
        background: #26a69a;
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
    
    .delete-btn {
        background: rgba(244, 67, 54, 0.15);
        color: var(--danger);
    }
    
    .delete-btn:hover {
        background: rgba(244, 67, 54, 0.25);
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
    
    .food-table {
        overflow-x: auto;
    }
    
    .food-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .available { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    .unavailable { background: rgba(244, 67, 54, 0.15); color: var(--danger); }
    
    @media (max-width: 992px) {
        .food-table {
            overflow-x: scroll;
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
    }
</style>

@endsection