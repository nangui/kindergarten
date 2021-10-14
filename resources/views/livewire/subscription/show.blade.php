<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Gestion des inscriptions') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Filters -->
        <!-- <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md mb-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                {{ __('Filtres') }}
            </h2>
             <div class="flex flex-row space-y-0 space-x-4 mb-4">
                <div class="w-1/3">
                    <x-jet-label for="code" value="{{ __('Code inscription') }}" />
                    <x-jet-input id="code" type="text" class="mt-1 block w-full" wire:model.defer="search.code" />
                </div>
    
                <div class="w-1/3">
                    <x-jet-label for="pupil-choice" value="{{ __('Élève') }}" />
                    <x-jet-input list="pupils-list" id="pupil-choice" type="text" class="mt-1 block w-full" wire:model.defer="search.pupil" />
                    <datalist id="pupils-list">
                        @foreach ($pupils as $pupil)
                            <option value="{{ $pupil->first_name }} {{ $pupil->last_name }} ({{ $pupil->code }})" />
                        @endforeach
                    </datalist>
                </div>

                <div class="w-1/3">
                    <x-jet-label for="tutor-choice" value="{{ __('Tuteur') }}" />
                    <x-jet-input list="tutors-list" id="tutor-choice" type="text" class="mt-1 block w-full" wire:model.defer="search.tutor" />
                    <datalist id="tutors-list">
                        @foreach ($tutors as $tutor)
                            <option value="{{ $tutor->first_name }} {{ $tutor->last_name }}"/>
                        @endforeach
                    </datalist>
                </div>
                
            </div> 
            <x-jet-button wire:click="perfomrSearch" wire:loading.attr="disabled">
                {{ __('Filtrer') }}
            </x-jet-button>
        </div> -->
        <!-- End filters -->

        <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="pb-4 flex items-center">
                <x-jet-button wire:click="confirmSubscriptionAdd" wire:loading.attr="disabled">
                    {{ __('Ajouter une inscription') }}
                </x-jet-button>
            </div>
            <div class="w-1/3">
                @if (session()->has('message'))
                    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{show: true}" x-show="show">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>{{ session('message') }}</p>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                            <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                @endif
            </div>

            <x-errors title="Il y a {errors} erreur(s) de validation"  />

            <table class="min-w-full divide-y divide-gray-200 mt-4">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('#ID') }}
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Code') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Nom élève') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Classe') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Année scolaire') }}
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">{{ __('Actions') }}</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($subscriptions as $sub)
                        <tr>
                            <td>{{ $sub->id }}</td>
                            <td>{{ $sub->code }}</td>
                            <td>{{ $sub->pupil->first_name }} {{ $sub->pupil->last_name }}</td>
                            <td>{{ $sub->school_class->designation }}</td>
                            <td>{{ $sub->school_year->designation }}</td>
                            <td class="py-2">
                                <a href="{{ route('subscription.edit', $sub->id) }}" class="ml-2 text-blue-500 hover:text-blue-700" wire:key="$sub->id">
                                    {{ __('Editer') }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-8">
                {{ $subscriptions->links() }}
            </div>
        </div>
    </div>
    <!-- Add Subscription Modal -->
    <x-jet-dialog-modal wire:model="confirmingSubscriptionAdd" id="addSubscriptionModal">
        <x-slot name="title">{{ __('Inscrire un élève') }}</x-slot>
        <x-slot name="content">
            <div class="flex items-center justify-between">
                <div class="flex-1 pr-2">
                    <x-jet-label for="pupil" value="{{ __('Élève') }}" />
                    <x-jet-input list="pupils-list" placeholder="Choisir l'élève" type="text" id="pupil" class="mt-1 block w-full" wire:model.defer="newSubscription.pupil" />
                    <datalist id="pupils-list">
                        @foreach ($pupils as $pupil)
                            <option value="{{ $pupil->first_name }} {{ $pupil->last_name }} ({{ $pupil->code }})" />
                        @endforeach
                    </datalist>
                </div>

                <div class="flex-1 pl-2">
                    <x-jet-label for="classe" value="{{ __('Classe') }}" />
                    <x-jet-input list="school-classes-list" placeholder="Choisir la classe" type="text" id="classe" class="mt-1 block w-full" wire:model.defer="newSubscription.class" />
                    <datalist id="school-classes-list">
                        @foreach ($school_classes as $schoolClass)
                            <option value="{{ $schoolClass->designation }}" />
                        @endforeach
                    </datalist>
                </div>
            </div>
            <div class="flex items-center justify-between mt-4">
                <div class="w-1/2 pr-2">
                    <x-jet-label for="year" value="{{ __('Année scolaire') }}" />
                    <x-jet-input list="years-list" placeholder="Choisir l'année scolaire" id="year" type="text" class="mt-1 block w-full" wire:model.defer="newSubscription.year" />
                    <datalist id="years-list">
                        @foreach ($school_years as $year)
                            <option value="{{ $year->designation }}" />
                        @endforeach
                    </datalist>
                </div>
                <div class="w-1/2 pl-2">
                    <x-jet-label for="subscriptionDate" value="{{ __('Date inscription') }}" />
                    <x-jet-input
                        id="subscriptionDate"
                        type="date"
                        class="mt-1 block w-full"
                        wire:model.defer="newSubscription.date"
                    />
                </div>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex-1 pr-2">
                    <x-checkbox id="canteen-label" left-label="A une cantine" wire:click="toggleCanteen" />
                    @if ($hasCanteen)
                        <x-jet-input list="canteens-list" id="canteen" type="text" class="mt-1 block w-full" wire:model.defer="newSubscription.canteen" />
                        <datalist id="canteens-list">
                            @foreach ($canteens as $canteen)
                                <option value="{{ $canteen->designation }}" />
                            @endforeach
                        </datalist>
                    @endif
                </div>
                @if ($hasCanteen)
                    <div class="flex-1 pl-2">
                        <x-jet-label for="canteenDate" value="{{ __('Date début validité') }}" />
                        <x-jet-input
                            id="canteenDate"
                            type="date"
                            class="mt-1 block w-full"
                            wire:model.defer="newSubscription.canteenDate"
                        />
                    </div>
                @endif
            </div>
            <div class="flex items-center justify-between mt-4">
                <div class="flex-1 pr-2">
                    <x-checkbox id="canteen-label" left-label="A un transport" wire:click="toggleTransport" />
                    @if ($hasTransport)
                        <x-jet-input list="transports-list" id="transport" type="text" class="mt-1 block w-full" wire:model.defer="newSubscription.transport" />
                        <datalist id="transports-list">
                            @foreach ($transports as $transport)
                                <option value="{{ $transport->zone }} ({{ $transport->comment }})" />
                            @endforeach                    
                        </datalist>
                    @endif
                </div>
                @if ($hasTransport)
                    <div class="flex-1 pl-2">
                        <x-jet-label for="transportDate" value="{{ __('Date début validité') }}" />
                        <x-jet-input
                            id="transportDate"
                            type="date"
                            class="mt-1 block w-full"
                            wire:model.defer="newSubscription.transportDate"
                        />
                    </div>
                @endif
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmingSubscriptionAdd', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2" wire:click="saveSubscription()">{{ __('Enregistrer') }}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Delete Subscription Modal -->
    <x-jet-confirmation-modal wire:model="confirmingSubscriptionDeletion">
        <x-slot name="title">{{ __('Suppression') }}</x-slot>
        <x-slot name="content">
            {{ __('Êtes-vous sûr de vouloir archiver cet inscription?') }}
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button class="rounded-none" wire:click="$set('confirmingSubscriptionDeletion', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2 rounded-none" wire:click="deleteSubscription({{ $confirmingSubscriptionDeletion }})" wire:loading.attr="disabled">
                {{ __('Archiver') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
