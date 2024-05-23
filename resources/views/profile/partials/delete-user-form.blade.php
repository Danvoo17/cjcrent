
<section class="space-y-6">

        <h2 class="text-lg font-medium text-black">
            {{ __('Borrar la cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-black">
            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.') }}
        </p>


    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('- Eliminar -') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-black">
                {{ __('Seguro de que quieres borrar la cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-800 dark:text-gray-400">
                {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                <x-text-input style="color: grey"
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4  bg-white"
                    placeholder="{{ __('Contraseña') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button style="color: grey" x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Borrar la cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
