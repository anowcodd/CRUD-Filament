<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',         // Name of the student
        'nim',          // Add 'nim' to allow mass assignment
        'jurusan',      // Major
        'tanggal_lahir',// Birthdate
        'alamat',       // Address (if you have it)
    ];
}
