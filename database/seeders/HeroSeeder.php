<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker\Factory::create();
        foreach(range(1, 10) as $value){
            DB::table('heros')->insert([
                "keyline" => "DESIGN · DEVELOPMENT · MARKETING",
                "shortTitle" => "I can help your business to",
                "title" => "Get online and grow fast",
                "img" => "https://i.postimg.cc/YSTkt5FS/profile.png",
                
            ]);
        }
    }
}

