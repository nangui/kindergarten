<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Impression des factures') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Filters -->
        <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md mb-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                {{ __('Filtres') }}
            </h2>
            <div class="flex flex-row space-y-0 space-x-4 mb-4">
                <div class="flex items-center justify-between mt-4 w-full">
                    <div class="flex-1 pr-2">
                        <x-jet-label for="billingDate" value="{{ __('Choisir une date') }}" />
                        <x-jet-input
                            id="billingDate"
                            type="date"
                            class="mt-1 block w-full"
                            wire:model.defer="search.date"
                        />
                    </div>
                    <div class="flex-1 pr-2">
                        <x-jet-label for="years" value="Choisir l'année scolaire" />
                        <x-jet-input
                            placeholder="Choisir l'année scolaire"
                            list="years_list"
                            id="years"
                            type="text"
                            class="mt-1 block w-full"
                            wire:model.defer="search.year"    
                        />
                        <datalist id="years_list">
                            @foreach ($years as $year)
                                <option>{{ $year->designation }}</option>
                            @endforeach                
                        </datalist>
                    </div>
                    <div class="flex-1 pr-2">
                        <x-jet-label for="classes" value="Choisir une classe" />
                        <x-jet-input
                            placeholder="Choisir une classe"
                            list="classes_list"
                            id="classes"
                            type="text"
                            class="mt-1 block w-full"
                            wire:model.defer="search.class"
                        />
                        <datalist id="classes_list">
                            @foreach ($classes as $class)
                                <option>{{ $class->designation }}</option>
                            @endforeach
                        </datalist>
                    </div>
                </div>
            </div>
            <x-jet-button wire:click="preview" wire:loading.attr="disabled">
                {{ __('Aperçu des résultats') }}
            </x-jet-button>
        </div>
        <!-- End filters -->

        <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="w-full flex justify-between items-center mb-8">
                <p>Nombre de facture trouvée(s): <span class="font-bold">{{ count($invoices) }}</span></p>
                @if (count($invoices) > 0)
                    <a target="_blank" href="{{ route('invoice.download', ['date' => $search['date'], 'year' => $search['year'], 'class' => $search['class']]) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Exporter') }} les {{ count($invoices) }} factures
                    </a>
                    <!-- <a href="{{ route('invoice.preview', ['date' => $search['date'], 'year' => $search['year'], 'class' => $search['class']]) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{ __('Exporter') }} les {{ count($invoices) }} factures
                    </a> -->
                @endif
            </div>
            <div class="pb-4 flex items-center">
                @if (session()->has('error'))
                    <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 relative w-1/3" role="alert" x-data="{show: true}" x-show="show">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>{{ session('error') }}</p>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                            <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
