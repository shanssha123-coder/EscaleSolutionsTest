<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function create(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->profile_pic = $request->input('profile_pic');

        $user->save();
        return response()->json($user);
 
    }
 
    public function fetchUser(){
        $users = User::all();
        return response()->json($users);
    }
    
}
