<?php

namespace Database\Seeders;

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
                'email'=>'rafikiki@gmail.com',
                'password'=> bcrypt('rahasia'),
                'tgl_lahir'=>'2006-04-25',
                'role'=>'warga'
            ],
            [
                'nama'=>'Ari Lathifatul Chusna',
                'email'=>'ariniarki@gmail.com',
                'password'=> bcrypt('rahasia'),
                'tgl_lahir'=>'2002-01-25',
                'role'=>'admin'
            ],
            [
                'nama'=>'Ahmat Badrun Niam',
                'email'=>'ahmatbadrun@gmail.com',
                'password'=> bcrypt('rahasia'),
                'tgl_lahir'=>'1997-10-10',
                'role'=>'petugas'
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    
    }
}
