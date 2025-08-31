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
                <img src="" alt="User Profile">
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
                    <option value="author">Author</option>
                </select>               
                <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button>
              <a href="{{ route('user.add') }}">  <button class="add-user-btn" id="addUserBtn">
                    <i class="fas fa-plus"></i> Add New User
                </button></a>
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
                        <th style="text-align: left; padding: 15px 10px;">UID</th>
                        <th style="text-align: left; padding: 15px 10px;">User</th>
                        <th style="text-align: left; padding: 15px 10px;">Email</th>
                          <th style="text-align: left; padding: 15px 10px;">Phone</th>
                        <th style="text-align: left; padding: 15px 10px;">Role</th>
                        <th style="text-align: left; padding: 15px 10px;">Joined</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
             <tbody>
                @foreach($users as $user)
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">UID{{ $user->id ?? 'N/A' }}</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="{{ $user->image ? asset('User/'.$user->image) : 'https://randomuser.me/api/portraits/men/32.jpg' }}" 
                                    alt="User" 
                                    style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">{{ $user->username }}</div>
                                    <div style="font-size: 13px; color: var(--gray);">{{ '@'.$user->username }}</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">{{ $user->email ?? 'N/A' }}</td>
                        <td style="padding: 15px 10px;">{{ $user->phone ?? 'N/A' }}</td>
                        <td style="padding: 15px 10px;">
                            <span class="user-role admin">{{ $user->role ?? 'User' }}</span>
                        </td>
                        <td style="padding: 15px 10px;">{{ $user->created_at->format('d M Y') }}</td>
                        <td style="confirmed: 15px 10px;">
                            <span class="user-status {{ $user->status == 'active' ? 'active' : 'active' }}">
                                {{ ucfirst($user->status ?? 'active') }}
                            </span>
                        </td>
                       <td style="padding: 15px 10px; text-align: center;">
                    <div style="display: flex; justify-content: center; gap: 8px;">
                    
                        <button class="action-btn view-btn">
                            <i class="fas fa-eye"></i>
                        </button>


                        <form action="{{ route('user.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="margin: 0;">
                            @csrf
                            <button type="submit" class="action-btn delete-btn">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                       </td>

                    </tr>
                @endforeach
             </tbody>

            </table>
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