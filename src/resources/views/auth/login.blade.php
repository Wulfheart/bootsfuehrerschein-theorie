<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label value="Email" />
                <x-jet-input class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label value="Passwort" />
                <x-jet-input class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Eingeloggt bleiben</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 space-x-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        Passwort vergessen?
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    Login
                </x-jet-button>
            </div>
        </form>
        <x-slot name="addition">
            <div class="mt-5 text-sm text-gray-500 ">
                Noch keinen Account? 
                <a class="font-medium underline hover:text-gray-900" href="{{ route('register') }}">
                    Jetzt hier registrieren.
                </a>
            </div>
        </x-slot>
    </x-jet-authentication-card>

</x-guest-layout>
