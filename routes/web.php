<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeletedOrderLogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesRepController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [CustomerController::class, 'index'])->name('home');

Route::resource('customer', CustomerController::class);
Route::resource('order', OrderController::class);
Route::resource('product', ProductController::class);
Route::resource('sales/rep',SalesRepController::class);
Route::resource('order/deleted/log', DeletedOrderLogController::class);
