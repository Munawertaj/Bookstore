@extends('layout')

@section('page-content') 

    <legend> New Book </legend>

    <form method = "post" action="{{route('books.store')}}">
        {{ csrf_field() }}

        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-2">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" name="author">
        </div>

        <div class="mb-2">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn">
        </div> 
        
        <div class="mb-2">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock">
        </div> 

        <div class="mb-2">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price">
        </div> 

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br>
    <p class = "text-end">
        <a class = "btn btn-primary" href = " {{route('books.index',)}}"> Back </a>
    </p>

@endsection 