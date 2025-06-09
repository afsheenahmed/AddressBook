<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


//========USER VIEW ROUTES==========
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

// ========USER CONTROLLER ROUTES==========
Route::post('/contactadmin',[UserController::class, 'contactdata']);


// ========ADMIN VIEW ROUTES==========
Route::get('/admindashboard', function () {
    return view('Admin.index');
});
Route::get('/viewproducts', function () {
    return view('Admin.page-products-list');
});
Route::get('/categories', function () {
    return view('Admin.page-categories');
});
Route::get('/invoice', function () {
    return view('Admin.page-invoice');
});
Route::get('/orderdetails', function () {
    return view('Admin.page-orders-detail');
});
Route::get('/ordertracking', function () {
    return view('Admin.page-orders-tracking');
});
Route::get('/userorder', function () {
    return view('Admin.page-orders');
});
Route::get('/productlist', function () {
    return view('Admin.page-products-list');
});
Route::get('/vieworder', function () {
    return view('Admin.vieworder');
});
// ========ADMIN CONTROLLER ROUTES==========



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
