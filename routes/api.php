<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('secret', function (Request $request) {
    $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
    // return $request->amount;
    $intent = $stripe->paymentIntents->create([
        'currency' => 'usd',
        'amount' => $request->amount*100,
        'metadata' => ['type_code' => $request->code],
    ]);
    return $intent;
})->name('stripe.secret');
