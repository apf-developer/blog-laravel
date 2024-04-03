    <div class="py-5">
        <div class="mt-3 max-w-md">
            <div class="grid grid-cols-1 gap-3">
                <label for="titulo">
                    <span class="text-gray-700">Título</span>
                    <input
                        name="titulo"
                        id="titulo"
                        type="text"
                        value="{{ old('titulo', $post->titulo) }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder=""
                    />
                    @error('titulo')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </label>
                <label for="Contenido">
                    <span class="text-gray-700">Contenido</span>
                    <textarea
                        name="contenido"
                        id="contenido"
                        cols="30"
                        rows="10"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('contenido', $post->contenido) }}</textarea>
                    @error('contenido')
                        <small style="color:red;">{{ $message }}</small>
                    @enderror
                </label>
            </div>
        </div>
    </div>