@extends('layout')

@section('page-content')

    <h1 align = "center"> Edit Book </h1>

    <p class = "text-end">
        <a class = "btn btn-primary" href = " {{route('books.index',)}}"> Back </a>
    </p>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
            <div> {{$errors->first('title')}} </div>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
            <div> {{$errors->first('author')}} </div>
        </div>

        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}" required>
            <div> {{$errors->first('isbn')}} </div>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $book->stock }}" required>
            <div> {{$errors->first('stock')}} </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
            <div> {{$errors->first('price')}} </div>
        </div>

        <button type="submit" class="btn btn-success">Update Book</button>
    </form>



@endsection
