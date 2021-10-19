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
            ['nama' => 'Farid', 'alamat' => 'Bandung', 'kode_pos' => rand(1,99999999) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ahmad', 'alamat' => 'Bandung', 'kode_pos' => rand(1,99999999) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Fadhilah', 'alamat' => 'Bandung', 'kode_pos' => rand(1,99999999) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Ikbal', 'alamat' => 'Bandung', 'kode_pos' => rand(1,99999999) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Cecep', 'alamat' => 'Bandung', 'kode_pos' => rand(1,99999999) , 'kota' => 'Bandung', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('suppliers')->insert($suppliers);
    }
}
