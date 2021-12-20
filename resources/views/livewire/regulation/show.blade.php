<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Réglement de facture') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md mb-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                {{ __('Rechercher') }}
            </h2>
            <div class="flex flex-row space-y-0 space-x-4 mb-4">
                <div class="flex items-center mt-4 w-full gap-4">
                    <div class="w-1/3">
                        <x-jet-label for="billingDate" value="{{ __('Veuillez entrer le code') }}" />
                        <x-jet-input
                            id="billingDate"
                            type="text"
                            placeholder="{{ __('Entrer le code') }}"
                            class="mt-1 block w-full"
                            wire:model.defer="search.code"
                        />
                    </div>
                    <div class="w-1/3">
                        <x-jet-label for="regulationDate" value="{{ __('Date de réglement') }}" />
                        <x-jet-input
                            id="regulationDate"
                            type="date"
                            placeholder="{{ __('Date de réglement') }}"
                            class="mt-1 block w-full"
                            wire:model.defer="search.date"
                        />
                    </div>
                </div>
            </div>
            <x-jet-button wire:click="performSearch" wire:loading.attr="disabled">
                {{ __('Rechercher') }}
            </x-jet-button>
        </div>

        @if ($pupil)
            <div class="w-full overflow-hidden px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                @if ($invoice)
                    <div class="w-full border p-2 rounded">
                        <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
                        <div class="w-full flex items-center mb-18 space-x-64">
                            <div class="flex flex-col font-bold uppercase p-16">
                                <p>College Anne-marie javouhey</p>
                                <p>Avenue Cheikh anta Diop</p>
                                <p>B.P. 7035 - Dakar-Medina</p>
                                <p>** Recu {{ Carbon\Carbon::parse($invoice->created_at)->monthName }} {{ Carbon\Carbon::now()->format('Y') }}</p>
                            </div>
                            <div class="flex flex-col p-16">
                                <p><span class="font-bold">Nom responsable: </span>{{ $invoice->subscription->pupil->tutor_full_name }}</p>
                                <p><span class="font-bold">Nom élève: </span>{{ $invoice->subscription->pupil->full_name }}</p>
                                <!-- <p><span class="font-bold">Adresse: </span>Lycée de lafosse</p> -->
                            </div>
                        </div>

                        <table class="w-full border divide-x divide-y divide-gray-200 border-collapse">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium uppercase tracking-wider" colspan="4">
                                        <div class="w-full flex justify-between">
                                            <p>{{ $invoice->subscription->school_class->designation }}</p>
                                            <p class="font-bold">{{ $invoice->subscription->pupil->full_name }}</p>
                                            <p class="pl-16">{{ $invoice->code }}</p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="flex h-96 divide-x divide-y divide-gray-200">
                                    <td class="w-2/5 px-6 py-4 whitespace-nowrap flex">
                                        <p class="uppercase">Transport / Cantine</p>
                                    </td>
                                    <td style="width: 10%;" class="px-6 py-4 whitespace-nowrap flex">
                                        <p class="w-full uppercase text-right">{{ number_format($invoice->total, 0, '.', ' ') }}</p>
                                    </td>
                                    <td class="w-2/5 px-6 py-4 whitespace-nowrap flex"></td>
                                    <td style="width: 10%;" class="px-6 py-4 whitespace-nowrap flex"></td>
                                </tr>
                                <tr class="flex">
                                    <td style="width: 90%;" colspan="3" class="border px-6 py-4 whitespace-nowrap">
                                        <div class="w-full">
                                            <p class="font-bold">TOTAL FACTURE {{ $invoice->subscription->pupil->full_name }}</p>
                                            <p>Montant avancé</p>
                                            <p>SOLDE PRECEDENT</p>
                                            <p class="uppercase">Facture *Obligatoire* Pour le reglement</p>
                                            <div class="w-full flex justify-between uppercase">
                                                <p>A payer avant le 10 du mois</p>
                                                <p class="font-bold">A payer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="width: 10%;" class="whitespace-nowrap border-t border-b">
                                        <div class="w-full px-6 pt-4 pb-2">
                                            <p>{{ number_format($invoice->total, 0, '.', ' ') }}</p>
                                            <p>{{ number_format($invoice->totalAmountPaid, 0, '.', ' ') }}</p>
                                            <p class="font-bold">{{ $invoice->subscription->debt }}</p>
                                        </div>
                                        <div class="w-full px-6 pb-4 pt-2 border-t">
                                            <p class="font-bold total">
                                                {{ number_format(($invoice->total-$invoice->totalAmountPaid) + $invoice->subscription->debt, 0, '.', ' ') }}
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="divide-x divide-y divide-gray-200">
                                <tr class="flex">
                                    <td style="width: 90%;" colspan="3" class="px-6 py-4 whitespace-nowrap">
                                        <div class="w-full">
                                            <div class="flex gap-2">
                                                <p>{{ $invoice->created_at->format('d/m/y') }}</p>
                                            </div>
                                            <div class="w-full flex justify-between items-center">
                                                <div class="flex">
                                                    <p class="uppercase pr-6">A payer</p>
                                                    <p>
                                                        <span class="font-bold">
                                                            {{ number_format(($invoice->total-$invoice->totalAmountPaid) + $invoice->subscription->debt, 0, '.', ' ') }}
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="flex">
                                                    <p>{{ $invoice->code }}</p>
                                                    <p class="pl-6">{{ $invoice->created_at->format('d/m/Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="width: 10%;">&nbsp;</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @endif
                <div class="w-1/2 mb-8 mt-8">
                    <div class="flex items-center justify-between gap-4">
                        <p><span class="font-bold text-uppercase">Nom: </span>{{ $pupil->first_name }}</p>
                        <p><span class="font-bold text-uppercase">Prénom: </span>{{ $pupil->last_name }}</p>
                    </div>
                    <div class="w-full">
                        @if ($invoice)
                            @if (($invoice->total-$invoice->totalAmountPaid) + $invoice->subscription->debt > 0)
                                <div class="flex items-end mt-4 w-full gap-4">
                                    <div class="w-2/3">
                                        <x-jet-label for="amount" value="{{ __('Veuillez entrer le montant') }}" />
                                        <x-jet-input
                                            id="amount"
                                            type="text"
                                            placeholder="{{ __('Entrer le montant') }}"
                                            class="mt-1 block w-full"
                                            wire:model.defer="amount"
                                        />
                                    </div>
                                    <x-jet-button wire:click="pay" wire:loading.attr="disabled">
                                        {{ __('Réglé la facture') }}
                                    </x-jet-button>
                                    @if ($paid)
                                        <a target="_blank" href="{{ route('print.receipt', [
                                            'month' => Carbon\Carbon::parse($invoice->created_at)->monthName,
                                            'year' => Carbon\Carbon::now()->format('Y'),
                                            'tutor' => $invoice->subscription->pupil->tutor_full_name,
                                            'pupil' => $invoice->subscription->pupil->full_name,
                                            'class_desc' => $invoice->subscription->school_class->designation,
                                            'total' => $invoice->total,
                                            'amount_to_pay' => ($invoice->total-$invoice->totalAmountPaid) + $invoice->subscription->debt,
                                            'total_amount_paid' => $invoice->totalAmountPaid,
                                            'dept' => $invoice->subscription->debt,
                                            'given_amount' => $savedAmount,
                                            'code' => $invoice->code,
                                            'created_date' => $invoice->created_at->format('d/m/Y')
                                        ])}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent font-semibold text-xs text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                                        >
                                            Imprimer reçu
                                        </a>
                                    @endif
                                </div>
                            @endif
                        @else
                            <p>{{ __('Aucune facture trouvée') }}</p>
                        @endif
                    </div>
                    <div class="pb-4 flex items-center mt-4">
                        @if (session()->has('error'))
                            <div class="flex items-center bg-yellow-500 text-black text-sm font-bold px-4 py-3 relative w-full" role="alert" x-data="{show: true}" x-show="show">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                <p>{{ session('error') }}</p>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                                    <svg class="fill-current h-6 w-6 text-black" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 relative w-full" role="alert" x-data="{show: true}" x-show="show">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                <p>{{ session('success') }}</p>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                                    <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

