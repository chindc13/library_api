<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:libraries',
        ]);

        $library = Library::create([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Library created successfully', 'library' => $library], 201);
    }

    public function index()
    {
        $libraries = Library::all();

        return response()->json(['libraries' => $libraries]);
    }
}
