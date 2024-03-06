<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class DownloadLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker\Factory::create();
        foreach(range(1,3) as $value){
            DB::table('resume_download_links')->insert([
                'downloadLink'=>$faker->link()
            ]);
        }

    }
}
