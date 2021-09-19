<?php

namespace App\Http\Livewire\SchoolYear;

use App\Models\SchoolYear;
use Livewire\Component;

class Show extends Component
{
    public $years;
    public $designation;

    protected $listeners = ['changed' => 'rerender'];

    public function mount()
    {
        $this->years = SchoolYear::all();
    }

    protected $rules = [
        'designation' => 'required|unique:school_years|min:9',
    ];

    protected $messages = [
        'designation.required' => 'La désignation ne peut etre vide.',
        'designation.unique' => 'Cette année a déjà été ajouté',
        'designation.min' => 'La désignation doit avoir au moins 9 caractères.',
    ];

    public function submit()
    {
        $this->validate();

        SchoolYear::create([
            'designation' => $this->designation,
        ]);
        $this->designation = '';
        $this->emit('changed');

        session()->flash('message', "L'année a bien été ajouté.");
    }

    public function rerender()
    {
        $this->years = SchoolYear::all();
    }

    public function render()
    {
        return view('livewire.school-year.show', [
            'years' => $this->years
        ]);
    }
}
