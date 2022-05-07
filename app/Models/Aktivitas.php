<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;

    protected $table = 'aktivitas';
    protected $primaryKey = 'id_aktivitas';

    protected $fillable = [
        'no_pegawai',
        'nama_aktivitas',
        'tanggal',
        'foto'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'nik_nip');
    }


}
