<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            .column {
                float: left;
                width: 33.33%;
                padding: 10px;
            }
        </style>
        @livewireStyles

        @wireUiScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body style="font-size: 12pt;">

        <div style="width: 100%;display: flex;flex-direction: column;align-items: center;gap: 32px;">
            @if ($isPreview)
                <div style="padding-bottom: 64px;">
                    <x-jet-button wire:click="download" wire:loading.attr="disabled">
                        {{ __('Imprimer') }}
                    </x-jet-button>
                </div>
            @endif
            @foreach ($invoices as $invoice)
                <x-invoice-content :invoice="$invoice" /> 
                @if (!$loop->last)
                    <div style="page-break-after: always;"></div>
                @endif
            @endforeach
        </div>

      @livewireScripts
    </body>
</html>
