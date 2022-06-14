<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\OrderController;

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

    // Route::middleware(['users'])->group(function() {

    //     Route::get('/userOrders', [OrderController::class, 'userIndex'])->name('orders.userIndex');
    // });

    Route::middleware(['admin'])->group(function() {

        Route::resource('/users', UserController::class);
        Route::resource('/products', ProductController::class);
        Route::resource('/settings', SettingController::class);
        // Route::resource('/orders', OrderController::class);
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/summary', [OrderController::class, 'summary'])->name('orders.summary');

    });
    

    

});


