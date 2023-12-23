<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class PermissionManageController extends Controller
{
    public function getRoles(Request $request)
    {
        if ( $this->ajax ) {
            $roles = Role::all();
            return view("b.pages.roles", compact("roles"));
        } else {
            return view('b.base');
        }
        
    }
    public function createRole(Request $request)
    {

    }

    public function getPermissions(Request $request)
    {

    }

    public function createPermission(Request $request)
    {

    }
}
