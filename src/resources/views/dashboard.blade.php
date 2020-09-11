<x-app-layout>
    <div class="py-6">
        <div class="max-w-xl px-4 mx-auto space-y-8 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-black tracking-wide">Hallo, {{ auth()->user()->name }}</h1>
            {{-- <div class="w-full h-64 p-4 bg-white rounded-md">
                <h2 class="text-xl font-semibold">Deine Statistik</h2>
            </div> --}}
            @foreach ($licenses as $license)
            <div>
                <a href="{{ route('license', ['license' => $license->id]) }}">
                    <div
                        class="w-full px-4 py-2 space-y-4 tracking-wide text-white transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-600 disabled:opacity-25">
                        <div class="grid w-full grid-cols-12 py-2 place-items-auto">

                            <div class="flex items-center col-span-11 text-xl font-semibold ">
                                {{ $license->name }}
                            </div>
                            <div class="flex items-center col-span-1 text-xl font-semibold ">
                                <x-heroicon-s-chevron-right class="w-8 h-8" />
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
