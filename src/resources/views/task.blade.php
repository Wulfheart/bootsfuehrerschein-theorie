<x-base-layout>
    <div class="min-h-screen bg-gray-100">
        <div class="py-6">
            <div class="mb-10">
                <a href="{{ route('dashboard') }}" class="flex flex-row items-center px-4 py-2 sm:px-10 hover:underline"> 
                    <x-heroicon-o-chevron-left class="w-4 h-4 mr-1"/>
                    <span>Dashboard</span>
                </a>
            </div>
            <div class="max-w-xl px-4 mx-auto space-y-4 sm:px-6 lg:px-8">
                <livewire:question :license="$license"></livewire:question>
            </div>
        </div>
    </div>
</x-base-layout>
