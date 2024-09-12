<!DOCTYPE html>
<html lang="NL">


<head>
    <title>edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dotgothic16:400,600&display=swap" rel="stylesheet" />
</head>

<header class="bg-pink h-50 text-center text-light font-bold text-5xl">Edit</header>

<body class="bg-pastel text-center text-black">
    <br>
    <form method="POST" action="{{route('albums.update', $album->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-4 text-black">
            <label for="name" class="block text-sm font-medium text-black">Album:</label>
            <input type="text" id="album_name" name="album_name" class="form-input" maxlength="100" required value="{{ $album->name }}">
        </div>
        <div class="mb-4 text-black">
            <label for="year" class="block text-sm font-medium text-black">Year:</label>
            <input type="text" id="year" name="year" class="form-input" maxlength="4" value="{{ $album->year }}">
        </div>
        <div class="mb-4 text-black">
            <label for="times_sold" class="block text-sm font-medium text-black">Times Sold:</label>
            <input type="text" id="times_sold" name="times_sold" class="form-input" maxlength="500000" value="{{ $album->times_sold }}">
        </div>
        <div class="mb-4 text-black">
            <label for="band" class="block text-sm font-medium text-black">Select Band:</label>
            <select id="band" name="band_id" class="form-select" required>
{{--                <option value="">-- Select Band --</option>--}}
                @foreach($bands as $band)
{{--                    <option value="{{ $band->id }}">{{ $band->name }}</option>--}}
                    <option value="{{ $band->id }}" {{ $band->id == $album->band_id ? 'selected' : '' }}>
                        {{ $band->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>
        <label class="block text-sm font-medium text-black">Select Songs to Add to Album:</label>
        <br>
        <div class="grid grid-rows-4 grid-cols-4 mb-4 content-center text-black">
            @foreach ($songs as $song)
                <div class="flex text-black">
                    <label>
                        <input type="checkbox" name="album_songs[]" value="{{ $song->id }}"
                            {{ in_array($song->id, $album->songs->pluck('id')->toArray()) ? 'checked' : '' }}>
                    </label>
                    <span class="ml-2 text-black">{{ $song->title }}</span>

                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                        checkboxes.forEach(checkbox => {
                            checkbox.addEventListener('change', function () {
                                // Handle checkbox change, if needed
                            });
                        });
                    });
                </script>

            @endforeach
        </div>
        <br>
        <div class="mb-4">
            <button type="submit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Submit!</button>
        </div>
    </form>

    <div class="mb-4">
        <a href="{{ route('albums.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>
    </div>

</body>


</html>
