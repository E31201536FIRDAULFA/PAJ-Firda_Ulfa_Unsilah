<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hadiah;
use App\Models\anggota_hadiah;
use App\Models\anggota;

class hadiah extends Model
{
    protected $table = "hadiahs";
 
    public function anggota()
    {
    	return $this->belongsToMany(anggota::class,'anggota_hadiahs','anggota_id', 'hadiah_id');
    }
}
