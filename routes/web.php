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
Route::get('/product-details',[MyController::class,'product-details']);
Route::get('/shop',[MyController::class,'shop']);


