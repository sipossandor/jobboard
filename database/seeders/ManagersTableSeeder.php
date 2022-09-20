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
                'photo' => '1_2022_09_20_21_14_59.jpg',
                'created_at' => '2022-09-20 20:07:16',
                'updated_at' => '2022-09-20 20:14:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Barna Király',
                'post' => 'Business Development Manager',
                'photo' => '2_2022_09_20_21_16_39.jpg',
                'created_at' => '2022-09-20 20:08:24',
                'updated_at' => '2022-09-20 20:16:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Enikő Kiss',
                'post' => 'HR Manager',
                'photo' => '3_2022_09_20_21_16_48.jpg',
                'created_at' => '2022-09-20 20:09:11',
                'updated_at' => '2022-09-20 20:16:48',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Szilvia Kovács',
                'post' => 'Marketing Manager',
                'photo' => '4_2022_09_20_21_17_07.jpg',
                'created_at' => '2022-09-20 20:12:22',
                'updated_at' => '2022-09-20 20:17:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Veronika Tóth',
                'post' => 'Finance Director',
                'photo' => '5_2022_09_20_21_17_17.jpg',
                'created_at' => '2022-09-20 20:16:38',
                'updated_at' => '2022-09-20 20:17:17',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Adam Fong',
                'post' => 'Engineering Manager',
                'photo' => '6_2022_09_20_21_17_26.jpg',
                'created_at' => '2022-09-20 20:18:52',
                'updated_at' => '2022-09-20 20:17:26',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Bence Soós',
                'post' => 'CIO',
                'photo' => '7_2022_09_20_21_17_35.jpg',
                'created_at' => '2022-09-20 20:24:01',
                'updated_at' => '2022-09-20 20:17:36',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Karolina Fodor',
                'post' => 'Compliance Manager',
                'photo' => '8_2022_09_20_21_17_44.jpg',
                'created_at' => '2022-09-20 20:25:08',
                'updated_at' => '2022-09-20 20:17:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}