<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)){
            $user = Auth::user();

            if ($user->role === 'Admin') {
                // The logged in user is an admin
                return redirect('/admin_dashboard');
            } else {
                // The logged in user is a regular user
                
                return redirect('/home');
            }

        }else{
            // The login not authorized 
            return redirect('/login')->with("failed", "Wrong Email or Password");
        }
        
    }
}
