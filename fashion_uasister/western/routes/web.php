<?php

use App\Http\Controllers\WesternController;
use App\Models\Western;
use Illuminate\Support\Facades\Route;

// routes/web.php

// Menampilkan semua western
Route::get('/western', [WesternController::class, 'index'])->name('western.index');

Route::post('/western/create', [WesternController::class, 'create'])->name('western.create');

Route::get('/western/{id}/edit', [WesternController::class, 'edit'])->name('western.edit');

Route::put('/western/{id}', [WesternController::class, 'update'])->name('western.update');

Route::delete('/western/{id}', [WesternController::class, 'destroy'])->name('western.destroy');

// // Menyimpan western baru ke dalam database
// Route::post('/western', [WesternController::class, 'store']);

// // Menampilkan detail western berdasarkan ID
// Route::get('/western/{id}', [WesternController::class, 'show']);

// //Menampilkan formulir untuk mengedit western
// Route::get('/western/{id}/edit', [WesternController::class, 'edit']);

// //Mengupdate western berdasarkan ID
// Route::put('/western/{id}', [WesternController::class, 'update']);

// //Menghapus western berdasarkan ID
// Route::put('/western/{id}', [WesternController::class, 'delete']);
