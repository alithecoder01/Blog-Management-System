<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function index(){
        return view("login");
    }

    function login(Request $request){
        $request->validate(
            [
                'email' => ['required', 'string'],
                'password' => ['required', 'string'],
            ]
        );

        $user = User::where('email', $request->email)->first();

        if(!$user){
            return redirect('/login')->with("failed", "User not Found");
        }

        $hasher = app('hash');
        if ($hasher->check($request->input("password"), $user->password)) {
            return redirect('/home');
        }else{
            return redirect('/login')->with("failed", "Wrong Password");
        };
        
    }
}
