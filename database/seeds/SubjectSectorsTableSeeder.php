<?php

use Illuminate\Database\Seeder;

class SubjectSectorsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_sectors')->insert([
            ['number' => '15', 'name' => 'Applied Science'],
            ['number' => '5',  'name' => 'Art and Design'],
            ['number' => '11', 'name' => 'Beauty Therapy'],
            ['number' => '3',  'name' => 'Business'],
            ['number' => '19', 'name' => 'Children\'s Care, Learning and Development'],
            ['number' => '20', 'name' => 'Construction and the Built Environment'],
            ['number' => '13', 'name' => 'Creative Media Production'],
            ['number' => '12', 'name' => 'Electrical/Electronic Engineering'],
            ['number' => '2',  'name' => 'Engineering'],
            ['number' => '14', 'name' => 'Health and Social Care'],
            ['number' => '7',  'name' => 'Hospitality'],
            ['number' => '6',  'name' => 'Information Technology'],
            ['number' => '8',  'name' => 'Music and Music Technology'],
            ['number' => '4',  'name' => 'Performing Arts'],
            ['number' => '1',  'name' => 'Public Services'],
            ['number' => '9',  'name' => 'Sport'],
            ['number' => '16', 'name' => 'Sport and Exercise Sciences'],
            ['number' => '17', 'name' => 'Travel and Tourism'],
            ['number' => '18', 'name' => 'Vehicle Technology'],
        ]);
    }
}