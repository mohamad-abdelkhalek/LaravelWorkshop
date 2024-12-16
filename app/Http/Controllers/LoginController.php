<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    // Create
    public function create(){
        return view("auth.login");
    }

    // Store
    public function store(Request $request){
        $request->validate([
            "email"=> "required|email",
            "password"=> "required"
        ]);

        // Credentials
        $credentials = $request->only(["email","password"]);

        // if attempt is true make auth

        if(auth()->attempt($credentials)){
            // redirect to dashboard page
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('auth.login')->with('error','Invalid login credentials');
        }
    }
}
