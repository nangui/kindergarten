<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Paramètres') }}
    </h2>
</x-slot>

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4">
            <livewire:school-year.show />
            <livewire:school-class.show />
            <livewire:canteen.show />
            <livewire:transport.show />
        </div>
    </div>
</div>
