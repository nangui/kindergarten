<div class="w-full flex flex-col items-center gap-4">
    @foreach ($invoices as $invoice)
        <x-invoice-content :invoice="$invoice" /> 
        @if ($loop->iteration % 2 == 0)
            <div class="page-break"></div>
        @endif
    @endforeach
</div>

