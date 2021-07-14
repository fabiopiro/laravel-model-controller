<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <title>Movie Model Controller</title>
    </head>
    <body>
        <div class="card-container">
            @foreach ($movies as $movie)
                <div class="card">
                    <p>Title: {{ $movie->title}}</p>
                    <p>Original Title: {{ $movie->original_title}}</p>
                    <p>{{ $movie->nationality}}</p>
                    <p>{{ $movie->date}}</p>
                    <p>{{ $movie->vote}}</p>
                </div>  
            @endforeach
        </div>
    </body>
</html>