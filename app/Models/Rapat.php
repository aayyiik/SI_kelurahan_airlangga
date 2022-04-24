<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;

    protected $table =  'rapat';
    protected $primaryKey = 'id_rapat';
    protected $fillable = [
        'nik_admin',
        'nama_rapat',
        'id_kategori',
        'tanggal_mulai',
        'tanggal_selesai',
        'tempat',
        'id_status'
    ];

    public function user() {
        return $this->hasMany(User::class,'nik');
    }

    public function status() {
        return $this->belongsTo(Status::class,'id_status');
    }

    public function kategori() {
        return $this->belongsTo(Kategori::class,'id_kategori');
    }
}
