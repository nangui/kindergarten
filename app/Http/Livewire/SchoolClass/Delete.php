<?php

namespace App\Http\Livewire\SchoolClass;

use App\Models\SchoolClass;
use Livewire\Component;

class Delete extends Component
{
    public $model;

    public function mount(SchoolClass $class)
    {
        $this->model = $class;
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

