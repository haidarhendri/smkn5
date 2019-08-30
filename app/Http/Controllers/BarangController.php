<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barang')->paginate(5); //elloquent get()
        return view('barang/index',['barang' => $barang]);
    }

    public function tambah(){
        return view('barang/tambah');
    }

    public function kirim_data(Request $request){
        DB::table('barang')->insert([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/barang');
    }

    public function edit($id){
        $barang = DB::table('barang')->where('id', $id)->get();
        return view('/barang/edit',['barang' => $barang]);
    }

    public function simpan_edit(Request $request){
        DB::table('barang')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/barang');
    }

    public function hapus($id){
        DB::table('barang')->where('id', $id)->delete();
        return redirect('/barang');
    }

    public function cari(Request $request){
        $search = $request->search;

        $barang = DB::table('barang')
        ->where('nama','like','%'.$search.'%')
        ->paginate();

        return view('barang/index',['barang' => $barang]);
    }
}
