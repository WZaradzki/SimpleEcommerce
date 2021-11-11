<?php

use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\public\OrderController as PublicOrderController;
use App\Http\Controllers\public\ProductController as PublicProductController;
use App\Models\User;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('admin')->group(function () {

    Route::apiResource('products', ProductController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('orders', OrderController::class);

});

Route::prefix('public')->group(function () {

    Route::apiResource('products', PublicProductController::class)->only([
        'index', 'show'
    ]);
    
    Route::apiResource('orders', PublicOrderController::class)->only([
        'store'
    ]);

});
