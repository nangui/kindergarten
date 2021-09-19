<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Paramètres') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-3 gap-4">
            <livewire:transport.show />
            <livewire:school-year.show />
            <livewire:canteen.show />
            <livewire:school-class.show />
        </div>
    </div>
</div>
