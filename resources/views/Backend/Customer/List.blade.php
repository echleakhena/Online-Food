@extends('Backend.Layout.App')
@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>Customer Management</h2>
            <p>View and manage all customer information</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search customers..." id="customerSearch">
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

 
    <!-- Customer Filters -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>Filter Customers</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <select class="filter-select">
                    <option value="all">All Customers</option>
                    <option value="active">Active</option>
                    <option value="new">New</option>
                    <option value="vip">VIP</option>
                    <option value="inactive">Inactive</option>
                </select>
                <select class="filter-select">
                    <option value="all">All Locations</option>
                    <option value="local">Local</option>
                    <option value="out-of-town">Out of Town</option>
                </select>
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
                <button class="add-customer-btn" id="addCustomerBtn">
                    <i class="fas fa-plus"></i> Add Customer
                </button>
            </div>
        </div>
    </div>

    <!-- Customers Table -->
    <div class="card">
        <div class="orders-header">
            <h2>All Customers</h2>
            <a href="#" class="view-all">Export Data <i class="fas fa-download"></i></a>
        </div>
        
        <div class="customers-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Customer</th>
                        <th style="text-align: left; padding: 15px 10px;">Contact</th>
                        <th style="text-align: left; padding: 15px 10px;">Orders</th>
                        <th style="text-align: left; padding: 15px 10px;">Total Spent</th>
                        <th style="text-align: left; padding: 15px 10px;">Last Order</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; object-fit: cover;">
                                <div>
                                    <div style="font-weight: 600;">Sarah Johnson</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CUS-3248</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">
                            <div>sarah.j@example.com</div>
                            <div style="font-size: 13px; color: var(--gray);">(555) 123-4567</div>
                        </td>
                        <td style="padding: 15px 10px;">12</td>
                        <td style="padding: 15px 10px;">$428.50</td>
                        <td style="padding: 15px 10px;">10 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="customer-status active">Active</span>
                        </td>
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
                Showing 1 to 5 of 256 customers
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
    /* Additional styles for the customer page */
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
    
    .add-customer-btn {
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
    
    .add-customer-btn:hover {
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
    
    .customers-table {
        overflow-x: auto;
    }
    
    .customer-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .active { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    .vip { background: rgba(156, 39, 176, 0.15); color: #9c27b0; }
    .new { background: rgba(33, 150, 243, 0.15); color: #2196f3; }
    
    @media (max-width: 992px) {
        .customers-table {
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

<script>
    // JavaScript for customer page functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('customerSearch');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('.customers-table tbody tr');
                
                rows.forEach(row => {
                    const name = row.querySelector('td:first-child').textContent.toLowerCase();
                    const email = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    
                    if (name.includes(searchTerm) || email.includes(searchTerm)) {
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
        
        // Add customer button
        const addCustomerBtn = document.getElementById('addCustomerBtn');
        if (addCustomerBtn) {
            addCustomerBtn.addEventListener('click', function() {
                alert('Add customer functionality would open a modal here.');
                // In a real application, this would open a modal form
            });
        }
        
        // Action buttons
        const viewButtons = document.querySelectorAll('.view-btn');
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const customerName = this.closest('tr').querySelector('td:first-child div div:first-child').textContent;
                alert(`View details for customer: ${customerName}`);
            });
        });
        
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const customerName = this.closest('tr').querySelector('td:first-child div div:first-child').textContent;
                alert(`Edit customer: ${customerName}`);
            });
        });
        
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const customerName = this.closest('tr').querySelector('td:first-child div div:first-child').textContent;
                if (confirm(`Are you sure you want to delete ${customerName}?`)) {
                    alert(`Customer ${customerName} would be deleted.`);
                }
            });
        });
    });
</script>
@endsection