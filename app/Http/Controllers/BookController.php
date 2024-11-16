<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    // DISPLAY the dashboard with all books of the logged-in user
    public function index()
    {

    // RETRIEVE only books of the authenticated user
    $books = Book::where('user_id', Auth::id())->get();

    // return the dashboard view with the user's books
        return view('dashboard', compact('books'));
    }

    // STORE a newly created book in the database
    public function store(Request $request)
    {

    // LOG the incoming REQUEST data
    Log::info('Request data:', $request->all());

    // VALIDATE requested data
        
    $validated = $request->validate([
            'title' => 'required|string|max:255',          
            'genre' => 'required|string|max:255',          
            'description' => 'required|string',            
            'status' => 'required|string|in:read,currently_reading,want_to_read', 
        ]);

    // LOG the validated data
    Log::info('Validated data:', $validated);

    // STORE the book card data in the database (for the logged-in user)
    $book = Book::create([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'status' => $validated['status'],
            'user_id' => Auth::id(),                       
        ]);

    // LOG in the MESSAGE that the book was added successfully
    Log::info('Book created successfully', ['book_id' => $book->id]);

    // REDIRECT back to the DASHBOARD + message 
    return redirect()->route('dashboard')->with('success', 'Book added successfully!');
    }

    // DELETE function -> delete the book
    public function destroy($id)
{
    $book = Book::findOrFail($id);
    $book->delete();

    // REDIRECT back to dashboard after deleting
    return redirect()->back()->with('success', 'Book deleted successfully!');
}

    

    // EDIT function -> Display the form (not necessary if using modals, but kept for API consistency)
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book); // Useful for AJAX or API-based updates
    }

    // Handle the update request
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:read,currently_reading,want_to_read',
        ]);

        $book->update($request->all());


        // REDIRECT back to dashboard after EDITING + message
        return redirect()->back()->with('success', 'Book updated successfully!');
    }



}