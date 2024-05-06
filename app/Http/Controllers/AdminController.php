<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $users = User::all();
        return view("admin.dashboard", compact("users"));
    }

    function createPage()
    {
        return view("admin.AdminRegister");
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'password' => ['required', 'string'],
                'role' => ['required', 'string'],
            ]
        );

        User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
            "role" => $request->input("role"),
        ]);
        return redirect('/AdminRegister')->with("success", "Registered");
    }

    function delete(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect("/admin_dashboard")->with("success", "User deleted");
        } else {
            return "User not found.";
        }
    }


    function editPage(Request $request,$id){
        $user = User::find($id);
        return view("admin.AdminEdit", compact("user"));
    }
    function edit(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update(
                [
                    "name" => $request->input("name"),
                    "email" => $request->input("email"),
                    "role" => $request->input("role")
                ],
            );

            return redirect("/admin_dashboard")->with("success", "User Updated");
        } else {
            return "User not found.";
        }
    }
}
