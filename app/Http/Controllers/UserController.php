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

class UserController extends Controller
{
  /* Function menampilkan Data User Mahasiswa */
    public function viewDataUser() 
    {
        $datamhs = MahasiswaModel::all();

        // Mengembalikan view 'data user mahasiswa' dengan data mahasiswa yang lolos yang telah diambil
        return view('mhs', compact('datamhs'));
        
    }

    /* Function menampilkan Data Student Pendaftar */
    public function viewDataStudent() 
    {
        $datadaftar = PendaftarModel::all();

        // Mengembalikan view 'data pendaftar' dengan data pendaftar yang telah diambil
        return view('pendaftar', compact('datadaftar'));
       
    }

    /* Function menampilkan Data Siswa Gugur */
    public function viewTeacher() 
    {
        $dataggr = GugurModel::all();

        // Mengembalikan view 'data mahasiswa gugur' dengan data gugur yang telah diambil
        return view('gugur', compact('dataggr'));
    }

}