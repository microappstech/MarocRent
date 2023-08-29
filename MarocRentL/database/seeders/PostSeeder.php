<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            DB::table('posts')->insert([
                'title' => "Post $i",
                "description"=>Str::random(100 ),
                "typePost" =>1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
