<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // READ: Tampilkan semua data genre
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    // CREATE: Tambah genre baru
    public function store(Request $request)
    {
        // Validasi request data
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genre = Genre::create($validated);
        return response()->json($genre, 201);
    }
}
