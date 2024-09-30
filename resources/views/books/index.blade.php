<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <h1>Hello Laravel</h1> -->

    <ol>
    
        @foreach($allBooks as $book)
            <li> {{$book->title}}  price - {{$book->price}}</li>
        @endforeach

    </ol>
    
</body>
</html>