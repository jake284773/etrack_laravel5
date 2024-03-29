<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualifications')->insert([
            [
                'qn'                         => '500/9148/7',
                'name'                       => 'Edexcel BTEC Level 3 Certificate in IT',
                'pathway'                    => '',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 30,
                'mandatory_credits'          => 20,
                'optional_credits'           => 10,
                'min_credits_at_above_level' => 23,
                'max_optional_other_credits' => 5,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9147/5',
                'name'                       => 'Edexcel BTEC Level 3 Subsidiary Diploma in IT',
                'pathway'                    => '',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 60,
                'mandatory_credits'          => 20,
                'optional_credits'           => 40,
                'min_credits_at_above_level' => 45,
                'max_optional_other_credits' => 15,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '600/3887/1',
                'name'                       => 'Edexcel BTEC Level 3 90-credit Diploma in IT',
                'pathway'                    => '',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 90,
                'mandatory_credits'          => 20,
                'optional_credits'           => 70,
                'min_credits_at_above_level' => 70,
                'max_optional_other_credits' => 20,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9150/5',
                'name'                       => 'Edexcel BTEC Level 3 Diploma in IT',
                'pathway'                    => '',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 120,
                'mandatory_credits'          => 30,
                'optional_credits'           => 90,
                'min_credits_at_above_level' => 90,
                'max_optional_other_credits' => 30,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9149/9',
                'name'                       => 'Edexcel BTEC Level 3 Extended Diploma in IT',
                'pathway'                    => '',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 180,
                'mandatory_credits'          => 30,
                'optional_credits'           => 150,
                'min_credits_at_above_level' => 135,
                'max_optional_other_credits' => 40,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9150/5',
                'name'                       => 'Edexcel BTEC Level 3 Diploma in IT',
                'pathway'                    => 'Business',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 120,
                'mandatory_credits'          => 40,
                'optional_credits'           => 80,
                'min_credits_at_above_level' => 90,
                'max_optional_other_credits' => 30,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9149/9',
                'name'                       => 'Edexcel BTEC Level 3 Extended Diploma in IT',
                'pathway'                    => 'Business',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 180,
                'mandatory_credits'          => 60,
                'optional_credits'           => 120,
                'min_credits_at_above_level' => 135,
                'max_optional_other_credits' => 40,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9150/5',
                'name'                       => 'Edexcel BTEC Level 3 Diploma in IT',
                'pathway'                    => 'Networking and Systems Support',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 120,
                'mandatory_credits'          => 70,
                'optional_credits'           => 50,
                'min_credits_at_above_level' => 90,
                'max_optional_other_credits' => 30,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9149/9',
                'name'                       => 'Edexcel BTEC Level 3 Extended Diploma in IT',
                'pathway'                    => 'Networking and Systems Support',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 180,
                'mandatory_credits'          => 80,
                'optional_credits'           => 100,
                'min_credits_at_above_level' => 135,
                'max_optional_other_credits' => 40,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9150/5',
                'name'                       => 'Edexcel BTEC Level 3 Diploma in IT',
                'pathway'                    => 'Software Development',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 120,
                'mandatory_credits'          => 40,
                'optional_credits'           => 80,
                'min_credits_at_above_level' => 90,
                'max_optional_other_credits' => 30,
                'subject_sector_id'          => 6,
            ],
            [
                'qn'                         => '500/9149/9',
                'name'                       => 'Edexcel BTEC Level 3 Extended Diploma in IT',
                'pathway'                    => 'Software Development',
                'framework'                  => 'QCF',
                'level'                      => 3,
                'total_credits'              => 180,
                'mandatory_credits'          => 60,
                'optional_credits'           => 120,
                'min_credits_at_above_level' => 135,
                'max_optional_other_credits' => 40,
                'subject_sector_id'          => 6,
            ],
        ]);
    }
}