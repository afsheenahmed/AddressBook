@extends('Admin.layout')

@section('content')
<body class="bg-light">
    
<div class="container-fluid py-4">
    <div class="card shadow-sm animate__animated animate__fadeIn">
        <div class="card-header bg-primary-light text-dark">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <i class="fas fa-boxes me-2"></i>Product Management
                </h2>
                <a href="{{ route('Admin.uploadproducts') }}" class="btn btn-light">
                    <i class="fas fa-plus me-2"></i>Add Product
                </a>
            </div>
        </div>
        
        <div class="card-body">
            <!-- Search and Filter Form -->
            <form id="filterForm" method="GET" action="{{ route('Admin.viewproduct') }}">
                <div class="row mb-4 g-3 animate__animated animate__fadeInDown">
                    <div class="col-md-4">
                        <div class="input-group shadow-sm">
                            <span class="input-group-text bg-white"><i class="fas fa-search"></i></span>
                            <input type="text" name="search" class="form-control" placeholder="Search products..." 
                                   value="{{ request('search') }}">
                        </div>
                    </div>

                  <div class="col-md-3">
    <select name="ProductStatus" class="form-select shadow-sm" id="ProductStatus">
        <option value="">All Statuses</option>
        <option value="Available" {{ request('ProductStatus') == 'Available' ? 'selected' : '' }}>Available</option>
        <option value="Out of Stock" {{ request('ProductStatus') == 'Out of Stock' ? 'selected' : '' }}>Out of Stock</option>
        <option value="Discontinued" {{ request('ProductStatus') == 'Discontinued' ? 'selected' : '' }}>Discontinued</option>
    </select>
