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
}
