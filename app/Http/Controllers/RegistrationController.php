<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }
    function UserRegister(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'password' => ['required', 'string'],
            ]
        );

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "role" => "User"
        ]);
        return redirect('/register')->with("success", "User Registered");
    }

    
}
