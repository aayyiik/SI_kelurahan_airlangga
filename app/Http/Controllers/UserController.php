<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Kelurahan;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        $jabatan = Jabatan::all();
        $kelurahan = Kelurahan::all();
        return view('dashboard.admin.user.index',['user'=>$user], compact('jabatan','kelurahan'));
    }
}
