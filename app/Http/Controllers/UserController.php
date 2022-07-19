<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $jabatan = Jabatan::all();
        $kelurahan = Kelurahan::all();
        return view('dashboard.admin.user.index',['user'=>$user], compact('jabatan','kelurahan'));
    }

    public function create( Request $request ){
        $pegawai = new User;
        $pegawai->nik_nip = $request['nik_nip'];
        $pegawai->id_kelurahan = 1;
        $pegawai->id_jabatan = $request['id_jabatan'];
        $pegawai->nama = $request['nama'];
        $pegawai->jenis_kelamin = $request['jenis_kelamin'];
        $pegawai->alamat = $request['alamat'];
        $pegawai->no_telp = $request['no_telp'];
        $pegawai->status = $request['status'];
        $pegawai->password = bcrypt($request['nik_nip']);
        $pegawai->save();

        return redirect('/daftar_pegawai');
    }

    public function updateprofil(Request $request, $id_user){
        // $user = User::with(Auth::user()->id_user);
        // // $user = Auth::user();

        // // //jika user mengganti password
        // // if ($user->password != $request->password) {
        // //     $user->update([
        // //         "nama" => $request->nama,
        // //         "email" => $request->email,
        // //         "tgl_lahir" => $request->tgl_lahir,
        // //         "password" => Hash::make($request->password),
        // //         "gender" => $request->gender
        // //     ]);
        // // } else {
        // //     // Jika user tidak mengganti passwordnya

        //     $user->update([
        //         "nama" => $request->nama,
        //         "email" => $request->email,
        //         "tgl_lahir" => $request->tgl_lahir
        //     ]);
        $user = User::find(Auth::user()->id_user);
        $user->update($request->all());
        return redirect('/profilsetting/{id_user}');
    }

    public function edit($nik_nip){
        $user = User::find($nik_nip);

        return view('dashboard.admin.user.edit', compact('user'));
    }

    public function update(Request $request, $nik_nip){

        $user = User::find($nik_nip);
        $user->nik_nip = $request->input('nik_nip');
        $user->id_jabatan = $request->input('id_jabatan');
        $user->id_kelurahan = $request->input('id_kelurahan');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->alamat = $request->input('alamat');
        $user->no_telp = $request->input('no_telp');
        $user->email = $request->input('email');
        $user->nama = $request->input('nama');
        $user->status = $request->input('status');

        $user->update();
        return redirect('/daftar_pegawai');
    }
}

