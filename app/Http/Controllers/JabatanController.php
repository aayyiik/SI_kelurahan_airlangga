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
}
