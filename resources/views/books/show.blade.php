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
            <td>{{$book->id}}</td>
        </tr>
        
        <tr>
            <th> Title </th>
            <td>{{$book->title}}</td>
        </tr>

        <tr>
            <th> Author </th>
            <td>{{$book->author}}</td>
        </tr>
        
        <tr>
            <th> ISBN </th>
            <td>{{$book->isbn}}</td>
        </tr>

        <tr>
            <th> Price </th>
            <td>{{$book->price}}</td>
        </tr>

        <tr>
            <th> Stock </th>
            <td>{{$book->stock}}</td>
        </tr>

    </table>

    <br>
    <a href="{{route('books.index',)}}"> Back </a>
    
</body>
</html>