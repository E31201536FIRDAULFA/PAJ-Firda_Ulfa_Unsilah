<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GugurModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_ggr',
        'asal',
        'program_ggr',
        'angkatan_ggr',
        'jurusan_ggr',

    ];
}
