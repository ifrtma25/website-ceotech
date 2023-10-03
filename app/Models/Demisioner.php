<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demisioner extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'npm', 'angkatan', 'jurusan', 'periode', 'gambar'
    ];
}
