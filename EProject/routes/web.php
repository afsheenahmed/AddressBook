<?php

use Illuminate\Support\Facades\Route;

//User Routes
Route::get('/', function () {
    return view('User.index');
});
Route::get('/contact', function () {
    return view('User.page-contact');
});
Route::get('/404', function () {
    return view('User.page-404');
});
Route::get('/account', function () {
    return view('User.page-account');
});
Route::get('/userlogin', function () {
    return view('User.page-login-register');
});
Route::get('/cart', function () {
    return view('User.shop-cart');
});
Route::get('/checkout', function () {
    return view('User.shop-checkout');
});

Route::get('/wishlist', function () {
    return view('User.shop-wishlist');
});

Route::get('/shop', function () {
    return view('User.shop-grid-right');
});



//Admin Routes
Route::get('/admindashboard', function () {
    return view('Admin.index');
});





// ========MIDDLEWARE==========
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
