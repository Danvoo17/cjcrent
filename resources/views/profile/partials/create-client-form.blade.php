<section>
    <h2 class="text-lg font-medium text-black">
        {{ __('Información del Cliente') }}
    </h2>

    <p class="mt-1 text-sm text-black">
        {{ __("Proporcione la información necesaria para crear un nuevo cliente.") }}
    </p>

    <form method="post" action="{{ route('clientes.store') }}" class="mt-6 space-y-6">
        @csrf

        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

        <div>
            <x-input-label style="color: black" for="nombre" :value="__('Nombre')" />
            <x-text-input style="color: grey" id="nombre" name="nombre" type="text" class="mt-1 block w-full bg-white" :value="old('nombre')" required autofocus autocomplete="nombre" />
            <x-input-error class="mt-2" :messages="$errors->get('nombre')" />
        </div>

        <div>
            <x-input-label style="color: black" for="apellido" :value="__('Apellido')" />
            <x-text-input style="color: grey" id="apellido" name="apellido" type="text" class="mt-1 block w-full bg-white" :value="old('apellido')" required autocomplete="apellido" />
            <x-input-error class="mt-2" :messages="$errors->get('apellido')" />
        </div>

        <div>
            <x-input-label style="color: black" for="fecha_nac" :value="__('Fecha de Nacimiento')" />
            <x-text-input style="color: grey" id="fecha_nac" name="fecha_nac" type="date" class="mt-1 block w-full bg-white" :value="old('fecha_nac')" required autocomplete="fecha_nac" />
            <x-input-error class="mt-2" :messages="$errors->get('fecha_nac')" />
        </div>

        <div>
            <x-input-label style="color: black" for="telefono" :value="__('Teléfono')" />
            <x-text-input style="color: grey" id="telefono" name="telefono" type="text" class="mt-1 block w-full bg-white" :value="old('telefono')" required autocomplete="telefono" />
            <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
        </div>

        <div>
            <x-input-label style="color: black" for="cedula" :value="__('Cédula')" />
            <x-text-input style="color: grey" id="cedula" name="cedula" type="text" class="mt-1 block w-full bg-white" :value="old('cedula')" required autocomplete="cedula" />
            <x-input-error class="mt-2" :messages="$errors->get('cedula')" />
        </div>

        <div>
            <x-input-label style="color: black" for="licencia" :value="__('Licencia')" />
            <x-text-input style="color: grey" id="licencia" name="licencia" type="text" class="mt-1 block w-full bg-white" :value="old('licencia')" required autocomplete="licencia" />
            <x-input-error class="mt-2" :messages="$errors->get('licencia')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="background-color: #f33f3f">{{ __('Guardar') }}</x-primary-button>
        </div>
    </form>
</section>
