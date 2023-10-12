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
        <div></div>
       <br>
       <h1 class="text-2xl font-medium">Songs:</h1>
       <div class="list-none text-xl mb-4">
            @foreach($songs as $song)
                <li>
                    <a href="/songs/{{$song->id}}">{{$song->title}}</a>
                    <form method="POST" action="{{ route('songs.destroy', ['song' => $song->id]) }}" onsubmit="return confirm('Are you sure you want to delete this song? :[')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-pink">x</button>
                    </form>
                </li>
            @endforeach
       </div>


       <div class="mb-4">
        <a href="{{ route('songs.create') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Create!</a>
       </div>

    </body>



</html>
