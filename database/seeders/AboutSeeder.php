<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        foreach(range(1,5) as $values){
            DB::table('abouts')->insert([
                'title' => $faker->title(),
                'description' => $faker->text()
            ]);
        }
    }
}
