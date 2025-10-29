<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // tambahkan baris ini agar Laravel tahu nama tabel yang benar
    protected $table = 'mahasiswa';

    protected $fillable = ['nim', 'nama', 'prodi'];
}
