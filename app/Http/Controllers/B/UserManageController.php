<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserManageController extends Controller
{
    public function getUserList(Request $request)
    {
        $users = User::all();
        $title = 'User List';
        return $this->view('pages/users', compact('users', 'title'));
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
    public function saveUser(SaveUserRequest $request, $user_id=null)
    {
        $user = $user_id ? User::find($user_id) : (new User());
        if ( $request->method() == 'GET' ) {
            return $this->view('pages/user/create_update_form', compact('user'));
        } else {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();    
            session()->flash('success','User information saved successfully');
            return $this->view('pages/user/create_update_form', compact('user'));
        }
    }
    public function userDetails(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $title = '-'.$user->name;
        return $this->view('pages.user_details', compact('user', 'title'));
    }
    
}
