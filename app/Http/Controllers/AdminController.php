<?php

namespace App\Http\Controllers;
use App\Models\User;


class AdminController extends Controller
{
    function index(){
        $users = User::all();
        return view("admin.dashboard",compact("users"));
    }
}
