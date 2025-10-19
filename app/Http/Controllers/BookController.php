<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        // Ubah dari return view menjadi response JSON
        return response()->json($books);
    }
}
