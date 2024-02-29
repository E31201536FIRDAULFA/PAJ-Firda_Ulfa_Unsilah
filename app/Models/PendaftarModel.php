<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'namadftr',
        'asaldftr',
        'jurusandftr',

    ];
}
