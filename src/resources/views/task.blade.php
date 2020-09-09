<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $license->name }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-xl px-4 mx-auto space-y-4 sm:px-6 lg:px-8">
            <livewire:question :license="$license"></livewire:question>
        </div>
    </div>
</x-app-layout>
