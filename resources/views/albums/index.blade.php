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

{{--    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Welcome to <p class="text-white">ALBUMS</p></header>--}}

    <body class="bg-pastel text-center text-black">
    <header style="background: linear-gradient(to right, #ec4899, #e0e0e0); height: 100px; text-align: center; color: hotpink; font-size: 2.5rem; font-weight: bold;" class="bg-gradient-to-r from-pink-500 to-pastel h-50 text-center text-light font-bold text-5xl">
        Welcome to <p class="text-white">BANDS</p>
    </header>
        <div></div>
       <br>
       <h1 class="text-2xl font-medium">Albums:</h1>
        <br>
       <div class="grid list-disc text-xl mb-4 grid-rows-10 grid-cols-4">
            @foreach($albums as $album)
                <li>
                    <a href="/albums/{{$album->id}}">{{$album->name}}</a>
                    <form method="POST" action="{{ route('albums.destroy', ['album'=> $album->id]) }}" onsubmit="return confirm('Are you sure you want to delete this album? :[')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-pink">x</button>
                    </form>
                </li>
            @endforeach
       </div>

         <br>
       <div class="mb-4">
       <a href="{{ route('albums.create') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Create an ALBUM!</a>
       </div>
    <br>

        <div class="mb-4">
        <a href="{{ route('songs.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Go to SONGS!</a>
        <a href="{{ route('bands.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Go to BANDS!</a>
        </div>

    </body>



</html>
