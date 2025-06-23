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
                                         @foreach($categories as $category)
            <li><a href="/shop/{{ $category->id }}">{{ $category->CategoryName }}</a></li>
        @endforeach
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
   <main class="main">
   <section class="home-slider position-relative pt-50">
    <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
        <!-- Slide 1 -->
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Glow Like Never Before</h4>
                            <h2 class="animated fw-900">Flawless Looks</h2>
                            <h1 class="animated fw-900 text-brand">Effortless Beauty</h1>
                            <p class="animated">Unlock your radiance with our premium makeup range</p></p>
                            <a class="animated btn btn-brush btn-brush-3" href="/shop">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="img-fluid animated slider-1-1" src="assets/imgs/banner/home-hero.jpg" alt="Hero Image 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Adorn Your Grace</h4>
                            <h2 class="animated fw-900">Timeless Jewelry</h2>
                            <h1 class="animated fw-900 text-7">Crafted to Shine</h1>
                            <p class="animated">Discover stunning collections — earrings, rings, necklaces & more</p>
                            <a class="animated btn btn-brush btn-brush-2" href="/shopjewel">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="img-fluid animated slider-1-2" src="assets/imgs/banner/date.jpg" alt="Hero Image 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
 

  
         <!-- Slide 3 -->
 <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Exclusive Deals</h4>
                            <h2 class="animated fw-900">Glow With Grace</h2>
                            <h1 class="animated fw-900 text-brand">Slay Everyday</h1>
                            <p class="animated">Save up to 70% off this week</p>
                            <a class="animated btn btn-brush btn-brush-3" href="/shop">Shop Now</a>
                        </div>
                    </div>
                  <div class="col-lg-7 col-md-6 col-sm-12">
    <div class="single-slider-img single-slider-img-1" style="width: 100%; aspect-ratio: 1 / 1; overflow: hidden;">
        <img src="assets/imgs/banner/slider5-1.png"
             alt="Hero Image 1"
             style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 0;">
    </div>
</div>

                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row align-items-center slider-animated-1">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="hero-slider-content-2">
                            <h4 class="animated">Limited Time Offer</h4>
                            <h2 class="animated fw-900">Shine Bright With</h2>
                            <h1 class="animated fw-900 text-8">Elegant Jewelry</h1>
                            <p class="animated">Up to 50% off on necklaces, rings & more</p>
                            <a class="animated btn btn-brush btn-brush-1" href="/shopjewel">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="single-slider-img single-slider-img-1">
                            <img class="img-fluid animated slider-1-3" src="assets/imgs/banner/jewel.webp" alt="Hero Image 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-arrow hero-slider-1-arrow"></div>
