@extends('Backend.Layout.App')
@section('content')
    <div class="main-content">
        <h2 class="title">Update Food Item</h2>
        <form action="{{ route('food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Category -->
                    <div class="mb-3">
                        <label for="foodCategory" class="form-label">Category</label>
                        <select class="form-control" id="foodCategory" name="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $food->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="foodName" class="form-label">Food Name</label>
                        <input type="text" class="form-control" id="foodName" name="name" value="{{ $food->name }}" required>
                    </div>
                    <!-- Cost Price -->
                    <div class="mb-3">
                        <label for="foodCostPrice" class="form-label">Cost Price</label>
                        <input type="number" class="form-control" id="foodCostPrice" name="costprice" step="0.01" value="{{ $food->costprice }}" required>
                    </div>
                    <!-- Unit Price -->
                    <div class="mb-3">
                        <label for="foodUnitPrice" class="form-label">Unit Price</label>
                        <input type="number" class="form-control" id="foodUnitPrice" name="unitprice" step="0.01" value="{{ $food->unitprice }}" required>
                    </div>
                    <!-- Description -->
                    <div class="mb-3">
                        <label for="foodDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="foodDescription" name="description" rows="3">{{ $food->description }}</textarea>
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
                            <option value="available" {{ $food->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="unavailable" {{ $food->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Food</button>
                </div>
            </form>
    </div>
@endsection