<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Voter;

class VoterController extends Controller
{
    public function viewVoter() 
    {
        $voter = DB::table('voters')->get();
        return view('voters',compact('voter'));
       
    }
}
