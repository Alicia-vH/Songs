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
<header style="background: linear-gradient(to right, #ec4899, #e0e0e0); height: 100px; text-align: center; color: white; font-size: 2.5rem; font-weight: bold;" class="bg-gradient-to-r from-pink-500 to-pastel h-50 text-center text-light font-bold text-5xl">
    Create Album
</header>
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

