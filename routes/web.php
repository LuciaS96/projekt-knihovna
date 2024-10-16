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
Route::get('/login', [AuthController::class, 'show']);

// Show register form
Route::get('/register', [AuthController::class, 'showRegister']);



// Log in and add data 
Route::post('/login', [AuthController::class, 'login']);








