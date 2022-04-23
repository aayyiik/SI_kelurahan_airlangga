<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Rapat;
use App\Models\Status;
use Illuminate\Http\Request;

class RapatController extends Controller
{
    public function index(){
        $rapat = Rapat::all();
        $status = Status::all();
        $kategori = Kategori::all();

        return view ('dashboard.admin.rapat.index',['rapat'=>$rapat], compact('status','kategori'));
    }

    public function create(Request $request){
        $this->validate($request,[
            'nama_rapat' => 'required|min:1|max:50',
        ]);
     
        Rapat::create($request->all());
        return redirect ('/jadwal_rapat')->with('sukses','Data Berhasil Ditambahkan'); 
    }

    public function edit ($id_rapat){
        $rapat = Rapat::find($id_rapat);
        $kategori = Kategori::all();
        $status = Status::all();
        return view('dashboard.admin.rapat.edit',['rapat' => $rapat], compact('kategori','status'));
    }

    public function update (Request $request,$id_rapat){
        $rapat = Rapat::find($id_rapat);
        $rapat->update($request->all());
        return redirect('/jadwal_rapat')->with('update','Data Berhasil diperbarui');
    }

    public function delete ($id_rapat){
        $rapat = Rapat::find($id_rapat);
        $rapat->delete($rapat);
        return redirect('/jadwal_rapat')->with('hapus','Data Berhasil dihapus');
    }
}
