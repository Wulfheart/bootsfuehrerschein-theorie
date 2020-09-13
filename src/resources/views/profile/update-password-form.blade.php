<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        Passwort ändern
    </x-slot>

    <x-slot name="description">
        Bitte stelle für maximale Sicherheit sicher, ein langes, zufällig gewähltes Passwort zu verwenden.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="Aktuelles Passwort" />
            <x-jet-input id="current_password" type="password" class="block w-full mt-1" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="Neues Passwort" />
            <x-jet-input id="password" type="password" class="block w-full mt-1" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="Neues Passwort bestätigen" />
            <x-jet-input id="password_confirmation" type="password" class="block w-full mt-1" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            Gespeichert.
        </x-jet-action-message>

        <x-jet-button>
            Speichern
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
