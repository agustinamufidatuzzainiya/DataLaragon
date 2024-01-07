<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Western extends Model
{
    use HasFactory;
    // Nama tabel yang sesuai dengan tabel di database Anda
    protected $table = 'western';

    protected $guaranted = 'id';

    // Kolom-kolom yang dapat diisi (fillable) saat menggunakan metode mass assignment
    protected $fillable = [
        'merk',
        'gambar',
        'jenis',
        'detail',
        'harga',
    ];
}
