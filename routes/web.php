<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController; // Ensure NoteController is imported
use App\Http\Controllers\RegisterController;
use App\Mail\BasicEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


// Define routes
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', action: [WelcomeController::class, 'welcome']);


Route::get('/notes/crsftoken', action: [NoteController::class,'crsftoken']);

//CRUD

Route::resource('/notes', NoteController::class);

Route::get('register', [RegisterController::class,'create'])->name('register');
Route::post('register/store', [RegisterController::class,'store'])->name('register.store');
Route::get('home/{user}', [RegisterController::class, 'show'])->name('home');



// Static route
// Route::get('/home', function () {
//     return "This is the home page";
// });

Route::get("photo", action: [fileController::class,"index"])->name("photo");
Route::post("photo/upload", action: [fileController::class,"upload"])->name("photo.upload");

Route::get('/mail', function () {
    Mail::to("elcapitano219@gmail.com")->send(new BasicEmail('Mohamad'));
    return "Email was sent";
});

Route::get("/contact", [ContactUsController::class,'index'])->name('contact');
Route::post("/contact/send", [ContactUsController::class,'store'])->name('contact.send');