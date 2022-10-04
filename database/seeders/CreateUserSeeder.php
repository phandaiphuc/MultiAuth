<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'type' => 0,
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'type' => 1,
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'type' => 2,
                'password' => bcrypt('123456')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
