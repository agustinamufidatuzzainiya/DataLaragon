<?php

use App\Http\Controllers\MuslimahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuslimahControllerController;
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

Route::get('muslimah', [MuslimahController::class, 'index']);
Route::get('muslimah/{id}', [MuslimahController::class, 'show']);
Route::post('muslimah', [MuslimahController::class, 'store']);
Route::put('muslimah/{id}', [MuslimahController::class, 'update']);
Route::delete('muslimah/{id}', [MuslimahController::class, 'destroy']);
