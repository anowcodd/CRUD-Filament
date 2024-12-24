<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // Menambahkan 'nama' ke dalam properti fillable
    protected $fillable = [
        'nama',
        'nip',
        'email',
        'alamat', // Jika ada kolom lain yang perlu ditambahkan
    ];
}
