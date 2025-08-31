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
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
                <button class="add-category-btn" id="addCategoryBtn">
                    <i class="fas fa-plus"></i> Add New Category
                </button>
            </div>
        </div>
    </div>
    <!-- Modal Create-->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="addCategoryForm">
            <!-- Category Name -->
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="categoryDescription" class="form-label">Description</label>
                <textarea class="form-control" id="categoryDescription" rows="3" required></textarea>
            </div>

            <!-- Status (Active/Inactive) -->
            <div class="mb-3">
                <label for="categoryStatus" class="form-label">Status</label>
                <select class="form-select" id="categoryStatus" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal for Viewing Category Details -->
        <div class="modal fade" id="viewCategoryModal" tabindex="-1" aria-labelledby="viewCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewCategoryModalLabel">Category Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="viewCategoryName"></span></p>
                <p><strong>Description:</strong> <span id="viewCategoryDescription"></span></p>
                <p><strong>Status:</strong> <span id="viewCategoryStatus"></span></p>
                <p><strong>Created At:</strong> <span id="viewCategoryCreatedAt"></span></p>
            </div>
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
                    @foreach($categories as $category)
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                        <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 40px; height: 40px; border-radius: 8px; background: linear-gradient(135deg, #ff6b35, #ff9e68); margin-right: 10px; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-utensils"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600;">{{ $category->name }}</div>
                                    <div style="font-size: 13px; color: var(--gray);">#CAT-{{ $category->id }}</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">24</td>
                        <td style="padding: 15px 10px;">{{$category->description}}</td>
                        <td style="padding: 15px 10px;">
                            <span class="category-status active">{{ ucfirst($category->status) }}</span>
                        </td>
                        <td style="padding: 15px 10px;">{{ $category->created_at->format('d M Y') }}</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button 
                                class="action-btn view-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#viewCategoryModal"
                                data-name="{{ $category->name }}"
                                data-description="{{ $category->description }}"
                                data-status="{{ ucfirst($category->status) }}"
                                data-created="{{ $category->created_at->format('d M Y') }}"
                            >
                                <i class="fas fa-eye"></i>
                            </button>
                            <a href="{{ route('category.edit', $category->id) }}" class="action-btn edit-btn"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of {{ $categories->total() }} categories
            </div>
            <div>
                {{ $categories->links('vendor.pagination.custom-category') }}
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
        const addCategoryModal = new bootstrap.Modal(document.getElementById('addCategoryModal'));
        const addCategoryForm = document.getElementById('addCategoryForm');
        if (addCategoryBtn) {
            addCategoryBtn.addEventListener('click', function() {
                addCategoryModal.show();
            });
        }

        $(document).ready(function() {
            // Handle form submission
            $('#addCategoryForm').on('submit', function(e) {
                e.preventDefault();  // Prevent the form from submitting normally

                // Get form data
                var formData = {
                    categoryName: $('#categoryName').val(),
                    categoryDescription: $('#categoryDescription').val(),
                    categoryStatus: $('#categoryStatus').val(),
                    _token: '{{ csrf_token() }}'  // CSRF Token for protection
                };

                // Send data via AJAX
                $.ajax({
                    url: '{{ route('category.store') }}',  // Route with prefix
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);  // Show success message
                            $('#addCategoryModal').modal('hide');  // Hide the modal
                            $('#addCategoryForm')[0].reset();  // Reset the form
                        } else {
                            alert(response.message);  // Show failure message
                        }
                    },
                    error: function(xhr, status, error) {
                        // Capture error message from server response
                        var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'An unexpected error occurred';
                        console.error(errorMessage);  // Log the error message
                        alert('An error occurred while adding the category: ' + errorMessage);
                    }
                });
            });
        });

        // Action buttons
        $('#viewCategoryModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            $('#viewCategoryName').text(button.data('name'));
            $('#viewCategoryDescription').text(button.data('description'));
            $('#viewCategoryStatus').text(button.data('status'));
            $('#viewCategoryCreatedAt').text(button.data('created'));
        });

        // Filter functionality
        const filterSelect = document.querySelector('.filter-select');
        if (filterSelect) {
            filterSelect.addEventListener('change', function() {
                const filterValue = this.value;
                const rows = document.querySelectorAll('.categories-table tbody tr');
                rows.forEach(row => {
                    // Get the status text from the row (assumes status is in the 4th td)
                    const statusCell = row.querySelector('td:nth-child(4) .category-status');
                    if (!statusCell) return;
                    const status = statusCell.textContent.trim().toLowerCase();

                    if (filterValue === 'all') {
                        row.style.display = '';
                    } else if (filterValue === 'available' && status === 'available') {
                        row.style.display = '';
                    } else if (filterValue === 'unavailable' && status === 'unavailable') {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
    });
</script>
@endsection