<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    //
    public function index(){
        return view("auth.dashboard");
    }

    public function profile(){
        return view("auth.dashboard.profile");
    }

    public function profileUpdate(Request $request)
{
    // Validate input data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $request->id,
        'password' => 'nullable|string|min:8|confirmed', // Optionally validate password
    ]);

    // Find the user by ID
    $user = User::find($request->id);
    if (!$user) {
        return redirect()->route('profile')->with('error', 'User not found.');
    }

    // Update the name and email
    $user->name = $validated['name'];
    $user->email = $validated['email'];

    // Update the password if provided
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // Save the changes to the database
    $user->save();

    // Return with success message
    return to_route('profile')->with('success', 'Profile updated');
}

    public function logout(){
        auth('web')->logout();
        return redirect()->route('login');
    }
}
