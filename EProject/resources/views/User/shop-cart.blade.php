<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - Ecommerce Web</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/main.css?v=3.4">

</head>

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
    <!-- Modal -->
    <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="deal" style="background-image: url('assets/imgs/banner/img-3.jpg')">
                        <div class="deal-top">
                            <h2 class="text-brand">Deal of the Day</h2>
                            <h5 style="font-weight: bold;">Limited quantities.</h5>
                        </div>
                        <div class="deal-content">
                            <h6 style="font-weight: bold;" class="product-title"><a href="/shopjewel">Summer Collection New Modern Design</h6>
                            <div class="product-price"><span class="new-price">Pkr139.00</span><span class="old-price" style="font-weight: bold;color: black ">Pkr160.99</span></div>
                        </div>
                        <div class="deal-bottom">
                            <p style="font-weight: bold;"  >Hurry Up! Offer End In:</p>
                          <div class="deals-countdown" data-countdown="2025/03/25 00:00:00">
  <span class="countdown-section">
    <span class="countdown-amount hover-up">03</span>
    <span class="countdown-period" style="color: black !important;"> days </span>
  </span>
  <span class="countdown-section">
    <span class="countdown-amount hover-up">02</span>
    <span class="countdown-period" style="color: black !important; font-weight: bold;"> hours </span>
  </span>
  <span class="countdown-section">
    <span class="countdown-amount hover-up">43</span>
    <span class="countdown-period" style="color: black !important;"> mins </span>
  </span>
  <span class="countdown-section">
    <span class="countdown-amount hover-up">29</span>
    <span class="countdown-period" style="color: black !important;"> sec </span>
  </span>
</div>

                           <a href="/shopjewel" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/banner/" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-1.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-3.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-4.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-5.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-6.jpg" alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="assets/imgs/shop/product-16-7.jpg" alt="product image">
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="assets/imgs/shop/thumbnail-3.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-4.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-5.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-6.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-7.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-8.jpg" alt="product image"></div>
                                    <div><img src="assets/imgs/shop/thumbnail-9.jpg" alt="product image"></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="/shop">Bootstrap</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">Pkr120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">Pkr200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>

                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">Women</a>, <a href="#" rel="tag">Dress</a> </li>
                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fas fa-phone-alt"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                                <li><i class="fas fa-map-marker-alt"></i><a href="/contact">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="/shop">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="/shopjewel">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                           <ul>
    <li><i class="fas fa-user"></i><a href="/vendorregister">Become Vendor</a></li>
    
    @auth
        {{-- Show logout option if user is authenticated --}}
        <li>
            <i class="fas fa-user"></i>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); this.closest('form').submit();">
                   Log Out
                </a>
            </form>
        </li>
    @else
        {{-- Show login option if user is not authenticated --}}
        <li><i class="fas fa-user"></i><a href="{{ route('login') }}">Become Member</a></li>
    @endauth
</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                       <a href="/" style="display:inline-block;">
  <img src="assets/imgs/theme/" alt="logo" style="width:200px; height:80px;">

</a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Jewellery</option>
                                    <option>Cosmetics</option>
                                    
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="/wishlist">
                                        <img class="svgInject" alt="Evara" src="assets/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="/cart">
                                        <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/shop"><img alt="Evara" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/shop">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>Pkr800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/shop"><img alt="Evara" src="assets/imgs/shop/thumbnail-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="/shop">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>Pkr3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>Pkr4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="/cart" class="outline">View cart</a>
                                                <a href="/checkout">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
<a href="/" style="display:inline-block;">
  <img src="assets/imgs/theme/" alt="logo" style="width:200px; height:80px;">
