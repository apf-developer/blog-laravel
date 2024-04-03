<x-layouts.app titulo="Inicio" meta-description="Esta es la página de registro">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Iniciar sesión</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="py-5">
            <div class="mt-3 max-w-md">
                <div class="grid grid-cols-1 gap-3">
                    <label for="Email">
                        <span class="text-gray-700">Email</span>
                        <input
                            name="email"
                            id="email"
                            type="text"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder=""
                        />
                        @error('email')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="Contraseña">
                        <span class="text-gray-700">Contraseña</span>
                        <input
                            name="password"
                            id="password"
                            type="password"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></input>
                        @error('password')
                            <small style="color:red;">{{ $message }}</small>
                        @enderror
                    </label>
                    <label for="Recuerdame">
                        <input
                            class="rounded-md shadow-sm border-slate-3"
                            type="checkbox"
                            name="recuerdame"
                            id="recuerdame">
                        <span class="ml-2 font-serif">Recuérdame</span>
                    </label>
                </div>
            </div>
        </div>

        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Iniciar sesión</button>
    </form>
</x-layouts.app>