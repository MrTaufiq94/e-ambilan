<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data a user 

        // $userCreate = User::create([
        //     [
        //         'name'      => 'Taufiq',
        //         'email'     => 'admin@gmail.com',
        //         'password'  => bcrypt('password')
        //     ],
        // ]);

        //insert data of many users 
        $userCreate = User::insert([
            [
                'name'      => 'Ropidah',
                'email'     => 'ropidah@gmail.com',
                'password'  => bcrypt('password')
            ],
            [
                'name'      => 'Hafiz',
                'email'     => 'hafiz@gmail.com',
                'password'  => bcrypt('password')
            ]
        ]);
    }
}
