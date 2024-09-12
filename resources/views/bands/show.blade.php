<!DOCTYPE html>
<html lang="NL">


    <head>
        <title>chosen band</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
    </head>

    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Chosen Band</header>

    <body class="bg-pastel text-center text-black">
    <br>
        <div class="mb-4">
        <h1 class="font-bold text-1xl">Het Gekozen Band: </h1>
            <p>{{$band->name}}</p>
            <br>
        <h2 class="font-bold text-1xl">Genre: </h2>
            <p>{{$band->genre}}</p>
            <br>
        <h3 class="font-bold text-1xl">Founded: </h3>
            <p>{{$band->founded}}</p>
            <br>
        <h4 class="font-bold text-1xl">Active Till: </h4>
            <p>{{$band->active_till}}</p>
            <br>
         <h5 class="text-1xl font-bold">Albums created by this band:</h5>
            <ul>
                @foreach ($albums as $album)
                    <li>{{$album->name}}</li>
                @endforeach
            </ul>
            <div class="flex items-center">
                @auth
                    <a href="{{route('bands.edit', ['index' => $band-$id])}}">Edit</a>@endauth
            </div>
        </div>
    <br>

        <div class="mb-4">
           <a href="/bands/{{$band->id}}/edit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Edit!</a>
           <a href="{{ route('bands.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>
        </div>

    </body>



</html>
