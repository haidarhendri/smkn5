<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('upload/upload');
    }

    public function proses(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'ket' => 'required'
        ]);

        $file = $request->file('file');

        echo 'Nama File: '.$file->getClientOriginalName();
        echo '<br>';

        echo 'Ekstensi: '.$file->getOriginalExtension();
        echo '<br>';

        echo 'Lokasi file: '.$file->getRealPath();
        echo '<br>';

        echo 'Ukuran file: '.$file->getSize();
        echo '<br>';

        $file->move($lokasi_file->getClientOriginalName());
    }
}
