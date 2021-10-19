<?php

namespace Database\Seeders;

use App\Http\Controllers\PesananController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([PostTableSeeder::class,BiodataTableSeeder::class, BarangTableSeeder::class,
         SupplierTableSeeder::class, PembelianTableSeeder::class, PembeliTableSeeder::class, PesananTableSeeder::class]);
    }
}
