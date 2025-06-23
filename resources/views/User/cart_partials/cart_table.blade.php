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
                <tbody>
                    @forelse($cartItems as $item)
                    <tr class="cart-item" data-id="{{ $item->id }}">
                        <td>
                            <img src="{{ asset('storage/' . $item->product->ProductImage) }}" 
                                 width="80" 
                                 alt="{{ $item->product->ProductName }}"
                                 class="img-fluid">
                        </td>
                        <td>{{ $item->product->ProductName }}</td>
                        <td>PKR {{ number_format($item->product->ProductPrice, 2) }}</td>
                        <td>
                            <div class="input-group quantity-group" style="max-width: 120px; margin: 0 auto;">
                                <button class="btn btn-outline-secondary decrement" type="button">-</button>
                                <input type="number" 
                                       class="form-control quantity-input text-center" 
                                       data-id="{{ $item->id }}" 
                                       value="{{ $item->Quantity }}" 
                                       min="1" 
                                       max="{{ $item->product->stock ?? 100 }}"
                                       aria-label="Quantity">
                                <button class="btn btn-outline-secondary increment" type="button">+</button>
                            </div>
                        </td>
                        <td class="item-total">PKR {{ number_format($item->TotalPrice, 2) }}</td>
                        <td>
                            <button class="remove-item btn btn-sm btn-danger" 
                                    data-id="{{ $item->id }}"
                                    title="Remove item">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5">
                            <div class="empty-cart-message">
                                <i class="fas fa-shopping-cart fa-3x mb-3 text-muted"></i>
                                <p class="h5">Your cart is empty</p>
                                <a href="/shop" class="btn btn-primary mt-3">Continue Shopping</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($cartItems->count() > 0)
        <div class="cart-summary border-top pt-4 mt-4">
            <div class="d-flex justify-content-between mb-2">
                <span>Subtotal:</span>
                <span>PKR {{ number_format($subtotal, 2) }}</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <span>Shipping:</span>
                <span>PKR {{ number_format($shipping, 2) }}</span>
            </div>
            <div class="d-flex justify-content-between mb-4 font-weight-bold">
                <span>Total:</span>
                <span>PKR {{ number_format($total, 2) }}</span>
            </div>
            <div class="d-flex justify-content-between">
                <button id="clear-cart-btn" class="btn btn-outline-danger">
                    <i class="fas fa-trash mr-2"></i>Clear Cart
                </button>
                <a href="/checkout" class="btn btn-primary">
                    <i class="fas fa-credit-card mr-2"></i>Proceed to Checkout
                </a>
            </div>
        </div>
        @endif
    </div>
</div>

@if($cartItems->count() > 0)
<div class="alert alert-warning mt-3">
    <i class="fas fa-info-circle mr-2"></i>
    Free shipping on orders over PKR 1000
</div>
@endif