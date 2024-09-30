<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function index() {

        $allBooks = Book::paginate(10);

        return view('books.index')
                    ->with('allBooks', $allBooks);
    }

    public function show($id) {

        $book = Book::find($id);

        return view('books.show')->with('book', $book);
    }

    public function create() {

        return view('books.create');
    }

    public function store(Request $request) {

        $rules = [
            'title'     =>'required',
            'author'    =>'required',
            'isbn'      =>'required|size:13',
            'stock'     =>'required|numeric|integer|gte:0',
            'price'     =>'required|numeric'
        ];

        $messages = [

            'stock.gte'     => 'The stock must be greater than or equal to 0',
        ];

    // Option:1 (it will necessary when the attribute don't matches with DB)

        // $book = new Book();
        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->isbn = $request->isbn;
        // $book->stock = $request->stock;
        // $book->price = $request->price;
        // $book->save();

    // Option:2 (it will necessary when the attribute don't matches with DB)
        
        // $data = [

        //     // $book = new Book();
        // 'title'     => $request->title,
        // 'author'    => $request->author,
        // 'isbn'      =>$request->isbn,
        // 'stock'     =>$request->stock,
        // 'price'     =>$request->price,
        // ];
        // $book = Book::create($data);

        
        $request->validate($rules);
        
        
        $book = Book::create($request->all());  // Only work if the attributes matches with the DB

        return redirect()->route('books.show', $book->id); // redirect to show page

        // return redirect()->route('books.index');     // redirect to home page
    }

    public function destroy(Request $request, $id) {

        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index');
    }

}