</a>

                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fas fa-list"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="/shop">Cosmetics</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Face Makeup</span></li>
                                                              
                                                             <li><a class="dropdown-item nav-link nav_item" href="/shop">Foundation</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shop">Blushon</a></li>

                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                               <li><span class="submenu-title">Eye Makeup</span></li>
                                                             <li><a class="dropdown-item nav-link nav_item" href="/shop">Mascara</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shop">Eyeliner</a></li>

                                                              
                                                            
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/g4.jpg"  style="height:200px;width:260px"   alt="menu_banner1">
                                                      
                                                    </div>
                                                   
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="/shopjewel">Jewellery</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                              
                                                                <li><span class="submenu-title">Neck And Ear Jewellery</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Pendant</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Earrings</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>  
                                                                 <li><span class="submenu-title">Hand And Finger Jewellery</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Bracelet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Ring</a></li>
                                                              
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/banner-17.webp" style="height:200px;" alt="menu_banner1">
                                                        
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                                 
                                                   
                                
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="/shop"><i class="evara-font-desktop"></i>Beauty, Health</a></li>
                                            <li><a href="/shop"><i class="evara-font-cpu"></i>Bags and Shoes</a></li>
                                            <li><a href="/shop"><i class="evara-font-diamond"></i>Consumer Electronics</a></li>
                                            <li><a href="/shop"><i class="evara-font-home"></i>Automobiles & Motorcycles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                 <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="page-about.html">About</a>
                                    </li>
                                     
                                            
                                    <li class="position-static"><a href="/shop">Shop <i class="fas fa-angle-double-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="/shop">Cosmetics</a>
                                                <ul>
                                                   <li><a class="dropdown-item nav-link nav_item" href="/shop">Foundation</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shop">Blushon</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shop">Mascara</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shop">Eyeliner</a></li>

                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="/shopjewel">Jewellery</a>
                                                <ul>
                                                  <li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Earrings</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Pendant</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Bracelet</a></li>
<li><a class="dropdown-item nav-link nav_item" href="/shopjewel">Ring</a></li>

                                                </ul>
                                            </li>
                                          
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="/shop"><img src="assets/imgs/banner/i3.webp" alt="Evara"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>Don't miss<br> Trending</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-primary">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="/shop">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span> off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="#">Pages <i class="fas fa-angle-double-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a href="/account">My Account</a></li>
                                            <li><a href="/userlogin">Login/Register</a></li>
                                           
                                            <li><a href="/404">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fas fa-phone-alt"></i><span>Hotline</span> 18900 807 77 </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="/wishlist">
                                    <img alt="Evara" src="assets/imgs/theme/icons/icon-heart.svg">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="/cart">
                                    <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="/shop"><img alt="Evara" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="/shop">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>Pkr800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="/shop"><img alt="Evara" src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="/shop">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>Pkr3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>Pkr383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="/cart">View cart</a>
                                            <a href="/checkout">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                   <a href="/" style="display:inline-block;">
  <img src="assets/imgs/theme/.png" alt="logo" style="width:200px; height:80px">
</a>

                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fas fa-list"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="/shop">Cosmetics</a></li>
                                <li><a href="/shopjewel">Jewellry</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                              <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="page-about.html">About</a>
                                    </li>
                           
                           <li class="position-static"><a href="/shop">Shop <i class="fas fa-angle-double-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="/shop">Cosmetics</a>
                                                <ul>
                                      
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="/shopjewel">Jewellery</a>
                                                <ul>
                                                    <li><a href="/shopjewel">Jackets</a></li>
                                                    <li><a href="/shopjewel">Casual Faux Leather</a></li>
                                                    <li><a href="/shopjewel">Genuine Leather</a></li>
                                                    <li><a href="/shopjewel">Casual Pants</a></li>
                                                    <li><a href="/shopjewel">Sweatpants</a></li>
                                                    <li><a href="/shopjewel">Harem Pants</a></li>
                                                </ul>
                                            </li>
                                          
                                            
                                   
                                    
                                  
                                   
                           
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/account">My Account</a></li>
                                    <li><a href="/userlogin">Login/Register</a></li>
                                   
                                    <li><a href="/404">404 Page</a></li>
                                </ul>
                            </li>
      
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="/contact"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="/userlogin">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
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
                                    <!-- Cart items will be dynamically inserted here -->
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-action text-end">
                            <a href="/shop" class="btn mr-10 mb-sm-15"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12">
                                <div class="heading_s1 mb-3">
                                    <h4>Calculate Shipping</h4>
                                </div>
                                <p class="mt-15 mb-30">Flat rate: <span class="font-xl text-brand fw-900">5%</span></p>
                                <form class="field_form shipping_calculator">
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                           
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
                                        <table class="table" id="cart-totals-table">
                                            <tbody>
                                                <!-- Totals will be dynamically inserted here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="/checkout" class="btn"><i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main">
        <!-- Your existing footer content -->
    </footer>

    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    
    <!-- Cart Page JavaScript -->
  <script>
