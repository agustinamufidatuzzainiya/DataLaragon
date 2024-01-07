<?php

use App\Http\Controllers\BodycareController;
use App\Models\Bodycare;
use Illuminate\Support\Facades\Route;

// routes/web.php

// Menampilkan semua Bodycare
Route::get('/bodycare', [BodycareController::class, 'index'])->name('bodycare.index');

// Menampilkan formulir untuk menambah Bodycare baru
Route::post('/bodycare/create', [BodycareController::class, 'create'])->name('bodycare.create');

Route::get('/bodycare/{id}/edit', [BodycareController::class, 'edit'])->name('bodycare.edit');

Route::put('/bodycare/{id}', [BodycareController::class, 'update'])->name('bodycare.update');

Route::delete('/bodycare/{id}', [BodycareController::class, 'destroy'])->name('bodycare.destroy');

// // Menyimpan Bodycare baru ke dalam database
// Route::post('/bodycare', [BodycareController::class, 'store']);

// // Menampilkan detail Bodycare berdasarkan ID
// Route::get('/bodycare/{id}', [BodycareController::class, 'show']);

// Menampilkan formulir untuk mengedit Bodycare
// Route::get('/bodycare/{id}/edit', [BodycareController::class, 'edit']);
// Mengupdate Bodycare berdasarkan ID
// Route::put('/bodycare/{id}', [BodycareController::class, 'update']);
// Menghapus Bodycare berdasarkan ID

