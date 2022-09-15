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
                    'name' => 'Nóra Zatykó',
                    'email' => 'zatyko.nora@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => '',
                    'role' => 'admin',
                    'remember_token' => NULL,
                    'created_at' => '2022-09-15 10:14:58',
                    'updated_at' => '2022-09-15 10:15:02',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Sándor Sipos',
                    'email' => 'sandorsipos13@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => '',
                    'role' => 'admin',
                    'remember_token' => NULL,
                    'created_at' => '2022-09-15 10:16:10',
                    'updated_at' => '2022-09-15 10:16:11',
                ),
        ));


    }
}
