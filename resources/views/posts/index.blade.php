<x-layouts.app titulo="Inicio" meta-description="Esta es un blog">
    <div class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-sky-600 dark:text-sky-500">Blog</h1>
        @auth
            <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{ route('posts.create') }}">Crear nuevo post</a>
        @endauth
    </div>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-md">
                <h3 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ $post->titulo }}
                    </a>
                </h3>
                @auth                    
                    <div class="flex justify-between">
                        <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="{{ route('posts.edit', $post) }}">Editar</a>
                        
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf @method('DELETE')
        
                            <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar</button>
                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
    </div>
</x-layouts.app>