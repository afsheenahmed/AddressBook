@extends('User.layout')
@section('content')

<div class="row">
    <!-- Main content (products) -->
    <br>
        
    <div class="col-lg-9">
        <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30" data-id="product-{{ $product->id }}">
                    <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                            <a href="/shop/{{ $product->id }}">
                                <img class="default-img" src="{{ asset('storage/' . $product->ProductImage) }}" alt="{{ $product->ProductName }}">
                                <img class="hover-img" src="{{ asset('storage/' . $product->ProductImage) }}" alt="{{ $product->ProductName }}">
                            </a>
                        </div>
                        <div class="product-action-1">
                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $product->id }}">
                                <i class="fas fa-search"></i>
                            </a>
                            <form action="/wishlist/add/{{ $product->id }}" method="POST" class="wishlist-form" style="display: inline;">
                                @csrf
                                <button type="submit" class="action-btn hover-up" aria-label="Add To Wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </form>
                            <a aria-label="Add to Cart" class="action-btn hover-up add-to-cart-btn" href="#" data-id="{{ $product->id }}">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        @if($product->ProductStatus == 'Available')
                        <div class="product-badges product-badges-position product-badges-mrg">
                            @if($loop->index < 3) 
                                <span class="best">Best Sell</span>
                            @elseif($product->created_at->diffInDays(now()) < 7)
                                <span class="new">New</span>
                            @endif
                        </div>
                        @endif
                    </div>
                    <div class="product-content-wrap">
                        <div class="product-category">
                            <a href="/category/{{ $product->category->id ?? '' }}">{{ $product->category->CategoryName ?? 'Uncategorized' }}</a>
                        </div>
                        <h2><a href="/shop/{{ $product->id }}">{{ $product->ProductName }}</a></h2>
                        <p><a href="/shop/{{ $product->id }}">{{ $product->ProductDescription }}</a></p>

                        <div class="product-price">
                            <span>PKR {{ number_format($product->ProductPrice, 2) }}</span>
                            @if($product->old_price)
                            <span class="old-price">PKR {{ number_format($product->old_price, 2) }}</span>
                            @endif
                        </div>
                        <div class="product-stock mb-2">
                            <span class="badge 
                                @if($product->ProductStatus == 'Available') bg-primary
                                @elseif($product->ProductStatus == 'Out of Stock') bg-danger
                                @else bg-warning @endif">
                                @if($product->ProductStatus == 'Available')
                                    In Stock ({{ $product->ProductStock }})
                                @else
                                    {{ $product->ProductStatus }}
                                @endif
                            </span>
                        </div>
                        <div class="product-action-1 show">
                            @if($product->ProductStatus == 'Available')
                            <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-btn" href="#" data-id="{{ $product->id }}">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                            @else
                            <button class="action-btn hover-up" disabled>
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick View Modal (Updated version) -->
            <div class="modal fade" id="quickViewModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $product->ProductName }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $product->ProductImage) }}" class="img-fluid" alt="{{ $product->ProductName }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="product-details">
                                        <h3 class="product-title">{{ $product->ProductName }}</h3>
                                        <div class="product-category">
                                            <span>Category:</span> {{ $product->category->CategoryName ?? 'Uncategorized' }}
                                        </div>
                                        <div class="product-price">
                                            <span>PKR {{ number_format($product->ProductPrice, 2) }}</span>
                                            @if($product->old_price)
                                            <span class="old-price">PKR {{ number_format($product->old_price, 2) }}</span>
                                            @endif
                                        </div>
                                        <div class="product-stock mb-3">
                                            <span class="badge 
                                                @if($product->ProductStatus == 'Available') bg-primary
                                                @elseif($product->ProductStatus == 'Out of Stock') bg-danger
                                                @else bg-warning @endif">
                                                @if($product->ProductStatus == 'Available')
                                                In Stock ({{ $product->ProductStock }})
                                                @else
                                                {{ $product->ProductStatus }}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <p>{{ $product->ProductDescription }}</p>
                                        </div>
                                        <div class="product-actions mt-4">
                                            @if($product->ProductStatus == 'Available')
                                            <div class="quantity">
                                                <input type="number" class="qty-input" value="1" min="1" max="{{ $product->ProductStock }}" id="modal-qty-{{ $product->id }}">
                                            </div>
                                            <button class="btn btn-primary add-to-cart-modal" data-id="{{ $product->id }}">
                                                <i class="fas fa-shopping-cart"></i> Add to Cart
                                            </button>
                                            @else
                                            <button class="btn btn-secondary" disabled>Not Available</button>
                                            @endif
                                            <button type="button" class="btn btn-outline-secondary add-to-wishlist-modal" data-id="{{ $product->id }}">
                                                <i class="fas fa-heart"></i> Add to Wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-3 primary-sidebar sticky-sidebar">
        <div class="widget-category mb-30">
            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
            <ul class="categories">
                @foreach($categories as $category)
                <li><a href="/category/{{ $category->id }}">{{ $category->CategoryName }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="sidebar-widget price_range range mb-30">
            <div class="widget-header position-relative mb-20 pb-10">
                <h5 class="widget-title mb-10">Filter by price</h5>
                <div class="bt-1 border-color-1"></div>
            </div>
            <div class="price-filter">
                <div class="price-filter-inner">
                    <div id="slider-range"></div>
                    <div class="price_slider_amount">
                        <div class="label-input">
                            <span>Range:</span>
                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <div class="list-group-item mb-10 mt-10">
                    <label class="fw-900">Availability</label>
                    <div class="custome-checkbox">
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox1">
                        <label class="form-check-label" for="exampleCheckbox1"><span>In Stock</span></label><br>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox2">
                        <label class="form-check-label" for="exampleCheckbox2"><span>Out of Stock</span></label>
                    </div>
                </div>
            </div>
            <a href="/productlayout" class="btn btn-sm btn-default"><i class="fas fa-filter mr-5"></i> Filter</a>
        </div>

        <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
            <div class="widget-header position-relative mb-20 pb-10">
                <h5 class="widget-title mb-10">New products</h5>
                <div class="bt-1 border-color-1"></div>
            </div>
            @foreach($products as $product)
            <div class="single-post clearfix">
                <div class="image">
                    <img src="{{ asset('storage/' . $product->ProductImage) }}" alt="{{ $product->ProductName }}">
                </div>
                <div class="content pt-10">
                    <h6><a href="/shop/{{ $product->id }}">{{ $product->ProductName }}</a></h6>
                    <p class="price mb-0 mt-5">PKR {{ number_format($product->ProductPrice, 2) }}</p>
                    <div class="product-rate">
                        <div class="product-rating" style="width:90%"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Handle wishlist form submissions with AJAX
    document.querySelectorAll('.wishlist-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': this.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.status === 401) {
                    // Redirect to login if not authenticated
                    window.location.href = '/login?redirect=' + encodeURIComponent(window.location.pathname);
                    return;
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Update wishlist count in header
                    document.querySelectorAll('.wishlist-count').forEach(el => {
                        el.textContent = data.wishlist_count;
                    });
                    
                    // Change heart icon to indicate it's in wishlist
                    const heartIcon = this.querySelector('i.fas.fa-heart');
                    if (heartIcon) {
                        heartIcon.classList.add('text-danger');
                    }
                    
                    // Show success message
                    alert('Product added to wishlist!');
                } else {
                    alert(data.message || 'Failed to add to wishlist');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error adding to wishlist. Please try again.');
            });
        });
    });

    // Handle wishlist button in modal
    document.querySelectorAll('.add-to-wishlist-modal').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-id');
            
            fetch(`/wishlist/add/${productId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.status === 401) {
                    window.location.href = '/login?redirect=' + encodeURIComponent(window.location.pathname);
                    return;
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Update wishlist count in header
                    document.querySelectorAll('.wishlist-count').forEach(el => {
                        el.textContent = data.wishlist_count;
                    });
                    
                    // Change button appearance
                    this.innerHTML = '<i class="fas fa-heart text-danger"></i> Added to Wishlist';
                    this.disabled = true;
                    
                    // Show success message
                    alert('Product added to wishlist!');
                } else {
                    alert(data.message || 'Failed to add to wishlist');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error adding to wishlist. Please try again.');
            });
        });
    });

    // Stock management functions
    function generateUniqueId(product) {
        return `${product.id}-${product.color || 'no-color'}-${product.size || 'no-size'}`;
    }

    async function updateProductStock(productId, quantity) {
        try {
            const response = await fetch('/update-product-stock', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                })
            });

            const data = await response.json();

            if (data.success) {
                // Update the stock display on all instances of this product
                document.querySelectorAll(`[data-id="product-${productId}"] .product-stock span`).forEach(stockElement => {
                    if (data.remaining_stock > 0) {
                        stockElement.textContent = `In Stock (${data.remaining_stock})`;
                        stockElement.classList.remove('bg-danger');
                        stockElement.classList.add('bg-primary');
                        
                        // Enable add to cart buttons
                        document.querySelectorAll(`[data-id="product-${productId}"] .add-to-cart-btn`).forEach(btn => {
                            btn.disabled = false;
                        });
                    } else {
                        stockElement.textContent = 'Out of Stock';
                        stockElement.classList.remove('bg-primary');
                        stockElement.classList.add('bg-danger');
                        
                        // Disable add to cart buttons
                        document.querySelectorAll(`[data-id="product-${productId}"] .add-to-cart-btn`).forEach(btn => {
                            btn.disabled = true;
                        });
                    }
                });

                // Update max quantity in quick view modal
                const modalQtyInput = document.querySelector(`#modal-qty-${productId}`);
                if (modalQtyInput) {
                    modalQtyInput.max = data.remaining_stock;
                    if (parseInt(modalQtyInput.value) > data.remaining_stock) {
                        modalQtyInput.value = data.remaining_stock;
                    }
                }

                return true;
            } else {
                console.error('Failed to update stock:', data.message);
                return false;
            }
        } catch (error) {
            console.error('Error:', error);
            return false;
        }
    }

    // Function to handle adding to cart
    async function addToCart(productId, quantity = 1) {
        // Get product details from the DOM
        const productCard = document.querySelector(`[data-id="product-${productId}"]`);
        if (!productCard) return false;

        const product = {
            id: productId,
            name: productCard.querySelector('h2 a').textContent.trim(),
            price: parseFloat(productCard.querySelector('.product-price span').textContent.replace(/[^\d.]/g, '')),
            image: productCard.querySelector('.default-img').src,
            quantity: quantity
        };

        // First check stock availability
        const stockUpdated = await updateProductStock(product.id, product.quantity);
        
        if (!stockUpdated) {
            alert('Failed to add to cart. Not enough stock available.');
            return false;
        }

        try {
            const response = await fetch('/add-to-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    product_id: product.id,
                    quantity: product.quantity
                })
            });

            const data = await response.json();
            
            if (data.success) {
                // Update cart count
                document.querySelectorAll('.pro-count').forEach(el => {
                    el.textContent = data.cart_count;
                });
                
                // Show success message
                alert('Product added to cart successfully!');
                return true;
            } else {
                alert(data.message);
                return false;
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Failed to add product to cart');
            return false;
        }
    }

    // Event listeners
    document.addEventListener('click', async function(e) {
        // Main product card add to cart
        if (e.target.closest('.add-to-cart-btn')) {
            e.preventDefault();
            const productId = e.target.closest('.add-to-cart-btn').getAttribute('data-id');
            await addToCart(productId);
        }
        
        // Modal add to cart
        if (e.target.closest('.add-to-cart-modal')) {
            e.preventDefault();
            const productId = e.target.closest('.add-to-cart-modal').getAttribute('data-id');
            const quantityInput = document.querySelector(`#modal-qty-${productId}`);
            const quantity = quantityInput ? parseInt(quantityInput.value) : 1;
            
            await addToCart(productId, quantity);
            
            // Close the modal after adding to cart
            const modal = bootstrap.Modal.getInstance(document.querySelector(`#quickViewModal${productId}`));
            if (modal) modal.hide();
        }
    });
});
</script>
@endsection