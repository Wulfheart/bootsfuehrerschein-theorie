<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl px-4 mx-auto space-y-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-semibold tracking-wide">Hallo, {{ auth()->user()->name }}</h1>
                <div class="w-full h-64 p-4 bg-white rounded-md">
                    <h2 class="text-xl font-semibold">Deine Statistik</h2>
                </div>
                @foreach ($licenses as $license)
                <div>
                    <a href="{{ route('task', ['license' => $license]) }}">
                        <div class="items-center w-full px-4 py-2 text-xl font-semibold tracking-wide text-white transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                            {{ $license->name }}
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
    </div>
</x-app-layout>
