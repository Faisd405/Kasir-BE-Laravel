<?php

use App\ServiceApps\Product\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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

// Product
Route::group(['name' => 'product.', 'middleware' => 'auth:sanctum', 'prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::match(['PUT', 'POST'], '/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::match(['PUT', 'POST'], '{id}/restore/', [ProductController::class, 'restore'])->name('restore');
    Route::delete('{id}/force-delete/', [ProductController::class, 'forceDelete'])->name('forceDelete');
});