</section>
        <br><br>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                      
                    </ul>
                    <a href="/shopjewel" class="view-more d-none d-md-flex">View More<i class="fas fa-angle-double-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/banner/silver-ring.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/sil-ring.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap" data-id="product-25">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Silver Ring</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
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
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6"  data-id="product-22">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/banner/bracelet.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/bracelet.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Crystal Blue Bracelet</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
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
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30" data-id="product-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/banner/silver-pendant.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/silver-earrings.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Silver Pendant and Earrings</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr840 </span>
                                            <span class="old-price">Pkr445</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30" data-id="product-24">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/banner/product.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/product38.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Rose Gold Ring</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                banner/bracelet.webp</span>
                                            <span class="old-price">Pkr535</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30" data-id="product-41">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/shop/images.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/images.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Gold Bracelet</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr270 </span>
                                            <span class="old-price">Pkr450</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30" data-id="product-28">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/banner/blue-earrings-4.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/blue-earrings.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Blue Earrings</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr240 </span>
                                            <span class="old-price">Pkr245</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30" data-id="product-27">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/banner/gold-vermeil-hoops.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/gold-vermeil-hoops-.webp" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Gold Vermeil Hoops</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr275 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap" data-id="product-32">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shopjewel">
                                                <a href="/shopjewel">
                                                <img class="default-img" src="assets/imgs/shop/oasis-necklace.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/oasis-necklace.jpg" alt="">
                                            </a>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shopjewel">Jewellery</a>
                                        </div>
                                        <h2><a href="/shopjewel">Oasis Necklace</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr230 </span>
                                            <span class="old-price">Pkr420</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                   
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="assets/imgs/banner/slide-1.jpg" alt="">
                   
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shop"><img src="assets/imgs/banner/blush.jpg" alt=""></a>
                            </figure>
                            <h5><a href="/shop">Blushon</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shop"> <img src="assets/imgs/banner/mas.jpg" alt=""></a>
                            </figure>
                            <h5><a href="/shop">Mascara</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shopjewel"><img src="assets/imgs/banner/s2.webp" alt=""></a>
                            </figure>
                            <h5><a href="/shopjewel">Earring</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shopjewel"><img src="assets/imgs/shop/brac.jpeg" alt=""></a>
                            </figure>
                            <h5><a href="/shopjewel">Bracelet</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                 
                                <a href="/shop"><img src="assets/imgs/shop/r2.jpg" alt=""></a>
                            </figure>
                            <h5><a href="/shop">Eyeliner</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shop"><img src="assets/imgs/banner/fou.jpg" alt=""></a>
                            </figure>
                            <h5><a href="/shop">Foundation</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shopjewel"><img src="assets/imgs/banner/product.webp" alt=""></a>
                            </figure>
                            <h5><a href="/shopjewel">Ring</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="/shopjewel"><img src="assets/imgs/banner/silver-pendant.webp" alt=""></a>
                            </figure>
                            <h5><a href="/shopjewel">Pendant</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/1.jpg" alt="">
                          
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="assets/imgs/banner/2.jpg" alt="">
                            
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="assets/imgs/banner/3.jpg" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                      
                    </ul>
                    <a href="/shop" class="view-more d-none d-md-flex">View More<i class="fas fa-angle-double-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30"data-id="product-11">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                                <img class="default-img" src="assets/imgs/banner/liner.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/liner1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">EyeLiner</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr238 </span>
                                            <span class="old-price">Pkr245</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30" data-id="product-4">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                                <img class="default-img" src="assets/imgs/banner/fou.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/fou.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Liquid Foundation</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr2385 </span>
                                            <span class="old-price">Pkr2558</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30" data-id="product-12">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                                  <img class="default-img" src="assets/imgs/banner/blush.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/blush.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Blushon</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr2300 </span>
                                            <span class="old-price">Pkr2450</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30" data-id="product-7">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
  <img class="default-img" src="assets/imgs/shop/ma1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/ma1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Double Shade Blushon</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                banner/bracelet.webp</span>
                                            <span class="old-price">Pkr535</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30" data-id="product-7">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                                <img class="default-img" src="assets/imgs/banner/mas.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/mas1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Mascara</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr3700 </span>
                                            <span class="old-price">Pkr4500</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30" data-id="product-10">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                                  <img class="default-img" src="assets/imgs/shop/b2.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/b2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Liquid Lipstick</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr1400 </span>
                                            <span class="old-price">Pkr2450</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30"data-id="product-2">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                               <img class="default-img" src="assets/imgs/shop/r2.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/r2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Contour Pallette</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
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
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap" data-id="product-3">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="/shop">
                                                <a href="/shop">
                                                 <img class="default-img" src="assets/imgs/shop/f1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/f1.jpg" alt="">
                                            </a>
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="/shop">Cosmetics</a>
                                        </div>
                                        <h2><a href="/shop">Gold Highlighter</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>Pkr2300 </span>
                                            <span class="old-price">Pkr4200</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                  
              
        </section>
      
                        
      <section class="deals section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 deal-co">
                <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="background-image: url('assets/imgs/banner/banner-20.webp');">
                    <div class="deal-top">
                        <h2 class="text-brand">Beauty Deal of the Day</h2>
                        <h5>Limited stock available!</h5>
                    </div>
                    <div class="deal-content">
                        <h6 class="product-title"><a href="/shop">Luxury Skincare Set – Hydrate & Glow</a></h6>
                        <div class="product-price"><span class="new-price">Pkr59.00</span><span class="old-price">Pkr79.99</span></div>
                    </div>
                    <div class="deal-bottom">
                        <p>Hurry Up! Offer Ends In:</p>
                        <div class="deals-countdown" data-countdown="2025/07/01 00:00:00"></div>
                        <a href="/shop" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 deal-co">
                <div class="deal wow fadeIn animated" style="background-image: url('assets/imgs/banner/i2.webp');">
                    <div class="deal-top">
                        <h2 class="text-brand">Makeup Deal</h2>
                        <h5>Glow up your routine</h5>
                    </div>
                    <div class="deal-content">
                        <h6 class="product-title"><a href="/shop">Essential Makeup Kit – All-in-One Beauty Set</a></h6>
                        <div class="product-price"><span class="new-price">Pkr49.00</span><span class="old-price">Pkr65.00</span></div>
                    </div>
                    <div class="deal-bottom">
                        <p>Hurry Up! Offer Ends In:</p>
                        <div class="deals-countdown" data-countdown="2025/07/15 00:00:00"></div>
                        <a href="/shop" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-1.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-2.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-6.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-grey-9 section-padding">
            <div class="container pt-25 pb-25">
                <div class="heading-tab d-flex">
                    <div class="heading-tab-left wow fadeIn animated">
                        <h3 class="section-title mb-20"><span>Monthly</span> Best Sell</h3>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-flex">
                        <div class="banner-img style-2 wow fadeIn animated">
                            <img src="assets/imgs/banner/jewelry.png" alt="">
                            
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shopjewel">
                                                       <img class="default-img" src="assets/imgs/banner/bracelet.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/brac.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shopjewel">Nulla</a>
                                                </div>
                                                <h2><a href="/shopjewel">Maecenas eget</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shopjewel">
                                                      <img class="default-img" src="assets/imgs/shop/brac.jpeg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/brac.jpeg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shopjewel">Duis </a>
                                                </div>
                                                <h2><a href="/shopjewel">Luctus suscipit</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>Pkr138.85 </span>
                                                    <span class="old-price">Pkr145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shopjewel">
                                                       <img class="default-img" src="assets/imgs/banner/silver-pendant.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/silver-earrings.webp" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shopjewel">Fusce </a>
                                                </div>
                                                <h2><a href="/shopjewel">Aliquam ac</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>Pkr152.85 </span>
                                                    <span class="old-price">Pkr156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shopjewel">
                                                       <img class="default-img" src="assets/imgs/banner/silver-ring.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/sil-ring.webp" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shopjewel">Nunc </a>
                                                </div>
                                                <h2><a href="/shopjewel">Fusce et ligula</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shopjewel">
                                                       <img class="default-img" src="assets/imgs/banner/product.webp" alt="">
                                                <img class="hover-img" src="assets/imgs/banner/product38.webp" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shopjewel">Aliquam</a>
                                                </div>
                                                <h2><a href="/shopjewel">Morbi lacinia</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                </div>
                            </div>
                            <!--End tab-pane-->
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Cotton Leaf Printed 2</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>Pkr138.85 </span>
                                                    <span class="old-price">Pkr145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Hugy Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>Pkr152.85 </span>
                                                    <span class="old-price">Pkr156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>Pkr138.85 </span>
                                                    <span class="old-price">Pkr145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Hugy Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>Pkr152.85 </span>
                                                    <span class="old-price">Pkr156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up" href="/cart"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="/shop">
                                                        <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="">
                                                        <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
