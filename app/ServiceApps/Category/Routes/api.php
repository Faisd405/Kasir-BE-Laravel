<?php

use App\ServiceApps\Category\Http\Controllers\CategoryController;
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

// Category
Route::group(['name' => 'category.', 'middleware' => 'auth:sanctum', 'prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::match(['PUT', 'POST'], '/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    Route::match(['PUT', 'POST'], '{id}/restore/', [CategoryController::class, 'restore'])->name('restore');
    Route::delete('{id}/force-delete/', [CategoryController::class, 'forceDelete'])->name('forceDelete');
});
