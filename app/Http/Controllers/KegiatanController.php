<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kegiatan;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(){
        $kegiatan = Kegiatan::all();
        $user = User::all();
        $kategori = Kategori::all();
        $status = Status::all();

        return view ('dashboard.admin.kegiatan.index',['kegiatan'=>$kegiatan], compact('user','kategori','status'));
    }
}
