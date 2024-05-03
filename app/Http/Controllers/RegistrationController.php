<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index(){
        return view('register');
    }
    function UserRegister(Request $request){
        // $request->validate(
        //     [
        //         'name'=>['required','string','max=255'],
        //         'email'=>['required','string','max=22'],
        //         'password'=>['required','string','10'],
        //     ]
        // );

        // User::create([
        //     "name"=> $request->name,
        //     "email"=> $request->email,
        //     "password"=> $request->password,
        //     "role"=> "User"
        // ]);
        // return redirect('/register')->with("success","User Registered");

        return "hiii";
    }

    // function AdminRegister(Request $request){
    //     $new_user = User::create([
    //         "name"=> $request->input("name"),
    //         "email"=> $request->input("email"),
    //         "password"=> $request->input("password"),
    //         "role"=> "Admin"
    //     ]);
    //     return $new_user;
    // }
}
