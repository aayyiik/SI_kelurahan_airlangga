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
}
