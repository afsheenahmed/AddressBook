<?php

use App\Http\Controllers\Admin\ProductStockController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\vendor;
use App\Models\Product;


//========USER VIEW ROUTES==========
Route::get('/', function () {
    return view('User.index');
});
Route::get('/about', function () {
    return view('User.about');
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

Route::get('/wishlist{ $product->id }', function () {
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
 Route::get('/viewcontact', [UserController::class, 'allContacts']);


// ========ADMIN VIEW ROUTES==========
Route::get('/viewvendors', function () {
    return view('Admin.page-vendors');
});
Route::get('/viewusers', function () {
    return view('Admin.page-users');
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

Route::get('/vieworder', function () {
    return view('Admin.vieworder');
});
// ========ADMIN CONTROLLER ROUTES==========
 Route::get('/viewusers', [AdminController::class, 'getuser'])->name('Admin.viewusers');
Route::post('/user/{id}',[AdminController::class,('deleteuser')]);

 Route::get('/viewvendors', [AdminController::class, 'getvendor'])->name('Admin.viewvendors');

Route::post('/delete/{id}',[AdminController::class,('deletevendor')]);
Route::post('/update/{id}',[AdminController::class,('updatevendor')]);







// ========VENDOR VIEW ROUTES==========

Route::get('/vendorregister', function () {
    return view('Vendor.register');
});
Route::get('/vendordashboard', function () {
    return view('Vendor.index');
});




// ========VENDOR CONTROLLER ROUTES==========
Route::post('/addvendor',[VendorController::class,('register')]);
Route::post('/vendorlogin',[VendorController::class,('customlogin')]);
Route::post('/vendorlogout', function () {
    session()->forget('vendor_id');
    return redirect('/vendorlogin')->with('success', 'Logged out successfully!');
});




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
 // Cart Routes
Route::get('/productlayout', [ProductController::class, 'categoryCProducts']);
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->middleware('auth');

   Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'showCart']);
    Route::patch('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::post('/cart/add-from-wishlist', [CartController::class, 'addFromWishlist'])->name('cart.add-from-wishlist')->middleware('auth');
});

// routes/web.php
Route::group(['middleware' => ['auth']], function() {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::post('/wishlist/add/{productId}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
});

// Public route to get wishlist count
Route::get('/wishlist/count', [WishlistController::class, 'count']);
});

//=======GOOGLE OAUTH API ROUTES==============
Route::get('/google/auth',[GoogleController::class,('googlepage')]);
Route::get('auth/google/callback',[GoogleController::class,('googlecallback')]);



//======ADMIN PRODUCT UPLOAD ROUTES=========
Route::get('/uploadproducts', [ProductController::class, 'create'])
    ->name('Admin.uploadproducts');

Route::post('/uploadproducts', [ProductController::class, 'store'])
    ->name('Admin.uploadproducts.store');


Route::post('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');

// // Category routes


// // Product routes
// Route::prefix('admin')->group(function() {
//     Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
//     Route::post('/products', [ProductController::class, 'store'])->name('products.store');
//     // ... other product routes
// });



//======ADMIN STOCK/PRODUCT MANAGEMENT ROUTES=========
Route::prefix('admin')->group(function () {
    // Product View
     
    Route::post('/productstore', [ProductController::class, 'storee'])
        ->name('Admin.productsstore');
    
    // View Single Product
    Route::get('/products/{product}', [ProductController::class, 'show'])
        ->name('Admin.product.show');
    
    // Edit Product

    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])
        ->name('Admin.productsedit');

      //Delete Product
Route::prefix('admin')->name('admin.')->group(function () {
    Route::delete('/delproducts/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

});

// ==============WEB PRODUCT LISTING CONTROLLER ROUTES==============


Route::get('/page', [ProductController::class, 'categoryJProducts']);


 Route::get('/product', [ProductController::class, 'indexx'])
        ->name('User.productlayout');
        Route::post('/update-product-stock', [ProductController::class, 'updateStock'])->name('update.stock');

        // =================Category Routes===================

Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');





Route::get('/viewproduct', [ProductController::class, 'index'])
        ->name('Admin.viewproduct');
       

Route::get('/cart/load', [CartController::class, 'loadCartPartial'])->name('cart.load')->middleware('auth');
