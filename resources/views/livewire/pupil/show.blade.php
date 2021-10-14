<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Gestion des élèves') }}
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
                <div class="w-1/3">
                    <x-jet-label for="code" value="{{ __('Code') }}" />
                    <x-jet-input id="code" type="text" placeholder="Entrer le code" class="mt-1 block w-full" wire:model.defer="search.code" />
                </div>
    
                <div class="w-1/3">
                    <x-jet-label for="name" value="{{ __('Nom ou prénom') }}" />
                    <x-jet-input id="name" type="text" placeholder="Entrer le nom ou le prénom" class="mt-1 block w-full" wire:model.defer="search.name" />
                </div>
                
                <div class="w-1/3">
                    <x-native-select
                        label="Tuteurs"
                        wire:model.defer="pupil.tutor_id"
                    >
                        <option value="">{{ __('Selectionnez le tuteur') }}</option>
                        @foreach ($tutors as $tutor)
                            <option value="{{$tutor->id}}">
                                {{ $tutor->first_name }} {{ $tutor->last_name }}
                            </option>
                        @endforeach
                    </x-native-select>
                </div>
            </div>
            <x-jet-button wire:click="" wire:loading.attr="disabled">
                {{ __('Filtrer') }}
            </x-jet-button>
        </div>
        <!-- End filters -->

        <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="pb-4 flex items-center">
                <x-jet-button wire:click="confirmPupilAdd" wire:loading.attr="disabled">
                    {{ __('Ajouter un élève') }}
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

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('#ID') }}
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Prénom') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Nom') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Code') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Genre') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Date Naissance') }}
                        </th>
                        <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{  __('Nom tuteur') }}
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">{{ __('Actions') }}</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($pupils as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->first_name }}</td>
                            <td>{{ $p->last_name }}</td>
                            <td>{{ $p->code }}</td>
                            <td>{{ $p->genre == 'M' ? 'Garcon' : 'Fille' }}</td>
                            <td>{{ $p->birth_date }}</td>
                            <td>{{ $p->tutor->first_name }} {{ $p->tutor->last_name }}</td>
                            <td class="py-2">
                                <x-jet-button class="ml-2 bg-orange-500 hover:bg-orange-700" wire:click="confirmPupilEdit({{ $p->id }})" wire:key="$p->id">
                                    {{ __('Editer') }}
                                </x-jet-button>
                                <x-jet-danger-button class="ml-2" wire:click="confirmPupilDeletion({{ $p->id }})" wire:loading.attr="disabled" wire:key="$p->id">
                                    {{ __('Supprimer') }}
                                </x-jet-danger-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-8">
                {{ $pupils->links() }}
            </div>
        </div>
    </div>
    <!-- Add Pupil Modal -->
    <x-jet-dialog-modal wire:model="confirmingPupilAdd" id="addPupilModal">
        <x-slot name="title">{{ __('Ajout tuteur') }}</x-slot>
        <x-slot name="content">
            <fieldset class="border border-solid border-gray-300 p-4 rounded-md">
                <legend class="text-sm p-2">Informations personnelles</legend>
                <div class="pr-3">
                    <x-jet-label for="code" value="{{ __('Code FA') }}" />
                    <x-jet-input type="text" placeholder="Entrer le code FA" class="mt-1 block w-1/2" wire:model.defer="pupil.code" />
                    <x-jet-input-error for="pupil.code" class="mt-2" />
                </div>
                <div class="flex items-center justify-between mt-4">
                    <div class="flex-1 pr-2">
                        <x-jet-label for="first_name" value="{{ __('Prénom') }}" />
                        <x-jet-input id="first_name" placeholder="Entrer le prénom" type="text" class="mt-1 block w-full" wire:model.defer="pupil.first_name" />
                        <x-jet-input-error for="pupil.first_name" class="mt-2" />
                    </div>

                    <div class="flex-1 pl-2">
                        <x-jet-label for="last_name" value="{{ __('Nom') }}" />
                        <x-jet-input id="last_name" type="text" placeholder="Entrer le nom" class="mt-1 block w-full" wire:model.defer="pupil.last_name" />
                        <x-jet-input-error for="pupil.last_name" class="mt-2" />
                    </div>
                </div>
                <div class="mt-4">
                    <x-jet-label for="male" value="{{ __('Genre') }}" />
                    <div class="flex items-center mb-2">
                        <x-toggle id="toggle" label="Garcon" value="false" left-label="Fille" wire:model.defer="pupil.genre" />
                    </div>
                    <x-jet-input-error for="pupil.genre" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="birth_date" value="{{ __('Date Naissance') }}" />
                    <x-jet-input type="date" class="mt-1 block w-full" wire:model.defer="pupil.birth_date" />
                    <x-jet-input-error for="pupil.birth_date" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="tutor" value="{{ __('Selectionnez le tuteur') }}" />
                    <x-jet-input list="tutors" type="text" id="tutor" class="mt-1 block w-full" wire:model.defer="pupil.tutor_id" />
                    <datalist id="tutors">
                        @foreach ($tutors as $tutor)
                            <option value="{{$tutor->id}}">
                                {{ $tutor->first_name }} {{ $tutor->last_name }} ({{ $tutor->phone1 }})
                            </option>
                        @endforeach
                    </datalist>
                </div>
            </fieldset>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmingPupilAdd', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2" wire:click="savePupil()">{{ __('Enregistrer') }}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Delete Pupil Modal -->
    <x-jet-confirmation-modal wire:model="confirmingPupilDeletion">
        <x-slot name="title">{{ __('Suppression') }}</x-slot>
        <x-slot name="content">
            {{ __('Êtes-vous sûr de vouloir supprimer cet élève?') }}
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button class="rounded-none" wire:click="$set('confirmingPupilDeletion', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2 rounded-none" wire:click="deletePupil({{ $confirmingPupilDeletion }})" wire:loading.attr="disabled">
                {{ __('Supprimer') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
