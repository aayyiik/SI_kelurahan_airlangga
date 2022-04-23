<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){
        $status = Status::all();
        return view('dashboard.admin.status.index',['status'=>$status]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'nama_status' => 'required|min:1|max:50',
        ]);
     
        Status::create($request->all());
        return redirect ('/status')->with('sukses','Data Berhasil Ditambahkan'); 
    }

    public function edit ($id_status){
        $status = status::find($id_status);
        return view('dashboard.admin.status.edit',['status' => $status]);
    }

    public function update (Request $request,$id_status){
        $status = status::find($id_status);
        $status->update($request->all());
        return redirect('/status')->with('update','Data Berhasil diperbarui');
    }

    public function delete ($id_status){
        $status = status::find($id_status);
        $status->delete($status);
        return redirect('/status')->with('hapus','Data Berhasil dihapus');
    }
}
