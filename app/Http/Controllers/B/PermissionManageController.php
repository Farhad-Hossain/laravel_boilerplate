<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class PermissionManageController extends Controller
{
    public function getRoles(Request $request)
    {
        $title = 'Roles';
        $roles = Role::all();
        return $this->view("pages.roles", compact("roles", "title"));
        
    }
    public function createRole(Request $request)
    {
        $title = 'Create Role';
        $role = Role::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'guard_name'=>Auth::getDefaultDriver(),
        ]);
        return "Role ".$role->name." created successfully.";
    }

    public function getPermissions(Request $request)
    {
        $title = "Permissions";
        $permissions = Permission::all();
        return $this->view("inc.tables.permissions", compact('permissions', 'title'));
    }

    public function createPermission(Request $request)
    {
        try {
            $permission = new Permission();
            $permission->name = $request->name;
            $permission->description = $request->description;
            $permission->guard_name = Auth::getDefaultDriver();
            $permission->save();
            return 'Permission created successfully';
        } catch (\Exception $e) {
            return "Something went wrong";
        } 
    }

    public function getPostRoleDetails(Request $request, $roleId)
    {
        $title = 'Role Details';
        $role = Role::find($roleId);
        $permissions = Permission::all();

        if ( $request->method() == 'POST' ) {
            $role->syncPermissions([]);
            foreach( $request->permissions as $p ) {
                $permission = Permission::firstWhere('id', $p);
                $role->givePermissionTo($permission);
            }
        } 
        return $this->view('pages.role_details', compact('role', 'permissions', 'title'));
    }
}
