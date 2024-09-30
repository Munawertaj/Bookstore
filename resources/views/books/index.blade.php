@extends('layout')

@section('page-content') 
    
    <h1 align = "center"> Book Lists </h1>

    <p class = "text-end">
        <a class = "btn btn-primary" href = " {{route('books.create')}}"> Add Book </a>
    </p>

    <table class="table table-striped table-bordered">
        <tr align="center">
            <th> ID </th>
            <th> Title </th>
            <th> Author </th>
            <th> Actions </th>
        </tr>
        
        @foreach($allBooks as $book)
            <tr>
                <td> {{$book->id}} </td>
                <td> {{$book->title}} </td>
                <td> {{$book->author}} </td>
                <td>
                    <a class = "btn btn-primary me-2" href="{{route('books.show', $book->id)}}"> Details </a>
                    <a class="btn btn-warning me-2" href="{{ route('books.edit', $book->id) }}">Edit</a>
                    
                    <form method = "post" action = "{{route('books.destroy', $book->id)}}" onsubmit="return confirm('Sure?')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input class = "btn btn-danger me-0" type="submit" value = "Delete">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    {{$allBooks->links()}}


@endsection