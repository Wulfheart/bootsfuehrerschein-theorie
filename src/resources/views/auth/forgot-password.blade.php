<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Du hast dein Passwort vergessen? Kein Problem. Gib deine Emailadresse ein und du bekommst eine Mail mit einem Link, der dir erlaubt, ein neues auszuwählen.
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/forgot-password">
            @csrf

            <div class="block">
                <x-jet-label value="Email" />
                <x-jet-input class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    Link zum Zurücksetzen senden
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
