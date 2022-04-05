<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

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
Route::get('/index',[MyController::class,'index']);
Route::get('/login',[MyController::class,'login']);
Route::get('/product-details',[MyController::class,'productdetails']);
Route::get('/shop',[MyController::class,'shop']);
Route::get('/404',[MyController::class,'err404']);
Route::get('/cart', [MyController::class,'cart']);
Route::get('/blog-single',[MyController::class,'blog_single']);
Route::get('/blog',[MyController::class,'blog']);
Route::get('/checkout', [MyController::class,'checkout']);
Route::get('/contact-us', [MyController::class,'contact_us']);
          