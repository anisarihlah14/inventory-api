<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(
            Book::with('genre')->get()
        );
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    public function show(string $id)
    {
        return response()->json(
            Book::with('genre')->findOrFail($id)
        );
    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy(string $id)
    {
        Book::destroy($id);

        return response()->json([
            'message' => 'Book berhasil dihapus'
        ]);
    }
}