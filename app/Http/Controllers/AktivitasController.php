<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\User;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index(){
        $aktivitas = Aktivitas::all();
        $user = User::all();
        return view('dashboard.pegawai.aktivitas.index',['aktivitas'=>$aktivitas], compact('user'));
    }
}
