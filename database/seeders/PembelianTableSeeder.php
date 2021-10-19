<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelians = [
            ['nama_barang' => 'T', 'nama_supplier' => 'Farid', 'qty' => rand(1, 100), 'tgl' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'T', 'nama_supplier' => 'Farid', 'qty' => rand(1, 100), 'tgl' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'T', 'nama_supplier' => 'Farid', 'qty' => rand(1, 100), 'tgl' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'T', 'nama_supplier' => 'Farid', 'qty' => rand(1, 100), 'tgl' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'T', 'nama_supplier' => 'Farid', 'qty' => rand(1, 100), 'tgl' => now(), 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('pembelians')->insert($pembelians);
    }
}
