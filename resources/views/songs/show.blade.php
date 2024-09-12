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

    <body class="bg-pastel text-center text-black">
    <header style="background: linear-gradient(to right, #ec4899, #e0e0e0); height: 100px; text-align: center; color: white; font-size: 2.5rem; font-weight: bold;" class="bg-gradient-to-r from-pink-500 to-pastel h-50 text-center text-light font-bold text-5xl">
        Chosen Song
    </header>
    <br>
        <div class="mb-4">
        <h1 class="font-bold">Het gekozen nummer:</h1>
            <p>{{$song->title}}</p>
            <br>
        <h2 class="font-bold">Album(s):</h2>
            @foreach ($song->albums as $album)
                <p value="{{ $album->id }}">{{ $album->name }}</p>
            @endforeach
        </div>
    <br>

        <div class="mb-4">
           <a href="/songs/{{$song->id}}/edit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Edit!</a>
           <a href="{{ route('songs.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>
        </div>

    </body>



</html>