<i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="/wishlist"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Add To Cart" class="action-btn small hover-up" href="/cart"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="/shop">Watch</a>
                                                </div>
                                                <h2><a href="/shop">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
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
                                </div>
                            </div>
                        </div>
                        <!--End tab-content-->
                    </div>
                    <!--End Col-lg-9-->
                </div>
            </div>
        </section>
       
                                  
                                      
                              
                                      
                   
                  
                       
     
        <section class="mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-bg wow fadeIn animated" style="background-image: url('assets/imgs/banner/banner-8.jpg')">
                            <div class="banner-content">
                                <h5 class="text-grey-4 mb-15">Shop Today’s Deals</h5>
                                <h2 class="fw-600">Grab <span class="text-brand">Your Favourites</span>. Big Sale Up to 40%</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-45">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                            <img src="assets/imgs/banner/add-banner-4.jpg" alt="">
                            <div class="banner-text">
                                <span class="text-brand"  style="font-weight: bold;">Always Make Room </span>
                                <h4>For A Little <br>Beauty In Your Life</h4>
                                <a href="/shop" style="font-weight: bold;">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Deals & Outlet</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shopjewel"><img src="assets/imgs/banner/s1.webp" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shopjewel">Blue Ring</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238.85 </span>
                                        <span class="old-price">Pkr245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shopjewel"><img src="assets/imgs/banner/s2.webp" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shopjewel">Butterfly Earring</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238.85 </span>
                                        <span class="old-price">Pkr245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shopjewel"><img src="assets/imgs/banner/s3.webp" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shopjewel">Blue Earring</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238.85 </span>
                                        <span class="old-price">Pkr245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Top Selling</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shop"><img src="assets/imgs/banner/lip.png" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shop">Liquid Lipstick</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr1400 </span>
                                        <span class="old-price">Pkr2458</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shop"><img src="assets/imgs/banner/liner.jpg" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shop">Eyeliner</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238 </span>
                                        <span class="old-price">Pkr245</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shop"><img src="assets/imgs/banner/blush.jpg" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shop">Blushon</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr2300 </span>
                                        <span class="old-price">Pkr2450</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Hot Releases</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shopjewel"><img src="assets/imgs/banner/product.webp" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shopjewel">Rose Gold Ring</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238.85 </span>
                                        <span class="old-price">Pkr245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shopjewel"><img src="assets/imgs/banner/silver-pendant.webp" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shopjewel">Silver Pendant</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238.85 </span>
                                        <span class="old-price">Pkr245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="/shopjewel"><img src="assets/imgs/banner/oasis-necklace.jpg" alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="/shopjewel">Oasis Necklace</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>Pkr238.85 </span>
                                        <span class="old-price">Pkr245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
  

