<?php

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'users'], function() {
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{users}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{users}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{users}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{users}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'pizzas'], function() {
    Route::get('/', \App\Http\Controllers\Pizza\IndexController::class)->name('pizza.index');
    Route::get('/create', \App\Http\Controllers\Pizza\CreateController::class)->name('pizza.create');
    Route::post('/', \App\Http\Controllers\Pizza\StoreController::class)->name('pizza.store');
    Route::get('/{pizzas}/edit', \App\Http\Controllers\Pizza\EditController::class)->name('pizza.edit');
    Route::get('/{pizzas}', \App\Http\Controllers\Pizza\ShowController::class)->name('pizza.show');
    Route::patch('/{pizzas}', \App\Http\Controllers\Pizza\UpdateController::class)->name('pizza.update');
    Route::delete('/{pizzas}', \App\Http\Controllers\Pizza\DeleteController::class)->name('pizza.delete');
});
