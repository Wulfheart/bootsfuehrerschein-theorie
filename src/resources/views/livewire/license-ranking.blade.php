<dl>
    <dt class="flex flex-row items-center text-sm font-medium leading-5 text-gray-500 truncate">
        <div>
            Meiste Fragen 30 Tagen
        </div>
      <div class="flex flex-row justify-center ml-2 space-x-1">
          <button wire:click="previousPage" wire:loading.attr="disabled" class="{{ $data->onFirstPage() ? 'invisible' : '' }}">
              <x-heroicon-o-arrow-narrow-left class="w-4 h-4"/>
          </button>
          <button wire:click="nextPage" wire:loading.attr="disabled" class="{{ !$data->hasMorePages() ? 'invisible' : '' }}">
            <x-heroicon-o-arrow-narrow-right class="w-4 h-4"/>
        </button>
      </div>
    </dt>
    <dd class="mt-1 space-y-2 text-sm ">
        <div class="grid grid-cols-12 text-xs font-semibold text-gray-500">
            <div class="col-span-2">
                
            </div>

            <div class="grid col-span-8 text-left">
                    Benutzer
            </div>
            <div class="grid col-span-2 text-right">
                    Fragen
            </div>
        </div>
        @forelse ($data as $d)
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-2">
                {{ $data->firstItem() + $loop->index }}.
            </div>

            <div class="grid items-center col-span-8">
                <div class="items-center truncate">
                    {{ $d->name }}
                </div>
            </div>
            <div class="grid items-center col-span-2">
                <div class="text-right">
                    {{ $d->count }}
                </div>
            </div>
        </div>

        @empty
        <div class="px-10 py-10 mx-auto space-y-4">
            <p class="italic">Zurzeit gibt es noch keine Daten. Fang am besten gleich damit an, ein paar Fragen zu beantworten.</p>
            </div>
                @endforelse
        
      
    </dd>
  </dl>
