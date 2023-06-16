<?php

namespace Database\Seeders;

use Database\Factories\PenggunaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Pengguna;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // \App\Models\Pengguna::create([
        //     'id_grup_pengguna'=>'1',
        //     'nama'=>'Yanti',
        //     'email'=>'yanti@gmail.com',
        //     'alamat'=>'surabaya'
        // ]);

        // Pengguna::factory()->count(10)->create();

    }
}
