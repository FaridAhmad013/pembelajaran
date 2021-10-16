<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        $posts =  [
            ['title' => 'Tips Cepat Nikah', 'content' => 'lorem'],
            ['title' => 'Haruskah kita menunda nikah ?', 'content' => 'lorem'],
            ['title' => 'Membangun Visi misi keluarga', 'content' => 'lorem']
        ];

        DB::table('posts')->insert($posts);
    } 
}
