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

    public function editRole($id)
    {
        $role = Role::findorFail($id);
        $permissions = Permission::all();
        return view('admin.user.Role.edit-role', compact('role', 'permissions'));
    }

    public function destroyRole($id)
    {
        $role = Role::findorFail($id);
        $role->delete();
        return redirect('/role-show')->with('success', 'Role deleted successfully');
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

    public function destroyPermission($id)
    {
        $permission = Permission::findorFail($id);
        $permission->delete();

        return back();
    }

    public function givePermission(Request $request, Role  $role)
    {
        if ($role->hasPermissionTo($request->permission)) {
            return redirect('/edit-role')->with('error', 'Permission already given');
        }
        $role->givePermissionTo($request->permission);
        return redirect('/role-show')->with('success', 'Permission given successfully');
    }
}
