{{--<!DOCTYPE html>--}}
{{--<html lang="NL">--}}


{{--    <head>--}}
{{--        <title>create</title>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        @vite('resources/css/app.css')--}}
{{--        <!-- Fonts -->--}}
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />--}}
{{--    </head>--}}

{{--    <header class="bg-pink h-50 text-center text-light font-bold text-5xl">Create</header>--}}

{{--    <body class="bg-pastel text-center text-black">--}}
{{--        <br>--}}
{{--        <form method="POST" action="{{route('albums.store')}}">--}}
{{--            @csrf--}}
{{--            <div class="mb-4 text-black">--}}
{{--                <label for="name" class="block text-sm font-medium text-black">Album:</label>--}}
{{--                <input type="text" id="name" name="name" class="form-input" maxlength="100" required>--}}
{{--            </div>--}}
{{--            <div class="mb-4 text-black">--}}
{{--                <label for="year" class="block text-sm font-medium text-black">Year:</label>--}}
{{--                <input type="text" id="year" name="year" class="form-input" maxlength="4" required>--}}
{{--            </div>--}}
{{--            <div class="mb-4 text-black">--}}
{{--                <label for="times_sold" class="block text-sm font-medium text-black">Times Sold:</label>--}}
{{--                <input type="text" id="times_sold" name="times_sold" class="form-input" maxlength="500000" required>--}}
{{--            </div>--}}
{{--            <div class="mb-4 text-black">--}}
{{--                <select name="">--}}
{{--                    @foreach($bands as $band)--}}
{{--                        <option value="{{$band->id}}">{{$band->name}}</option>--}}
{{--                        <option value=""></option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                <label for="band" class="block text-sm font-medium text-black">Band:</label>--}}
{{--                <input type="text" id="band" name="band" class="form-input" required>--}}
{{--            </div>--}}
{{--            <div class="mb-4 content-center text-black">--}}
{{--                <label class="block text-sm font-medium text-black">Select Songs to Add to Album:</label>--}}
{{--                @foreach ($songs as $song)--}}
{{--                    <div class="flex text-black">--}}
{{--                        <label>--}}
{{--                            <input type="checkbox" name="album_songs[]" value="{{ $song->id }}"--}}
{{--                                {{ in_array($song->id, $album->songs->pluck('id')->toArray()) ? 'checked' : '' }}>--}}
{{--                        </label>--}}
{{--                        <span class="ml-2 text-black">{{ $song->title }}</span>--}}

{{--                    </div>--}}
{{--                    <script>--}}
{{--                        document.addEventListener('DOMContentLoaded', function () {--}}
{{--                            const checkboxes = document.querySelectorAll('input[type="checkbox"]');--}}
{{--                            checkboxes.forEach(checkbox => {--}}
{{--                                checkbox.addEventListener('change', function () {--}}
{{--                                    // Handle checkbox change, if needed--}}
{{--                                });--}}
{{--                            });--}}
{{--                        });--}}
{{--                    </script>--}}

{{--                @endforeach--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <br>--}}
{{--            <div class="mb-4">--}}
{{--                <button type="submit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Create!!</button>--}}
{{--            </div>--}}
{{--            <div class="mb-4">--}}
{{--                <a href="{{ route('albums.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--       @section('content')--}}
{{--            <div class="container mx-auto">--}}
{{--                <h2 class="text-2xl font-bold">Create Album</h2>--}}
{{--                <form method="POST" action="{{ route('albums.store') }}">--}}
{{--                    @csrf--}}
{{--                    <div class="mb-4 text-black">--}}
{{--                        <label for="name" class="block text-sm font-medium text-white">Name:</label>--}}
{{--                        <input type="text" id="name" name="name" class="form-input">--}}
{{--                    </div>--}}
{{--                    <div class="mb-4 text-black">--}}
{{--                        <label for="year" class="block text-sm font-medium text-white">Year:</label>--}}
{{--                        <input type="text" id="year" name="year" class="form-input">--}}
{{--                    </div>--}}
{{--                    <div class="mb-4 text-black">--}}
{{--                        <label for="times_sold" class="block text-sm font-medium text-white">Times Sold:</label>--}}
{{--                        <input type="text" id="times_sold" name="times_sold" class="form-input">--}}
{{--                    </div>--}}
{{--                    <div class="mb-4 text-black">--}}
{{--                        <label for="band" class="block text-sm font-medium text-white">Select Band:</label>--}}
{{--                        <select id="band" name="band_id" class="form-select">--}}
{{--                            @if ($songs)--}}
{{--                                @foreach ($songs as $song)--}}
{{--                                    <div class="flex items-center">--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox" name="album_songs[]" value="{{ $song->id }}"--}}
{{--                                                {{ in_array($song->id, $album->songs->pluck('id')->toArray()) ? 'checked' : '' }}>--}}
{{--                                        </label>--}}
{{--                                        <span class="ml-2 text-white">{{ $song->title }}</span>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <p>No songs available.</p>--}}
{{--                            @endif--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="flex items-center">--}}
{{--                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create--}}
{{--                        </button>--}}
{{--                        <a href="{{ route('albums.index') }}"--}}
{{--                           class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Back</a>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        @endsection--}}


{{--    </body>--}}



{{--</html>--}}



    <!DOCTYPE html>
<html lang="NL">

<head>
    <title>Create Album</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
</head>

<body class="bg-pastel text-center text-black">
<header class="bg-pink h-50 text-center text-light font-bold text-5xl">Create Album</header>
<br>

<form method="POST" action="{{ route('albums.store') }}">
    @csrf
    <div class="mb-4 text-black">
        <label for="name" class="block text-sm font-medium text-black">Album:</label>
        <input type="text" id="name" name="name" class="form-input" maxlength="100" required>
    </div>
    <div class="mb-4 text-black">
        <label for="year" class="block text-sm font-medium text-black">Year:</label>
        <input type="text" id="year" name="year" class="form-input" maxlength="4" required>
    </div>
    <div class="mb-4 text-black">
        <label for="times_sold" class="block text-sm font-medium text-black">Times Sold:</label>
        <input type="text" id="times_sold" name="times_sold" class="form-input" maxlength="500000" required>
    </div>
    <div class="mb-4 text-black">
        <label for="band" class="block text-sm font-medium text-black">Select Band:</label>
        <select id="band" name="band_id" class="form-select" required>
            <option value="">-- Select Band --</option>
            @foreach($bands as $band)
                <option value="{{ $band->id }}">{{ $band->name }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <label class="block text-sm font-medium text-black">Select Songs to Add to Album:</label>
    <br>
    <div class="grid grid-rows-4 grid-cols-4 mb-4 text-black">
        @foreach ($songs as $song)
            <div class="flex text-black">
                <label>
                    <input type="checkbox" name="album_songs[]" value="{{ $song->id }}">
                </label>
                <span class="ml-2 text-black">{{ $song->title }}</span>
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <div class="mb-4">
        <button type="submit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Create</button>
    </div>
    <div class="mb-4">
        <a href="{{ route('albums.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>
    </div>
</form>

</body>

</html>

