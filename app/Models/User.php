<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table = 'users';
     protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'id_jabatan',
        'id_kelurahan',
        'nama',
        'jenis_kelamin',
        'alamat',
        'no_telp',
        'email', 
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jabatan() {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }

    public function kelurahan() {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }
}
