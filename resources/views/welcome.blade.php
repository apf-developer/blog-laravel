<x-layouts.app titulo="Inicio" meta-description="Esta es una bienvenida">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Inicio</h1>
    @auth
        <div class="">
            Bienvenido: {{ Auth::user()->name }} <span style="color:brown">- {{ Auth::user()->email }}</span>
        </div>
    @endauth

</x-layouts.app>