<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        // Ubah dari return view menjadi response JSON
        return response()->json($authors);
    }
}
