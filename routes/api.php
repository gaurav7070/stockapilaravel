<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\StockController;
use App\Http\Controllers\API\StoreController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| API Routes
|----------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


// Protected Routes (requires Passport Authentication)
Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/stores', [StoreController::class, 'store']); 
Route::get('/stores', [StoreController::class, 'index']);
Route::get('/stores/{id}', [StoreController::class, 'show']); 

Route::get('/stocks', [StockController::class, 'index']);
Route::post('/stocks', [StockController::class, 'store']);
Route::delete('/stocks/{id}', [StockController::class, 'destroy']);
});
