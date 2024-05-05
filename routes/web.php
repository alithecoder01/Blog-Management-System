<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/create', function () {
    return view('create_blog');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('/register', RegistrationController::class .'@index');
Route::post('/register', RegistrationController::class .'@UserRegister');

Route::get('/login', LoginController::class .'@index');
Route::post('/login', LoginController::class .'@login');

Route::get('/admin_dashboard',AdminController::class .'@index');

Route::get('/AdminRegister',AdminController::class .'@create');
Route::post('/AdminRegister',AdminController::class .'@store');