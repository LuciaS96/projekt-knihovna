<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller

{
    // Show the login page
public function show ()
    {
        return view('login');
    }

    // Handle the login form submission
public function login (Request $request)
{

  // Validate and process login credentials
    $credentials = $request->only('email', 'password');
    
   if (auth()->attempt($credentials)) {
            // Redirect to dashboard or intended page after successful login
            return redirect()->intended('dashboard');
        }
        // Redirect back with an error if authentication fails
        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
}

  // Show the register page
public function showRegister ()
    {
        return view('register');
    }


}

