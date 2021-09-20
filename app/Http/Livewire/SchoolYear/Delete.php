<?php

namespace App\Http\Livewire\SchoolYear;

use App\Models\SchoolYear;
use Livewire\Component;

class Delete extends Component
{
    public $model;

    public function mount(SchoolYear $year)
    {
        $this->model = $year;
    }

    public function delete()
    {
        $this->model->delete();
        $this->emitUp('changed');
    }

    public function render()
    {
        return <<<'blade'
            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Supprimer') }}
            </x-jet-danger-button>
        blade;
    }
}
