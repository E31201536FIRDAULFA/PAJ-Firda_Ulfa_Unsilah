<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hadiah;
use App\Models\anggota_hadiah;
use App\Models\anggota;

class HadiahController extends Controller
{ 
    public function index()
    {
    	$anggota = anggota::get();
    	return view('anggota', ['anggota' => $anggota]);
    }
}
