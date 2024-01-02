<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserManageController extends Controller
{
    public function getUserList(Request $request)
    {
        $users = User::all();
        if ( $this->ajax ) {
            return view('pages.users', compact('users'));
        }
        return view('base');
    }
    public function createUser(Request $request)
    {
        if ( $request->method() == 'GET' ) {
            if ( $this->ajax ) {
                return view('pages.users');
            }
        }
        if ( $request->method() == 'POST' ) {

        }
        return view('base');
    }
    public function updateUser(Request $request)
    {

    }
    
}
