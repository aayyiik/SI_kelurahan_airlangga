<?php

namespace App\Http\Controllers;


use App\Models\Kegiatan;
use App\Models\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){
        $kegiatan = Kegiatan::all();
        $user = User::all();
        return view ('dashboard.admin.kegiatan.index',['kegiatan'=>$kegiatan], compact('user',));
    }

    public function create(Request $request){
        Kegiatan::create($request->all());
        return redirect ('/daftar_kegiatan')->with('sukses','Data Berhasil Diinput');
       
        return redirect('/daftar_kegiatan');

    }

    public function edit ($id_kegiatan){
        $kegiatan = Kegiatan::find($id_kegiatan);
        return view('dashboard.admin.kegiatan.edit',['kegiatan' => $kegiatan]);
    }

    public function update (Request $request,$id_kegiatan){
        $kegiatan = Kegiatan::find($id_kegiatan);
        $kegiatan->update($request->all());
        return redirect('/daftar_kegiatan')->with('update','Data Berhasil diperbarui');
    }

    public function delete ($id_kegiatan){
        $kegiatan = Kegiatan::find($id_kegiatan);
        $kegiatan->delete($kegiatan);
        return redirect('/daftar_kegiatan')->with('hapus','Data Berhasil dihapus');
    }
}
