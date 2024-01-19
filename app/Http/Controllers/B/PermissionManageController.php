<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRoleRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class PermissionManageController extends Controller
{
    public function getRoles(Request $request)
    {
        $title = 'Roles';
        $roles = Role::all();
        return $this->view("pages/user/roles", 
            compact("roles", "title")
        );
        
    }

    public function getRoleForm(Request $request, $role=(new Role()) )
    {
        $title = 'Role';
        return $this->view('/pages/user/role_form', 
            compact('role', 'title'),
        );
    }
    public function createRole(CreateRoleRequest $request, Role $role=null )
    {
        $role = $role ?? new Role();
        $role->name = $request->name;
        $role->description = $request->description;
        $role->guard_name = Auth::getDefaultDriver();
        $role->save();
        session()->flash('success', 'Information saved successfully');
        
        return response()->json([
            'message' => 'Information saved successfully'
        ]);
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
