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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

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
  <img src="assets/imgs/banner/nl.jpg" alt="logo" style=" height:75px;width:30px" >

</a>
                    </div>
                    <div class="header-right">
    <div class="search-style-2">
      
    </div>
</div>

                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="/wishlist">
                                        <img class="svgInject" alt="Evara" src="assets/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count blue"></span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="/cart">
                                        <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue"></span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                  
                                                </div>
                                                <div class="shopping-cart-title">
                                                   
                                                </div>
                                                <div class="shopping-cart-delete">
                                                   
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="/shop"><img alt="Evara" src="assets/imgs/shop/thumbnail-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                
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
  <img src="assets/imgs/banner/nl.jpg" alt="logo" style=" height:75px;width:30px">
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
                                   
                                                 
                                                   
                                
                                       
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                 <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="/about">About</a>
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
                <div class="mobile-header-logo"  >
                   <a href="/" style="display:inline-block;">
  <img src="assets/imgs/banner/nl.jpg" alt="logo"style=" height:75px;width:30px">
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
                                        <a href="/about">About</a>
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

    <!-- MAIN CONTENT SECTION -->
    @yield('content')

    <footer class="main">
        <section class="newsletter p-30 text-white wow fadeIn animated">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-md-3 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col flex-horizontal-center">
                                <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                                <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                            </div>
                            <div class="col my-4 my-md-0 des">
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>Pkr25 coupon for first shopping.</strong></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Subscribe Form -->
                        <form class="form-subcriber d-flex wow fadeIn animated">
                            <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                            <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                        </form>
                        <!-- End Subscribe Form -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                               <a href="/" style="display:inline-block;">
  <img src="assets/imgs/banner/nl.jpg" alt="logo" style=" height:75px;width:30px" >
</a>

                            </div>
                            <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>562 Wellington Road, Street 32, San Francisco
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                           <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
    <a href="https://www.facebook.com/login" target="_blank" rel="noopener">
        <img src="assets/imgs/theme/icons/icon-facebook.svg" alt="Facebook Login">
    </a>
    <a href="https://twitter.com/login" target="_blank" rel="noopener">
        <img src="assets/imgs/theme/icons/icon-twitter.svg" alt="Twitter Login">
    </a>
    <a href="https://www.instagram.com/accounts/login/" target="_blank" rel="noopener">
        <img src="assets/imgs/theme/icons/icon-instagram.svg" alt="Instagram Login">
    </a>
    <a href="https://www.pinterest.com/login/" target="_blank" rel="noopener">
        <img src="assets/imgs/theme/icons/icon-pinterest.svg" alt="Pinterest Login">
    </a>
    <a href="https://accounts.google.com/ServiceLogin?service=youtube" target="_blank" rel="noopener">
        <img src="assets/imgs/theme/icons/icon-youtube.svg" alt="YouTube Login">
    </a>
</div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                          
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/support">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="/userlogin">Sign In</a></li>
                            <li><a href="/cart">View Cart</a></li>
                            <li><a href="/wishlist">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                           
                            <li><a href="#">Order</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="widget-title wow fadeIn animated">Install App</h5>
                        <div class="row">
                            <div class="col-md-8 col-lg-12">
                                <p class="wow fadeIn animated">From App Store or Google Play</p>
                                <div class="download-app wow fadeIn animated">
                                    <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                    <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                                <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                                <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container pb-20 wow fadeIn animated">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-lg-6">
                    <p class="float-md-left font-sm text-muted mb-0">&copy; 2022, <strong class="text-brand">Evara</strong> - HTML Ecommerce Template </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-lg-end text-start font-sm text-muted mb-0">
                        Designed by <a href="http://alithemes.com" target="_blank">Alithemes.com</a>. All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-10">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="./assets/js/main.js?v=3.4"></script>
    <script src="./assets/js/shop.js?v=3.4"></script>


    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"949743bf0f2d8e3a","version":"2025.5.0","r":1,"token":"3aa9a3481f734e94bceb8bb1bd648ba1","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
</body>
</html>