<?php

namespace App\Http\Livewire\Canteen;

use App\Models\Canteen;
use Livewire\Component;

class Show extends Component
{
    public $canteens;
    public $canteen;
    public $confirmingCanteenDeletion = false;
    public $confirmingCanteenAdd = false;

    protected $rules = [
        'canteen.designation' => 'required',
        'canteen.inscription' => 'required|numeric',
        'canteen.monthly_payment' => 'required|numeric',
    ];

    protected $messages = [
        'canteen.designation.required' => 'La désignation ne peut etre vide.',
        'canteen.designation.unique' => 'Cette désignation a déjà été utilisé.',
        'canteen.inscription.required' => 'Le montant de l\'inscription est obligatoire.',
        'canteen.inscription.numeric' => 'Le montant est un numérique.',
        'canteen.monthly_payment.required' => 'La mensualité est obligatoire.',
        'canteen.monthly_payment.numeric' => 'La mensualité est un numérique.',
    ];

    public function mount()
    {
        $this->canteens = Canteen::all();
    }

    public function render()
    {
        return view('livewire.canteen.show', [
            'canteens' => $this->canteens,
        ]);
    }

    public function confirmCanteenAdd()
    {
        $this->reset(['canteen']);
        $this->confirmingCanteenAdd = true;
    }

    public function confirmCanteenDeletion($id)
    {
        $this->confirmingCanteenDeletion = $id;
    }

    public function deleteCanteen(Canteen $canteen)
    {
        $canteen->delete();
        $this->confirmingCanteenDeletion = false;
        session()->flash('message', 'La cantine a été supprimé.');
    }

    public function confirmCanteenEdit(Canteen $canteen)
    {
        $this->resetErrorBag();
        $this->canteen = $canteen;
        $this->confirmingCanteenAdd = true;
    }

    public function saveCanteen()
    {
        $this->validate();

        if (isset($this->canteen['id'])) {
            $this->canteen->save();
            session()->flash('message', 'La cantine a été modifié.');
        } else {
            $canteen = new Canteen;
            $canteen->designation = $this->canteen['designation'];
            $canteen->inscription = $this->canteen['inscription'];
            $canteen->monthly_payment = $this->canteen['monthly_payment'];
            $canteen->save();
            session()->flash('message', 'La cantine a été ajouté.');
        }
        $this->confirmingCanteenAdd = false;
        $this->canteens = Canteen::all();
    }
}
