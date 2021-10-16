<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $biodatas = [
            ['name' => 'Farid', 'bornDate' => now(), 'gender' => 'Laki-laki', 'address' => 'lorem ipsum', 'religion' => 'Indonesia', 'age' => rand(10,50), 'hobby' => 'Membaca'],
            ['name' => 'Ahmad', 'bornDate' => now(), 'gender' => 'Laki-laki', 'address' => 'lorem ipsum', 'religion' => 'Indonesia', 'age' => rand(10,50), 'hobby' => 'Membaca'],
            ['name' => 'Fadhilah', 'bornDate' => now(), 'gender' => 'Laki-laki', 'address' => 'lorem ipsum', 'religion' => 'Indonesia', 'age' => rand(10,50), 'hobby' => 'Membaca'],
            ['name' => 'Ilmi', 'bornDate' => now(), 'gender' => 'Laki-laki', 'address' => 'lorem ipsum', 'religion' => 'Indonesia', 'age' => rand(10,50), 'hobby' => 'Membaca'],
            ['name' => 'Puteri', 'bornDate' => now(), 'gender' => 'Laki-laki', 'address' => 'lorem ipsum', 'religion' => 'Indonesia', 'age' => rand(10,50), 'hobby' => 'Membaca']
        ];

        DB::table('biodatas')->insert($biodatas);

    }
}
