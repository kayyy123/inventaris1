<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'level' => 1,
                'email' => 'admin@loraayang.com'
            ],
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('admin321'),
                'level' => 1,
                'email' => 'admin@sabdayoga.com'
            ],
            [
                'name' => 'Divisi',
                'username' => 'divisi',
                'password' => bcrypt('divisi123'),
                'level' => 2,
                'email' => 'divisi@tatausaha.com'
            ],
            [
                'name' => 'Owner',
                'username' => 'owner',
                'password' => bcrypt('owner123'),
                'level' => 3,
                'email' => 'owner@aditya.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
