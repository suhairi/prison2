<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserOrderController;

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
    return redirect()->route('home');
});

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::middleware(['auth'])->group(function() {


    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function() {

        Route::get('/users/activate/{id}', [UserController::class, 'activate'])->name('users.activate');
        Route::resource('/users', UserController::class);

        Route::get('products/activate/{id}', [ProductController::class, 'activate'])->name('products.activate');
        Route::resource('/products', ProductController::class);

        Route::resource('/settings', SettingController::class);
        Route::get('/settings/activate/{id}', [SettingController::class, 'activate'])->name('settings.activate');

        Route::get('/orders/summary', [OrderController::class, 'summary'])->name('orders.summary');
        Route::resource('/orders', OrderController::class);
    });

    Route::middleware(['users'])->group(function () {

        Route::resource('/user/order', UserOrderController::class);

    });
    

    

});


