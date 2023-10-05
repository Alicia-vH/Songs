<!DOCTYPE html>
<html lang="NL">


    <head>
        <title>create</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
    </head>

    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Create</header>

    <body class="bg-pastel text-center text-black">
        <br>
        <form action="{{route('songs.store')}}" method="POST" action="{{route('songs.store')}}">
            @csrf
            <div class="mb-4 text-black">
                <label for="title" class="block text-sm font-medium text-white">Title</label>
                <input type="text" id="title" name="title" class="form-input">
            </div>
            <div class="mb-4 text-black">
                <label for="singer" class="block text-sm font-medium text-white">Singer</label>
                <input type="text" id="singer" name="singer" class="form-input">
            </div>
            <div class="flex items-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create</button>
                <a href="{{ route('songs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Back</a>
            </div>
        </form>

        <ul>
            <li class="text-right"><a href="/songs">Back to home!</a></li>
        </ul>

    </body>



</html>
