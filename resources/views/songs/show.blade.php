<!DOCTYPE html>
<html lang="NL">


    <head>
        <title>chosen song</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
    </head>

    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Chosen Song</header>

    <body class="bg-pastel text-center text-black">
        <br>
        <h1 class="font-bold">Het gekozen nummer: {{$song}}</h1>

        <ul>
            <li class="text-right"><a href="/songs/{{$index}}/edit">Edit!</a></li>
            <li class="text-right"><a href="/songs">Back to home!</a></li>
        </ul>

    </body>



</html>
