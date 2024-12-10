<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', [WelcomeController::class, 'welcome']);

// get, post, put, delete

Route::get('/home', function(){
    return "this is home page";
})->name("home");