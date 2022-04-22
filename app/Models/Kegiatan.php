<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = [
        'nik_admin',
        'id_kategori',
        'id_status',
        'nama_kegiatan',
        'tanggal',
        'tempat',
        'deskripsi',
        'tanggal',
        'validasi'
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
