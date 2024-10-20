<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Corrected $fillable syntax
    protected $fillable = [
        'user_id',
        'title',
        'genre',
        'description', 
        'status',
    ];

    // Define relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // No need for extra relationships for title, genre, description, and status 
    // as they are already part of the Book model fields (not separate models).
}
