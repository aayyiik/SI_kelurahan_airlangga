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
}
