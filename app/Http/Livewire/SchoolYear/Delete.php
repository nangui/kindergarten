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
            <button class="px-4 py-2 bg-red-800 text-white text-xs" wire:click="delete">Supprimer</button>
        blade;
    }
}
