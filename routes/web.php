<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeletedOrderLogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('customer', CustomerController::class);
    Route::resource('order', OrderController::class);
    Route::resource('product', ProductController::class);
    Route::resource('sales/rep',SalesRepController::class);
    Route::resource('order/deleted/log', DeletedOrderLogController::class);
});

require __DIR__.'/auth.php';