</div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100 shadow-sm">
                            <i class="fas fa-filter me-2"></i>Filter
                        </button>
                    </div>
                </div>
            </form>

            <!-- Products Table -->
            <div class="table-responsive">
                <table class="table table-hover product-table">
                    <thead class="bg-primary-light">
                        <tr>
                            <th width="80px">Image</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Vendor</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th width="180px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         @if($products->isEmpty())
                            <tr class="animate__animated animate__fadeIn">
                                <td colspan="8" class="text-center py-5">
                                    <div class="animate__animated animate__pulse">
                                        <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                                        <h4 class="text-muted">No products found</h4>
                                        <a href="{{ route('Admin.uploadproducts') }}" class="btn btn-primary mt-3">
                                            <i class="fas fa-plus me-2"></i>Add First Product
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @else
                            @foreach($products as $index => $product)
                               <tr class="table-row animate__animated animate__fadeIn" 
    style="--animate-delay: {{ $index * 0.05 }}s;" 
    data-id="{{ $product->id }}">
                                    <td>
                                        @if($product->ProductImage)
                                            <img src="{{ asset('storage/' . $product->ProductImage) }}" 
                                                 class="product-img" 
                                                 alt="{{ $product->ProductName }}"
                                                 data-bs-toggle="tooltip" 
                                                 data-bs-title="Click to enlarge">
                                        @else
                                            <img src="https://via.placeholder.com/60?text=No+Image" 
                                                 class="product-img" 
                                                 alt="No Image">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="editable" data-field="ProductName">
                                            <strong>{{ $product->ProductName }}</strong>
                                            <p class="text-muted small mb-0 mt-1">
                                                {{ Str::limit($product->ProductDescription, 50) }}
                                            </p>
                                        </div>
                                    </td>
                                    <td>{{ $product->category->CategoryName ?? 'Uncategorized' }}</td>
                                    <td>{{ $product->vendor->VendorName ?? 'No Vendor' }}</td>
                                    <td class="price-highlight">
                                        <div class="editable" data-field="ProductPrice">
                                            {{ number_format($product->ProductPrice, 2) }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="editable" data-field="ProductStock">
                                            <span class="badge bg-primary text-light">
                                                {{ $product->ProductStock }} in stock
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="editable" data-field="ProductStatus">
                                            <span class="status-badge 
                                                @if($product->ProductStatus == 'Available') bg-success bg-opacity-10 text-dark
                                                @elseif($product->ProductStatus == 'Out of Stock') bg-danger bg-opacity-10 text-light
                                                @else bg-warning bg-opacity-10 text-warning @endif">
                                                {{ $product->ProductStatus }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2 action-btns">
                                            <!-- View Button with Modal Trigger -->
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#productModal{{ $product->id }}"
                                                    data-bs-toggle="tooltip" 
                                                    title="View Details">
                                                <i class="fas fa-eye text dark" ></i>
                                            </button>
                                            
                                            <button class="btn btn-sm btn-outline-secondary edit-btn" 
                                                data-id="{{ $product->id }}"
                                                data-name="{{ $product->ProductName }}"
                                                data-price="{{ $product->ProductPrice }}"
                                                data-stock="{{ $product->ProductStock }}"
                                                data-status="{{ $product->ProductStatus }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        data-bs-toggle="tooltip" 
                                                        title="Delete"
                                                        onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($products->isNotEmpty())
                <div class="d-flex justify-content-between mt-4 animate__animated animate__fadeInUp">
                    <div class="text-muted">
                        Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} products
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            @if ($products->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            @if ($products->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Product Detail Modals -->
@foreach($products as $product)
<div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary-light text-dark">
                <h5 class="modal-title">{{ $product->ProductName }}</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        @if($product->ProductImage)
                            <img src="{{ asset('storage/' . $product->ProductImage) }}" 
                                 class="modal-img img-fluid mb-3" 
                                 alt="{{ $product->ProductName }}">
                        @else
                            <img src="https://via.placeholder.com/400x300?text=No+Image" 
                                 class="modal-img img-fluid mb-3" 
                                 alt="No Image">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <dl class="row modal-details">
                            <dt class="col-sm-4">Category:</dt>
                            <dd class="col-sm-8">{{ $product->category->CategoryName ?? 'Uncategorized' }}</dd>
                            <br>
                            
                            <dt class="col-sm-4">Vendor:</dt>
                            <dd class="col-sm-8">{{ $product->vendor->VendorName ?? 'No Vendor' }}</dd>
                             <br>
                            <dt class="col-sm-4">Price:</dt>
                            <dd class="col-sm-8">PKR {{ number_format($product->ProductPrice, 2) }}</dd>
                             <br>
                            <dt class="col-sm-4">Stock:</dt>
                            <dd class="col-sm-8">{{ $product->ProductStock }} pieces</dd>
                             <br>
                            <dt class="col-sm-4">Status:</dt>
                            <dd class="col-sm-8">
                                <span class="status-badge 
                                    @if($product->ProductStatus == 'Available') bg-primary bg-opacity-10 text-light
                                    @elseif($product->ProductStatus == 'Out of Stock') bg-danger bg-opacity-10 text-light
                                    @else bg-warning bg-opacity-10 text-warning @endif">
                                    {{ $product->ProductStatus }}
                                </span>
                            </dd>
                             <br>
                            <dt class="col-sm-4">Added:</dt>
                            <dd class="col-sm-8">{{ $product->created_at->format('M d, Y') }}</dd>
                        </dl>
                    </div>
                </div>
                <div class="mt-3">
                    <h6>Description:</h6>
                    <p>{{ $product->ProductDescription ?? 'No description available' }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-edit me-2"></i>Edit Product
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Auto-submit form when filters change
    document.querySelectorAll('#filterForm select').forEach(select => {
        select.addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    });

    // Inline Edit Functionality
    $(document).ready(function() {
        // Make fields editable on click
        $('.editable').on('click', function() {
            const field = $(this).data('field');
            const value = $(this).text().trim();
            const productId = $(this).closest('tr').data('id');
            
            let inputElement;
            
            if (field === 'ProductStatus') {
                // Create a select dropdown for status
                const statusOptions = ['Available', 'Out of Stock', 'Discontinued'];
                let options = '';
                
                statusOptions.forEach(option => {
                    const selected = value === option ? 'selected' : '';
                    options += `<option value="${option}" ${selected}>${option}</option>`;
                });
                
                inputElement = `<select class="edit-select" data-field="${field}">${options}</select>`;
            } else if (field === 'ProductPrice' || field === 'ProductStock') {
                // Create input for numeric fields
                inputElement = `<input type="number" class="edit-input"  data-field="${field}" value="${field === 'ProductPrice' ? parseFloat(value.replace(/,/g, '')) : value}"style="outline: 2px solid black;">`;
            } 
                else if (field === 'VendorName') {
        // Create input for vendor name
        inputElement = `<input type="text" class="edit-input" data-field="VendorName" value="${value}" style="outline: 2px solid black;">`;
    }
            else if (field === 'ProductName') {
                // For product name, we'll edit just the name part (not the description)
                const productName = $(this).find('strong').text().trim();
                inputElement = `<input type="text" class="edit-input" data-field="${field}" value="${productName}">`;
            }
            
            $(this).html(inputElement);
            $(this).find('input, select').focus();
        });
        
        // Save changes when focus is lost
      // Save changes when focus is lost
$(document).on('blur', '.edit-input, .edit-select', function() {
    const field = $(this).data('field');
    let newValue = $(this).val();
    const productId = $(this).closest('tr').data('id');
    const $cell = $(this).closest('.editable');
    
    // Prepare data based on field type
    const data = {
        _token: '{{ csrf_token() }}',
        _method: 'post'
    };
    
    // Set the appropriate field in data
    if (field === 'ProductName') {
        data.ProductName = newValue;
    } else if (field === 'ProductPrice') {
        data.ProductPrice = parseFloat(newValue);
    }    else if (field === 'VendorName') {
        data.vendor_name = newValue;
    }else if (field === 'ProductStock') {
        data.ProductStock = parseInt(newValue);
    } else if (field === 'ProductStatus') {
        data.ProductStatus = newValue;
    }
    
    // Send AJAX request to update the field
    $.ajax({
        url: `/products/${productId}`,
        method: 'POST', // Using POST with _method override
        data: data,
        success: function(response) {
            
            // Update the cell display based on the field type
            if (field === 'ProductStatus') {
                // Update status badge
                let badgeClass = '';
                if (newValue === 'Available') {
                    badgeClass = 'bg-success bg-opacity-10 text-dark';
                } else if (newValue === 'Out of Stock') {
                    badgeClass = 'bg-danger bg-opacity-10 text-light';
                } else {
                    badgeClass = 'bg-warning bg-opacity-10 text-warning';
                }
                
                $cell.html(`<span class="status-badge ${badgeClass}">${newValue}</span>`);
            }
            else if (field === 'VendorName') {
    $cell.html(`<div class="editable" data-field="VendorName">${newValue}</div>`);
} 
            
            
            else if (field === 'ProductPrice') {
                // Format price with commas
                newValue = parseFloat(newValue).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                $cell.html(`<div class="editable" data-field="${field}">${newValue}</div>`);
                $cell.addClass('price-highlight');
            } else if (field === 'ProductStock') {
                $cell.html(`<div class="editable" data-field="${field}">
                    <span class="badge bg-light text-dark">${newValue} in stock</span>
                </div>`);
            } else if (field === 'ProductName') {
                // For product name, preserve the description
                const description = $cell.find('p').html() || '';
                $cell.html(`<div class="editable" data-field="${field}">
                    <strong>${newValue}</strong>
                    ${description}
                </div>`);
            }
            
            // Show success notification
            showNotification('Product updated successfully!', 'success');
        },
        error: function(xhr) {
            // Show error notification
            showNotification('Error updating product: ' + xhr.responseJSON.message, 'error');
            
            // Revert to original value
            $cell.html($cell.data('original-value'));
        }
    });
});
        
        // Also save when Enter key is pressed
        $(document).on('keypress', '.edit-input', function(e) {
            if (e.which === 13) { // Enter key
                $(this).blur();
            }
        });
        
        // Edit button functionality (edits all fields at once)
        $('.edit-btn').on('click', function() {
            const productId = $(this).data('id');
            const $row = $(this).closest('tr');
             const vendor = $row.find('td:eq(3)').text().trim();
            
            // Get current values
            const name = $(this).data('name');
            
            const price = $(this).data('price');
            const stock = $(this).data('stock');
            const status = $(this).data('status');
            
            // Create edit form
            const editForm = `
                <td>
                    <img src="${$row.find('img').attr('src')}" class="product-img" alt="${name}">
                </td>
                <td>
                    <input type="text" class="form-control form-control-sm mb-2" value="${name}" id="edit-name">
                </td>
                <td>${$row.find('td:eq(2)').text()}</td>
                <td>${$row.find('td:eq(3)').text()}</td>
                <td>
                    <input type="number" step="0.01" class="form-control form-control-sm" value="${price}" id="edit-price">
                </td>
                <td>
                    <input type="number" class="form-control form-control-sm" value="${stock}" id="edit-stock">
                </td>
                        <td>
            <input type="text" class="form-control form-control-sm" value="${vendor}" id="edit-vendor">
        </td>
                <td>
                    <select class="form-select form-select-sm" id="edit-status">
                        <option value="Available" ${status === 'Available' ? 'selected' : ''}>Available</option>
                        <option value="Out of Stock" ${status === 'Out of Stock' ? 'selected' : ''}>Out of Stock</option>
                        <option value="Discontinued" ${status === 'Discontinued' ? 'selected' : ''}>Discontinued</option>
                    </select>
                </td>
                <td>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-success save-edit" data-id="${productId}">
                            <i class="fas fa-check"></i> Save
                        </button>
                        <button class="btn btn-sm btn-secondary cancel-edit">
                            <i class="fas fa-times"></i> Cancel
                        </button>
                    </div>
                </td>
            `;
            
            $row.html(editForm);
            $row.find('#edit-name').focus();
        });
        
        // Save edit form
        $(document).on('click', '.save-edit', function() {
            const productId = $(this).data('id');
            const $row = $(this).closest('tr');
            
            const data = {
                _token: '{{ csrf_token() }}',
                ProductName: $row.find('#edit-name').val(),
                ProductPrice: $row.find('#edit-price').val(),
                ProductStock: $row.find('#edit-stock').val(),
                ProductStatus: $row.find('#edit-status').val(),
                  vendor_name: $row.find('#edit-vendor').val(),
            };
            
            $.ajax({
                url: `/admin/products/${productId}`,
                method: 'PUT',
                data: data,
                success: function(response) {
                    
                    // Update the row with new data
                    const product = response.product;
                     $row.find('td:eq(3)').html(`
                <div class="editable" data-field="VendorName">
                    ${data.vendor_name}
                </div>
            `);
                    // Update status badge class
                    let badgeClass = '';
                    if (product.ProductStatus === 'Available') {
                        badgeClass = 'bg-success bg-opacity-10 text-dark';
                    } else if (product.ProductStatus === 'Out of Stock') {
                        badgeClass = 'bg-danger bg-opacity-10 text-light';
                    } else {
                        badgeClass = 'bg-warning bg-opacity-10 text-warning';
                    }
                    
                    // Rebuild the row
                    $row.html(`
                        <td>
                            <img src="${product.ProductImage ? '{{ asset("storage") }}/' + product.ProductImage : 'https://via.placeholder.com/60?text=No+Image'}" 
                                 class="product-img" 
                                 alt="${product.ProductName}">
                        </td>
                        <td>
                            <div class="editable" data-field="ProductName">
                                <strong>${product.ProductName}</strong>
                                <p class="text-muted small mb-0 mt-1">
                                    ${product.ProductDescription ? product.ProductDescription.substring(0, 50) + (product.ProductDescription.length > 50 ? '...' : '') : ''}
                                </p>
                            </div>
                        </td>
                        <td>${$row.find('td:eq(2)').text()}</td>
                        <td>${$row.find('td:eq(3)').text()}</td>
                        <td class="price-highlight">
                            <div class="editable" data-field="ProductPrice">
                                ${parseFloat(product.ProductPrice).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}
                            </div>
                        </td>
                        <td>
                            <div class="editable" data-field="ProductStock">
                                <span class="badge bg-light text-dark">
                                    ${product.ProductStock} in stock
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="editable" data-field="ProductStatus">
                                <span class="status-badge ${badgeClass}">
                                    ${product.ProductStatus}
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-2 action-btns">
                                <button class="btn btn-sm btn-outline-primary" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#productModal${product.id}"
                                        data-bs-toggle="tooltip" 
                                        title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-secondary edit-btn" 
                                    data-id="${product.id}"
                                    data-name="${product.ProductName}"
                                    data-price="${product.ProductPrice}"
                                    data-stock="${product.ProductStock}"
                                    data-status="${product.ProductStatus}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="/admin/products/${product.id}" method="POST" class="d-inline">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                            data-bs-toggle="tooltip" 
                                            title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this product?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    `);
                    
                    // Show success notification
                    showNotification('Product updated successfully!', 'success');
                },
                error: function(xhr) {
                    // Show error notification
                    showNotification('Error updating product: ' + xhr.responseJSON.message, 'error');
                }
            });
        });
        
        // Cancel edit form
        $(document).on('click', '.cancel-edit', function() {
            const $row = $(this).closest('tr');
            const productId = $row.data('id');
            
            // Reload the row (you might want to implement a better way to restore original data)
            location.reload();
        });
    });
    
    // Notification function
    function showNotification(message, type) {
        // Remove any existing notifications
        $('.custom-notification').remove();
        
        const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
        const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
        
        const notification = $(`
            <div class="custom-notification alert ${alertClass} alert-dismissible fade show position-fixed" 
                 style="top: 20px; right: 20px; z-index: 9999;">
                <i class="fas ${icon} me-2"></i>
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `);
        
        $('body').append(notification);
        
        // Auto-close after 3 seconds
        setTimeout(function() {
            notification.alert('close');
        }, 3000);
    }
</script>

</body>
@endsection