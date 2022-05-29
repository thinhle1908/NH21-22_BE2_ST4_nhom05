<?php

use App\Http\Controllers\ManufactureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrdersItemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProtypeController;
use App\Http\Controllers\ReceipDetailtController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\VoucherController;
use App\Models\Manufacture;
use App\Models\Protype;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RatingController;

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
//Edit Protype 
Route::get('/edit-protype/{id}',[ProtypeController::class,'edit'])->middleware(['auth'])->name('dashboard');
Route::post('/edit-protype/{id}',[ProtypeController::class,'update'])->middleware(['auth'])->name('dashboard');
//Delete Protype
Route::get('/delete-protype/{id}',[ProtypeController::class,'destroy'])->middleware(['auth'])->name('dashboard');
//Add Protype
Route::get('/dashboard/add-protype',[ProtypeController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/add-protype',[ProtypeController::class,'store'])->middleware(['auth'])->name('dashboard');
//View Protype
Route::get('/dashboard/protype', [ProtypeController::class, 'index'])->middleware(['auth'])->name('dashboard');
//Manufacture
//Edit Manufacture 
Route::get('/edit-manufacture/{id}',[ManufactureController::class,'edit'])->middleware(['auth'])->name('dashboard');
Route::post('/edit-manufacture/{id}',[ManufactureController::class,'update'])->middleware(['auth'])->name('dashboard');
//Delete Manufacture
Route::get('/delete-manufacture/{id}',[ManufactureController::class,'destroy'])->middleware(['auth'])->name('dashboard');
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
//Product Details
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
Route::match(['get','post'],'/dashboard/edit-voucher/{id}', [VoucherController::class, 'editvoucher'])->middleware(['auth'])->name('dashboard');
//show admin orders
Route::get('/dashboard/orders', [OrdersController::class, 'order'])->middleware(['auth'])->name('dashboard');
Route::match(['get','post'],'/dashboard/add-orders', [OrdersController::class, 'addorders'])->middleware(['auth'])->name('dashboard');
Route::match(['get','post'],'/dashboard/edit-orders/{id}', [OrdersController::class, 'editorders'])->middleware(['auth'])->name('dashboard');
//show admin orders_items
Route::get('dashboard/order_items', [OrdersItemsController::class, 'order_items'])->middleware(['auth'])->name('dashboard');
Route::match(['get','post'],'/dashboard/add-ordersitems', [OrdersItemsController::class, 'addorderitems'])->middleware(['auth'])->name('dashboard');
Route::match(['get','post'],'/dashboard/edit-ordersitems/{id}', [OrdersItemsController::class, 'editorderitems'])->middleware(['auth'])->name('dashboard');
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
//Admin user
//View
Route::get('/dashboard/user', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
//add
Route::get('/dashboard/add-user',[UserController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/add-user',[UserController::class,'store'])->middleware(['auth'])->name('dashboard');
//edit
Route::get('/edit-user/{id}',[UserController::class,'edit'])->middleware(['auth'])->name('dashboard');
Route::post('/edit-user/{id}',[UserController::class,'update'])->middleware(['auth'])->name('dashboard');
//delete
Route::get('/delete-user/{id}',[UserController::class,'destroy'])->middleware(['auth'])->name('dashboard');
//Admin Comment
//View
Route::get('/dashboard/comment', [CommentController::class, 'index'])->middleware(['auth'])->name('dashboard');
//add Comment
Route::get('/dashboard/add-comment',[CommentController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/add-comment',[CommentController::class,'store'])->middleware(['auth'])->name('dashboard');
//edit
Route::get('/edit-comment/{id}',[CommentController::class,'edit'])->middleware(['auth'])->name('dashboard');
Route::post('/edit-comment/{id}',[CommentController::class,'update'])->middleware(['auth'])->name('dashboard');
//delete
Route::get('/delete-comment/{id}',[CommentController::class,'destroy'])->middleware(['auth'])->name('dashboard');
//Admin Rating
//View
Route::get('/dashboard/rating', [RatingController::class, 'index'])->middleware(['auth'])->name('dashboard');
//add Comment
Route::get('/dashboard/add-rating',[RatingController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/add-rating',[RatingController::class,'store'])->middleware(['auth'])->name('dashboard');
//edit
Route::get('/edit-rating/{id}',[RatingController::class,'edit'])->middleware(['auth'])->name('dashboard');
Route::post('/edit-rating/{id}',[RatingController::class,'update'])->middleware(['auth'])->name('dashboard');
//delete
Route::get('/delete-rating/{id}',[RatingController::class,'destroy'])->middleware(['auth'])->name('dashboard');