<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel primi passi</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container py-3">
        <header class="d-md-flex justify-content-md-between align-items-center">

            <h1 class="text-center pb-3 pb-md-0">Pagina 3</h1>

            <ul class="d-flex justify-content-center align-items-center gap-4">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('page1')}}">Pagina 1</a>
                </li>
                <li>
                    <a href="{{url('page2')}}">Pagina 2</a>
                </li>
                <li>
                    <a href="{{url('page4')}}">Pagina 4</a>
                </li>
            </ul>
        </header>

        <main class="text-center pt-5 my-5">
            <h4>Buonasera, {{$name}}</h4>
        </main>
    </div>
</body>

</html>