<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('applications')->delete();
        
        \DB::table('applications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'resume' => '1.pdf',
                'linkedin_url' => NULL,
                'created_at' => '2022-09-20 20:57:10',
                'updated_at' => '2022-09-20 19:57:10',
                'user_id' => 5,
                'job_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'resume' => '2.pdf',
                'linkedin_url' => NULL,
                'created_at' => '2022-09-20 20:58:11',
                'updated_at' => '2022-09-20 19:58:11',
                'user_id' => 5,
                'job_id' => 6,
            ),
            2 => 
            array (
                'id' => 3,
                'resume' => '3.pdf',
                'linkedin_url' => 'https://www.linkedin.com/in/zatykonora/',
                'created_at' => '2022-09-20 20:59:34',
                'updated_at' => '2022-09-20 19:59:34',
                'user_id' => 4,
                'job_id' => 4,
            ),
            3 => 
            array (
                'id' => 4,
                'resume' => '4.pdf',
                'linkedin_url' => 'Nincs',
                'created_at' => '2022-09-20 21:00:25',
                'updated_at' => '2022-09-20 20:00:25',
                'user_id' => 8,
                'job_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'resume' => '5.pdf',
                'linkedin_url' => NULL,
                'created_at' => '2022-09-20 21:01:16',
                'updated_at' => '2022-09-20 20:01:16',
                'user_id' => 6,
                'job_id' => 7,
            ),
            5 => 
            array (
                'id' => 6,
                'resume' => '6.pdf',
                'linkedin_url' => NULL,
                'created_at' => '2022-09-20 21:02:10',
                'updated_at' => '2022-09-20 20:02:10',
                'user_id' => 7,
                'job_id' => 10,
            ),
            6 => 
            array (
                'id' => 7,
                'resume' => '7.pdf',
                'linkedin_url' => NULL,
                'created_at' => '2022-09-20 21:03:36',
                'updated_at' => '2022-09-20 20:03:36',
                'user_id' => 9,
                'job_id' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'resume' => '8.pdf',
                'linkedin_url' => NULL,
                'created_at' => '2022-09-20 21:04:28',
                'updated_at' => '2022-09-20 20:04:29',
                'user_id' => 3,
                'job_id' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                'resume' => '9.pdf',
                'linkedin_url' => 'https://www.linkedin.com/in/zatykonora/',
                'created_at' => '2022-09-20 21:05:31',
                'updated_at' => '2022-09-20 20:05:31',
                'user_id' => 7,
                'job_id' => 4,
            ),
        ));
        
        
    }
}