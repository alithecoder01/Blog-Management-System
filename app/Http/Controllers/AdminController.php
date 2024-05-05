<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $users = User::all();
        return view("admin.dashboard",compact("users"));
    }

    function create(){
        return view("admin.AdminRegister");
    }

    function store(Request $request){
        $request->validate(
            [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'password' => ['required', 'string'],
                'role' => ['required', 'string'],
            ]
        );

        User::create([
            "name"=> $request->input("name"),
            "email"=> $request->input("email"),
            "password"=> $request->input("password"),
            "role"=> $request->input("role"),
        ]);
        return redirect('/AdminRegister')->with("success", "Registered");
    }

    // function delete(Request $request){

    // }
}
