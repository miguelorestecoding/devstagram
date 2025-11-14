<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devstagram - @yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav>
        <a href="/">Principal</a>
        <a href="/nosotros">Nosotros</a>
        <a href="/tienda">Tienda</a>
    </nav>
    <h1 class="text-4xl font font-extrabold">@yield('titulo')</h1>
    <hr>
    <p>@yield('contenido')</p>
</body>

</html>
