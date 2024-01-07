<?php

use App\Http\Controllers\WesternController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IDController;


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

Route::get('western', [WesternController::class, 'index']);
Route::get('western/{id}', [WesternController::class, 'show']);
Route::post('western', [WesternController::class, 'store']);
Route::put('western/{id}', [WesternController::class, 'update']);
Route::delete('western/{id}', [WesternController::class, 'destroy']);
