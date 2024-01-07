<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodycare extends Model
{
    use HasFactory;

    // Nama tabel yang sesuai dengan tabel di database Anda
    protected $table = 'bodycares';

    // Kolom-kolom yang dapat diisi (fillable) saat menggunakan metode mass assignment
    protected $fillable = [
        'merk',
        'gambar',
        'jenis',
        'detail',
        'harga',
        // ... tambahkan kolom lain yang ingin Anda isi
    ];

    // Jika ada atribut atau metode tambahan, Anda bisa menambahkannya di sini
}
