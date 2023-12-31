<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
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

    }

    public function createPermission(Request $request)
    {

    }
}
