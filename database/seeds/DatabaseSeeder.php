<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SubjectSectorsTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
    }
}
