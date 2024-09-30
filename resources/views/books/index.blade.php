@extends('layout')

@section('page-content') 

    <p class = "text-end">
        <a class = "btn btn-primary" href = " {{route('books.create')}}"> Add Book </a>
    </p>

    <table class="table table-striped table-bordered">
        <tr>
            <th> ID </th>
            <th> Title </th>
            <th> Author </th>
            <th> Details </th>
        </tr>
        
        @foreach($allBooks as $book)
            <tr>
                <td> {{$book->id}} </td>
                <td> {{$book->title}} </td>
                <td> {{$book->author}} </td>
                <td><a href="{{route('books.show', $book->id)}}"> Details </a></td>
            </tr>
        @endforeach

    </table>

    {{$allBooks->links()}}


@endsection