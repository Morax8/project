<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function assignRole(Request $request, $userId, $roleName)
    {
        // Find the user by ID
        $user = User::findOrFail($userId);

        // Find the role by name
        $role = Role::where('name', $roleName)->firstOrFail();

        // Assign the role to the user
        $user->assignRole($role);

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Role assigned successfully');
    }

    public function show()
    {
        $this->authorize('read role');
        return view('admin.user.role-list');
    }
}
