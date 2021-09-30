<x-slot name="header">        
    <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-4">
        {{ __('ID Abonnement: ') }} {{  $subscription->id }}
    </h2>
</x-slot>

<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <a href="{{ route('subscription.list') }}" class="block text-blue-500 hover:text-blue-700 mb-8">Retour à la liste</a>
            <p class="text-lg mb-4"><span class="underline">Code :</span> {{ $subscription->code }}</p>
            <p class="text-lg mb-4"><span class="underline">Élève :</span> {{ $subscription->pupil->full_name }}</p> 
            <p class="text-lg mb-4"><span class="underline">Tuteur :</span> {{ $subscription->pupil->tutor_full_name }}</p> 
            <fieldset class="border border-solid border-gray-300 p-4 rounded-md">
                <legend class="text-sm p-2">Informations sur l'inscription</legend>
                @if (!$editMode)
                    <div class="flex items-center justify-between">
                        <div class="flex-1 pr-2">
                            <p class="text-lg">
                                Date inscription: <span class="font-bold text-xl">{{ $subscription->dateToFormattedDateString() }}</span>
                            </p>
                        </div>
                        <div class="flex-1 pl-2">
                            <p class="text-lg">
                                Classe: <span class="font-bold text-xl">{{ $subscription->school_class->designation }}</span>
                            </p>
                        </div>
                        <div class="flex-1 pl-2">
                            <p class="text-lg">
                                Année scolaire: <span class="font-bold text-xl">{{ $subscription->school_year->designation }}</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-6 mb-6">
                        <div class="flex-1 pr-2">
                            <p class="text-lg">
                                Cantine: <span class="font-bold text-xl">{{ $subscription->canteen->designation }}</span></p>
                        </div>
                        <div class="flex-1">
                            <p class="text-lg">
                                Transport:
                                <span class="font-bold text-xl"> {{ $subscription->transport->zone }} ({{ $subscription->transport->comment }})</span>
                            </p>
                        </div>
                        <div class="">&nbsp;</div>
                    </div>
                    <x-button icon="pencil" wire:click="$set('editMode', true)" label="Mode édition" dark />
                @else
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-1 pr-2">
                            <x-jet-label for="subscriptionDate" value="{{ __('Date inscription') }}" />
                            <x-jet-input
                                id="subscriptionDate"
                                type="date"
                                class="mt-1 block w-full"
                                wire:model.defer="newSubscription.date"
                            />
                        </div>
                        <div class="flex-1 pl-2 pr-2">
                            <x-jet-label for="classe" value="{{ __('Classe') }}" />
                            <x-jet-input list="school-classes-list" placeholder="Choisissez la classe" type="text" id="classe" class="mt-1 block w-full" wire:model.defer="newSubscription.class" />
                            <datalist id="school-classes-list">
                                @foreach ($school_classes as $schoolClass)
                                    <option value="{{ $schoolClass->designation }}" />
                                @endforeach
                            </datalist>
                        </div>
                        <div class="flex-1 pl-2">
                            <x-jet-label for="year" value="{{ __('Année scolaire') }}" />
                            <x-jet-input list="years-list" placeholder="Choisissez l'année scolaire" id="year" type="text" class="mt-1 block w-full" wire:model.defer="newSubscription.year" />
                            <datalist id="years-list">
                                @foreach ($school_years as $year)
                                    <option value="{{ $year->designation }}" />
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <x-jet-danger-button class="ml-2" wire:click="$set('editMode', false)" wire:loading.attr="disabled">
                            {{ __('Annuler') }}
                        </x-jet-danger-button>
                        <x-button icon="pencil" lg wire:click="update" label="Sauvegarder" dark />
                    </div>
                @endif
            </fieldset>
            <fieldset class="border border-solid border-gray-300 p-4 rounded-md mt-8">
                <legend class="text-sm p-2">Informations sur les validités</legend>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex-1">
                        <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                            {{ __('Validité(s) cantine(s)') }}
                        </h2>
                        <table class="min-w-full divide-y divide-gray-200 mt-4">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date de début</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date de fin</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Résiliation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($canteenValidities as $validity)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {{ $validity->dateToFormattedDateString() }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {{ $validity->updated_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            @if (!$validity->updated_at)
                                            <x-jet-danger-button wire:click="closeValidity('canteen', {{ $validity->id }})" wire:loading.attr="disabled" wire:key="$validity->id">
                                                {{ __('Résilier') }}
                                            </x-jet-danger-button>
                                            @else
                                                <span class="text-red-500">Cloturée</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="flex-1">
                        <h2 class="font-semibold text-lg text-gray-800 leading-tight">
                            {{ __('Validité(s) transport(s)') }}
                        </h2>
                        <table class="min-w-full divide-y divide-gray-200 mt-4">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date de début</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date de fin</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Résiliation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transportValidities as $validity)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {{ $validity->dateToFormattedDateString() }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            {{ $validity->updated_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                            @if (!$validity->updated_at)
                                            <x-jet-danger-button wire:click="closeValidity('transport', {{ $validity->id }})" wire:loading.attr="disabled" wire:key="$validity->id">
                                                {{ __('Résilier') }}
                                            </x-jet-danger-button>
                                            @else
                                                <span class="text-red-500">Cloturée</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
