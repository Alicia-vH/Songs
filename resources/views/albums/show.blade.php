<!DOCTYPE html>
<html lang="NL">


    <head>
        <title>chosen album</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
    </head>

    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Chosen Album</header>

    <body class="bg-pastel text-center text-black">
    <br>
        <div class="mb-4">
        <h1 class="font-bold text-1xl">Het Gekozen Album: </h1>
            <p class="text-1xl">{{$album->name}}</p>
            <br>
        <h2 class="font-bold text-1xl">Year: </h2>
            <p class="text-1xl">{{$album->year}}</p>
            <br>
        <h3 class="font-bold text-1xl">Times Sold: </h3>
            <p class="text-1xl">{{$album->times_sold}}</p>

        </div>
        <h5 class="font-bold list text-1xl">Band:</h5>
        <p class="text-1xl">{{$album->band->name}}</p>

        <br>
        <h6 class="font-bold text-1xl">Songs:</h6>
    <ul class="list-disc text-1xl">
        @foreach($album->songs as $song)
            <li><a  href="/songs/{{$song->id}}">
                    {{$song->title}}</a></li>
        @endforeach
    </ul>
    <br>

        <div class="mb-4">
           <a href="/albums/{{$album->id}}/edit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Edit!</a>
           <a href="{{ route('albums.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>
        </div>

    </body>



</html>
