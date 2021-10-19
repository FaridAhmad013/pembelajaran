<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama' => 'Pizza', 'varian' => 'pedas', 'harga_beli' => rand(100, 999999), 'harga_jual' => rand(100, 9999999), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Seblak', 'varian' => 'pedas', 'harga_beli' => rand(100, 999999), 'harga_jual' => rand(100, 9999999), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Hot Dog', 'varian' => 'varian', 'harga_beli' => rand(100, 999999), 'harga_jual' => rand(100, 9999999), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'POP CORN', 'varian' => 'Rasa Keju', 'harga_beli' => rand(100, 999999), 'harga_jual' => rand(100, 9999999), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Seblak', 'varian' => 'Semi pedas', 'harga_beli' => rand(100, 999999), 'harga_jual' => rand(100, 9999999), 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('barangs')->insert($barangs);
    }
}
