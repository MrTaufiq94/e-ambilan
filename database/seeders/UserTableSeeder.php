<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $userCreate = User::create([
            [
                'name'      => 'Taufiq',
                'email'     => 'admin@gmail.com',
                'password'  => bcrypt('password')
            ],
        ]);

        //assign permission to role
        $role = Role::find(1);
        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        //assign role with permission to user
        $user = User::find(1);
        $user->assignRole($role->name);

        //insert data of many users 
        // $userCreate = User::insert([
        //     [
        //         'name'      => 'Ropidah',
        //         'email'     => 'ropidah@gmail.com',
        //         'password'  => bcrypt('password')
        //     ],
        //     [
        //         'name'      => 'Hafiz',
        //         'email'     => 'hafiz@gmail.com',
        //         'password'  => bcrypt('password')
        //     ]
        // ]);
    }
}
