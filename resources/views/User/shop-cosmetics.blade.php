
@extends('User.layout')
@section('content')
<body><style>
    /* Hero Slider Image Responsiveness */
    .home-slider {
        position: relative;
        overflow: hidden;
    }
    
    .single-hero-slider {
        width: 100%;
    }
    
    .single-slider-img {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 50%; /* Adjust this percentage based on your desired aspect ratio */
        overflow: hidden;
    }
    
    .single-slider-img img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    /* Responsive adjustments */
    @media (max-width: 1199px) {
        .single-slider-img {
            padding-bottom: 60%; /* Taller aspect ratio on smaller screens */
        }
    }
    
    @media (max-width: 991px) {
        .single-slider-img {
            padding-bottom: 70%;
        }
        
        .hero-slider-content-2 {
            padding: 20px;
        }
    }
    
    @media (max-width: 767px) {
        .single-slider-img {
            padding-bottom: 80%;
        }
        
        .slider-animated-1 {
            flex-direction: column;
        }
        
        .hero-slider-content-2 {
            text-align: center;
            padding: 15px;
        }
        
        .col-lg-7.col-md-6.col-sm-12 {
            order: -1; /* Image first on mobile */
        }
    }
    
    @media (max-width: 575px) {
        .single-slider-img {
            padding-bottom: 100%; /* Square aspect ratio on very small screens */
        }
    }
    /* Ensure content shows on all screen sizes */
@media (max-width: 768px) {
    .hero-slider-content-2 {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
    }
    
    .slider-animated-1 .col-lg-5 {
        order: 2; /* Content below image on mobile */
    }
    
    .slider-animated-1 .col-lg-7 {
        order: 1; /* Image above content on mobile */
    }
}
</style>
   
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop Cosmetics
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">these</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                            <li><a href="#">Release Date</a></li>
                                            <li><a href="#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
  
<div class="row product-grid-3">
    <!-- Foundation Products (3) -->
                             <div>
    <h3 class="category-title">Foundation</h3>
</div>
<br>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-3">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/f1.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/f1.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="hot">Hot</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Foundation</a>
                </div>
                <h2><a href="/shop">Loreal Foundation</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>90%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr2338.85 </span>
                    <span class="old-price">Pkr2445.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-4">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/fou.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/fou.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="new">New</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Foundation</a>
                </div>
                <h2><a href="/shop">Nars Foundation</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>50%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr1138.85 </span>
                    <span class="old-price">Pkr1555.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-5">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/f2.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/f2.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="best">Best Sell</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Foundation</a>
                </div>
                <h2><a href="/shop">Golden Rose Foundation</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>95%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr338.85 </span>
                    <span class="old-price">Pkr445.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mascara Products (3) -->
                             <div>
    <h3 class="category-title">Mascara</h3>
</div>
<br>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-6">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/ma2.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/ma2.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="sale">Sale</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Mascara</a>
                </div>
                <h2><a href="/shop">Bob Mascara</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>70%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr123.85 </span>
                    <span class="old-price">Pkr235.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-7">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/banner/mas.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/banner/mas.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="hot">-30%</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Mascara</a>
                </div>
                <h2><a href="/shop">Elf Mascara</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>70%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr280.85 </span>
                    <span class="old-price">Pkr450.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-8">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/ma1.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/ma1.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="hot">-22%</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Mascara</a>
                </div>
                <h2><a href="/shop">Essence Mascara</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>70%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr238.85 </span>
                    <span class="old-price">Pkr245.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Blushon Products (3) -->
                             <div>
    <h3 class="category-title">Blushon</h3>
</div>
<br>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-9">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/b1.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/b1.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="new">New</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Blushon</a>
                </div>
                <h2><a href="/shop">Christian Blushon </a></h2>
                <div class="rating-result" title="90%">
                    <span><span>98%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr1275.85 </span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-10">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/b2.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/b2.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Blushon</a>
                </div>
                <h2><a href="/shop">Loreal Blushon</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>70%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr238.85 </span>
                    <span class="old-price">Pkr245.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-12">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/PB.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/PB.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Blushon</a>
                </div>
                <h2><a href="/shop">Essence Blushon</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>70%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr238.85 </span>
                    <span class="old-price">Pkr245.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Eyeliner Products (3) -->
                             <div>
    <h3 class="category-title">Eyeliner</h3>
