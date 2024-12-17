<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        
        // $guard = Auth::guard();

        if (Auth::attempt($credentials)) {
            // Redirect the user to the intended page or dashboard
            return redirect()->intended('dashboard');
        } else {
            // Redirect back with error message
            return redirect()->route('login')->with('error', 'Invalid login credentials');
        }
    }

    
}
