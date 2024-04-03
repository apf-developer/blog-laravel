<x-layouts.app
    :titulo="$post->titulo"
    meta-description="Este es el detalle del Post">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Detalle del Post</h1>
    <h2>{{ $post->titulo }}</h2>
    <h4>{{ $post->contenido }}</h4>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>