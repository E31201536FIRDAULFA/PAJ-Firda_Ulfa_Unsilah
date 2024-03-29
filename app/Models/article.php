<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tag;

class article extends Model
{
    public function tags(){
    	return $this->hasMany('App\Models\tag');
    }
}
