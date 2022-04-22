<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'nama_status' => 'Tertunda'

        ]);

        Status::create([
            'nama_status' => 'Sedang Berlangsung'
        ]);

        Status::create([
            'nama_status'=> 'Selesai'
        ]);
    }
}
