<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;



// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', HomeController::class . "@index");

//Login and Registration Routes

Route::get('/register', RegistrationController::class .'@index');
Route::post('/register', RegistrationController::class .'@UserRegister');

Route::get('/login', LoginController::class .'@index');
Route::post('/login', LoginController::class .'@login');

// Admin Routes
Route::get('/admin_dashboard',AdminController::class .'@index');
Route::post('/admin_dashboard/{id}', AdminController::class .'@delete');
Route::post('/admin_dashboard/{id}', AdminController::class .'@deleteCategory');
Route::get('/add_category', AdminController::class .'@AddCategoryPage');
Route::post('/add_category',AdminController::class .'@StoreCategory');
Route::get('/edit_category/{id}', AdminController::class .'@EditCategoryPage');
Route::post('/edit_category/{id}',AdminController::class .'@UpdateCategory');
Route::get('/AdminRegister',AdminController::class .'@createPage');
Route::post('/AdminRegister',AdminController::class .'@store');
Route::get('/AdminEdit/{id}', AdminController::class .'@editPage');
Route::post('/AdminEdit/{id}', AdminController::class .'@edit');


// Blog 
Route::get('/create', BlogController::class .'@index');
Route::post('/create', BlogController::class .'@store');

//Post
Route::get('/post/{id}', PostController::class .'@index');

// Delete Post
Route::post('/home/{id}', PostController::class .'@delete');
// Edit Post
Route::get('/editPost/{id}', PostController::class .'@editPost');
Route::post('/editPost/{id}', PostController::class .'@updatePost');