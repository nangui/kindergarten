<?php

namespace App\Http\Livewire\Tutor;

use App\Models\Tutor;
use Livewire\Component;

class Show extends Component
{
    public $tutors;
    public $tutor;
    public $confirmingTutorDeletion = false;
    public $confirmingTutorAdd = false;

    protected $rules = [
        'tutor.first_name' => 'required',
        'tutor.last_name' => 'required',
        'tutor.email' => 'required|email',
        'tutor.phone1' => 'required',
        'tutor.phone2' => 'min:9',
        'tutor.civility' => 'sometimes|boolean|nullable',
    ];

    protected $messages = [
        'tutor.first_name.required' => 'Le prénom est obligatoire',
        'tutor.last_name.required' => 'Le nom est obligatoire',
        'tutor.email.required' => 'L\'adresse email est obligatoire',
        'tutor.email.email' => 'L\'adresse email doit être valide',
        'tutor.phone1.required' => 'Le numéro de téléphone est obligatoire',
    ];

    public function mount()
    {
        $this->tutors = Tutor::all();
    }

    public function render()
    {
        return view('livewire.tutor.show', [
            'tutors' => $this->tutors,
        ]);
    }

    public function confirmTutorAdd()
    {
        $this->reset(['tutor']);
        $this->tutor['civility'] = false;
        $this->confirmingTutorAdd = true;
    }

    public function confirmTutorDeletion($id)
    {
        $this->confirmingTutorDeletion = $id;
    }

    public function confirmTutorEdit(Tutor $tutor) 
    {
        $this->resetErrorBag();
        $this->tutor = $tutor;
        $this->confirmingTutorAdd = true;
    }

    public function deleteTutor(Tutor $tutor)
    {
        $tutor->delete();
        $this->confirmingTutorDeletion = false;
        session()->flash('message', 'Tuteur supprimé.');
    }

    public function saveTutor()
    {
        $this->validate();
        if (isset($this->tutor['id'])) {
            $this->tutor->save();
            session()->flash('message', 'Le tuteur a été modifié.');
        } else {
            $tutor = new Tutor;
            $tutor->fill($this->tutor);
            $tutor->save();
            session()->flash('message', 'Tuteur ajouté avec succès.');
        }
        $this->confirmingTutorAdd = false;
        $this->tutors = Tutor::all();
    }
}
