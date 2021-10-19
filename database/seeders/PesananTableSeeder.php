<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanans = [
            ['nama_pelanggan' => 'Farid', 'nama_barang' => 'mie ayam', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'ikbal', 'nama_barang' => 'nasi goreng', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'cecep', 'nama_barang' => 'bakso', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'bagas', 'nama_barang' => 'ayam bakar', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'diki', 'nama_barang' => 'soto', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('pesanans')->insert($pesanans);
    }
}
