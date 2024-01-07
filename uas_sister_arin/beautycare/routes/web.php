<?php

use App\Http\Controllers\BeautycareController;
use App\Models\Beautycare;
use Illuminate\Support\Facades\Route;

// routes/web.php

// Menampilkan semua Bodycare
Route::get('/beautycare', [BeautycareController::class, 'index'])->name('beautycare.index');

// Menampilkan formulir untuk menambah beautycare baru
Route::post('/beautycare/create', [BeautycareController::class, 'create'])->name('beautycare.create');

Route::get('/beautycare/{id}/edit', [BeautycareController::class, 'edit'])->name('beautycare.edit');

Route::put('/beautycare/{id}', [BeautycareController::class, 'update'])->name('beautycare.update');

Route::delete('/beautycare/{id}', [BeautycareController::class, 'destroy'])->name('beautycare.destroy');

// // Menyimpan beautycare baru ke dalam database
// Route::post('/beautycare', [BodycareController::class, 'store']);

// // Menampilkan detail Bodycare berdasarkan ID
// Route::get('/bodycare/{id}', [BodycareController::class, 'show']);

// Menampilkan formulir untuk mengedit Bodycare
// Route::get('/bodycare/{id}/edit', [BodycareController::class, 'edit']);
// Mengupdate Bodycare berdasarkan ID
// Route::put('/bodycare/{id}', [BodycareController::class, 'update']);
// Menghapus Bodycare berdasarkan ID

