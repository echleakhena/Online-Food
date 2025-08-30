@extends('Backend.Layout.App')

@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>User Management</h2>
            <p>Manage all system users and their permissions</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search users..." id="userSearch">
            </div>
            <div class="notifications">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="user-profile">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Profile">
                <div class="user-info">
                    <h4>Admin User</h4>
                    <p>System Administrator</p>
                </div>
            </div>
        </div>
    </div>

  
    <!-- User Filters -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>User Management</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <select class="filter-select">
                    <option value="all">All Roles</option>
                    <option value="admin">Administrator</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                    <option value="customer">Customer</option>
                </select>
                <select class="filter-select">
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="pending">Pending</option>
                    <option value="suspended">Suspended</option>
                </select>
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
                <button class="add-user-btn" id="addUserBtn">
                    <i class="fas fa-plus"></i> Add New User
                </button>
            </div>
        </div>
    </div>

    <!-- Users Table -->
    <div class="card">
        <div class="orders-header">
            <h2>All Users</h2>
            <a href="#" class="view-all">Export Users <i class="fas fa-download"></i></a>
        </div>
        
        <div class="users-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">User</th>
                        <th style="text-align: left; padding: 15px 10px;">Email</th>
                        <th style="text-align: left; padding: 15px 10px;">Role</th>
                        <th style="text-align: left; padding: 15px 10px;">Joined</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">Michael Chen</div>
                                    <div style="font-size: 13px; color: var(--gray);">@michaelchen</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">michael.chen@example.com</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-role admin">Administrator</span>
                        </td>
                        <td style="padding: 15px 10px;">15 Jan 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">Sarah Johnson</div>
                                    <div style="font-size: 13px; color: var(--gray);">@sarahj</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">sarah.j@example.com</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-role manager">Manager</span>
                        </td>
                        <td style="padding: 15px 10px;">22 Feb 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">Emma Rodriguez</div>
                                    <div style="font-size: 13px; color: var(--gray);">@emmar</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">emma.r@example.com</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-role staff">Staff</span>
                        </td>
                        <td style="padding: 15px 10px;">5 Mar 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-status inactive">Inactive</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">David Wilson</div>
                                    <div style="font-size: 13px; color: var(--gray);">@davidw</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">david.w@example.com</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-role customer">Customer</span>
                        </td>
                        <td style="padding: 15px 10px;">9 Apr 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-status active">Active</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">Jennifer Lee</div>
                                    <div style="font-size: 13px; color: var(--gray);">@jenniferl</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">jennifer.l@example.com</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-role customer">Customer</span>
                        </td>
                        <td style="padding: 15px 10px;">8 May 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-status pending">Pending</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                            <button class="action-btn approve-btn"><i class="fas fa-check"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing 1 to 5 of 248 users
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
    /* Additional styles for the user page */
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
    
    .add-user-btn {
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
    
    .add-user-btn:hover {
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
    
    .approve-btn {
        background: rgba(76, 175, 80, 0.15);
        color: var(--success);
    }
    
    .approve-btn:hover {
        background: rgba(76, 175, 80, 0.25);
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
    
    .users-table {
        overflow-x: auto;
    }
    
    .user-role {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .admin { background: rgba(244, 67, 54, 0.15); color: var(--danger); }
    .manager { background: rgba(255, 152, 0, 0.15); color: var(--warning); }
    .staff { background: rgba(33, 150, 243, 0.15); color: #2196f3; }
    .customer { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    
    .user-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .active { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    .inactive { background: rgba(158, 158, 158, 0.15); color: #9e9e9e; }
    .pending { background: rgba(255, 152, 0, 0.15); color: var(--warning); }
    .suspended { background: rgba(244, 67, 54, 0.15); color: var(--danger); }
    
    @media (max-width: 992px) {
        .users-table {
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

@endsection