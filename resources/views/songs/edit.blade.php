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

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Song:</td>
                    <td><input type="text" name="song" placeholder="Edit this song." ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

        <ul>
            <li class="text-right"><a href="/songs/create">Create!</a></li>
            <li class="text-right"><a href="/songs">Back to home!</a></li>
        </ul>

    </body>


</html>
