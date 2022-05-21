<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductsController;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [MyController::class, 'index']);
Route::get('/product-details/{id}', [MyController::class, 'productDetails']);
//showCart
Route::get('/cart', [MyController::class,'showCart'])->name('showCart');
//AddToCart
Route::get('/add-to-cart/{id}', [MyController::class, 'addToCart'])->name('addToCart');
//UpdateCart
Route::get('/update_cart', [MyController::class, 'updateCart'])->name('updateCart');
//DeleteCart
Route::get('/delete_cart', [MyController::class, 'deleteCart'])->name('deleteCart');
Route::get('/shop', [MyController::class, 'shop']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

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
