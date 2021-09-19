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
            <button class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent font-semibold text-xs text-white tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" wire:click="delete">Supprimer</button>
        blade;
    }
}

