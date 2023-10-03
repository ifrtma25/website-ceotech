<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'npm', 'macaddress', 'jabatan', 'angkatan', 'jurusan', 'gambar'
    ];
}
