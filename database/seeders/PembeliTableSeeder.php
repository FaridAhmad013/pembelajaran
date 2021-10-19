<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama' => 'Farid', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Bandung', 'kode_pos' => rand(1000,10000), 'kota' => 'Bandung', 'tgl_lahir' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Farid', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Bandung', 'kode_pos' => rand(1000,10000), 'kota' => 'Bandung', 'tgl_lahir' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Farid', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Bandung', 'kode_pos' => rand(1000,10000), 'kota' => 'Bandung', 'tgl_lahir' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Farid', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Bandung', 'kode_pos' => rand(1000,10000), 'kota' => 'Bandung', 'tgl_lahir' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Farid', 'jns_kelamin' => 'Laki-laki', 'alamat' => 'Bandung', 'kode_pos' => rand(1000,10000), 'kota' => 'Bandung', 'tgl_lahir' => now(), 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('pembelis')->insert($pembelis);
    }
}
