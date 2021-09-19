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
            <button class="px-4 py-2 bg-red-800 text-white text-xs" wire:click="delete">Supprimer</button>
        blade;
    }
}

