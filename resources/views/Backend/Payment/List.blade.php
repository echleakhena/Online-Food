@extends('Backend.Layout.App')

@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>Payment Management</h2>
            <p>View and manage all payment transactions</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search payments..." id="paymentSearch">
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

    

    <!-- Payment Filters -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>Filter Payments</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <select class="filter-select">
                    <option value="all">All Methods</option>
                    <option value="card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash">Cash</option>
                    <option value="bank">Bank Transfer</option>
                </select>
                <select class="filter-select">
                    <option value="all">All Statuses</option>
                    <option value="completed">Completed</option>
                    <option value="pending">Pending</option>
                    <option value="failed">Failed</option>
                    <option value="refunded">Refunded</option>
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
                <button class="add-payment-btn">
                    <i class="fas fa-file-export"></i> Export Report
                </button>
            </div>
        </div>
    </div>

    <!-- Payments Table -->
    <div class="card">
        <div class="orders-header">
            <h2>Recent Payments</h2>
            <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
        </div>
        
        <div class="payments-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Payment ID</th>
                        <th style="text-align: left; padding: 15px 10px;">Order ID</th>
                        <th style="text-align: left; padding: 15px 10px;">Customer</th>
                        <th style="text-align: left; padding: 15px 10px;">Amount</th>
                        <th style="text-align: left; padding: 15px 10px;">Method</th>
                        <th style="text-align: left; padding: 15px 10px;">Date</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#PAY-7845</td>
                        <td style="padding: 15px 10px;">#TB-3248</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>Sarah Johnson</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">$32.50</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <i class="fab fa-cc-visa" style="color: #1a1f71; font-size: 20px; margin-right: 8px;"></i>
                                <div>Credit Card</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">10 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="payment-status completed">Completed</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn refund-btn"><i class="fas fa-undo"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#PAY-7844</td>
                        <td style="padding: 15px 10px;">#TB-3247</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>Michael Chen</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">$45.75</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <i class="fab fa-paypal" style="color: #00457C; font-size: 20px; margin-right: 8px;"></i>
                                <div>PayPal</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">10 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="payment-status pending">Pending</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn refund-btn"><i class="fas fa-undo"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#PAY-7843</td>
                        <td style="padding: 15px 10px;">#TB-3246</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>Emma Rodriguez</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">$18.99</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-money-bill-wave" style="color: #28a745; font-size: 20px; margin-right: 8px;"></i>
                                <div>Cash</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">9 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="payment-status completed">Completed</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn refund-btn"><i class="fas fa-undo"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#PAY-7842</td>
                        <td style="padding: 15px 10px;">#TB-3245</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>David Wilson</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">$62.40</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <i class="fab fa-cc-mastercard" style="color: #eb001b; font-size: 20px; margin-right: 8px;"></i>
                                <div>Credit Card</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">9 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="payment-status failed">Failed</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn retry-btn"><i class="fas fa-redo"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#PAY-7841</td>
                        <td style="padding: 15px 10px;">#TB-3244</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 10px;">
                                <div>Jennifer Lee</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">$29.95</td>
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-university" style="color: #6610f2; font-size: 20px; margin-right: 8px;"></i>
                                <div>Bank Transfer</div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">8 Nov 2023</td>
                        <td style="padding: 15px 10px;">
                            <span class="payment-status refunded">Refunded</span>
                        </td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn details-btn"><i class="fas fa-info-circle"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing 1 to 5 of 142 payments
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
    /* Additional styles for the payment page */
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
    
    .add-payment-btn {
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
    
    .add-payment-btn:hover {
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
    
    .refund-btn {
        background: rgba(255, 152, 0, 0.15);
        color: var(--warning);
    }
    
    .refund-btn:hover {
        background: rgba(255, 152, 0, 0.25);
    }
    
    .retry-btn {
        background: rgba(76, 175, 80, 0.15);
        color: var(--success);
    }
    
    .retry-btn:hover {
        background: rgba(76, 175, 80, 0.25);
    }
    
    .details-btn {
        background: rgba(103, 58, 183, 0.15);
        color: #673ab7;
    }
    
    .details-btn:hover {
        background: rgba(103, 58, 183, 0.25);
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
    
    .payments-table {
        overflow-x: auto;
    }
    
    .payment-status {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .completed { background: rgba(76, 175, 80, 0.15); color: var(--success); }
    .pending { background: rgba(255, 152, 0, 0.15); color: var(--warning); }
    .failed { background: rgba(244, 67, 54, 0.15); color: var(--danger); }
    .refunded { background: rgba(103, 58, 183, 0.15); color: #673ab7; }
    
    @media (max-width: 992px) {
        .payments-table {
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
    // JavaScript for payment page functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Search functionality
        const searchInput = document.getElementById('paymentSearch');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const rows = document.querySelectorAll('.payments-table tbody tr');
                
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
        
        // Action buttons
        const viewButtons = document.querySelectorAll('.view-btn');
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const paymentId = this.closest('tr').querySelector('td:first-child').textContent;
                alert(`View details for payment: ${paymentId}`);
            });
        });
        
        const refundButtons = document.querySelectorAll('.refund-btn');
        refundButtons.forEach(button => {
            button.addEventListener('click', function() {
                const paymentId = this.closest('tr').querySelector('td:first-child').textContent;
                if (confirm(`Are you sure you want to refund payment ${paymentId}?`)) {
                    alert(`Payment ${paymentId} would be refunded.`);
                }
            });
        });
        
        const retryButtons = document.querySelectorAll('.retry-btn');
        retryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const paymentId = this.closest('tr').querySelector('td:first-child').textContent;
                alert(`Retry payment: ${paymentId}`);
            });
        });
    });
</script>
@endsection