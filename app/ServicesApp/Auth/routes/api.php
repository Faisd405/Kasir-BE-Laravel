<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\ServicesApp\Auth\Controllers\AuthControllers;

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

// Auth
Route::group([], function () {
    Route::post('register', [AuthControllers::class, 'register']);
    Route::post('login', [AuthControllers::class, 'login']);
    Route::middleware('auth:sanctum')->post('logout', [AuthControllers::class, 'logout']);
    Route::middleware('auth:sanctum')->post('refresh-token', [AuthControllers::class, 'refreshToken']);
});
