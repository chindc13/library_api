<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Http\Resources\BooksResource;
use App\Models\Books;
use App\Models\Borrowings;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return BooksResource::collection(Books::all());
    }

    public function getLibrary(Books $book)
    {
        $library = $book->library;

        if(!empty($library))
            return response()->json(['library' => $library]);
        else
            return response()->json(['error' => 'You are not authorized to borrow this book.'], 403);
    }

    public function getBorrowers(Books $book)
    {
        $borrowers = Borrowings::where('book_id', $book->id)->with('user')->get();

        return response()->json(['borrowers' => $borrowers]);
    }

    public function getAvailableBooks()
    {
        $availableBooks = Books::where('is_available', true)->get();

        return response()->json(['available_books' => $availableBooks]);
    }
}
