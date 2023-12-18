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
    <form method="POST" action="{{route('bands.update', $band->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-4 text-black">
            <label for="name" class="block text-sm font-medium text-black">Band:</label>
            <input type="text" id="name" name="name" class="form-input" maxlength="100" required value="{{ $band->name }}">
        </div>
        <div class="mb-4 text-black">
            <label for="genre" class="block text-sm font-medium text-black">Genre:</label>
            <input type="text" id="genre" name="genre" class="form-input" maxlength="255" value="{{ $band->genre }}">
        </div>
        <div class="mb-4 text-black">
            <label for="founded" class="block text-sm font-medium text-black">Founded:</label>
            <input type="text" id="founded" name="founded" class="form-input" maxlength="4" value="{{ $band->founded }}">
        </div>
        <div class="mb-4 text-black">
            <label for="active_till" class="block text-sm font-medium text-black">Active till:</label>
            <input type="text" id="active_till" name="active_till" class="form-input" maxlength="255" value="{{ $band->active_till }}">
        </div>
        <div class="mb-4">
            <button type="submit" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Submit!</button>
        </div>
    </form>

    <div class="mb-4">
        <a href="{{ route('bands.index') }}" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Back to home!</a>
    </div>

</body>


</html>
