<div x-data="{ selected: @entangle('selected')}" class="space-y-4">
        <h2 class="text-lg font-medium">{{ $task->question }}</h2>
        @isset ($media)
        <div class="flex flex-row justify-center space-x-4">
                @foreach ($media as $m)
                <img src="{{ $m->getFullUrl() }}">
                @endforeach
        </div>
        @endisset
        @foreach ($responses as $item)
        <div class="group">
                <button type="button"
                        class="flex flex-row items-center w-full p-4 text-left bg-white border-2 rounded-lg shadow hover:border-indigo-500 hover:shadow-lg"
                        x-on:click="selected = {{ $item->id }}">
                        <div class="px-2 py-1 mr-2 text-xs text-gray-500 border rounded-sm group-hover:bg-gray-100">
                                {{ $alphabet[$loop->index] }}
                        </div>
                        <div>
                                {{ $item->text }}
                        </div>
                </button>
        </div>
        @endforeach
        <x-jet-button class="w-full">Frage beantworten</x-jet-button>
        <span x-text="selected"></span>
</div>
