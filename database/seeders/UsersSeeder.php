<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nik'=>'3578276501020001',
                'id_jabatan'=> '1',
                'id_kelurahan'=> '1',
                'nama'=>'Sugeng',
                'jenis_kelamin' => '1',
                'alamat'=>'Jl. dharmawangsa No 09',
                'no_telp'=> '085853427882',
                'email'=> 'sugeng@gmail.com',
                'password'=> bcrypt('lurah123'),

            ],
            [
                'nik'=>'35782742543278881',
                'id_jabatan'=> '6',
                'id_kelurahan'=> '1',
                'nama'=>'Djayadi',
                'jenis_kelamin'=>'1',
                'alamat'=>'Jl. dharmawangsa No 08',
                'no_telp'=> '085853427222',
                'email'=> 'djay@gmail.com',
                'password'=> bcrypt('staff123'),
                
            ],
            [
                'nik'=>'3578274254327663',
                'id_jabatan'=> '12',
                'id_kelurahan'=> '1',
                'nama'=>'Apri',
                'jenis_kelamin'=>'1',
                'alamat'=>'Jl. dharmawangsa No 04',
                'no_telp'=> '0858534255342',
                'email'=> 'apri@gmail.com',
                'password'=> bcrypt('pegawai123'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    
    }
}
