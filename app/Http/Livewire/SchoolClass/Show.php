<?php

namespace App\Http\Livewire\SchoolClass;

use App\Models\SchoolClass;
use Livewire\Component;

class Show extends Component
{
    public $classes;
    public $designation;

    protected $listeners = ['changed' => 'rerender'];

    public function mount()
    {
        $this->classes = SchoolClass::all();
    }

    protected $rules = [
        'designation' => 'required|unique:school_classes',
    ];

    protected $messages = [
        'designation.required' => 'La désignation ne peut etre vide.',
        'designation.unique' => 'Cette année a déjà été ajouté',
    ];

    public function submit()
    {
        $this->validate();

        SchoolClass::create([
            'designation' => $this->designation,
        ]);
        $this->designation = '';
        $this->emit('changed');

        session()->flash('message', "La classe a bien été ajouté.");
    }

    public function rerender()
    {
        $this->classes = SchoolClass::all();
    }

    public function render()
    {
        return view('livewire.school-class.show', [
            'classes' => $this->classes,
        ]);
    }
}
