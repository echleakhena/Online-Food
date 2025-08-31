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
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <!-- <select class="filter-select">
                    <option value="all">All Status</option>
                    <option value="active">Available</option>
                    <option value="inactive">Unavailable</option>
                </select> -->
                <!-- <button class="filter-btn">
                    <i class="fas fa-filter"></i> Apply Filters
                </button> -->
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
                        <th style="text-align: left; padding: 15px 10px;">Food ID</th>
                        <th style="text-align: left; padding: 15px 10px;">Name</th>
                        <th style="text-align: left; padding: 15px 10px;">Category</th>
                        <th style="text-align: left; padding: 15px 10px;">Price</th>
                        <th style="text-align: left; padding: 15px 10px;">Status</th>
                        <th style="text-align: left; padding: 15px 10px;">Created</th>
                        <th style="text-align: center; padding: 15px 10px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($foods as $food)
                    <tr style="border-bottom: 1px solid var(--light-gray);">
                         <td style="padding: 15px 10px;">FID{{ $food->id ?? 'N/A' }}</td>
                       <td style="padding: 15px 10px;">
                            <div style="display: flex; align-items: center;">
                                <img src="{{ $food->image ? asset('Food/'.$food->image) : 'https://randomuser.me/api/portraits/men/32.jpg' }}" 
                                    alt="Food" 
                                    style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <div>
                                    <div style="font-weight: 600;">{{ $food->name }}</div>
                                    <div style="font-size: 13px; color: var(--gray);">{{ '@'.$food->name }}</div>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 15px 10px;">{{ $food->category->name }}</td>
                        <td style="padding: 15px 10px;">${{ $food->costprice }}</td>
                        <td style="padding: 15px 10px;">
                            <span class="food-status available">Available</span>
                        </td>
                        <td style="padding: 15px 10px;">{{ $food->created_at->format('d M Y') }}</td>
                        <td style="padding: 15px 10px; text-align: center;">
                            <button class="action-btn view-btn" data-bs-toggle="modal" data-bs-target="#viewFoodModal" data-id="{{ $food->id }}" data-name="{{ $food->name }}" data-category="{{ $food->category->name }}" data-costprice="{{ $food->costprice }}" data-unitprice="{{ $food->unitprice }}" data-status="{{ $food->status }}" data-description="{{ $food->description }}" data-image="{{ $food->image_url }}"><i class="fas fa-eye"></i></button>
                            <a href="{{ route('food.edit', $food->id) }}" class="action-btn edit-btn"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('food.delete', $food->id) }}" method="POST" style="display: inline;">
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
        
        <!-- Pagination -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <div style="color: var(--gray); font-size: 14px;">
                Showing {{ $foods->firstItem() }} to {{ $foods->lastItem() }} of {{ $foods->total() }} food items
            </div>
            <div>
                {{ $foods->links('vendor.pagination.custom-category') }}
            </div>
        </div>

    </div>
</div>

<!-- Modal Create Food -->
<div class="modal fade" id="addFoodModal" tabindex="-1" aria-labelledby="addFoodModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFoodModalLabel">Add New Food</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Category -->
                    <div class="mb-3">
                        <label for="foodCategory" class="form-label">Category</label>
                        <select class="form-control" id="foodCategory" name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="foodName" class="form-label">Food Name</label>
                        <input type="text" class="form-control" id="foodName" name="name" required>
                    </div>
                    <!-- Cost Price -->
                    <div class="mb-3">
                        <label for="foodCostPrice" class="form-label">Cost Price</label>
                        <input type="number" class="form-control" id="foodCostPrice" name="costprice" step="0.01" required>
                    </div>
                    <!-- Unit Price -->
                    <div class="mb-3">
                        <label for="foodUnitPrice" class="form-label">Unit Price</label>
                        <input type="number" class="form-control" id="foodUnitPrice" name="unitprice" step="0.01" required>
                    </div>
                    <!-- Description -->
                    <div class="mb-3">
                        <label for="foodDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="foodDescription" name="description" rows="3"></textarea>
                    </div>
                    <!-- Image -->
                    <div class="mb-3">
                        <label for="foodImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="foodImage" name="image">
                    </div>
                    <!-- Status -->
                    <div class="mb-3">
                        <label for="foodStatus" class="form-label">Status</label>
                        <select class="form-control" id="foodStatus" name="status" required>
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Food</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Viewing Food Details -->
<div class="modal fade" id="viewFoodModal" tabindex="-1" aria-labelledby="viewFoodModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewFoodModalLabel">Food Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Name:</strong> <span id="viewFoodName"></span></p>
                <p><strong>Category:</strong> <span id="viewFoodCategory"></span></p>
                <p><strong>Cost Price:</strong> <span id="viewFoodCostPrice"></span></p>
                <p><strong>Unit Price:</strong> <span id="viewFoodUnitPrice"></span></p>
                <p><strong>Status:</strong> <span id="viewFoodStatus"></span></p>
                <p><strong>Description:</strong> <span id="viewFoodDescription"></span></p>
                <div id="viewFoodImageWrapper" style="margin-top:10px;">
                    <img id="viewFoodImage" src="" alt="Food Image" style="max-width:100%;max-height:200px;display:none;">
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Show modal when "Add New Food" button is clicked
    document.addEventListener('DOMContentLoaded', function() {
        const addFoodBtn = document.getElementById('addFoodBtn');
        const addFoodModal = new bootstrap.Modal(document.getElementById('addFoodModal'));
        if (addFoodBtn) {
            addFoodBtn.addEventListener('click', function() {
                addFoodModal.show();
            });
        }
    });

    // Populate and show view food modal
    document.addEventListener('DOMContentLoaded', function() {
        const viewFoodModal = new bootstrap.Modal(document.getElementById('viewFoodModal'));
        const viewFoodBtns = document.querySelectorAll('.view-btn');

        viewFoodBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const foodId = this.getAttribute('data-id');
                const foodName = this.getAttribute('data-name');
                const foodCategory = this.getAttribute('data-category');
                const foodCostPrice = this.getAttribute('data-costprice');
                const foodUnitPrice = this.getAttribute('data-unitprice');
                const foodStatus = this.getAttribute('data-status');
                const foodDescription = this.getAttribute('data-description');
                const foodImage = this.getAttribute('data-image');

                document.getElementById('viewFoodName').innerText = foodName;
                document.getElementById('viewFoodCategory').innerText = foodCategory;
                document.getElementById('viewFoodCostPrice').innerText = '$' + parseFloat(foodCostPrice).toFixed(2);
                document.getElementById('viewFoodUnitPrice').innerText = '$' + parseFloat(foodUnitPrice).toFixed(2);
                document.getElementById('viewFoodStatus').innerText = foodStatus.charAt(0).toUpperCase() + foodStatus.slice(1);
                document.getElementById('viewFoodDescription').innerText = foodDescription;

                const foodImageElement = document.getElementById('viewFoodImage');
                if (foodImage) {
                    foodImageElement.src = foodImage;
                    foodImageElement.style.display = 'block';
                } else {
                    foodImageElement.src = '';
                    foodImageElement.style.display = 'none';
                }

                viewFoodModal.show();
            });
        });
    });
</script>

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