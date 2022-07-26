<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AktivitasController extends Controller
{
    public function index(){

        
            $user = Auth::user();
            if($user->id_jabatan=='14'){
                $aktivitas = Aktivitas::orderBy('created_at','desc')->get();
                $jabatan = Jabatan::all();
                $user = User::all();
                return view('dashboard.pegawai.aktivitas.index',compact('aktivitas','user','jabatan'));
            }else{
                $lihatAktivitas = Aktivitas::where('no_pegawai','=',Auth::user()->nik_nip)->get();
                $jabatan = Jabatan::all();
                $user = User::all();
                return view('dashboard.pegawai.aktivitas.index',compact('lihatAktivitas','user','jabatan'));
            }
        
        // ->orderBy('created_at','desc')->get();
        
    }

    public function create (Request $request){
        
        // $foto = $request->file('foto')->getClientOriginalName();
        // $request->file('foto')->store('public/assets/img/log/');

        // $log = new Aktivitas();
        // $log->no_pegawai = $request['no_pegawai'];
        // $log->nama_aktivitas = $request['nama_aktivitas'];
        // $log->tanggal = '2022-10-10';
        // $log->foto = $foto;

        
        // $log->save();

        $log = new Aktivitas;
        $log->no_pegawai = $request->input('no_pegawai');
        $log->nama_aktivitas = $request->input('nama_aktivitas');
        $log->tanggal = '2022-10-10';
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filname = time().'.'.$extention;
            $file->move('assets/img/log/',$filname);
            $log->foto = $filname;
        }
        $log->save();
        return redirect ('/log_aktivitas')->with('sukses','Data Berhasil Diinput');

    }

    public function edit($id_aktivitas){
        $log = Aktivitas::find($id_aktivitas);
        return view('dashboard.pegawai.aktivitas.edit',compact('log'));
    }

    public function update(Request $request, $id_aktivitas){

        $log = Aktivitas::find($id_aktivitas);
        $log->no_pegawai = $request->input('no_pegawai');
        $log->nama_aktivitas = $request->input('nama_aktivitas');
        $log->tanggal = '2022-10-10';

        if($request->hasFile('foto')){
            $destination = 'assets/img/log/'.$log->foto;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filname = time().'.'.$extention;
            $file->move('assets/img/log/',$filname);
            $log->foto = $filname;
        }
        $log->update();
        return redirect ('/log_aktivitas')->with('update','Data Berhasil Diperbarui');
    }

    public function delete($id_aktivitas){
        $log = Aktivitas::find($id_aktivitas);
        $destination = 'assets/img/log/'.$log->foto;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $log->delete();

        return redirect('/log_aktivitas')->with('hapus','Data Berhasil dihapus');

    }
}
