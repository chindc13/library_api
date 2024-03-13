<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Borrowings;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{

    public function index()
    {
        $borrowers = Borrowings::with('user', 'book')->get();

        return response()->json(['borrowers' => $borrowers]);
    }

    public function borrow(Request $request, User $user, Books $book)
    {
        // Check if the book is available
        if (!$book->is_available) {
            return response()->json(['message' => 'Book is not available for borrowing'], 400);
        }

        // Check if the user belongs to the same library as the book
        if ($user->library_id !== $book->library_id) {
            return response()->json(['message' => 'User does not belong to the same library as the book'], 400);
        }

        // Create a new borrowing record
        Borrowings::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'borrowed_at' => now(),
        ]);

        // Update book status to unavailable
        $book->update(['is_available' => false]);

        return response()->json(['message' => 'Book borrowed successfully'], 200);
    }

    public function returnBook(Request $request, User $user, Books $book)
    {
        // Find the borrowing record
        $borrowing = Borrowings::where('user_id', $user->id)
            ->where('book_id', $book->id)
            ->whereNull('returned_at')
            ->first();

        if (!$borrowing) {
            return response()->json(['message' => 'Book is not borrowed by the user'], 400);
        }

        // Update borrowing record with return time
        $borrowing->update(['returned_at' => now()]);

        // Update book status to available
        $book->update(['is_available' => true]);

        return response()->json(['message' => 'Book returned successfully'], 200);
    }
}
