@extends('Backend.Layout.App')

@section('content')
<div class="main-content">
    <div class="header">
        <div class="page-title">
            <h2>Reports & Analytics</h2>
            <p>Analyze your business performance with detailed reports</p>
        </div>
        <div class="header-right">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search reports..." id="reportSearch">
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

    <!-- Report Summary Cards -->
    <div class="dashboard-cards" style="margin-bottom: 25px;">
        <div class="card stat-card">
            <div class="icon revenue-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="info">
                <h3>$12,548</h3>
                <p>Total Revenue</p>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 12.5% from last month
                </div>
            </div>
        </div>
        <div class="card stat-card">
            <div class="icon orders-icon">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="info">
                <h3>328</h3>
                <p>Total Orders</p>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 8.3% from last month
                </div>
            </div>
        </div>
        <div class="card stat-card">
            <div class="icon customers-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="info">
                <h3>1,248</h3>
                <p>Total Customers</p>
                <div class="trend up">
                    <i class="fas fa-arrow-up"></i> 5.7% from last month
                </div>
            </div>
        </div>
        
    </div>

    <!-- Report Filters -->
    <div class="card" style="margin-bottom: 25px;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <h3>Generate Reports</h3>
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <select class="filter-select" id="reportType">
                    <option value="sales">Sales Report</option>
                    <option value="orders">Order Report</option>
                    <option value="customers">Customer Report</option>
                    <option value="inventory">Inventory Report</option>
                    <option value="financial">Financial Report</option>
                </select>
                <select class="filter-select" id="timePeriod">
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                    <option value="quarter">This Quarter</option>
                    <option value="year">This Year</option>
                    <option value="custom">Custom Range</option>
                </select>
                
                <!-- Date Range Filter (initially hidden) -->
                <div id="dateRangeFilter" style="display: none; gap: 10px; align-items: center;">
                    <div style="position: relative;">
                        <input type="date" class="filter-select" id="fromDate" style="padding: 10px 15px; width: 150px;">
                        <label style="position: absolute; top: -20px; left: 0; font-size: 12px; color: var(--gray);">From</label>
                    </div>
                    <div style="color: var(--gray);">to</div>
                    <div style="position: relative;">
                        <input type="date" class="filter-select" id="toDate" style="padding: 10px 15px; width: 150px;">
                        <label style="position: absolute; top: -20px; left: 0; font-size: 12px; color: var(--gray);">To</label>
                    </div>
                </div>
                
                <button class="filter-btn" id="generateReportBtn">
                    <i class="fas fa-filter"></i> Generate Report
                </button>
                <button class="add-payment-btn" id="exportPdfBtn">
                    <i class="fas fa-file-export"></i> Export to PDF
                </button>
                <button class="add-payment-btn" style="background: var(--primary);" id="exportExcelBtn">
                    <i class="fas fa-file-excel"></i> Export to Excel
                </button>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="charts-orders" style="margin-bottom: 25px;">
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
                <div class="chart-bar" style="height: 80%;">
                    <div class="value">$3.2K</div>
                    <span>Mon</span>
                </div>
                <div class="chart-bar" style="height: 65%;">
                    <div class="value">$2.6K</div>
                    <span>Tue</span>
                </div>
                <div class="chart-bar" style="height: 90%;">
                    <div class="value">$3.6K</div>
                    <span>Wed</span>
                </div>
                <div class="chart-bar" style="height: 75%;">
                    <div class="value">$3.0K</div>
                    <span>Thu</span>
                </div>
                <div class="chart-bar" style="height: 85%;">
                    <div class="value">$3.4K</div>
                    <span>Fri</span>
                </div>
                <div class="chart-bar" style="height: 95%;">
                    <div class="value">$3.8K</div>
                    <span>Sat</span>
                </div>
                <div class="chart-bar" style="height: 70%;">
                    <div class="value">$2.8K</div>
                    <span>Sun</span>
                </div>
            </div>
        </div>

        <div class="recent-orders">
            <div class="orders-header">
                <h2>Top Selling Items</h2>
                <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="order-item">
                <img src="" alt="Classic Burger">
                <div class="order-info">
                    <h4>Classic Burger</h4>
                    <p>Main Course</p>
                </div>
                <span class="order-status delivered">128 sold</span>
            </div>
          
        </div>
    </div>

    <!-- Reports Table -->
    <div class="card">
        <div class="orders-header">
            <h2>Recent Reports</h2>
            <a href="#" class="view-all">View All <i class="fas fa-chevron-right"></i></a>
        </div>
        
        <div class="payments-table">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--light-gray);">
                        <th style="text-align: left; padding: 15px 10px;">Report ID</th>
                        <th style="text-align: left; padding: 15px 10px;">Report Type</th>
                        <th style="text-align: left; padding: 15px 10px;">Period</th>
                        <th style="text-align: left; padding: 15px 10px;">Generated By</th>
                        <th style="text-align: left; padding: 15px 10px;">Date</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#REP-1045</td>
                        <td style="padding: 15px 10px;">Sales Report</td>
                        <td style="padding: 15px 10px;">November 2023</td>
                        <td style="padding: 15px 10px;">Admin User</td>
                        <td style="padding: 15px 10px;">10 Nov 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn download-btn"><i class="fas fa-download"></i></button>
                            <button class="action-btn share-btn"><i class="fas fa-share-alt"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#REP-1044</td>
                        <td style="padding: 15px 10px;">Order Report</td>
                        <td style="padding: 15px 10px;">October 2023</td>
                        <td style="padding: 15px 10px;">Admin User</td>
                        <td style="padding: 15px 10px;">1 Nov 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn download-btn"><i class="fas fa-download"></i></button>
                            <button class="action-btn share-btn"><i class="fas fa-share-alt"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#REP-1043</td>
                        <td style="padding: 15px 10px;">Customer Report</td>
                        <td style="padding: 15px 10px;">Q3 2023</td>
                        <td style="padding: 15px 10px;">Admin User</td>
                        <td style="padding: 15px 10px;">15 Oct 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn download-btn"><i class="fas fa-download"></i></button>
                            <button class="action-btn share-btn"><i class="fas fa-share-alt"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#REP-1042</td>
                        <td style="padding: 15px 10px;">Inventory Report</td>
                        <td style="padding: 15px 10px;">September 2023</td>
                        <td style="padding: 15px 10px;">Admin User</td>
                        <td style="padding: 15px 10px;">5 Oct 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn download-btn"><i class="fas fa-download"></i></button>
                            <button class="action-btn share-btn"><i class="fas fa-share-alt"></i></button>
                        </td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">#REP-1041</td>
                        <td style="padding: 15px 10px;">Financial Report</td>
                        <td style="padding: 15px 10px;">Q3 2023</td>
                        <td style="padding: 15px 10px;">Admin User</td>
                        <td style="padding: 15px 10px;">1 Oct 2023</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                            <button class="action-btn download-btn"><i class="fas fa-download"></i></button>
                            <button class="action-btn share-btn"><i class="fas fa-share-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing 1 to 5 of 24 reports
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
    /* Additional styles for the reports page */
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
    
    .download-btn {
        background: rgba(76, 175, 80, 0.15);
        color: var(--success);
    }
    
    .download-btn:hover {
        background: rgba(76, 175, 80, 0.25);
    }
    
    .share-btn {
        background: rgba(103, 58, 183, 0.15);
        color: #673ab7;
    }
    
    .share-btn:hover {
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
    
    @media (max-width: 992px) {
        .payments-table {
            overflow-x: scroll;
        }
        
        .charts-orders {
            grid-template-columns: 1fr;
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
        
        #dateRangeFilter {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        #dateRangeFilter > div {
            width: 100%;
        }
        
        #dateRangeFilter input {
            width: 100% !important;
        }
    }
    
    @media (max-width: 576px) {
        .dashboard-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    // JavaScript for reports page functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Get DOM elements
        const timePeriodSelect = document.getElementById('timePeriod');
        const dateRangeFilter = document.getElementById('dateRangeFilter');
        const fromDateInput = document.getElementById('fromDate');
        const toDateInput = document.getElementById('toDate');
        const generateReportBtn = document.getElementById('generateReportBtn');
        const exportPdfBtn = document.getElementById('exportPdfBtn');
        const exportExcelBtn = document.getElementById('exportExcelBtn');
        
        // Set default dates (current month)
        const today = new Date();
        const firstDayOfMonth = new Date(today.getFullYear(), today.getMonth(), 1);
        
        // Format dates as YYYY-MM-DD for input fields
        function formatDate(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
        
        // Set default values for date inputs
        fromDateInput.value = formatDate(firstDayOfMonth);
        toDateInput.value = formatDate(today);
        
        // Show/hide date range filter based on selection
        timePeriodSelect.addEventListener('change', function() {
            if (this.value === 'custom') {
                dateRangeFilter.style.display = 'flex';
            } else {
                dateRangeFilter.style.display = 'none';
            }
        });
        
        // Generate report functionality
        generateReportBtn.addEventListener('click', function() {
            const reportType = document.getElementById('reportType').value;
            const timePeriod = timePeriodSelect.value;
            let dateRange = '';
            
            if (timePeriod === 'custom') {
                const fromDate = fromDateInput.value;
                const toDate = toDateInput.value;
                
                if (!fromDate || !toDate) {
                    alert('Please select both From and To dates');
                    return;
                }
                
                if (new Date(fromDate) > new Date(toDate)) {
                    alert('From date cannot be after To date');
                    return;
                }
                
                dateRange = `from ${formatDisplayDate(fromDate)} to ${formatDisplayDate(toDate)}`;
            } else {
                dateRange = timePeriod;
            }
            
            alert(`Generating ${reportType} report for ${dateRange}`);
        });
        
        // Export functionality
        exportPdfBtn.addEventListener('click', function() {
            alert('Exporting to PDF functionality would be implemented here');
        });
        
        exportExcelBtn.addEventListener('click', function() {
            alert('Exporting to Excel functionality would be implemented here');
        });
        
        // Format date for display (e.g., "Nov 10, 2023")
        function formatDisplayDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('en-US', { 
                month: 'short', 
                day: 'numeric', 
                year: 'numeric' 
            });
        }
        
        // Search functionality
        const searchInput = document.getElementById('reportSearch');
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
        
        // Chart period buttons
        const chartButtons = document.querySelectorAll('.chart-actions button');
        chartButtons.forEach(button => {
            button.addEventListener('click', function() {
                chartButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                alert('Chart view would change to ' + this.textContent + ' view.');
            });
        });
        
        // Action buttons
        const viewButtons = document.querySelectorAll('.view-btn');
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const reportId = this.closest('tr').querySelector('td:first-child').textContent;
                alert(`View report: ${reportId}`);
            });
        });
        
        const downloadButtons = document.querySelectorAll('.download-btn');
        downloadButtons.forEach(button => {
            button.addEventListener('click', function() {
                const reportId = this.closest('tr').querySelector('td:first-child').textContent;
                alert(`Download report: ${reportId}`);
            });
        });
        
        const shareButtons = document.querySelectorAll('.share-btn');
        shareButtons.forEach(button => {
            button.addEventListener('click', function() {
                const reportId = this.closest('tr').querySelector('td:first-child').textContent;
                alert(`Share report: ${reportId}`);
            });
        });
    });
</script>
@endsection