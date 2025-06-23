@extends('Admin.layout')
@section('content')
<div class="container-fluid p-4">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- Add New Product --}}
    <div class="card mb-4">
        <div class="card-header bg-primary-light text-white">
            <h2>Add New Product</h2>
        </div>
        <div class="card-body">
            <form action="/uploadproducts" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Product Basic Info --}}
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="ProductName" class="form-label">Product Name*</label>
                        <input type="text" name="ProductName" class="form-control" id="ProductName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="ProductImage" class="form-label">Product Image*</label>
                        <input class="form-control" type="file" name="ProductImage" id="ProductImage" required>
                        <small class="text-muted">Max 2MB (JPEG, PNG)</small>
                    </div>
                </div>

                {{-- Description --}}
                <div class="mb-4">
                    <label for="ProductDescription" class="form-label">Description</label>
                    <textarea name="ProductDescription" class="form-control" id="ProductDescription" rows="3"></textarea>
                </div>

                {{-- Pricing and Stock --}}
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label for="ProductPrice" class="form-label">Price*</label>
                        <div class="input-group">
                            <span class="input-group-text">PKR</span>
                            <input type="number" step="0.01" name="ProductPrice" class="form-control" id="ProductPrice" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="ProductStock" class="form-label">Stock*</label>
                        <input type="number" name="ProductStock" class="form-control" id="ProductStock" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ProductStatus" class="form-label">Status</label>
                        <select name="ProductStatus" class="form-select" id="ProductStatus">
                            <option value="Available" selected>Available</option>
                            <option value="Out of Stock">Out of Stock</option>
                            <option value="Discontinued">Discontinued</option>
                        </select>
                    </div>
                </div>

                {{-- Category --}}
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="ProductCategory" class="form-label">Category*</label>
                        <select name="ProductCategory" class="form-select" id="ProductCategory" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="ProductVendor" class="form-label">Vendor*</label>
                        <select name="ProductVendor" class="form-select" id="ProductVendor" required>
                            <option value="">Select Vendor</option>
                            @foreach($vendors as $vendor)
                                <option value="{{ $vendor->id }}">{{ $vendor->VendorName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Vendor Info --}}
                <div class="card mb-4" id="vendorInfoCard" style="display: none;">
                    <div class="card-header">
                        <h5>Vendor Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"><p><strong>Email:</strong> <span id="vendorEmail"></span></p></div>
                            <div class="col-md-4"><p><strong>Phone:</strong> <span id="vendorPhone"></span></p></div>
                            <div class="col-md-4"><p><strong>Location:</strong> <span id="vendorLocation"></span></p></div>
                        </div>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Separate Section for Category Management --}}
      {{-- Category Management Section --}}
    <div class="card">
        <div class="card-header bg-success-light text-white">
            <h2>Manage Categories</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-8">
                        <input type="text" name="CategoryName" class="form-control" 
                               placeholder="Enter new category name" required>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success w-100">Add Category</button>
                    </div>
                </div>
            </form>

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->CategoryName }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection