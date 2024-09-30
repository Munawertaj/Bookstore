<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>BOOKSTORE</h1>

    <table border="1", cellspacing = "0">
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
    
</body>
</html>