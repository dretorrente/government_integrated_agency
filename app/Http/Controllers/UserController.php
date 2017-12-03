<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function users_list() {
    	$users = DB::table('users')
    			->select('users.*')
    			->get();
    	return view('users.users_list', ['users'=>$users]);
    }

    public function delete_user($id) {
    	$user = User::find($id);
        if ($user) {
            $user->delete();
            Session::flash('message','User has been deleted!');
            Session::flash('alert-class', 'alert-info');
            return redirect('/admin/users/');
        } else {
            return redirect('/admin/users/');
        }
    }

    public function view_user($id) {
    	$user = User::find($id);
    	return view('/users/user_view', ['user' => $user]);
    }

    public function update_user(Request $request) {
    	$user = User::find($request['id']);;
        if ($user) {
			$user->email = $request['email'];
			$user->name  = $request['name'];
			$user->role  = $request['role'];
            $user->save();
            Session::flash('message','User has been successfully updated');
            Session::flash('alert-class', 'alert-info');
            return redirect('/admin/users');
        } else {
            return redirect('/admin/users');
        }
    }
}
