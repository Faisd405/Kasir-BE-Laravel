<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\ServiceApps\Supplier\Http\Controllers\SupplierController;

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

// Supplier
Route::group(['name' => 'supplier.', 'middleware' => 'auth:sanctum', 'prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index'])->name('index');
    Route::get('/{id}', [SupplierController::class, 'show'])->name('show');
    Route::post('/', [SupplierController::class, 'store'])->name('store');
    Route::match(['PUT', 'POST'], '/{id}', [SupplierController::class, 'update'])->name('update');
    Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('destroy');
    Route::match(['PUT', 'POST'], '{id}/restore/', [SupplierController::class, 'restore'])->name('restore');
    Route::delete('{id}/force-delete/', [SupplierController::class, 'forceDelete'])->name('forceDelete');
});