</div>
<br>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-11">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/r1.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/r1.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="hot">Hot</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Eyeliner</a>
                </div>
                <h2><a href="/shop">Rimmel Eyeliner</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>90%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr238.85 </span>
                    <span class="old-price">Pkr245.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-1">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/eyel.png" alt="">
                        <img class="hover-img" src="assets/imgs/shop/eyel.png" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="new">New</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Eyeliner</a>
                </div>
                <h2><a href="/shop">Bob Eyeliner</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>50%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr138.85 </span>
                    <span class="old-price">Pkr255.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="product-cart-wrap mb-30" data-id="product-2">
            <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                    <a href="/shop">
                        <img class="default-img" src="assets/imgs/shop/r2.jpg" alt="">
                        <img class="hover-img" src="assets/imgs/shop/r2.jpg" alt="">
                    </a>
                </div>
                <div class="product-action-1">
                    <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                    <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                    <a aria-label="Add to Cart" class="action-btn hover-up" href="shop-Add to Cart.html"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                    <span class="best">Best Sell</span>
                </div>
            </div>
            <div class="product-content-wrap">
                <div class="product-category">
                    <a href="/shop">Eyeliner</a>
                </div>
                <h2><a href="/shop">Inglot Eyeliner</a></h2>
                <div class="rating-result" title="90%">
                    <span><span>95%</span></span>
                </div>
                <div class="product-price">
                    <span>Pkr338.85 </span>
                    <span class="old-price">Pkr445.8</span>
                </div>
                <div class="product-action-1 show">
                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                </div>
            </div>
        </div>
        
    </div>
     </div>
