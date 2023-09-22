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

    <header class="bg-metal h-8 text-center text-black font-bold"></header>

    <body  class="bg-silver text-center text-purple">

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Song:</td>
                    <td><input type="text" name="song" placeholder="Enter a song." ></td>
                </tr>

            </table>
        </form>

        <ul>
            <li class="text-right"><a href="/songs">Back to home!</a></li>
        </ul>

    </body>

    <footer class="bg-metal h-8">&nbsp;</footer>

</html>
