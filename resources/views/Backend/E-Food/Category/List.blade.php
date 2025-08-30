@extends('Backend.Layout.App')
@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>Category Management</h2>
            <p>Organize your menu with categories</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search categories..." id="categorySearch">
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

 

    <!-- Category Actions -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>Category Management</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <select class="filter-select">
                    <option value="all">All Categories</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="featured">Featured</option>
                </select>
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
                <button class="add-category-btn" id="addCategoryBtn">
                    <i class="fas fa-plus"></i> Add New Category
                </button>
            </div>
        </div>
    </div>

    <!-- Categories Table -->
    <div class="card">
        <div class="orders-header">
            <h2>All Categories</h2>
            <a href="#" class="view-all">Export Data <i class="fas fa-download"></i></a>
        </div>
        
        <div class="categories-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Category</th>
                        <th style="text-align: left; padding: 15px 10px;">Items</th>
                        <th style="text-align: left; padding: 15px 10px;">Description</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: left; padding: 15px 10px;">Created</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(135deg, #ff6b35, #ff9e68); margin-right: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Main Course</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CAT-1001</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">24</td>
                        <td style="padding: 15px 10px;">Hearty and satisfying dishes</td>
                        <td style="padding: 15px 10px;">
                            <span class="category-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px;">12 Jan 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(135deg, #2ec4b6, #6ee7d7); margin-right: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-pizza-slice"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Appetizers</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CAT-1002</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">18</td>
                        <td style="padding: 15px 10px;">Small dishes to start your meal</td>
                        <td style="padding: 15px 10px;">
                            <span class="category-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px;">15 Feb 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(135deg, #ff9f43, #ffbe76); margin-right: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-ice-cream"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Desserts</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CAT-1003</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">15</td>
                        <td style="padding: 15px 10px;">Sweet treats to finish your meal</td>
                        <td style="padding: 15px 10px;">
                            <span class="category-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px;">22 Mar 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(135deg, #54a0ff, #7ed6df); margin-right: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-coffee"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Beverages</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CAT-1004</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">22</td>
                        <td style="padding: 15px 10px;">Refreshing drinks and beverages</td>
                        <td style="padding: 15px 10px;">
                            <span class="category-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px;">5 Apr 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(135deg, #a29bfe, #dfe6e9); margin-right: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">Vegetarian</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CAT-1005</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">14</td>
                        <td style="padding: 15px 10px;">Plant-based dishes</td>
                        <td style="padding: 15px 10px;">
                            <span class="category-status inactive">Inactive</span>
                        </td>
                        <td style="padding: 15px 10px;">18 May 2023</td>
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
                Showing 1 to 5 of 12 categories
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
    /* Additional styles for the category page */
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
    
    .add-category-btn {
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
    
    .add-category-btn:hover {
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
    
    .categories-table {
        overflow-x: auto;
    }
    
    .category-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .active { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    .inactive { background: rgba(158, 158, 158, 0.15); color: #9e9e9e; }
    
    /* Custom icons for category cards */
    .categories-icon { background: rgba(63, 81, 181, 0.15); color: #3f51b5; }
    .items-icon { background: rgba(255, 107, 53, 0.15); color: var(--primary); }
    .popular-icon { background: rgba(244, 67, 54, 0.15); color: var(--danger); }
    .status-icon { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    
    @media (max-width: 992px) {
        .categories-table {
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
        
        .dashboard-cards {
            grid-template-columns: 1fr 1fr;
        }
    }
    
    @media (max-width: 576px) {
        .dashboard-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    // JavaScript for category page functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('categorySearch');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('.categories-table tbody tr');
                
                rows.forEach(row => {
                    const name = row.querySelector('td:first-child').textContent.toLowerCase();
                    
                    if (name.includes(searchTerm)) {
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
        
        // Add category button
        const addCategoryBtn = document.getElementById('addCategoryBtn');
        if (addCategoryBtn) {
            addCategoryBtn.addEventListener('click', function() {
                alert('Add category functionality would open a modal here.');
                // In a real application, this would open a modal form
            });
        }
        
        // Action buttons
        const viewButtons = document.querySelectorAll('.view-btn');
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryName = this.closest('tr').querySelector('td:first-child div div:first-child').textContent;
                alert(`View details for category: ${categoryName}`);
            });
        });
        
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryName = this.closest('tr').querySelector('td:first-child div div:first-child').textContent;
                alert(`Edit category: ${categoryName}`);
            });
        });
        
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryName = this.closest('tr').querySelector('td:first-child div div:first-child').textContent;
                if (confirm(`Are you sure you want to delete the ${categoryName} category?`)) {
                    alert(`Category ${categoryName} would be deleted.`);
                }
            });
        });
    });
</script>
@endsection