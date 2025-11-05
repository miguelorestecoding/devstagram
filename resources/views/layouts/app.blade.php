<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devstagram - @yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <nav class="space-x-4 bg-white shadow-sm p-4">
        <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800">Principal</a>
        <a href="/nosotros" class="text-blue-600 hover:text-blue-800">Nosotros</a>
        <a href="/tienda" class="text-blue-600 hover:text-blue-800">Tienda</a>
        <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">Crear cuenta</a>
    </nav>
    <main class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-semibold mb-4">@yield('titulo')</h1>
        <hr class="mb-6">
        @yield('contenido')
    </main>
</body>

</html>
