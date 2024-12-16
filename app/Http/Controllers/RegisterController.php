<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed'
    ]);

    // Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    // Redirect to the home route, passing the user's ID
    return redirect()->route('home', ['user' => $user->id])->with('msh', 'User has been created');
}




public function show(User $user)
{
    return view('home', ['user' => $user]);
}



}
