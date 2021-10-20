<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            ['nama' => 'Farid', 'alamat' => 'Jl. Terusan andir no. 34', 'kode_pos' => rand(1000,10000) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ahmad', 'alamat' => 'Jl. Stobery', 'kode_pos' => rand(1000,10000) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Fadhilah', 'alamat' => 'Jl. Mawar', 'kode_pos' => rand(1000,10000) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ikbal', 'alamat' => 'Jl. Rancamanyar', 'kode_pos' => rand(1000,10000) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Cecep', 'alamat' => 'Jl. Situtarate', 'kode_pos' => rand(1000,10000) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('suppliers')->insert($suppliers);
    }
}
