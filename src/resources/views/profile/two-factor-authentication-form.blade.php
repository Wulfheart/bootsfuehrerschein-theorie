<x-jet-action-section>
    <x-slot name="title">
        Zwei-Faktor-Authentifizierung
    </x-slot>

    <x-slot name="description">
        Sichere deinen Account zusätzlich durch Verwendung von Zwei-Faktor-Authentifizierung.
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
            Du hast die Zwei-Faktor-Authentifizierung aktiviert. 
            @else          
              Du hast die Zwei-Faktor-Authentifizierung nicht aktiviert. 
            @endif
        </h3>

        <div class="max-w-xl mt-3 text-sm text-gray-600">
            <p>
                Wenn du die Zwei-Faktor-Authentifizierung aktiviert hast, 
                When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="max-w-xl mt-4 text-sm text-gray-600">
                    <p class="font-semibold">
                        Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator application.
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="max-w-xl mt-4 text-sm text-gray-600">
                    <p class="font-semibold">
                        Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.
                    </p>
                </div>

                <div class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-button type="button" wire:click="enableTwoFactorAuthentication" wire:loading.attr="disabled">
                    Enable
                </x-jet-button>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-secondary-button class="mr-3" wire:click="regenerateRecoveryCodes">
                        Regenerate Recovery Codes
                    </x-jet-secondary-button>
                @else
                    <x-jet-secondary-button class="mr-3" wire:click="$toggle('showingRecoveryCodes')">
                        Show Recovery Codes
                    </x-jet-secondary-button>
                @endif

                <x-jet-danger-button wire:click="disableTwoFactorAuthentication" wire:loading.attr="disabled">
                    Disable
                </x-jet-danger-button>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
