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
    
    // show the login page
    public function show ()
    {
        return view('login');
    }

    // handle the login form submitted
    public function login (Request $request)
    {

        // validate and process login credentials of the user
    $credentials = $request->only('email', 'password');
    
    if (auth()->attempt($credentials)) {
        // redirect the user to dashboard after successful login
            return redirect()->intended('dashboard');
        }
        // redirect backk with an error if authentication fails
        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    }

        // show the register page
    public function showRegister ()
    {
        return view('register'); 
    }

    public function register(Request $request)
    {
        // validating the requested data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
        ]);

        // handling validation errors
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // creating new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // this will hash the password
        ]);


        // log in the user and redirect to the dashboard
        Auth::login($user);

        return redirect()->route('dashboard');
    }
        // log out the user and redirect to the log in page
        public function logout()
        {
        Auth::logout(); 
        return redirect()->route('login');
        }


        // returning the user to the profile view
        public function index()
        {

        return view('profile');
        }

}


