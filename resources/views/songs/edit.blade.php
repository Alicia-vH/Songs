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
    <form action="" method="POST">
        <table class="table-auto">
            <tbody>
                <tr>
                    <th>Song:</th>
                    <td><input
                            class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            type="text" name="song" placeholder="Edit this song." value="{{ $song->title }}">
                    </td>
                </tr>

                <tr>
                    <th>Artist:</th>
                    <td><input
                            class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            type="text" name="artist" placeholder="Edit this artist." value="{{ $song->singer }}">
                    </td>
                </tr>
                <tr>
                    <button type="submit"
                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-pink dark:hover:bg-gray-700">Submit!</button>
                </tr>
            </tbody>
        </table>
    </form>

    <ul>
        <li class="text-right"><a href="/songs/create">Create!</a></li>
        <li class="text-right"><a href="/songs">Back to home!</a></li>
    </ul>

</body>


</html>
