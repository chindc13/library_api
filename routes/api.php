<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/users/{user}/borrow/{book}', [BorrowingController::class, 'borrow']);
Route::post('/users/{user}/return/{book}', [BorrowingController::class, 'returnBook']);
Route::post('/libraries', [LibraryController::class, 'create']);

Route::get('/books', [BooksController::class, 'index']);
Route::get('/libraries', [LibraryController::class, 'index']);

Route::get('/books/{book}/library', [BooksController::class, 'getLibrary']);
Route::get('/books/{book}/borrowers', [BooksController::class, 'getBorrowers']);
Route::get('/books/available', [BooksController::class, 'getAvailableBooks']);
Route::get('/borrowers', [BorrowingController::class, 'index']);