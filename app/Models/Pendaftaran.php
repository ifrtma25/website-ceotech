<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'npm', 'jurusan', 'angkatan', 'minat_bakat', 'no_hp', 'gambar'
    ];
}
