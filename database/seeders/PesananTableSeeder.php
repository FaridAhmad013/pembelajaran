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
            ['nama_pelanggan' => 'Farid', 'nama_barang' => 'Pizza', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'Ahmad', 'nama_barang' => 'Seblak', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'Fadhilah', 'nama_barang' => 'Hot Dog', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'Ikbal', 'nama_barang' => 'POP CORN', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama_pelanggan' => 'Cecep', 'nama_barang' => 'Seblak', 'tgl_pesan' => now(), 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('pesanans')->insert($pesanans);
    }
}
