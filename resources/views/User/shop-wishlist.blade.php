@extends('User.layout')
@section('content')

<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="/" rel="nofollow">Home</a>
            <span></span> Shop
            <span></span> Wishlist
        </div>
    </div>
</div>

<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table shopping-summery text-center">
                        <thead>
                            <tr class="main-heading">
                                <th scope="col" colspan="2">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock Status</th>
                                <th scope="col">Action</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody id="wishlist-items-container">
                            @forelse($wishlistItems as $item)
                            <tr class="wishlist-item" data-id="{{ $item->id }}">
                                <td class="image product-thumbnail">
                                    <img src="{{ asset('storage/' . $item->product->ProductImage) }}" 
                                         alt="{{ $item->product->ProductName }}"
                                         style="width: 80px; height: 80px; object-fit: cover;">
                                </td>
                                <td class="product-des product-name">
                                    <h5 class="product-name">
                                        <a href="/shop/{{ $item->product->id }}">{{ $item->product->ProductName }}</a>
                                    </h5>
                                    <p class="font-xs">{{ Str::limit($item->product->ProductDescription, 50) }}</p>
                                </td>
                                <td class="price" data-title="Price">
                                    <span>PKR {{ number_format($item->product->ProductPrice, 2) }}</span>
                                </td>
                                <td class="text-center" data-title="Stock">
                                    @if($item->product->ProductStatus == 'Available')
                                    <span class="color3 font-weight-bold">In Stock ({{ $item->product->ProductStock }})</span>
                                    @else
                                    <span class="text-danger font-weight-bold">{{ $item->product->ProductStatus }}</span>
                                    @endif
                                </td>
                                <td class="text-right" data-title="Cart">
                                    @if($item->product->ProductStatus == 'Available')
                                    <button class="btn btn-sm add-to-cart-from-wishlist" 
                                            data-id="{{ $item->product->id }}">
                                        <i class="fi-rs-shopping-bag mr-5"></i> Add to cart
                                    </button>
                                    @else
                                    <button class="btn btn-sm btn-secondary" disabled>
                                        <i class="fi-rs-headset mr-5"></i> Contact Us
                                    </button>
                                    @endif
                                </td>
                                <td class="action" data-title="Remove">
                                    <a href="#" class="remove-from-wishlist" data-id="{{ $item->id }}">
                                        <i class="fi-rs-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="empty-wishlist text-center py-5">
                                    <div class="empty-wishlist-message">
                                        <i class="fi-rs-heart mb-3" style="font-size: 48px; color: #ddd;"></i>
                                        <h5>Your wishlist is empty</h5>
                                        <a href="/shop" class="btn mt-3">Continue Shopping</a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Remove item from wishlist
    document.querySelectorAll('.remove-from-wishlist').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('data-id');
            
            if (!confirm('Are you sure you want to remove this item from your wishlist?')) {
                return;
            }

            fetch(`/wishlist/remove/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ _method: 'DELETE' })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Remove the item row
                    document.querySelector(`tr.wishlist-item[data-id="${id}"]`).remove();
                    
                    // Update wishlist count in header
                    updateWishlistCount(data.wishlist_count);
                    
                    // Check if wishlist is empty
                    checkWishlistEmpty();
                    
                    // Show success message
                    showToast('Product removed from wishlist');
                } else {
                    showToast(data.message || 'Failed to remove item', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Error removing item. Please try again.', 'error');
            });
        });
    });

    // Add to cart from wishlist
    document.querySelectorAll('.add-to-cart-from-wishlist').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-id');
            const wishlistId = this.closest('tr').getAttribute('data-id');
            
            fetch('/cart/add-from-wishlist', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    product_id: productId,
                    wishlist_id: wishlistId
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showToast('Product added to cart successfully!');
                    
                    // Update cart count in header
                    document.querySelectorAll('.pro-count').forEach(el => {
                        el.textContent = data.cart_count;
                    });
                    
                    // If item was removed from wishlist
                    if (data.removed_from_wishlist) {
                        document.querySelector(`tr.wishlist-item[data-id="${wishlistId}"]`).remove();
                        updateWishlistCount(data.wishlist_count);
                        checkWishlistEmpty();
                    }
                } else {
                    showToast(data.message || 'Failed to add to cart', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Error adding product to cart', 'error');
            });
        });
    });

    // Function to update wishlist count in header
    function updateWishlistCount(count) {
        document.querySelectorAll('.wishlist-count').forEach(el => {
            el.textContent = count;
        });
    }

    // Function to check if wishlist is empty
    function checkWishlistEmpty() {
        const container = document.getElementById('wishlist-items-container');
        if (container.querySelectorAll('tr.wishlist-item').length === 0) {
            container.innerHTML = `
                <tr>
                    <td colspan="6" class="empty-wishlist text-center py-5">
                        <div class="empty-wishlist-message">
                            <i class="fi-rs-heart mb-3" style="font-size: 48px; color: #ddd;"></i>
                            <h5>Your wishlist is empty</h5>
                            <a href="/shop" class="btn mt-3">Continue Shopping</a>
                        </div>
                    </td>
                </tr>
            `;
        }
    }
    
    // Function to show toast messages
    function showToast(message, type = 'success') {
        // Implement your toast notification here or use an existing library
        alert(message); // Simple fallback
    }

    // Load wishlist count on page load
    fetch('/wishlist/count')
        .then(response => response.json())
        .then(data => {
            updateWishlistCount(data.count);
        });
});
</script>
@endsection