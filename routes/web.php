<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');  //  resources/views/landing.blade.php
})->name('landing');


Route::view('/','landing');

// Show login form
Route::get('/login', [AuthController::class, 'show'])->middleware('guest')->name('login');


// Show register form
Route::get('/register', [AuthController::class, 'showRegister'])->middleware('guest')->name('register');


// Log in and add data 
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

// Register the user
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');


// Dashboard route (only accessible to logged-in users)
Route::get('/dashboard', function () {
    return view('dashboard'); // Point to the correct view for your dashboard
})->name('dashboard')->middleware('register'); // The 'auth' middleware ensures that only logged-in users can access it


// Log out user
Route::post('logout', [AuthController::class, 'logout'])->middleware('register')->name('logout');


