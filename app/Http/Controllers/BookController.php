<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    // display the dashboard with all books of the logged-in user
    public function index()
    {

    // retrieve only books of the authenticated user
    $books = Book::where('user_id', Auth::id())->get();

    // return the dashboard view with the user's books
        return view('dashboard', compact('books'));
    }

    // store a newly created book in the database
    public function store(Request $request)
    {

    // log the incoming request data
    Log::info('Request data:', $request->all());

    // this will validate request data
        
    $validated = $request->validate([
            'title' => 'required|string|max:255',          
            'genre' => 'required|string|max:255',          
            'description' => 'required|string',            
            'status' => 'required|string|in:read,currently_reading,want_to_read', 
        ]);

    // log the validated data
    Log::info('Validated data:', $validated);

    // store the book in the database (for the logged-in user)
    $book = Book::create([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'status' => $validated['status'],
            'user_id' => Auth::id(),                       
        ]);

    // 
    Log::info('Book created successfully', ['book_id' => $book->id]);

    // redirect back to the dashboard + message 
    return redirect()->route('dashboard')->with('success', 'Book added successfully!');
    }

    public function destroy($id)
{
    $book = Book::findOrFail($id);
    $book->delete();

    // Redirect back to dashboar after deleting
    return redirect()->back()->with('success', 'Book deleted successfully!');
}


}