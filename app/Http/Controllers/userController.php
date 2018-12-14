<?php

/**
      created by zahid Hossain
      Date: 13/12/2018
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class userController extends Controller
{
    public function profile()
    {
    	$user = session('user');
        $users = User::where('email', '=', $user)
                        ->get();

        return view('User.profile')->with('users',$users);
    }

    public function store(Request $request)
    {
    	
    }
}
