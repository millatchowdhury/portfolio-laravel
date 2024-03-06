<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        foreach(range(1, 2) as $values){
            DB::table('educations')->insert([
                'duration'=>'2015 - 2017',
                'collage_name'=>'Barnett College',
                'address'=>'Fairfield, NY',
                'title'=>'Master\'s <br> Web Development',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.'
            ]);
        }
    }
}

