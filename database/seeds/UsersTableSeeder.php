<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$9fBfn4HGD1/HFuMDM6dbAurDZTFYSX6G9eG3H09WI6Yd1JfxxNwqS',
                'remember_token' => null,
                'created_at'     => '2019-09-10 17:52:28',
                'updated_at'     => '2019-09-10 17:52:28',
            ],
        ];

        User::insert($users);
    }
}
