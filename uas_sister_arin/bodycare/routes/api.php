<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodycareController;
use App\Http\Controllers\IdController;



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



Route::get('bodycare', [BodycareController::class, 'index']);
Route::get('bodycare/{id}', [BodycareController::class, 'show']);
Route::post('bodycare', [BodycareController::class, 'store']);
Route::put('bodycare/{id}', [BodycareController::class, 'update']);
Route::delete('bodycare/{id}', [BodycareController::class, 'destroy']);

