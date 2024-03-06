<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\HeroSeeder;
use Database\Seeders\DownloadLinkSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\SkillsSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        SkillsSeeder::class
       ]);
    }
}
