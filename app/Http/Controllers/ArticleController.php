<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class ArticleController extends Controller
{
    public function index(){
   	 $artikel = article::all();
    	 return view('article',['artikel' => $artikel]);
   }
}
