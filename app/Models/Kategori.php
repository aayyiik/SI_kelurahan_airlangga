<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'jenis_kategori'
    ];

    public function rapat() {
        return $this->hasMany(Rapat::class,'id_rapat');
    }

    
}
