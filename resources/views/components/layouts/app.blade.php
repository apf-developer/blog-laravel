<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="descripcion" content="{{ $metaDescription ?? '' }}">
        <title>{{ $titulo ?? '' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

        <x-layouts.nav />

        @if (session('status'))
            <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">{{ session('status') }}</div>
        @endif

        <!-- Contenido dinámico de las páginas -->
        <div class="container mx-auto">
            {{ $slot }}
        </div>
    </body>
</html>