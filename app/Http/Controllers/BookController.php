<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    // Display the dashboard with all books of the logged-in user
    public function index()
    {
        // Retrieve only books of the authenticated user
        $books = Book::where('user_id', Auth::id())->get();

        // Return the dashboard view with the user's books
        return view('dashboard', compact('books'));
    }

    // Store a newly created book in the database
    public function store(Request $request)
    {
        // Log the incoming request data
        Log::info('Request data:', $request->all());

        // Validate request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',          // Title is required and must be a string
            'genre' => 'required|string|max:255',          // Genre is required and must be a string
            'description' => 'required|string',            // Description is required
            'status' => 'required|string|in:read,currently_reading,want_to_read', // Status must be one of the enum values
        ]);

        // Log the validated data
        Log::info('Validated data:', $validated);

        // Store the book in the database, associating it with the logged-in user
        $book = Book::create([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'status' => $validated['status'],
            'user_id' => Auth::id(),                       // Set the current authenticated user's ID
        ]);

        // Log a success message indicating the book was created
        Log::info('Book created successfully', ['book_id' => $book->id]);

        // Redirect back to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Book added successfully!');
    }
}