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
                'password'       => '$2y$10$IIcI2nmQPraH2BNePpPTAeGBZdpF6Wy5zw3rRcBccTFOrWCw1evgq',
                'remember_token' => null,
                'last_name'      => '',
            ],
        ];

        User::insert($users);
    }
}
