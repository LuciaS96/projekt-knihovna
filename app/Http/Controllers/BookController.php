<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    public function show ()
    {
      $books = Boooks::where('user_id', Auth::id())->get();
      
      return view ('dashboard', [
        "books" => $books
      ]); 

    }


     public function store(Request $request)
    {
        // validating request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:read,currently_reading,want_to_read',
        ]);

        // storing the book in the database
        Book::create([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'status' => $validated['status'],
            'user_id' => auth()->id(),
        ]);


        return response()->json(['message' => 'Book added successfully!']);
    }

        // this will display newly added books as carsd
        public function index()
        {
              // retreive all books from the database
            $books = Book::all();

            // the books appear to the dashboard
            return view('dashboard', compact('books'));
        }


}
