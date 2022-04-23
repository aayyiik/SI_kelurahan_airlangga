<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('dashboard.kategori.index',['kategori'=>$kategori]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'jenis_kategori' => 'required|min:1|max:50',
        ]);
     
        Kategori::create($request->all());
        return redirect ('/kategori')->with('sukses','Data Berhasil Ditambahkan'); 
    }

    public function edit ($id_kategori){
        $kategori = Kategori::find($id_kategori);
        return view('dashboard.kategori.edit',['kategori' => $kategori]);
    }

    public function update (Request $request,$id_kategori){
        $kategori = Kategori::find($id_kategori);
        $kategori->update($request->all());
        return redirect('/kategori')->with('update','Data Berhasil diperbarui');
    }

    public function delete ($id_kategori){
        $kategori = Kategori::find($id_kategori);
        $kategori->delete($kategori);
        return redirect('/kategori')->with('hapus','Data Berhasil dihapus');
    }
}