</div>
<div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                <li><a href="/shopjewel">Hand Jewellery </a></li>
                                <li><a href="/shopjewel">Neck Jewellery</a></li>
                                <li><a href="/shopjewel">Ear Jewellery </a></li>
                                <li><a href="/shopjewel">Finger Jewellery</a></li>
                               
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Fill by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Silver (46)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Gold (52)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Emerald (34)</span></label>
                                    </div>
                                    
                                </div>
                            </div>
                            <a href="/shopjewel" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div>
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="assets/imgs/shop/black.jpg" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="shop-product-detail.html">Black Bracelet</a></h5>
                                    <p class="price mb-0 mt-5">Pkr99.50</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:90%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="assets/imgs/shop/s2.webp" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h6><a href="shop-product-detail.html">Butterfly Earring</a></h6>
                                    <p class="price mb-0 mt-5">Pkr89.50</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:80%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="assets/imgs/banner/product.webp" alt="#">
                                </div>
                                <div class="content pt-10">
                                    <h6><a href="shop-product-detail.html">Gold Pearl Ring</a></h6>
                                    <p class="price mb-0 mt-5">Pkr25</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:60%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                     </div>
                       
                    </div>
        </section>
    </main>

   <script>
          document.addEventListener('DOMContentLoaded', function () {
    const desktopSearchInput = document.querySelector('.search-style-2 form input[type="text"]');
    const desktopSearchForm = document.querySelector('.search-style-2 form');

    const mobileSearchForm = document.querySelector('.mobile-search form');
    const mobileSearchInput = mobileSearchForm ? mobileSearchForm.querySelector('input[type="text"]') : null;

    const products = document.querySelectorAll('.product-cart-wrap');
    const categoryTitles = document.querySelectorAll('.category-title');

    function filterBySearch(searchTerm) {
        const term = searchTerm.trim().toLowerCase();

        // Filter category titles
        categoryTitles.forEach(title => {
            const categoryText = title.textContent.trim().toLowerCase();
            title.style.display = (term === '' || categoryText.includes(term)) ? 'block' : 'none';
        });

        // Filter products
        products.forEach(product => {
            const productName = product.querySelector('h2 a').textContent.trim().toLowerCase();
            const productCategory = product.querySelector('.product-category a').textContent.trim().toLowerCase();

            if (term === '' || productName.includes(term) || productCategory.includes(term)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

    // Desktop search
    desktopSearchInput.addEventListener('input', () => {
        filterBySearch(desktopSearchInput.value);
    });

    desktopSearchForm.addEventListener('submit', function (e) {
        e.preventDefault();
        filterBySearch(desktopSearchInput.value);
    });

    // Mobile search
    if (mobileSearchForm && mobileSearchInput) {
        mobileSearchInput.addEventListener('input', () => {
            filterBySearch(mobileSearchInput.value);
        });

        mobileSearchForm.addEventListener('submit', function (e) {
            e.preventDefault();
            filterBySearch(mobileSearchInput.value);
        });
    }
});

            //search end
document.addEventListener('DOMContentLoaded', function() {
    // Initialize cart from localStorage or create empty array
    let cart = JSON.parse(localStorage.getItem('evara-cart')) || [];

    // Update cart count in header
    function updateCartCount() {
        const count = cart.reduce((total, item) => total + item.quantity, 0);
        document.querySelectorAll('.pro-count').forEach(el => {
            el.textContent = count;
        });
    }

    // Save cart to localStorage
    function saveCart() {
        localStorage.setItem('evara-cart', JSON.stringify(cart));
    }

    // Add animation to cart icon
    function animateCartIcon() {
        const cartIcon = document.querySelector('.header-action-icon-2 .pro-count');
        if (cartIcon) {
            cartIcon.classList.add('animate-bounce');
            setTimeout(() => cartIcon.classList.remove('animate-bounce'), 500);
        }
    }

    // Update mini cart dropdown
    function updateMiniCart() {
        const miniCart = document.querySelector('.cart-dropdown-wrap ul');
        if (!miniCart) return;

        miniCart.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            total += item.price * item.quantity;
            miniCart.innerHTML += `
                <li>
                    <div class="shopping-cart-img">
                        <a href="/shopjewel"><img alt="${item.name}" src="${item.image}"></a>
                    </div>
                    <div class="shopping-cart-title">
                        <h4><a href="/shopjewel">${item.name}</a></h4>
                        <h4><span>${item.quantity} × </span>PKR ${item.price.toFixed(2)}</h4>
                    </div>
                    <div class="shopping-cart-delete">
                        <a href="#" class="remove-from-cart" data-uniqueid="${item.uniqueId}"><i class="fi-rs-cross-small"></i></a>
                    </div>
                </li>
            `;
        });

        document.querySelector('.shopping-cart-total h4 span').textContent = `PKR ${total.toFixed(2)}`;
    }

    // Generate a unique identifier for each product variant
    function generateUniqueId(product) {
        // Use the same logic for all pages to ensure consistency
        return `${product.id}-${product.color || 'no-color'}-${product.size || 'no-size'}`;
    }

    // Add product to cart
    function addToCart(product) {
        // Generate consistent unique ID regardless of which page it comes from
        product.uniqueId = generateUniqueId(product);
        
        // Check if product already exists in cart
        const existingItem = cart.find(item => item.uniqueId === product.uniqueId);

        if (existingItem) {
            existingItem.quantity += product.quantity;
        } else {
            cart.push(product);
        }

        saveCart();
        updateCartCount();
        animateCartIcon();
        updateMiniCart();
    }

    // Event delegation for all click events
    document.addEventListener('click', function(e) {
        // Product grid items (both index and jewel pages)
        if (e.target.closest('.action-btn.hover-up') || e.target.closest('.button-add-to-cart')) {
            e.preventDefault();
            const productCard = e.target.closest('.product-cart-wrap');

            // Get selected color and size if available
            const colorElement = productCard.querySelector('.attr-color .active');
            const sizeElement = productCard.querySelector('.attr-size .active');
            
            const product = {
                id: productCard.getAttribute('data-id'),
                name: productCard.querySelector('h2 a').textContent.trim(),
                price: parseFloat(productCard.querySelector('.product-price span').textContent.replace(/[^\d.]/g, '')),
                image: productCard.querySelector('.default-img').src,
                quantity: 1,
                color: colorElement ? colorElement.getAttribute('data-color') : '',
                size: sizeElement ? sizeElement.textContent.trim() : ''
            };

            addToCart(product);
        }

        // Quick view modal
        if (e.target.classList.contains('button-add-to-cart') && e.target.closest('#quickViewModal')) {
            e.preventDefault();
            const modal = document.getElementById('quickViewModal');

            const product = {
                id: modal.querySelector('.product-detail').getAttribute('data-id') || 'prod-' + Date.now(),
                name: modal.querySelector('.title-detail').textContent.trim(),
                price: parseFloat(modal.querySelector('.text-brand').textContent.replace(/[^\d.]/g, '')),
                image: modal.querySelector('.product-image-slider img').src,
                quantity: parseInt(modal.querySelector('.qty-val').textContent),
                color: modal.querySelector('.attr-color .active')?.getAttribute('data-color') || '',
                size: modal.querySelector('.attr-size .active')?.textContent.trim() || ''
            };

            addToCart(product);
        }

        // Remove item from cart
        if (e.target.closest('.remove-from-cart')) {
            e.preventDefault();
            const uniqueId = e.target.closest('.remove-from-cart').getAttribute('data-uniqueid');
            cart = cart.filter(item => item.uniqueId !== uniqueId);
            saveCart();
            updateCartCount();
            updateMiniCart();
        }

        // Quantity controls
        if (e.target.closest('.qty-up')) {
            e.preventDefault();
            const input = e.target.closest('.detail-qty').querySelector('.qty-val');
            input.textContent = parseInt(input.textContent) + 1;
        }

        if (e.target.closest('.qty-down')) {
            e.preventDefault();
            const input = e.target.closest('.detail-qty').querySelector('.qty-val');
            if (parseInt(input.textContent) > 1) {
                input.textContent = parseInt(input.textContent) - 1;
            }
        }
    });

    // Color/size selection
    document.querySelectorAll('.attr-color a').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.parentNode.querySelectorAll('a').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
        });
    });

    document.querySelectorAll('.attr-size a').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            this.parentNode.querySelectorAll('a').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Initialize cart on page load
    updateCartCount();
    updateMiniCart();
});
</script>
</body>
@endsection
