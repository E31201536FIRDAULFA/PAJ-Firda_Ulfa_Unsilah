<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\article;

class tag extends Model
{
    public function article(){
    	return $this->belongsTo('App\Models\article');
    }
}
