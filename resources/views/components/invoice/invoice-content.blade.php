<div class="w-full border p-2 rounded">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="w-full flex items-center mb-18 space-x-64">
        <div class="flex flex-col font-bold uppercase p-16">
            <p>College Anne-marie javouhey</p>
            <p>Avenue Cheikh anta Diop</p>
            <p>B.P. 7035 - Dakar-Medina</p>
            <p>** Facture {{ Carbon\Carbon::parse($invoice->created_at)->monthName }} {{ Carbon\Carbon::now()->format('Y') }}</p>
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
                        <p class="pl-16">{{ $invoice->code->number }}</p>
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
                        <p class="font-bold">TOTAL {{ $invoice->subscription->pupil->full_name }}</p>
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
                        <p class="font-bold">{{ $invoice->subscription->debt }}</p>
                    </div>
                    <div class="w-full px-6 pb-4 pt-2 border-t">
                        <p class="font-bold total">
                            {{ number_format($invoice->total + $invoice->subscription->debt, 0, '.', ' ') }}
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
                            <!-- <p>FA17/401</p> -->
                            <!-- <p>CHQ</p> -->
                            <p>{{ $invoice->created_at->format('d/m/y') }}</p>
                        </div>
                        <div class="w-full flex justify-between items-center">
                            <div class="flex">
                                <p class="uppercase pr-6">A payer</p>
                                <p>
                                    <span class="font-bold">
                                        {{ number_format($invoice->total + $invoice->subscription->debt, 0, '.', ' ') }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex">
                                <p>{{ $invoice->code->number }}</p>
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
