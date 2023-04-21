<?php

use App\Http\Controllers\API\Product\IndexController;
use App\Http\Controllers\API\Order\StoreController;
use App\Http\Controllers\API\Product\ProductsCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
use App\Http\Controllers\API\Product\ProductsController;
use App\Http\Controllers\Order\StoreController as OrderStoreController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pizza', IndexController::class);
Route::post('/cart', StoreController::class);
Route::post('/orders', StoreController::class);

Route::group(['namespace' => 'Api'], function() {
    Route::get('/products', [ProductsController::class, 'index']);
    Route::get('/products/{product}', [ProductsController::class, 'show']);

    Route::get('/cart', [ProductsCartController::class, 'index']);
    Route::post('/cart', [ProductsCartController::class, 'store']);
    Route::delete('/cart/{productId}', [ProductsCartController::class, 'destroy']);
    Route::delete('/cart', [ProductsCartController::class, 'destroyAll']);
});
