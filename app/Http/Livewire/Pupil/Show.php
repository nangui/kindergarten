<?php

namespace App\Http\Livewire\Pupil;

use App\Models\Pupil;
use App\Models\Tutor;
use Livewire\Component;
use Illuminate\Support\Str;

class Show extends Component
{
    public $pupils;
    public $pupil;
    public $confirmingPupilDeletion = false;
    public $confirmingPupilAdd = false;

    protected $rules = [
        'pupil.first_name' => 'required',
        'pupil.last_name' => 'required',
        'pupil.code' => 'unique:pupils',
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

    public function mount()
    {
        $this->pupils = Pupil::all();
    }

    public function render()
    {
        return view('livewire.pupil.show', [
            'pupils' => $this->pupils,
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
            $pupil->code = Str::snake(
                Str::substr($pupil->first_name, 0, 3) . '-' . Str::substr($pupil->last_name, 0, 3)
            );
            $pupil->save();
            session()->flash('message', 'Élève ajouté avec succès.');
        }
        $this->confirmingPupilAdd = false;
        $this->pupils = Pupil::all();
    }
}
