<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $fillable = [
        'nama_status'
    ];

    public function rapat() {
        return $this->hasMany(Rapat::class,'id_rapat');
    }
}
