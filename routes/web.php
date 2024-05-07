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


//Login and Registration Routes

Route::get('/register', RegistrationController::class .'@index');
Route::post('/register', RegistrationController::class .'@UserRegister');

Route::get('/login', LoginController::class .'@index');
Route::post('/login', LoginController::class .'@login');

// Admin Routes

Route::get('/admin_dashboard',AdminController::class .'@index');
Route::post('/admin_dashboard/{id}', AdminController::class .'@delete');

Route::get('/AdminRegister',AdminController::class .'@createPage');
Route::post('/AdminRegister',AdminController::class .'@store');
Route::get('/AdminEdit/{id}', AdminController::class .'@editPage');
Route::post('/AdminEdit/{id}', AdminController::class .'@edit');

