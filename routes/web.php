<?php

use Illuminate\Support\Facades\Route;

Route::get('/create', function () {
    return view('create_blog');
});
