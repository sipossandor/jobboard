<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('managers')->delete();

        \DB::table('managers')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Arnold Smith',
                    'post' => 'CEO',
                    'photo' => 'link',
                    'created_at' => '2022-09-15 10:24:21',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Enikő Kiss',
                    'post' => 'HR Manager',
                    'photo' => 'link2',
                    'created_at' => '2022-09-15 10:24:58',
                    'updated_at' => NULL,
                    'deleted_at' => NULL,
                ),
        ));


    }
}
