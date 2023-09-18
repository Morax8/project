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
        // Create and save a user
        User::create(
            // [
            //     'name' => 'Manager',
            //     'email' => 'manager@manager.com',
            //     'password' => bcrypt('manager123'),
            //     'role' => 'manajemen',
            // ],
            [
                'name' => 'Guru',
                'email' => 'guru@guru.com',
                'password' => bcrypt('guruguru'),
                'role' => 'guru',
            ]
        );
    }
}
