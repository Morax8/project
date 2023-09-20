<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::create(
            [
                'name' => 'Manager',
                'email' => 'manager@manager.com',
                'password' => bcrypt('manager123'),
            ]
        );
        User::create(
            [
                'name' => 'Guru',
                'email' => 'guru@guru.com',
                'password' => bcrypt('guruguru'),
            ]
        );
    }
}
