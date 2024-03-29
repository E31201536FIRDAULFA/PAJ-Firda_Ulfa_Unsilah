<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\hadiah;
use App\Models\anggota;

class anggota extends Model
{
    protected $table = "anggotas";
 
    public function hadiah()
    {
    	return $this->belongsToMany(hadiah::class,'anggota_hadiahs','anggota_id', 'hadiah_id');
    }
}
