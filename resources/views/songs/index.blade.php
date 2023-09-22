<!DOCTYPE html>
<html lang="NL">


    <head>
        <title>index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
    </head>

    <header></header>

    <body>

       <h1>Songs:</h1>
       <ul>
            @foreach($songs as $song)
                <li><a href="/songs/{{$loop->index}}">{{$song}}</a></li>
            @endforeach
       </ul>

       <ul>
         <li><a href="/songs/create">Create!</a></li>
       </ul>

    </body>

    <footer></footer>

</html>
