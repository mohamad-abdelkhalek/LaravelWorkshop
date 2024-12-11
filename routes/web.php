<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController; // Ensure NoteController is imported
use Illuminate\Support\Facades\Route;

// Define routes
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', action: [WelcomeController::class, 'welcome']);
Route::get('/notes', action: [NoteController::class,'index']);

Route::get('/notes/{id}', action: [NoteController::class, 'show']);

// Static route
Route::get('/home', function () {
    return "This is the home page";
});
