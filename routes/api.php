<?php

use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/product/qty/{qty}', [MyController::class, 'showMoreProducts']); 
Route::get('/product-feature/qty/{qty}', [MyController::class, 'showMoreProductsFeature']); 
Route::get('/filter/{min}/{max}', [MyController::class, 'showProductbyPrice']); 
