<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <h1>BOOKSTORE</h1>

    <table class = "table table-striped table-bordered">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>