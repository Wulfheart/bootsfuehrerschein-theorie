
      <dl>
        <dt class="flex flex-row items-center text-sm font-medium leading-5 text-gray-500 truncate">
            <div>
                Dein Lernfortschritt
            </div>
          <div class="flex flex-row justify-center ml-2">
              <button wire:click="previousPage" wire:loading.attr="disabled" class="{{ $data->onFirstPage() ? 'invisible' : '' }}">
                  <x-heroicon-o-arrow-narrow-left class="w-4 h-4"/>
              </button>
              <button wire:click="nextPage" wire:loading.attr="disabled" class="{{ !$data->hasMorePages() ? 'invisible' : '' }}">
                <x-heroicon-o-arrow-narrow-right class="w-4 h-4"/>
            </button>
          </div>
        </dt>
        <dd class="mt-1 space-y-2 text-sm ">
            <div class="grid grid-cols-3 text-xs font-semibold text-gray-500">
                <div class="">
                    
                </div>

                <div class="grid place-items-center">
                        Richtig
                </div>
                <div class="grid place-items-center ">
                        Falsch
                </div>
            </div>
            @foreach ($data as $d)
            <div class="grid grid-cols-3 ">
                <div class="">
                    {{ Carbon\Carbon::parse($d->date)->format('d.m.Y') }}
                </div>

                <div class="grid items-center grid-cols-2 gap-2">
                    <div class="text-right">
                        {{ $d->correct }}
                    </div>
                    <x-heroicon-o-check class="w-5 h-5 text-left text-green-500"></x-heroicon-o-check>
                </div>
                <div class="grid items-center grid-cols-2 gap-2">
                    <div class="text-right">
                        {{ $d->wrong }}
                    </div>
                    <x-heroicon-o-x class="w-5 h-5 text-left text-red-500"></x-heroicon-o-x>
                </div>
            </div>
            @endforeach
            
          
        </dd>
      </dl>
   

