<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
   Route::apiResource('tasks', TaskController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [LogoutController::class, 'logout']);
    // Route::apiResource('tasks', TaskController::class);
});
