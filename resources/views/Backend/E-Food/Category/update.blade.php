@extends('Backend.Layout.App')
@section('content')
    <div class="main-content">
        <div class="header">
            <div class="page-title">
                <h2>Update Category</h2>
                <p>Edit the details of the category</p>
            </div>
        </div>

        <!-- Update Category Form -->
        <div class="card">
            <div class="card-header">
                <h3>Update Category</h3>
            </div>
            <div class="card-body">
                <form  method="POST" action="{{ route('category.update', $category->id) }}">
                    @csrf
                    <!-- Category Name -->
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="categoryName" value="{{ $category->name }}" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="categoryDescription" rows="3" required>{{ $category->description }}</textarea>
                    </div>

                    <!-- Status (Active/Inactive) -->
                    <div class="mb-3">
                        <label for="categoryStatus" class="form-label">Status</label>
                        <select class="form-select" name="categoryStatus" required>
                            <option value="available" {{ $category->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="unavailable" {{ $category->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>
@endsection