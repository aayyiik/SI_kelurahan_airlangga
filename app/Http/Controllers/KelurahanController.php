<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('dashboard.pegawai.kelurahan.index',['kelurahan'=>$kelurahan]);
    }
}
