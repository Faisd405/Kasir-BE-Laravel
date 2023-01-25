<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\ServiceApps\Datamaster\Controllers\CategoryController;

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
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::match(['PUT', 'POST'], '/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
    Route::match(['PUT', 'POST'], '{id}/restore/', [CategoryController::class, 'restore']);
    Route::delete('{id}/force-delete/', [CategoryController::class, 'forceDelete']);
});
