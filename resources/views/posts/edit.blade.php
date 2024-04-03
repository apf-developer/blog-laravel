<x-layouts.app
    :titulo="$post->titulo"
    meta-description="Este es el formulario de edición">

    <h1 class="mt-5 font-serif text-3xl text-sky-600 dark:text-sky-500">Editar post</h1>

    <form 
        action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Actualizar</button>
    </form>

</x-layouts.app>