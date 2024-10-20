<?php

namespace App\Http\Controllers;


//allows to use the model, to handle http request, ...
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


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
            // redirect to dashboard or intended page after successful login
            return redirect()->intended('dashboard');
        }
        // Redirect back with an error if authentication fails
        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
}

    // show the register page
public function showRegister ()
    {
        return view('register');  // The registration view
    }

 public function register(Request $request)
    {
        // validate the requested data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400); // Handle validation errors
        }

        // create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // this will hash the password for security
        ]);


        // Log the user in
        Auth::login($user);

        return redirect()->route('dashboard'); // Redirect to dashboard
    }

        public function logout()
        {
        Auth::logout(); // Log the user out
        return redirect()->route('login'); // Redirect to the login page
        }


         // Add the index method to handle the profile page
        public function index()
        {
        // Return the profile view
        return view('profile');
        }

}


