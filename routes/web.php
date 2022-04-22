<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\UserController;
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
Route::get('/daftar_pegawai',[UserController::class,'index']);


//Rapat
Route::get('/jadwal_rapat',[RapatController::class,'index']);

//kegiatan
Route::get('/daftar_kegiatan',[KegiatanController::class,'index']);


