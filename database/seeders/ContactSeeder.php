<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        foreach(range(1,10) as $value){
            DB::table('contacts')->insert([
                'fullName' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'message' => $faker->text(),
            ]);
        }
    }
}
