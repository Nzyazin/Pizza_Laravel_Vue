<?php

use App\Http\Controllers\API\Product\IndexController;
use App\Http\Controllers\API\Order\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;

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
