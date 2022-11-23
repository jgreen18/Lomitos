<x-guest-layout>
    <x-jet-authentication-card>
        {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="block text-gray-700 " for="email" value="{{ __('Correo') }}" />
                <x-jet-input class="" id="email" placeholder="Ingrese su correo electrónico" class="block mt-1 w-full"
                    type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" placeholder="Ingrese su contraseña" class="block mt-1 w-full"
                    type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-400">{{ __('Recordar usuario') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end">
                <x-jet-button class="ml-4 hover:to-blue-600 duration-700">
                    {{ __('Iniciar sesión') }}
                </x-jet-button>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="hover:text-red-500 duration-700" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
            <div class="flex items-center justify-end mt-1">
                @if (Route::has('register'))
                <a class="hover:text-red-500 duration-700" href="{{route('register')}}">
                    {{__('Crear cuenta')}}
                </a>
                @endif
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
