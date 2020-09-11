<x-app-layout>
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

    {{-- Headline --}}
    <div class="md:flex md:items-center md:justify-between">
      <div class="flex-1 min-w-0">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
          {{ $license->name }}
        </h2>
      </div>
      <div class="flex mt-4 md:mt-0 md:ml-4">
        <a class="flex items-center w-full px-6 py-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"
          href="#">
          Fragen üben
        </a>
      </div>
    </div>

    {{-- Stats --}}
    <div>
      <div class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-3">
        <div class="overflow-hidden bg-white rounded-lg shadow">
          <div class="px-4 py-5 sm:p-6">
            <dl>
              <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                Fragen insgesamt
              </dt>
              <dd class="mt-1 text-3xl font-semibold leading-9 text-gray-900">
                {{ $stats['total'] }}
              </dd>
            </dl>
          </div>
        </div>
        <div class="overflow-hidden bg-white rounded-lg shadow">
          <div class="px-4 py-5 sm:p-6">
            <dl>
              <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                Fragen geübt
              </dt>
              <dd class="mt-1 text-3xl font-semibold leading-9 text-gray-900">
                {{ $stats['answered'] }}
              </dd>
            </dl>
          </div>
        </div>
        <div class="overflow-hidden bg-white rounded-lg shadow">
          <div class="px-4 py-5 sm:p-6">
            <dl>
              <dt class="text-sm font-medium leading-5 text-gray-500 truncate">
                Fragen richtig beantwortet
              </dt>
              <dd class="flex flex-row mt-1 text-3xl font-semibold leading-9 text-gray-900">
                {{ $stats['answered_correctly'] }}

              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-2">
        <div class="px-4 py-5 bg-white rounded-lg shadow sm:p-6">
          <livewire:license-history :license="$license"/>
        </div>
    </div>
  </div>
</x-app-layout>
