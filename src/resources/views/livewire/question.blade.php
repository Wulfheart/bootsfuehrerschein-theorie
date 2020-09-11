<div x-data="{ selected: @entangle('selected').defer, locked: @entangle('locked').defer}" class="space-y-4">

    <h2 class="text-lg font-medium" id="question">{{ $task->question }}</h2>
    @isset ($media)
    <div class="flex flex-row justify-center space-x-4">
        @foreach ($media as $m)
        <img src="{{ $m->getFullUrl() }}" class="">
        @endforeach
    </div>
    @endisset
    @foreach ($responses as $item)
    @if ($showSolution)
    <div class="group">
        <div
            class="relative flex flex-row items-center w-full p-4 text-left  border-2 rounded-lg shadow  
            {{ $item->correct ? 'border-green-500' : 'border-red-500' }}
                @if ($item->id == $selected)
                text-white
                    @if ($item->correct)
                        bg-green-500 
                        {{-- border-green-700 --}}
                    @else
                        bg-red-500 
                        {{-- border-red-700 --}}
                    @endif
                @else
                bg-white 
                @endif
            ">
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
            x-bind:class="{'bg-indigo-500 border-indigo-700 text-white': selected == {{ $item->id }}}"
            x-on:click="!locked ? selected = {{ $item->id }} : ''">
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
            <span wire:loading> <svg class="w-4 h-4 ml-2 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
        </span>
        </button>
        @else

        <button
            class="flex items-center w-full px-6 py-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"
            wire:click="answer" x-on:click="locked = true" x-bind:disabled="selected == 0">
            Frage beantworten
            <span wire:loading> <svg class="w-4 h-4 ml-2 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
        </span>
        </button>
        @endif
    </div>
    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.Livewire.on('scrollToQuestion', () => {
                var q = document.getElementById("question");
                q.scrollIntoView({behavior: "smooth", block: "end", });
            })
        })

    </script>


</div>
