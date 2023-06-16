<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Produk::create([
            'id_kategori'=>'1',
            'nama'=>'laptop',
            'harga'=>'1000000'
        ]);
    }
}
