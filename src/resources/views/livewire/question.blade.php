<div x-data="{ selected: @entangle('selected').defer}" class="space-y-4">

    <h2 class="text-lg font-medium" id="question">{{ $task->question }}</h2>
    @isset ($media)
    <div class="flex flex-row justify-center space-x-4">
        @foreach ($media as $m)
        <img src="{{ $m->getFullUrl() }}">
        @endforeach
    </div>
    @endisset
    @foreach ($responses as $item)
    @if ($showSolution)
    <div class="group">
        <div
            class="relative flex flex-row items-center w-full p-4 text-left bg-white border-2 rounded-lg shadow {{ $item->correct ? 'border-green-500' : 'border-red-500' }}">
            <div
                class="px-2 py-1 mr-2 text-xs font-semibold border rounded {{ $item->id == $selected ? 'bg-gray-800 border-gray-800 text-white' : 'text-gray-500' }}">
                {{ $alphabet[$loop->index] }}
            </div>
            <div>
                {{ $item->text }}
            </div>
        </div>
    </div>
    @else
    <div class="group">
        <button type="button"
            class="flex flex-row items-center w-full p-4 text-left bg-white border-2 rounded-lg shadow hover:border-indigo-700 hover:shadow-lg"
            x-bind:class="{'bg-indigo-500 text-white': selected == {{ $item->id }}}"
            x-on:click="selected = {{ $item->id }}">
            <div class="px-2 py-1 mr-2 text-xs font-semibold border rounded" x-bind:class="{
                                        'bg-gray-800 border-gray-800 text-white': selected == {{ $item->id }},
                                        'text-gray-500': selected != {{ $item->id }},
                                }">
                {{ $alphabet[$loop->index] }}
            </div>
            <div>
                {{ $item->text }}
            </div>
        </button>
    </div>
    @endif
    @endforeach
    <div>
        @if ($showSolution)
        <button
            class="flex items-center w-full px-6 py-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"
            wire:click="next">
            Nächste Frage
        </button>
        @else

        <button
            class="flex items-center w-full px-6 py-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"
            wire:click="answer" x-bind:disabled="selected == 0">
            Frage beantworten
        </button>
        @endif
    </div>
    <span x-text="selected"></span>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.Livewire.on('scrollToQuestion', () => {
                var q = document.getElementById("question");
                console.log("HELLO")
                q.scrollIntoView({behavior: "smooth", block: "end", });
            })
        })

    </script>
</div>
