<?php

use App\Http\Controllers\ManufactureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrdersItemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProtypeController;
use App\Http\Controllers\ReceipDetailtController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\VoucherController;
use App\Models\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Protype
//View Protype
Route::get('/dashboard/protype', [ProtypeController::class, 'index'])->middleware(['auth'])->name('dashboard');
//Manufacture
//Add Manufacutre
Route::get('/dashboard/add-manufacture',[ManufactureController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/add-manufacture',[ManufactureController::class,'store'])->middleware(['auth'])->name('dashboard');
//View Manufacture
Route::get('/dashboard/manufacture', [ManufactureController::class, 'index'])->middleware(['auth'])->name('dashboard');
//Product
//Edit Product 
Route::get('/edit-product/{id}',[ProductController::class,'edit'])->middleware(['auth'])->name('dashboard');
Route::post('/edit-product/{id}',[ProductController::class,'update'])->middleware(['auth'])->name('dashboard');
//Delete Product
Route::get('/delete-product/{id}',[ProductController::class,'destroy'])->middleware(['auth'])->name('dashboard');
//Add Product
Route::get('/dashboard/add-product',[ProductController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/add-product',[ProductController::class,'store'])->middleware(['auth'])->name('dashboard');
//View Product
Route::get('/dashboard/product', [ProductController::class, 'index'])->middleware(['auth'])->name('dashboard');
//
Route::get('/index', [MyController::class, 'index']);
Route::get('/product-details/{id}', [MyController::class, 'productDetails']);
//showCart
Route::get('/cart', [MyController::class,'showCart'])->name('showCart')->middleware(['auth'])->name('dashboard');
Route::get('/checkout', [MyController::class,'showProductbyCart'])->name('showProductbyCart');
Route::post('/checkout', [MyController::class,'addOrder']);
Route::get('/adminUser', [MyController::class,'adminUser']);
//AddToCart
Route::get('/add-to-cart/{id}', [MyController::class, 'addToCart'])->name('addToCart');
//UpdateCart
Route::get('/update_cart', [MyController::class, 'updateCart'])->name('updateCart');
//DeleteCart
Route::get('/delete_cart', [MyController::class, 'deleteCart'])->name('deleteCart');
Route::get('/update_cart', [MyController::class, 'updateCart'])->name('updateCart');
Route::get('/shop', [MyController::class, 'shop']);
//show admin voucher
Route::get('/dashboard/voucher', [VoucherController::class, 'voucher'])->middleware(['auth'])->name('dashboard');
Route::match(['get','post'],'/dashboard/add-voucher', [VoucherController::class, 'addvoucher'])->middleware(['auth'])->name('dashboard');
//show admin receipt
Route::get('/dashboard/orders', [OrdersController::class, 'order'])->middleware(['auth'])->name('dashboard');
//show admin receipt_details
Route::get('dashboard/order_items', [OrdersItemsController::class, 'order_items'])->middleware(['auth'])->name('dashboard');
//Delete AdminVoucher
Route::match(['get','post'],'/dashboard/delete-voucher/{id}',[VoucherController::class ,'deleteVoucher']);
Route::match(['get','post'],'/dashboard/delete-orders/{id}',[OrdersController::class ,'deleteOrders']);
Route::match(['get','post'],'/dashboard/delete-orders-items/{id}',[OrdersItemsController::class ,'deleteOrderItems']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';
Route::get('/', function () {
    return view('welcome');
});
Route::get('/{url}', function ($url) {
    return view($url);
});
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');    
Route::get('/manufacture/{manu_id}', [MyController::class, 'showManufacturebyID']);
Route::get('/protype/{type_id}', [MyController::class, 'showProtypebyID']);
Route::get('/place-order', [MyController::class, 'placeOrder']);



