<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
 
class MatkulModel extends Model
{
	use SoftDeletes;
 
    protected $table = "matkul_models";
   	protected $dates = ['deleted_at'];
}