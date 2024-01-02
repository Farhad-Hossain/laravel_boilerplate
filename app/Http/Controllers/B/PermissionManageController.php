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
        if ( $this->ajax ) {
            $roles = Role::all();
            return view("inc.tables.roles", compact("roles"));
        } else {
            return view('base');
        }
        
    }
    public function createRole(Request $request)
    {
        $role = Role::create([
            'name'=> $request->name,
            'description'=>$request->description,
            'guard_name'=>Auth::getDefaultDriver(),
        ]);
        return "Role ".$role->name." created successfully.";
    }

    public function getPermissions(Request $request)
    {
        if ( $this->ajax ) {
            $permissions = Permission::all();
            return view("inc.tables.permissions", compact('permissions'));
        }
        return view('base');
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
        $role = Role::find($roleId);
        $permissions = Permission::all();

        if ( $request->method() == 'POST' ) {
            $role->syncPermissions([]);
            foreach( $request->permissions as $p ) {
                $permission = Permission::firstWhere('id', $p);
                $role->givePermissionTo($permission);
            }
        } else if ( $this->ajax ) {
            if ( $role ) {
                return view('pages.role_details', compact('role', 'permissions'));
            }
        }
        return view('base');
    }
}
