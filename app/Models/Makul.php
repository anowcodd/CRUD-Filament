<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    use HasFactory;

    // Menambahkan 'nama' ke dalam properti fillable
    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',  // Kolom lainnya yang ada di tabel 'makuls'
    ];
}
