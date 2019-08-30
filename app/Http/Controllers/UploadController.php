<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class UploadController extends Controller
{
    public function upload(){
        $photo = Photo::get();
        return view('upload/upload', ['photo' => $photo]);
    }

    public function proses(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'ket' => 'required'
        ]);

        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        echo 'Nama File: '.$file->getClientOriginalName();
        echo '<br>';
        echo 'Ekstensi: '.$file->getClientOriginalExtension();
        echo '<br>';
        echo 'Lokasi file: '.$file->getRealPath();
        echo '<br>';
        echo 'Ukuran file: '.$file->getSize();
        echo '<br>';

        $lokasi_file = 'data_file';
        $file->move($lokasi_file, $nama_file);

        Photo::create([
            'path' => $nama_file,
            'ket' => $request->ket
        ]);

        return redirect()->back();
    }
}
