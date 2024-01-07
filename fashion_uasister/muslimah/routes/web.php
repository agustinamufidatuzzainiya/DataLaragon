<?php

use App\Http\Controllers\MuslimahController;
use App\Models\Muslimah;
use Illuminate\Support\Facades\Route;

// routes/web.php

// Menampilkan semua muslimah
Route::get('/muslimah', [MuslimahController::class, 'index'])->name('muslimah.index');

Route::post('/muslimah/create', [MuslimahController::class, 'create'])->name('muslimah.create');

Route::get('/muslimah/{id}/edit', [MuslimahController::class, 'edit'])->name('muslimah.edit');

Route::put('/muslimah/{id}', [MuslimahController::class, 'update'])->name('muslimah.update');

Route::delete('/muslimah/{id}', [MuslimahController::class, 'destroy'])->name('muslimah.destroy');

