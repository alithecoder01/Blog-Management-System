<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/create', function () {
    return view('create_blog');
});

Route::post('/register', function () {
    return view('register');
});

Route::get('/register', RegistrationController::class .'@index')->name('register.index');
Route::post('/register', RegistrationController::class .'@UserRegister')->name('register.store');