document.addEventListener('DOMContentLoaded', function() {
    let cart = JSON.parse(localStorage.getItem('evara-cart')) || [];
    const conversionRate = 280; // Adjust this rate as needed

    const cartItemsContainer = document.getElementById('cart-items-container');
    const cartTotalsTable = document.getElementById('cart-totals-table').querySelector('tbody');

    function renderCart() {
        cartItemsContainer.innerHTML = '';

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center py-5">
                        <div class="empty-cart-message">
                            <i class="fi-rs-shopping-cart mb-3" style="font-size: 48px; color: #ddd;"></i>
                            <h5>Your cart is empty</h5>
                            <a href="/shop" class="btn mt-3">Continue Shopping</a>
                        </div>
                    </td>
                </tr>
            `;
            updateTotals(0);
            return;
        }

        let subtotal = 0;

        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="image product-thumbnail">
                    <img src="${item.image}" alt="${item.name}" 
                         onerror="this.src='assets/imgs/shop/product-default.jpg'">
                </td>
                <td class="product-des product-name">
                    <h5 class="product-name"><a href="shop-product-right.html">${item.name}</a></h5>
                    ${item.color ? `<p class="font-xs">Color: ${item.color}</p>` : ''}
                    ${item.size ? `<p class="font-xs">Size: ${item.size}</p>` : ''}
                </td>
                <td class="price" data-title="Price">
                    <span>PKR${(item.price * conversionRate).toFixed(2)}</span>
                </td>
                <td class="text-center" data-title="Quantity">
                    <div class="detail-qty border radius m-auto">
                        <a href="#" class="qty-down" data-index="${index}">
                            <i class="fi-rs-angle-small-down"></i>
                        </a>
                        <span class="qty-val">${item.quantity}</span>
                        <a href="#" class="qty-up" data-index="${index}">
                            <i class="fi-rs-angle-small-up"></i>
                        </a>
                    </div>
                </td>
                <td class="text-right" data-title="Subtotal">
                    <span>PKR${(itemTotal * conversionRate).toFixed(2)}</span>
                </td>
                <td class="action" data-title="Remove">
                    <a href="#" class="text-muted remove-item" data-index="${index}">
                        <i class="fi-rs-trash"></i>
                    </a>
                </td>
            `;
            cartItemsContainer.appendChild(row);
        });

        const clearRow = document.createElement('tr');
        clearRow.innerHTML = `
            <td colspan="6" class="text-end">
                <a href="#" class="text-muted clear-cart">
                    <i class="fi-rs-cross-small"></i> Clear Cart
                </a>
            </td>
        `;
        cartItemsContainer.appendChild(clearRow);

        updateTotals(subtotal);
        attachCartEvents();
    }

    function updateTotals(subtotal) {
        const shipping = subtotal > 100 ? 0 : 5;
        const total = subtotal + shipping;

        cartTotalsTable.innerHTML = `
            <tr>
                <td class="cart_total_label">Cart Subtotal</td>
                <td class="cart_total_amount">
                    <span class="font-lg fw-900 text-brand">PKR${(subtotal * conversionRate).toFixed(2)}</span>
                </td>
            </tr>
            <tr>
                <td class="cart_total_label">Shipping</td>
                <td class="cart_total_amount">
                    <i class="ti-gift mr-5"></i> PKR${(shipping * conversionRate).toFixed(2)}
                </td>
            </tr>
            <tr>
                <td class="cart_total_label">Total</td>
                <td class="cart_total_amount">
                    <strong><span class="font-xl fw-900 text-brand">PKR${(total * conversionRate).toFixed(2)}</span></strong>
                </td>
            </tr>
        `;
    }

    function saveCart() {
        localStorage.setItem('evara-cart', JSON.stringify(cart));
        const count = cart.reduce((total, item) => total + item.quantity, 0);
        document.querySelectorAll('.pro-count').forEach(el => {
            el.textContent = count;
        });
        renderCart();
    }

    function attachCartEvents() {
        document.querySelectorAll('.qty-up').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const index = this.dataset.index;
                cart[index].quantity += 1;
                saveCart();
            });
        });

        document.querySelectorAll('.qty-down').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const index = this.dataset.index;
                if (cart[index].quantity > 1) {
                    cart[index].quantity -= 1;
                    saveCart();
                }
            });
        });

        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const index = this.dataset.index;
                cart.splice(index, 1);
                saveCart();
            });
        });

        document.querySelector('.clear-cart')?.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to clear your cart?')) {
                cart = [];
                saveCart();
            }
        });
    }

    renderCart();
});
</script>
</body>
</html>