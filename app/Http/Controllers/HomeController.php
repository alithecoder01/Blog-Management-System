<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    function index(){
        $user = User::find(Auth::user()->id);
        return view("home",compact("user"));
    }
}
