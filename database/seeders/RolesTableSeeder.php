<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    public function run()
    {

        $default_user_value = [
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
            ], $default_user_value));
            $kepsek = User::create(array_merge([
                'name' => 'Kepala Sekolah',
                'email' => 'kepsek@gmail.com',
            ], $default_user_value));
            $manajemen = User::create(array_merge([
                'name' => 'Manajemen',
                'email' => 'manajemen@gmail.com',
            ], $default_user_value));
            $guru = User::create(array_merge([
                'name' => 'Guru',
                'email' => 'guru@gmail.com',
            ], $default_user_value));


            $role_kepsek = Role::create(['name' => 'kepsek']);
            $role_manajemen = Role::create(['name' => 'manajemen']);
            $role_guru = Role::create(['name' => 'guru']);
            $role_admin = Role::create(['name' => 'admin']);
            // Add more roles as needed

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $permission = Permission::create(['name' => 'read ppdb']);

            $role_admin->givePermissionTo('read role');
            $role_admin->givePermissionTo('create role');
            $role_admin->givePermissionTo('update role');
            $role_admin->givePermissionTo('delete role');

            $role_manajemen->givePermissionTo('read ppdb');

            $kepsek->assignRole('kepsek');
            $manajemen->assignRole('manajemen');
            $guru->assignRole('guru');
            $admin->assignRole('admin');
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            // Log the error message to Laravel's log file
            Log::error('An error occurred: ' . $th->getMessage());
            // Rethrow the exception to propagate it up the stack
            throw $th;
        }
    }
}