<script>




document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchForm = document.querySelector('.search-style-2 form');
    const searchInput = searchForm.querySelector('input[type="text"]');
    const categorySelect = searchForm.querySelector('select');
    
    // Get all product elements
    const products = document.querySelectorAll('.product-cart-wrap');
    
    // Function to filter products
    function filterProducts() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categorySelect.value.toLowerCase();
        
        products.forEach(product => {
            const productName = product.querySelector('h2 a').textContent.toLowerCase();
            const productCategory = product.querySelector('.product-category a').textContent.toLowerCase();
            
            // Check if product matches search criteria
            const nameMatch = productName.includes(searchTerm);
            const categoryMatch = selectedCategory === 'all categories' || 
                                productCategory.includes(selectedCategory);
            
            if (nameMatch && categoryMatch) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
    
    // Event listeners for search
    searchInput.addEventListener('input', filterProducts);
    categorySelect.addEventListener('change', filterProducts);
    
    // Prevent form submission (we're handling it with JS)
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        filterProducts();
    });
    
    // Mobile search functionality
    const mobileSearchForm = document.querySelector('.mobile-search form');
    const mobileSearchInput = mobileSearchForm.querySelector('input[type="text"]');
    
    if (mobileSearchForm) {
        mobileSearchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchTerm = mobileSearchInput.value.toLowerCase();
            
            products.forEach(product => {
                const productName = product.querySelector('h2 a').textContent.toLowerCase();
                
                if (productName.includes(searchTerm)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    }
});
    //Search end
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
                        <a href="#" class="remove-from-cart" data-id="${item.id}"><i class="fi-rs-cross-small"></i></a>
                    </div>
                </li>
            `;
        });

        document.querySelector('.shopping-cart-total h4 span').textContent = `PKR ${total.toFixed(2)}`;
    }

    // Add product to cart
    function addToCart(product) {
        // Check if product already exists in cart (using only ID for comparison)
        const existingItem = cart.find(item => item.id === product.id);

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
        // Product grid items
        if (e.target.closest('.action-btn.hover-up') || e.target.closest('.button-add-to-cart')) {
            e.preventDefault();
            const productCard = e.target.closest('.product-cart-wrap');

            const product = {
                id: productCard.getAttribute('data-id'), // Using the HTML data-id attribute
                name: productCard.querySelector('h2 a').textContent.trim(),
                price: parseFloat(productCard.querySelector('.product-price span').textContent.replace(/[^\d.]/g, '')),
                image: productCard.querySelector('.default-img').src,
                quantity: 1,
                // Removed color/size from comparison
            };

            addToCart(product);
        }

        // Quick view modal
        if (e.target.classList.contains('button-add-to-cart') && e.target.closest('#quickViewModal')) {
            e.preventDefault();
            const modal = document.getElementById('quickViewModal');

            const product = {
                id: modal.querySelector('.product-detail').getAttribute('data-id'), // Same ID source
                name: modal.querySelector('.title-detail').textContent.trim(),
                price: parseFloat(modal.querySelector('.text-brand').textContent.replace(/[^\d.]/g, '')),
                image: modal.querySelector('.product-image-slider img').src,
                quantity: parseInt(modal.querySelector('.qty-val').textContent),
            };

            addToCart(product);
        }

        // Remove item from cart
        if (e.target.closest('.remove-from-cart') || e.target.classList.contains('fi-rs-cross-small')) {
            e.preventDefault();
            const removeBtn = e.target.closest('.remove-from-cart');
            const id = removeBtn.getAttribute('data-id');
            cart = cart.filter(item => item.id !== id);
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

    // Initialize cart on page load
    updateCartCount();
    updateMiniCart();
});
</script>
</body>

</html>