<?php

namespace App\Http\Livewire\Pupil;

use App\Models\Pupil;
use App\Models\Tutor;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $pupil;
    public $confirmingPupilDeletion = false;
    public $confirmingPupilAdd = false;

    protected $rules = [
        'pupil.first_name' => 'required',
        'pupil.last_name' => 'required',
        'pupil.code' => 'sometimes|min:4',
        'pupil.genre' => 'required',
        'pupil.birth_date' => 'required|date',
        'pupil.tutor_id' => 'exists:tutors,id',
    ];

    protected $messages = [
        'pupil.first_name.required' => 'Le prénom est obligatoire',
        'pupil.last_name.required' => 'Le nom est obligatoire',
        'pupil.code.required' => 'Le code est obligatoire',
        'pupil.birth_date.required' => 'La date de naissance est obligatoire',
        'pupil.tutor_id.exists' => 'Ce tuteur n\'existe pas en base de données',
    ];

    public function render()
    {
        return view('livewire.pupil.show', [
            'pupils' => Pupil::with('subscriptions')->orderBy('id', 'desc')->simplePaginate(10),
            'tutors' => Tutor::all(),
        ]);
    }

    public function confirmPupilAdd()
    {
        $this->reset(['pupil']);
        $this->pupil['genre'] = false;
        $this->confirmingPupilAdd = true;
    }

    public function confirmPupilDeletion($id)
    {
        $this->confirmingPupilDeletion = $id;
    }

    public function confirmPupilEdit(Pupil $pupil) 
    {
        $this->resetErrorBag();
        $this->pupil = $pupil;
        $this->confirmingPupilAdd = true;
    }

    public function deletePupil(Pupil $pupil)
    {
        $pupil->delete();
        $this->confirmingPupilDeletion = false;
        session()->flash('message', 'Eleve supprimé.');
    }

    public function savePupil()
    {
        $this->validate();
        if (isset($this->pupil['id'])) {
            $this->pupil->save();
            session()->flash('message', 'L\'élève a été modifié.');
        } else {
            $pupil = new Pupil;
            $pupil->fill($this->pupil);
            $pupil->genre = $this->pupil['genre'] ? 'M' : 'F';
            $pupil->save();
            session()->flash('message', 'Élève ajouté avec succès.');
        }
        $this->confirmingPupilAdd = false;
        $this->render();
    }
}
