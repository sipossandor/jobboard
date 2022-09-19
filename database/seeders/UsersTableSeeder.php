<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Pista Próba',
                'email' => 'proba.pista@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BPrjKyYGNCRT282DQ7GKM.Kr64NjYEkE7/JJ0hpIDZnPZbfyOAt9q',
                'remember_token' => NULL,
                'created_at' => '2022-09-15 10:14:58',
                'updated_at' => '2022-09-15 10:15:02',
                'role' => 'candidate',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Petra Példa',
                'email' => 'pelda.petra@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BPrjKyYGNCRT282DQ7GKM.Kr64NjYEkE7/JJ0hpIDZnPZbfyOAt9q',
                'remember_token' => NULL,
                'created_at' => '2022-09-15 10:16:10',
                'updated_at' => '2022-09-15 10:16:11',
                'role' => 'candidate',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Nóra Zatykó',
                'email' => 'zatyko.nora@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BPrjKyYGNCRT282DQ7GKM.Kr64NjYEkE7/JJ0hpIDZnPZbfyOAt9q',
                'remember_token' => NULL,
                'created_at' => '2022-09-17 12:07:05',
                'updated_at' => '2022-09-17 12:07:05',
                'role' => 'admin',
            ),
        ));


    }
}
