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
    public function updateRole(Request $request, Role $role)
    {
        $this->authorize('update role');

        $request->validate([
            'name' => 'required|unique:roles,name,',
        ]);

        $role->update(['name' => $request->name]);

        return redirect('/role-show');
    }

    public function storeRole(Request $request)
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
    public function updatePermission(Request $request, Permission $permission)
    {
        $this->authorize('update role');

        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => $request->name]);

        return redirect('/permission-show');
    }


    public function editPermission($id)
    {
        $permission = Permission::findorFail($id);
        $roles = Role::all();
        return view('admin.user.Permission.edit-permission', compact('permission', 'roles'));
    }
    public function destroyPermission($id)
    {
        $permission = Permission::findorFail($id);
        $permission->delete();

        return back();
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        // Revoke the permission from the role
        $role->revokePermissionTo($permission);
        return redirect()->back()->with('success', 'Permission revoked successfully');
    }

    function assignPermission(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return redirect()->back()->with('error', 'Role already given');
        }

        $permission->assignRole($request->role);
        return redirect()->back()->with('Success', 'Role given');
    }
}
