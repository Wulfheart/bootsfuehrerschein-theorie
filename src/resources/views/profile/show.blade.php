<x-app-layout>
    <x-slot name="link">
        <a href="{{ route('dashboard') }}" class="flex flex-row items-center"> 
            <x-heroicon-o-chevron-left class="w-4 h-4 mr-1"/>
            <span>Dashboard</span>
        </a>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('profile.update-profile-information-form')

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>
            @endif

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
