<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[DashboardController::class,'index']);
Route::get('/login',[AuthController::class,'login']);


//Jabatan
Route::get('/jabatan',[JabatanController::class,'index']);

//Kategori
Route::get('/kategori',[KategoriController::class,'index']);

//status
Route::get('/status',[StatusController::class,'index']);

//Pegawai
Route::get('/daftar_pegawai',[PegawaiController::class,'index']);

//agenda
Route::get('/agenda',[AgendaController::class,'index']);


//kelurahan
Route::get('/kelurahan',[KelurahanController::class,'index']);


