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
        return $this->view('pages.users', compact('users'));
    }
    public function createUser(Request $request)
    {
        if ( $request->method() == 'GET' ) {
            if ( $this->ajax ) {
                return view('pages.users');
            }
        }
        if ( $request->method() == 'POST' ) {
            $user = User::create($request->all());
            if ( $user ) {
                return view('components.alert', [
                    'type'=>'success',
                    'message'=>'User Created Successfully.'
                ])->render();
            } else {
                return view('components.alert', [
                    'type'=>'danger',
                    'message'=>'Something went wrong.'
                ])->render();
            }
        }
        return view('base');
    }
    public function updateUser(Request $request)
    {
        
    }
    public function userDetails(Request $request, $user_id)
    {
        $user = User::find($user_id);
        return view('pages.user_details', compact('user'))->render();
    }
    
}
