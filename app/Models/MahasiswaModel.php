<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'namamhs',
        'nim',
        'programmhs',
        'angkatanmhs',
        'jurusanggr',
    ];
}
