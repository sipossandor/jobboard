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
                'name' => 'Sándor Sipos',
                'email' => 'sandorsipos13@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xE0Ak85aitkllSAAbUNIGukroghjhwIKmTzqIsuAT7yrbYw5/eGey',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:52:36',
                'updated_at' => '2022-09-20 19:55:04',
                'role' => 'admin',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nóra Zatykó',
                'email' => 'zatyko.nora@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$21bhtgp5Xm2nMhOiucx5T.8TvPMcwIGobfJnomshCbMlfNmf7cZ1m',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:53:35',
                'updated_at' => '2022-09-20 18:53:35',
                'role' => 'admin',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pista Próba',
                'email' => 'pista.proba@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cBQYO7NyITar7xfEZHXPp.6CuR7NngBB9uVjO.j41HbpW0pbYVovq',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:55:56',
                'updated_at' => '2022-09-20 18:55:56',
                'role' => 'candidate',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Petra Példa',
                'email' => 'petra.pelda@citromail.hu',
                'email_verified_at' => NULL,
                'password' => '$2y$10$erNR3YUlyXzYT5d.9a39DuUb7SiEcJvTz03CDY0Yu4K0vZHAqkVje',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:56:31',
                'updated_at' => '2022-09-20 18:56:31',
                'role' => 'candidate',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Mihály Horváth',
                'email' => 'mihaly.horvath@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EhiIs/4dJVzasZtLOnKc0.jcV9OI8tde9/QcZXB8V0bOJ85Ix.lVm',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:57:19',
                'updated_at' => '2022-09-20 18:57:19',
                'role' => 'candidate',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Anna Kiss',
                'email' => 'anna.kiss@freemail.hu',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.EEeH.HYHB5aDJKK43Q1YuXLF/qPoLqa1j946CmkwnWL0KRy1ALtu',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:58:25',
                'updated_at' => '2022-09-20 18:58:25',
                'role' => 'candidate',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Kriszta Fekete',
                'email' => 'kriszta.fekete@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$I78uC84UNipRH1H7dcqVtu01ADv6kERFGosF6c9wV3R7OE/q9.7Gm',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 18:59:11',
                'updated_at' => '2022-09-20 18:59:11',
                'role' => 'candidate',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Elek Teszt',
                'email' => 'elek.teszt@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$02kKXsceK2Gyg2Mjp5wdoOb4T2AngawKV8SnCTqGlrVF0QKpw9YEy',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 19:00:37',
                'updated_at' => '2022-09-20 19:00:37',
                'role' => 'candidate',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'László Nagy',
                'email' => 'laszlo.nagy@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$b7W3VdcEeeID2TnYun0x4OpdhcpF3BACAGjTKXMzJwBIfV7ffq14S',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 19:01:56',
                'updated_at' => '2022-09-20 19:01:56',
                'role' => 'candidate',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Tamás Koszorús',
                'email' => 'tamas.koszorus@outlook.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9OjEU7eZX/DJZEuaT/k2jumChXgI2b6IXqZUs2mFp3eJm7cjGftsi',
                'remember_token' => NULL,
                'created_at' => '2022-09-20 19:03:36',
                'updated_at' => '2022-09-20 19:03:36',
                'role' => 'candidate',
            ),
        ));
        
        
    }
}