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
    <style>
        .wishlist-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
            margin-bottom: 15px;
        }
        .wishlist-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
        }
        .wishlist-item-details {
            flex: 1;
        }
        .wishlist-item-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .empty-wishlist {
            text-align: center;
            padding: 50px;
            font-size: 18px;
            color: #777;
        }
    </style>
</head>

<body>
   
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
                            <h6 style="font-weight: bold;" class="product-title"><a href="/shop">Summer Collection New Morden Design</a></h6>
                            <div class="product-price"><span class="new-price">$139.00</span><span class="old-price" style="font-weight: bold;color: black ">$160.99</span></div>
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

                            <a href="/shop" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
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
                                        <img src="assets/imgs/shop/product-16-2.jpg" alt="product image">
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
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
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
                                        <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
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
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="/shop">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                    </ul>
                                </li>
                                <li><i class="fas fa-user"></i><a href="/userlogin">Log In / Sign Up</a></li>
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
  <img src="assets/imgs/theme/nl.png" alt="logo" style="width:200px; height:80px;">

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
                                                    <h4><span>1 × </span>$800.00</h4>
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
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
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
  <img src="assets/imgs/theme/nl.png" alt="logo" style="width:200px; height:80px;">
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
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Compact Powder</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Foundation</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Highlighter</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Blush</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Concealer</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                               <li><span class="submenu-title">Eye Makeup</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">EyeLiner</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Mascara</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Eyeshadow Pallete</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Eye Pencil</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Eyebrow Pencil</a></li>
                                                            
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
                                        <a href="/shop">Jewellery</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                              
                                                                <li><span class="submenu-title">Neck Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Pendant</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Choker</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Chain</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Locket</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>  
                                                                 <li><span class="submenu-title">Hand Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Bracelet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Ring</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Bangels</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Wrist Cuff</a></li>
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
                                                    <li><a href="/shop">Dresses</a></li>
                                                    <li><a href="/shop">Blouses & Shirts</a></li>
                                                    <li><a href="/shop">Hoodies & Sweatshirts</a></li>
                                                    <li><a href="/shop">Wedding Dresses</a></li>
                                                    <li><a href="/shop">Prom Dresses</a></li>
                                                    <li><a href="/shop">Cosplay Costumes</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="/shop">Jewellery</a>
                                                <ul>
                                                    <li><a href="/shop">Jackets</a></li>
                                                    <li><a href="/shop">Casual Faux Leather</a></li>
                                                    <li><a href="/shop">Genuine Leather</a></li>
                                                    <li><a href="/shop">Casual Pants</a></li>
                                                    <li><a href="/shop">Sweatpants</a></li>
                                                    <li><a href="/shop">Harem Pants</a></li>
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
                                            <li><a href="/userlogin">login/register</a></li>
                                            <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                            <li><a href="/privacypolicy">Privacy Policy</a></li>
                                            <li><a href="/terms">Terms of Service</a></li>
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
                                                <h3><span>1 × </span>$800.00</h3>
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
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
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
  <img src="assets/imgs/theme/nl.png" alt="logo" style="width:200px; height:80px">
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
                                <li><a href="/shop">Jewellry</a></li>
                                
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
                                                    <li><a href="/shop">Dresses</a></li>
                                                    <li><a href="/shop">Blouses & Shirts</a></li>
                                                    <li><a href="/shop">Hoodies & Sweatshirts</a></li>
                                                    <li><a href="/shop">Wedding Dresses</a></li>
                                                    <li><a href="/shop">Prom Dresses</a></li>
                                                    <li><a href="/shop">Cosplay Costumes</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="/shop">Jewellery</a>
                                                <ul>
                                                    <li><a href="/shop">Jackets</a></li>
                                                    <li><a href="/shop">Casual Faux Leather</a></li>
                                                    <li><a href="/shop">Genuine Leather</a></li>
                                                    <li><a href="/shop">Casual Pants</a></li>
                                                    <li><a href="/shop">Sweatpants</a></li>
                                                    <li><a href="/shop">Harem Pants</a></li>
                                                </ul>
                                            </li>
                                          
                                            
                                   
                                    
                                  
                                   
                           
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/account">My Account</a></li>
                                    <li><a href="/userlogin">login/register</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="/privacypolicy">Privacy Policy</a></li>
                                    <li><a href="/terms">Terms of Service</a></li>
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
                                <tbody>
                                    <tr>
                                        <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="shop-product-right.html">J.Crew Mercantile Women's Short-Sleeve</a></h5>
                                            <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.
                                            </p>
                                        </td>
                                        <td class="price" data-title="Price"><span>$65.00 </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <span class="color3 font-weight-bold">In Stock</span>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <button class="btn btn-sm"><i class="fi-rs-shopping-bag mr-5"></i>Add to cart</button>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="image"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                        <td class="product-des">
                                            <h5 class="product-name"><a href="shop-product-right.html">Amazon Essentials Women's Tank</a></h5>
                                            <p class="font-xs">Sit at ipsum amet clita no est,<br> sed amet sadipscing et gubergren</p>
                                        </td>
                                        <td class="price" data-title="Price"><span>$75.00 </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <span class="color3 font-weight-bold">In Stock</span>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <button class="btn btn-sm"><i class="fi-rs-shopping-bag mr-5"></i>Add to cart</button>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="image"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                        <td class="product-des">
                                            <h5 class="product-name"><a href="shop-product-right.html">Amazon Brand - Daily Ritual Women's Jersey </a></h5>
                                            <p class="font-xs">Erat amet et et amet diam et et.<br> Justo amet at dolore
                                            </p>
                                        </td>
                                        <td class="price" data-title="Price"><span>$62.00 </span></td>
                                        <td class="text-center" data-title="Stock">
                                            <span class="text-danger font-weight-bold">Out of stock</span>
                                        </td>
                                        <td class="text-right" data-title="Cart">
                                            <button class="btn btn-sm btn-secondary"><i class="fi-rs-headset mr-5"></i>Contact Us</button>
                                        </td>
                                        <td class="action" data-title="Remove"><a href="#"><i class="fi-rs-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
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
                                <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
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
                                <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
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
                                <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
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
                    <h5 class="mb-5">Now Loading</h5>
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
    <!-- Template  JS -->
    <script src="./assets/js/main.js?v=3.4"></script>
    <script src="./assets/js/shop.js?v=3.4"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9497d7ac3e1de8c7","version":"2025.5.0","r":1,"token":"3aa9a3481f734e94bceb8bb1bd648ba1","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}'
        crossorigin="anonymous"></script>
        <script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize wishlist from localStorage
    let wishlist = JSON.parse(localStorage.getItem('evara-wishlist')) || [];
    
    // Function to render wishlist items
    function renderWishlist() {
        const wishlistTable = document.querySelector('.shopping-summery tbody');
        
        if (!wishlistTable) return;
        
        // Clear existing static rows
        wishlistTable.innerHTML = '';
        
        if (wishlist.length === 0) {
            wishlistTable.innerHTML = `
                <tr>
                    <td colspan="6" class="empty-wishlist">
                        Your wishlist is empty. Start adding some products!
                    </td>
                </tr>
            `;
            return;
        }
        
        // Add each wishlist item to the table
        wishlist.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="image product-thumbnail"><img src="${item.image}" alt="${item.name}"></td>
                <td class="product-des product-name">
                    <h5 class="product-name"><a href="shop-product-right.html">${item.name}</a></h5>
                </td>
                <td class="price" data-title="Price"><span>$${item.price.toFixed(2)}</span></td>
                <td class="text-center" data-title="Stock">
                    <span class="color3 font-weight-bold">${item.inStock ? 'In Stock' : 'Out of Stock'}</span>
                </td>
                <td class="text-right" data-title="Cart">
                    <button class="btn btn-sm add-to-cart-from-wishlist" data-id="${item.id}">
                        <i class="fi-rs-shopping-bag mr-5"></i>Add to cart
                    </button>
                </td>
                <td class="action" data-title="Remove">
                    <a href="#" class="remove-from-wishlist" data-id="${item.id}">
                        <i class="fi-rs-trash"></i>
                    </a>
                </td>
            `;
            wishlistTable.appendChild(row);
        });
        
        // Add event listeners for the new buttons
        document.querySelectorAll('.remove-from-wishlist').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const id = this.getAttribute('data-id');
                wishlist = wishlist.filter(item => item.id !== id);
                localStorage.setItem('evara-wishlist', JSON.stringify(wishlist));
                renderWishlist();
                updateWishlistCount();
            });
        });
        
        document.querySelectorAll('.add-to-cart-from-wishlist').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const product = wishlist.find(item => item.id === id);
                
                if (product) {
                    // Initialize cart from localStorage
                    let cart = JSON.parse(localStorage.getItem('evara-cart')) || [];
                    
                    // Check if product already in cart
                    const existingItem = cart.find(item => item.id === product.id);
                    
                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        cart.push({
                            ...product,
                            quantity: 1,
                            color: '',
                            size: ''
                        });
                    }
                    
                    localStorage.setItem('evara-cart', JSON.stringify(cart));
                    alert('Product added to cart!');
                    
                    // You might want to update the cart count in the header here
                    // You can call the existing updateCartCount() function from your cart script
                }
            });
        });
    }
    
    // Update wishlist count in header
    function updateWishlistCount() {
        const count = wishlist.length;
        document.querySelectorAll('.wishlist-count').forEach(el => {
            el.textContent = count;
        });
    }

    // Initial render
    renderWishlist();
    updateWishlistCount();
});
</script>
    </body>
    </html>