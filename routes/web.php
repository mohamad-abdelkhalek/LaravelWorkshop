<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// get, post, put, delete

Route::get('/home', function(){
    return "this is home page";
})->name("home");