@extends('User.layout')
@section('content')
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
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
                <!-- Category Dropdown -->
                <!-- ... mobile menu items ... -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="/contact"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="page-login-register.html">Log In / Sign Up </a>
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
                <span></span> Pages
                <span></span> Contact us
            </div>
        </div>
    </div>

    <section class="hero-2 bg-green">
        <div class="hero-content">
            <div class="container">
                <div class="text-center">
                    <h4 class="text-brand mb-20">Get in touch</h4>
                    <h1 class="mb-20 wow fadeIn animated font-xxl fw-900">
                        Let's Talk About <br>Your <span class="text-style-1">Idea</span>
                    </h1>
                    <p class="w-50 m-auto mb-50 wow fadeIn animated">  Have questions about our beauty products or sparkling jewelry? We're here to help you find the perfect match for your style and needs.</p>
                    <p class="wow fadeIn animated">
                        <a class="btn btn-brand btn-lg font-weight-bold text-white border-radius-5 btn-shadow-brand hover-up" href="page-about.html">About Us</a>
                        <a class="btn btn-outline btn-lg btn-brand-outline font-weight-bold text-brand bg-white text-hover-white ml-15 border-radius-5 btn-shadow-brand hover-up">Support Center</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div id="google-map" class="container my-5">
        <h4 class="lobster-regular text-center text-brand mb-4" >Location and Hours</h4>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.54837518593!2d67.1080992740152!3d24.94745074177366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3390008cfd9ab%3A0x50570e200b0de0fe!2sAptech%20scheme%2033!5e0!3m2!1sen!2s!4v1732205690163!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <section class="section-border">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-15 text-brand">Office</h4>
                    205 North Karachi Avenue, Suite 810<br> Pakistan<br>
                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                    <abbr title="Email">Email: </abbr><a href="#" class="__cf_email__">addressbook@gmail.com</a><br>
                    <a href="#google-map" class="btn btn-outline btn-sm btn-brand-outline  font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                      <i class="fas fa-map-marker-alt mr-10"></i>
View map
                    </a>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="mb-15 text-brand">Studio</h4>
                    Street 401 Saddar, Karachi<br> Pakistan<br>
                    <abbr title="Phone">Phone:</abbr> (123) 286-2356<br>
                    <abbr title="Email">Email: </abbr><a href="#" class="__cf_email__">addressbook@gmail.com</a><br>
                    <a href="#google-map" class="btn btn-outline  btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fas fa-map-marker-alt mr-10"></i>
View map
                    </a>
                </div>
                <div class="col-md-4">
                    <h4 class="mb-15 text-brand">Shop</h4>
                    Dolmen Mall ,Tariq Road,Karachi<br>Pakistan<br>
                    <abbr title="Phone">Phone:</abbr> (123) 456-7890<br>
                    <abbr title="Email">Email: </abbr><a href="#" class="__cf_email__">addressbook@gmail.com</a><br>
                    <a href="#google-map" class="btn btn-outline btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fas fa-map-marker-alt mr-10"></i>
View map
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-50 pb-50">
        <div class="container">
            @if(@session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Alert ! {{session('success')}}</strong>
            </div>
            <script>
                var alertList = document.querySelectorAll(".alert");
                alertList.forEach(function (alert) {
                    new bootstrap.Alert(alert);
                });
            </script>
            @endif

            @if(@session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Alert ! {{session('error')}}</strong>
            </div>
            <script>
                var alertList = document.querySelectorAll(".alert");
                alertList.forEach(function (alert) {
                    new bootstrap.Alert(alert);
                });
            </script>
            @endif

            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp">
                        <h3 class="mb-10 text-center">Drop Us a Line</h3>
                        <p class="text-muted mb-30 text-center font-sm">Have a question or a custom request? Let’s chat!</p>
                        <form class="contact-form-style text-center" id="contact-form" action="/contactadmin" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="name" placeholder="First Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="email" placeholder="Your Email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="telephone" placeholder="Your Phone" type="tel">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="subject" placeholder="Subject" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="textarea-style mb-30">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="submit submit-auto-width" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
