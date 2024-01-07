<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeautycareController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('beautycare', [BeautycareController::class, 'index']);
Route::get('beautycare/{id}', [BeautycareController::class, 'show']);
Route::post('beautycare', [BeautycareController::class, 'store']);
Route::put('beautycare/{id}', [BeautycareController::class, 'update']);
Route::delete('beautycare/{id}', [BeautycareController::class, 'destroy']);
