<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){
        $agenda = Agenda::all();
        return view('dashboard.pegawai.agenda.index',['agenda'=>$agenda]);
    }
}
