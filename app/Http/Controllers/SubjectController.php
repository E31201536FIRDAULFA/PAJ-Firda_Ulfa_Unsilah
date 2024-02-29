<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\DosenModel;
use App\Models\RuangModel;
use App\Models\MatkulModel;
use App\Models\PendaftarModel;
use App\Models\GugurModel;
use App\Models\MahasiswaModel;


class SubjectController extends Controller
{
    /* Function menampilkan Data User Dosen */
    public function viewDataUser() 
    {
        $dosen = DosenModel::all();

        // Mengembalikan view 'data dosen' dengan data dosem yang telah diambil
        return view('dsn', compact('dosen'));
    }

    /* Function menampilkan Data Student Terkait Mata Kuliah */
    public function viewDataStudent(){
        $matkul = MatkulModel::all();

        // Mengembalikan view 'data mata kuliah' dengan data mata kuliah yang telah diambil
        return view('matkul', compact('matkul'));
    }

    /* Function menampilkan Data Ruangan Teacher*/
    public function viewDataTeacher(){
        $ruangan = RuangModel::all();

        // Mengembalikan view 'data ruangan kelas' dengan data ruangan kelas yang telah diambil
        return view('ruangan', compact('ruangan'));
        
    }
}