<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){
        $jabatan = Jabatan::all();
        return view('dashboard.admin.jabatan.index',['jabatan'=>$jabatan]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'nama_jabatan' => 'required|min:1|max:50',
        ]);
     
        Jabatan::create($request->all());
        return redirect ('/jabatan')->with('sukses','Data Berhasil Ditambahkan'); 
    }

    public function edit ($id_jabatan){
        $jabatan = Jabatan::find($id_jabatan);
        return view('dashboard.admin.jabatan.edit',['jabatan' => $jabatan]);
    }

    public function update (Request $request,$id_jabatan){
        $jabatan = Jabatan::find($id_jabatan);
        $jabatan->update($request->all());
        return redirect('/jabatan')->with('update','Data Berhasil diperbarui');
    }

    public function delete ($id_jabatan){
        $jabatan = Jabatan::find($id_jabatan);
        $jabatan->delete($jabatan);
        return redirect('/jabatan')->with('hapus','Data Berhasil dihapus');
    }
}
