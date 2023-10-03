<!DOCTYPE html>
<html lang="NL">


    <head>
        <title>index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
    </head>

    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Welcome</header>

    <body class="bg-pastel text-center text-black">
       <br>
       <h1 class="text-2xl font-medium">Songs:</h1>
       <ul>
            @foreach($songs as $song)
                <li><a href="/songs/{{$song->id}}">{{$song->title}}</a></li>
            @endforeach
       </ul>

       <ul>
         <li class="text-right"><a href="/songs/create">Create!</a></li>
       </ul>

    </body>



</html>
