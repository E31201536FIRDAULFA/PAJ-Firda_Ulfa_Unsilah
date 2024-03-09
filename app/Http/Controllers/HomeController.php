<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function upload(){
        return view('upload');
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
        'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'keterangan' => 'required',
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

            // nama file
            echo 'File Name: '.$file->getClientOriginalName();
            echo '<br>';
            
            // ekstensi file
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo '<br>';
            
            // real path
            echo 'File Real Path: '.$file->getRealPath();
            echo '<br>';
            
            // ukuran file
            echo 'File Size: '.$file->getSize();
            echo '<br>';
            
            // tipe mime
            echo 'File Mime Type: '.$file->getMimeType();
                    
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$file->getClientOriginalName());
                }
}
