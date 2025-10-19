<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // READ: Tampilkan semua data author
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }

    // CREATE: Tambah author baru
    public function store(Request $request)
    {
        // Validasi request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string'
        ]);

        $author = Author::create($validated);
        return response()->json($author, 201);
    }
}
