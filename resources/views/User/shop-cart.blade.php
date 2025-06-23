@extends('User.layout')
@section('content')

<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="/" rel="nofollow">Home</a>
            <span></span> Shop
            <span></span> Your Cart
        </div>
    </div>
</div>

<section class="mt-50 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table shopping-summery text-center clean">
                        <thead>
                            <tr class="main-heading">
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody id="cart-items-container">
                            @forelse($cartItems as $item)
                            <tr class="cart-item" data-id="{{ $item->id }}">
                                <td class="image product-thumbnail">
                                    <img src="{{ asset('storage/' . $item->product->ProductImage) }}" 
                                         alt="{{ $item->product->ProductName }}"
                                         style="width: 80px; height: 80px; object-fit: cover;">
                                </td>
                                <td class="product-des product-name">
                                    <h5>
                                        <a href="/shop/{{ $item->ProductId }}">{{ $item->product->ProductName }}</a>
                                    </h5>
                                </td>
                                <td class="price" data-title="Price">
                                    <span>PKR {{ number_format($item->product->ProductPrice, 2) }}</span>
                                </td>
                                <td class="text-center" data-title="Quantity">
                                    <div class="input-group quantity-group" style="max-width: 120px; margin: 0 auto;">
                                       
                                        <input type="number" 
                                               class="form-control text-center quantity-input" 
                                               data-id="{{ $item->id }}" 
                                               value="{{ $item->Quantity }}" 
                                               min="1" 
                                               max="100">
                                       
                                    </div>
                                </td>
                                <td class="text-right item-total" data-title="Subtotal">
                                    <span>PKR {{ number_format($item->TotalPrice, 2) }}</span>
                                </td>
                                <td class="action" data-title="Remove">
                                    <button type="button" class="text-muted remove-item" data-id="{{ $item->id }}">
                                        <i class="fi-rs-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr id="empty-cart-message">
                                <td colspan="6" class="text-center py-5">
                                    <div class="empty-cart-message">
                                        <i class="fi-rs-shopping-cart mb-3" style="font-size: 48px; color: #ddd;"></i>
                                        <h5>Your cart is empty</h5>
                                        <a href="/shop" class="btn mt-3">Continue Shopping</a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="cart-action text-end" id="cart-actions" @if($cartItems->isEmpty()) style="display: none;" @endif>
                    <button type="button" class="btn btn-danger" id="clear-cart-btn">
                        <i class="fi-rs-trash mr-10"></i> Clear Cart
                    </button>
                    <a href="/shop" class="btn btn-primary ml-2">
                        <i class="fi-rs-shopping-bag mr-10"></i> Continue Shopping
                    </a>
                </div>

                @if($cartItems->count() > 0)
                <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                <div class="row mb-50" id="cart-totals-section">
                    <div class="col-lg-6 col-md-12">
                        <div class="heading_s1 mb-3">
                            <h4>Calculate Shipping</h4>
                        </div>
                        <p class="mt-15 mb-30">Flat rate: <span class="font-xl text-brand fw-900">5%</span></p>
                        <form class="field_form shipping_calculator">
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <!-- Shipping form fields if needed -->
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="form-group col-lg-6">
                                    <div class="custom_select">
                                        <select class="form-control select-active">
                                            <option value="">Select City</option>
                                            <option value="US">Islamabad</option>
                                            <option value="UK">Lahore</option>
                                            <option value="CA">Karachi</option>
                                            <option value="AU">Peshawar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                </div>
                            </div>
                        </form>
                        <div class="mb-30 mt-50">
                            <div class="heading_s1 mb-3">
                                <h4>Apply Coupon</h4>
                            </div>
                            <div class="total-amount">
                                <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <div class="form-row row justify-content-center">
                                                <div class="form-group col-lg-6">
                                                    <input class="font-medium" name="Coupon" placeholder="Enter Your Coupon">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <button class="btn btn-sm"><i class="fi-rs-label mr-10"></i>Apply</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="border p-md-4 p-30 border-radius cart-totals">
                            <div class="heading_s1 mb-3">
                                <h4>Cart Totals</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="cart_total_label">Cart Subtotal</td>
                                            <td class="cart_total_amount" id="cart-subtotal">
                                                <span class="font-lg fw-900 text-brand">PKR {{ number_format($subtotal, 2) }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Shipping (5%)</td>
                                            <td class="cart_total_amount" id="cart-shipping">
                                                <i class="ti-gift mr-5"></i> PKR {{ number_format($shipping, 2) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cart_total_label">Total</td>
                                            <td class="cart_total_amount" id="cart-total">
                                                <strong>
                                                    <span class="font-xl fw-900 text-brand">
                                                        PKR {{ number_format($total, 2) }}
                                                    </span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="/checkout" class="btn">
                                <i class="fi-rs-box-alt mr-10"></i> Proceed To Checkout
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quantity update handlers
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', function() {
            const id = this.closest('.cart-item').dataset.id;
            const quantity = parseInt(this.value);
            
            if (quantity < 1 || quantity > 100) {
                this.value = this.defaultValue;
                return;
            }

            updateCartItem(id, quantity);
        });
    });

    // Increment buttons
    document.querySelectorAll('.increment').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.quantity-input');
            const newValue = parseInt(input.value) + 1;
            if (newValue <= input.max) {
                input.value = newValue;
                const id = this.closest('.cart-item').dataset.id;
                updateCartItem(id, newValue);
            }
        });
    });

    // Decrement buttons
    document.querySelectorAll('.decrement').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.quantity-input');
            const newValue = parseInt(input.value) - 1;
            if (newValue >= input.min) {
                input.value = newValue;
                const id = this.closest('.cart-item').dataset.id;
                updateCartItem(id, newValue);
            }
        });
    });

    // Remove item buttons
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            if (!confirm('Are you sure you want to remove this item?')) {
                return;
            }
            const id = this.dataset.id;
            removeCartItem(id);
        });
    });

    // Clear cart button
    const clearCartBtn = document.getElementById('clear-cart-btn');
    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', function() {
            if (!confirm('Are you sure you want to clear your cart?')) {
                return;
            }
            clearCart();
        });
    }

    // Cart functions
    function updateCartItem(id, quantity) {
        fetch(`/cart/update/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                quantity: quantity,
                _method: 'PATCH'
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
                // Update item total
                const itemRow = document.querySelector(`tr.cart-item[data-id="${id}"]`);
                if (itemRow) {
                    itemRow.querySelector('.item-total span').textContent = `PKR ${data.item.TotalPrice.toFixed(2)}`;
                }
                
                // Update cart totals
                updateAllCartTotals(data);
                
                // Update cart count in header if needed
                updateCartCount(data.cartCount);
            } else {
                alert(data.message || 'Failed to update quantity');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error updating cart item. Please try again.');
        });
    }

    function removeCartItem(id) {
        fetch(`/cart/remove/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
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
                // Remove item row
                const itemRow = document.querySelector(`tr.cart-item[data-id="${id}"]`);
                if (itemRow) {
                    itemRow.remove();
                }
                
                // Update cart totals
                updateAllCartTotals(data);
                
                // Update cart count in header if needed
                updateCartCount(data.cartCount);
                
                // Check if cart is empty
                checkCartEmpty();
            } else {
                alert(data.message || 'Failed to remove item');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error removing item. Please try again.');
        });
    }

    function clearCart() {
        fetch('/cart/clear', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Clear all items
                document.querySelectorAll('tr.cart-item').forEach(row => row.remove());
                
                // Show empty cart message
                showEmptyCart();
                
                // Update cart totals
                updateAllCartTotals(data);
                
                // Update cart count in header if needed
                updateCartCount(data.cartCount);
                
                // Hide cart actions and totals
                document.getElementById('cart-actions').style.display = 'none';
                document.getElementById('cart-totals-section').style.display = 'none';
            } else {
                alert(data.message || 'Failed to clear cart');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error clearing cart. Please try again.');
        });
    }

    function updateAllCartTotals(data) {
        // Format numbers with 2 decimal places
        const formatPrice = (price) => parseFloat(price).toFixed(2);
        
        // Update in the totals section
        if (document.getElementById('cart-subtotal')) {
            document.getElementById('cart-subtotal').innerHTML = `
                <span class="font-lg fw-900 text-brand">PKR ${formatPrice(data.subtotal)}</span>
            `;
        }
        
        if (document.getElementById('cart-shipping')) {
            document.getElementById('cart-shipping').innerHTML = `
                <i class="ti-gift mr-5"></i> PKR ${formatPrice(data.shipping)}
            `;
        }
        
        if (document.getElementById('cart-total')) {
            document.getElementById('cart-total').innerHTML = `
                <strong>
                    <span class="font-xl fw-900 text-brand">
                        PKR ${formatPrice(data.total)}
                    </span>
                </strong>
            `;
        }
    }

    function updateCartCount(count) {
        // Update cart count in header if you have a cart counter element
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement) {
            cartCountElement.textContent = count;
        }
    }

    function checkCartEmpty() {
        const cartItems = document.querySelectorAll('tr.cart-item');
        if (cartItems.length === 0) {
            showEmptyCart();
            document.getElementById('cart-actions').style.display = 'none';
            document.getElementById('cart-totals-section').style.display = 'none';
        }
    }

    function showEmptyCart() {
        const container = document.getElementById('cart-items-container');
        container.innerHTML = `
            <tr id="empty-cart-message">
                <td colspan="6" class="text-center py-5">
                    <div class="empty-cart-message">
                        <i class="fi-rs-shopping-cart mb-3" style="font-size: 48px; color: #ddd;"></i>
                        <h5>Your cart is empty</h5>
                        <a href="/shop" class="btn mt-3">Continue Shopping</a>
                    </div>
                </td>
            </tr>
        `;
    }
});
</script>
@endsection