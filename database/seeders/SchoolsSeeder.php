<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([
            'name' => "SHIN University",
            'course' => "Math",
            'criteria'=>"Has to have 1 degree",
            'aboutcourse'=> "This course is goign to teach about multiplication",
        ]);
        DB::table('schools')->insert([
            'name' => "Auto University",
            'course' => "Science",
            'criteria'=>"Has to have 1 degree",
            'aboutcourse'=> "This course is goign to teach about Science",
        ]);
        DB::table('schools')->insert([
            'name' => "Marcedes University",
            'course' => "English",
            'criteria'=>"Has to have 1 degree",
            'aboutcourse'=> "This course is goign to teach about lITARUTER",
        ]);
    }
}
