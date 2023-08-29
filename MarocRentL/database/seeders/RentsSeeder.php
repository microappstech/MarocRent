<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            DB::table('rents')->insert([
                'title' => "Rent $i",
                "adresse"=>Str::random(60 ),
                "description"=>Str::random(100),
                "price" => $i,
                "daily" =>true,
                "monthly"=>false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
