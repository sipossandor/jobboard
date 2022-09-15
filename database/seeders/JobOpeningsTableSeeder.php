<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobopeningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('job_openings')->delete();

        \DB::table('job_openings')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'country' => 'Hungary',
                    'city' => 'Budapest',
                    'department' => 'Engineering',
                    'language_required' => 'English',
                    'job_title' => 'Senior Java Developer',
                    'job_description' => 'Valami',
                    'requirements' => 'Ezisazis',
                    'salary' => '1.200.000 HUF',
                    'starting_date' => '2022 November',
                    'created_at' => '2022-09-15 10:20:40',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'country' => 'Hungary',
                    'city' => 'Szeged',
                    'department' => 'Engineering',
                    'language_required' => 'English',
                    'job_title' => 'Data Engineer',
                    'job_description' => 'Valami2',
                    'requirements' => 'Mindenis',
                    'salary' => '1.300.000 HUF',
                    'starting_date' => 'ASAP',
                    'created_at' => '2022-09-15 10:22:00',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'country' => 'Hungary',
                    'city' => 'Budapest',
                    'department' => 'Engineering',
                    'language_required' => 'English',
                    'job_title' => 'Engineering Manager',
                    'job_description' => 'Managing',
                    'requirements' => 'Lead exp',
                    'salary' => '1.500.000 HUF',
                    'starting_date' => '2022 October',
                    'created_at' => '2022-09-15 10:23:12',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));


    }
}
