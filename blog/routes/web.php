<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Create Route and visit view
// Route::view('/home','home'); 

// Pass data in route
Route::get('/about/{name}', function ($name) {
    // echo $name;  we can write here also, or pass in view file
    return view('about', ['name' => $name]);
});