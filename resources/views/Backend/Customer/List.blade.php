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
                <img src="" alt="User Profile">
                <div class="user-info">
                    <h4>Admin User</h4>
                    <p>Restaurant Manager</p>
                </div>
            </div>
        </div>
    </div>

 

    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>All Customers</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              
               
             <a href="{{ route('customer.add') }}" class="add-customer-btn" id="addCustomerBtn">
                <i class="fas fa-plus"></i> Add Customer
             </a>



            </div>
        </div>
    </div>


    <div class="card">
        <div class="orders-header">
            <h2>All Customers</h2>
            <a href="#" class="view-all">Export Data <i class="fas fa-download"></i></a>
        </div>
        
        <div class="customers-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Customer ID</th>
                        <th style="text-align: left; padding: 15px 10px;">Customer Name</th>
                        <th style="text-align: left; padding: 15px 10px;">Contact</th>
                        <th style="text-align: left; padding: 15px 10px;">Joined</th>      
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
               <tbody>
    @foreach($customers as  $customer)
        <tr style="border-bottom: 1px solid var(--light-gray);">
         <td style="padding: 15px 10px;">CID{{ $customer->id }}</td>

            <td style="padding: 15px 10px;">
                <div>{{ $customer->name }}</div>
            </td>

            <td style="padding: 15px 10px;">
                <div>{{ $customer->phone }}</div>
            </td>

            <td style="padding: 15px 10px;">
                {{ $customer->created_at->format('d M Y') }}
            </td>

            <td style="padding: 15px 10px; text-align: center;">              
                <form action="{{ route('customer.delete', $customer->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="action-btn delete-btn" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
    @endforeach
</tbody>


            </table>
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


@endsection