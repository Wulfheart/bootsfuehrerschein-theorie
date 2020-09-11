<x-app-layout>
    <div class="py-6">
        <div class="max-w-xl px-4 mx-auto space-y-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-semibold tracking-wide">Hallo, {{ auth()->user()->name }}</h1>
            <div class="w-full h-64 p-4 bg-white rounded-md">
                <h2 class="text-xl font-semibold">Deine Statistik</h2>
            </div>
            @foreach ($licenses as $license)
            <div>

                <div
                    class="w-full px-4 py-2 space-y-4 tracking-wide text-white transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md disabled:opacity-25">
                    <div class="flex flex-col justify-between w-full space-y-4 sm:items-center sm:flex-row">

                        <div class="text-xl font-semibold">
                            {{ $license->name }}
                        </div>
                        <div class="flex w-full sm:w-1/3">

                            <a href="{{ route('task', ['license' => $license]) }}"
                                class="flex flex-row items-center justify-between w-full px-6 py-3 text-xs font-semibold tracking-widest text-gray-800 uppercase transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:bg-gray-200 disabled:opacity-25">
                                <span>Fragen üben</span>
                                <x-heroicon-s-chevron-right class="w-5 h-5 -m-4" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
