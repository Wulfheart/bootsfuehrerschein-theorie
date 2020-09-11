<x-app-layout>
    <x-slot name="link">
        <a href="{{ route('license', ['license' => $license->id]) }}" class="flex flex-row items-center"> 
            <x-heroicon-o-chevron-left class="w-4 h-4 mr-1"/>
            <span>{{ $license->name }}</span>
        </a>
    </x-slot>
    <div class="min-h-screen bg-gray-100">
        <div class="py-6">
            <div class="max-w-2xl px-4 mx-auto space-y-4 sm:px-6 lg:px-8">
                <livewire:question :license="$license"></livewire:question>
            </div>
        </div>
    </div>
</x-app-layout>
