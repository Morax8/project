<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    public function show()
    {
        $this->authorize('read role');
        $roles = Role::all();
        return view('admin.user.Role.role-list', compact('roles'));
    }

    public function createRole()
    {
        return view('admin.user.Role.create-role');
    }

    public function storeROle(Request $request)
    {
        $this->authorize('create role');
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        Role::create(['name' => $request->name]);

        return redirect('/role-show');
    }


    public function permission()
    {
        $this->authorize('read role');
        $permissions = Permission::all();
        return view('admin.user.Permission.permission', compact('permissions'));
    }
    public function createPermission()
    {
        return view('admin.user.Permission.create-permission');
    }
    public function storePermission(Request $request)
    {
        $this->authorize('create role');
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        Permission::create(['name' => $request->name]);

        return redirect('/permission-show');
    }
}
