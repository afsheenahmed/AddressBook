<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\vendor;


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
    return view('User.shop-cosmetics');
});
Route::get('/shopjewel', function () {
    return view('User.shop-jewelry');
});

// ========USER CONTROLLER ROUTES==========

Route::post('/contactadmin',[UserController::class, 'contactdata']);


// ========ADMIN VIEW ROUTES==========
Route::get('/viewvendors', function () {
    return view('Admin.page-vendors');
});
Route::get('/viewusers', function () {
    return view('Admin.page-users');
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
 Route::get('/viewusers', [AdminController::class, 'getuser'])->name('Admin.viewusers');
Route::post('/delete/{id}',[AdminController::class,('deleteuser')]);
 Route::get('/viewvendors', [AdminController::class, 'getvendor'])->name('Admin.viewvendors');

Route::post('/delete/{id}',[AdminController::class,('deletevendor')]);
Route::post('/update/{id}',[AdminController::class,('updatevendor')]);







// ========VENDOR VIEW ROUTES==========

Route::get('/vendorregister', function () {
    return view('Vendor.register');
});






// ========VENDOR CONTROLLER ROUTES==========
Route::post('/addvendor',[VendorController::class,('register')]);




// ========MIDDLEWARE==========
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

 if(Auth::User()->role==='user')
        {

 return view('User.index');
        
        
    }
    else{

    return view('Admin.index');
    }

       
    })->name('dashboard');
    Route::get('/admindashboard', function () {
    return view('Admin.index');
});
 


});
