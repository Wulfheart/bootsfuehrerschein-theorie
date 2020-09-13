<x-jet-action-section>
    <x-slot name="title">
        Account löschen
    </x-slot>

    <x-slot name="description">
        Lösche deinen Account permanent.
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Wenn dein Account gelöscht wird, werden alle Daten, die mit ihm assoziiert sind, unwiderruflich gelöscht.
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                Account löschen
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                Account löschen
            </x-slot>

            <x-slot name="content">
                Bist du sicher, dass du deinen Account löschen möchtest? Wenn dein Account gelöscht wird, werden alle Daten, die mit ihm assoziiert sind, unwiderruflich gelöscht.Bitte gib dein Passwort ein, um deinen Account dauerhaft und unwiderruflich zu löschen. Deine Daten werden hierbei gelöscht.

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="block w-3/4 mt-1" placeholder="Password"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Doch nicht
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Account löschen
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
