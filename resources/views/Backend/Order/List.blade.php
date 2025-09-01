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
                <button class="filter-btn" id="addOrderBtn" data-bs-toggle="modal" data-bs-target="#addOrderModal">
                    <i class="fas fa-plus"></i> Add New Order
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
                    @foreach($orders as $order)
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">{{ $order->id }}</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>{{ $order->customer->name }}</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">{{ $order->food->name }}</td>
                        <td style="padding: 15px 10px;">${{ $order->total }}</td>
                        <td style="padding: 15px 10px;">{{ $order->created_at->format('d M Y') }}</td>
                        <td style="padding: 15px 10px;">
                            <span class="order-status delivered">Delivered</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn" data-bs-toggle="modal" data-bs-target="#viewOrderModal" data-orderid="{{ $order->id }}" data-orderuser="{{ $order->user->username }}" data-orderfood="{{ $order->food->name }}" data-ordercustomer="{{ $order->customer->name }}" data-orderqty="{{ $order->qty }}" data-ordersubtotal="{{ $order->subtotal }}" data-ordertotal="{{ $order->total }}" data-orderlocation="{{ $order->location }}" data-ordernote="{{ $order->note }}" data-ordercreated="{{ $order->created_at->format('d M Y') }}">
                                <i class="fas fa-eye"></i>
                            </button>
                            <a href="{{ route('order.edit', $order->id) }}" class="action-btn edit-btn"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
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

<!-- Modal for Viewing Order Details -->
<div class="modal fade" id="viewOrderModal" tabindex="-1" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewOrderModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Order ID:</strong> <span id="viewOrderId"></span></p>
                <p><strong>Staff/User:</strong> <span id="viewOrderUser"></span></p>
                <p><strong>Food Item:</strong> <span id="viewOrderFood"></span></p>
                <p><strong>Customer:</strong> <span id="viewOrderCustomer"></span></p>
                <p><strong>Quantity:</strong> <span id="viewOrderQty"></span></p>
                <p><strong>Subtotal:</strong> <span id="viewOrderSubtotal"></span></p>
                <p><strong>Total:</strong> <span id="viewOrderTotal"></span></p>
                <p><strong>Location:</strong> <span id="viewOrderLocation"></span></p>
                <p><strong>Note:</strong> <span id="viewOrderNote"></span></p>
                <p><strong>Created At:</strong> <span id="viewOrderCreated"></span></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding New Order -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderModalLabel">Add New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="orderUser" class="form-label">Staff/User</label>
                        <select class="form-control" id="orderUser" name="user_id" required>
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="orderFood" class="form-label">Food Item</label>
                        <select class="form-control" id="orderFood" name="food_id" required>
                            <option value="">Select Food</option>
                            @foreach($foods as $food)
                                <option value="{{ $food->id }}">{{ $food->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="orderCustomer" class="form-label">Customer</label>
                        <select class="form-control" id="orderCustomer" name="customer_id" required>
                            <option value="">Select Customer</option>
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="orderQty" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="orderQty" name="qty" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="orderSubtotal" class="form-label">Subtotal</label>
                        <input type="number" class="form-control" id="orderSubtotal" name="subtotal" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="orderTotal" class="form-label">Total</label>
                        <input type="number" class="form-control" id="orderTotal" name="total" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="orderLocation" class="form-label">Location</label>
                        <input type="text" class="form-control" id="orderLocation" name="location">
                    </div>
                    <div class="mb-3">
                        <label for="orderNote" class="form-label">Note</label>
                        <input type="text" class="form-control" id="orderNote" name="note">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Order</button>
                </div>
            </form>
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
        
        // View order details in modal
        const viewOrderButtons = document.querySelectorAll('.view-btn');
        viewOrderButtons.forEach(button => {
            button.addEventListener('click', function() {
                const orderId = this.getAttribute('data-orderid');
                const orderUser = this.getAttribute('data-orderuser');
                const orderFood = this.getAttribute('data-orderfood');
                const orderCustomer = this.getAttribute('data-ordercustomer');
                const orderQty = this.getAttribute('data-orderqty');
                const orderSubtotal = this.getAttribute('data-ordersubtotal');
                const orderTotal = this.getAttribute('data-ordertotal');
                const orderLocation = this.getAttribute('data-orderlocation');
                const orderNote = this.getAttribute('data-ordernote');
                const orderCreated = this.getAttribute('data-ordercreated');
                
                document.getElementById('viewOrderId').textContent = orderId;
                document.getElementById('viewOrderUser').textContent = orderUser;
                document.getElementById('viewOrderFood').textContent = orderFood;
                document.getElementById('viewOrderCustomer').textContent = orderCustomer;
                document.getElementById('viewOrderQty').textContent = orderQty;
                document.getElementById('viewOrderSubtotal').textContent = orderSubtotal;
                document.getElementById('viewOrderTotal').textContent = orderTotal;
                document.getElementById('viewOrderLocation').textContent = orderLocation;
                document.getElementById('viewOrderNote').textContent = orderNote;
                document.getElementById('viewOrderCreated').textContent = orderCreated;
            });
        });
    });
</script>
@endsection