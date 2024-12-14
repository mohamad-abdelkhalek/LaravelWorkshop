<?php

use App\Http\Controllers\fileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController; // Ensure NoteController is imported
use App\Mail\BasicEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


// Define routes
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', action: [WelcomeController::class, 'welcome']);


Route::get('/notes/crsftoken', action: [NoteController::class,'crsftoken']);

//CRUD

Route::resource('/note', NoteController::class);

// Static route
Route::get('/home', function () {
    return "This is the home page";
});

Route::get("photo", action: [fileController::class,"index"])->name("photo");
Route::post("photo/upload", action: [fileController::class,"upload"])->name("photo.upload");

Route::get('/mail', function () {
    Mail::to("elcapitano219@gmail.com")->send(new BasicEmail('Mohamad'));
    return "Email was sent";
});

