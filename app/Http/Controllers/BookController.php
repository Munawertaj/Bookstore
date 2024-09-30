<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function index() {

        $allBooks = Book::all();

        return view('books.index')
                    ->with('allBooks', $allBooks);
    }

    public function show($id) {

        $book = Book::find($id);

        return view('books.show')->with('book', $book);
    }
}
