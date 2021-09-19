<div class="col-span-2 overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-bl-md sm:rounded-br-md">
    <div class="pb-4 flex items-center justify-between">
        <h3 class="text-lg font-medium text-gray-900">{{ __('Gestion cantines') }}</h3>
        <x-jet-button wire:click="confirmCanteenAdd" wire:loading.attr="disabled">
            {{ __('Ajouter cantine') }}
        </x-jet-button>
    </div>
    <div>
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
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{ __('#ID') }}
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{  __('Désignation') }}
                </th>
                <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{  __('Inscription') }}
                </th>
                <th scope="col" class="pr-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    {{  __('Mensualité') }}
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">{{ __('Actions') }}</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($canteens as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->designation }}</td>
                    <td>{{ $c->inscription }}</td>
                    <td>{{ $c->monthly_payment }}</td>
                    <td class="py-2">
                        <x-jet-button class="ml-2 bg-orange-500 hover:bg-orange-700" wire:click="confirmCanteenEdit({{ $c->id }})" :wire:key="$c->id">
                            {{ __('Editer') }}
                        </x-jet-button>
                        <x-jet-danger-button class="ml-2" wire:click="confirmCanteenDeletion({{ $c->id }})" wire:loading.attr="disabled" :wire:key="$c->id">
                            {{ __('Supprimer') }}
                        </x-jet-danger-button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Add Canteen Modal -->
    <x-jet-dialog-modal wire:model="confirmingCanteenAdd" id="addCanteenModal">
        <x-slot name="title">{{ __('Ajout cantine') }}</x-slot>
        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="designation" value="{{ __('Désignation') }}" />
                <x-jet-input id="designation" type="text" class="mt-1 block w-full" wire:model.defer="canteen.designation" />
                <x-jet-input-error for="canteen.designation" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="subscription" value="{{ __('Montant inscription') }}" />
                <x-jet-input id="subscription" type="number" class="mt-1 block w-full" wire:model.defer="canteen.inscription" />
                <x-jet-input-error for="canteen.inscription" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="monthly_payment" value="{{ __('Mensualité') }}" />
                <x-jet-input id="monthly_payment" type="number" class="mt-1 block w-full" wire:model.defer="canteen.monthly_payment" />
                <x-jet-input-error for="canteen.monthly_payment" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmingCanteenAdd', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-jet-secondary-button>
            <x-jet-button class="ml-2" wire:click="saveCanteen()">{{ __('Enregistrer') }}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>

    <!-- Delete Canteen Modal -->
    <x-jet-confirmation-modal wire:model="confirmingCanteenDeletion">
        <x-slot name="title">{{ __('Suppression') }}</x-slot>
        <x-slot name="content">
            {{ __('Êtes-vous sûr de vouloir supprimer cette cantine?') }}
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button class="rounded-none" wire:click="$set('confirmingCanteenDeletion', false)" wire:loading.attr="disabled">
                {{ __('Annuler') }}
            </x-jet-secondary-button>
            <x-jet-danger-button class="ml-2 rounded-none" wire:click="deleteCanteen({{ $confirmingCanteenDeletion }})" wire:loading.attr="disabled">
                {{ __('Supprimer') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
