
<section>
        <h2 class="text-lg font-medium text-black">
            {{ __('Actualizar contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-black">
            {{ __('Asegurate de usar una contraseña larga, con varios signos, letras y numeros para mantenerte seguro.') }}
        </p>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label style="color: black" for="update_password_current_password" :value="__('Contraseña actual')" />
            <x-text-input style="color: grey" id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full bg-white" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label style="color: black" for="update_password_password" :value="__('Nueva contraseña')" />
            <x-text-input style="color: grey" id="update_password_password" name="password" type="password" class="mt-1 block w-full bg-white" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label style="color: black" for="update_password_password_confirmation" :value="__('Confirmar nueva contraseña')" />
            <x-text-input style="color: grey" id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full bg-white" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="background-color: #f33f3f">{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
