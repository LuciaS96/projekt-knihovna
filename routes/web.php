<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('landing');   
})->name('landing');

Route::view('/','landing');

// Show login form
Route::get('/login', [AuthController::class, 'show'])->middleware('guest')->name('login');

// Show register form
Route::get('/register', [AuthController::class, 'showRegister'])->middleware('guest')->name('register');


// Log in the user
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

// Register the user
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');


// Route for displaying the dashboard
Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard')->middleware('auth');

// Route for when the user - fill the book form and submit the books on the dashboard
Route::post('/dashboard', [BookController::class, 'store'])->name('books.store');

// Log out user
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Route for the profile
Route::get('/profile', [AuthController::class, 'index'])->name('profile');


// Route for the landing page
Route::get('/landing', function () {
    return view('landing'); 
})->name('landing');

// Route for deleting the book card
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
