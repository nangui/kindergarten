<?php

namespace App\Http\Livewire\Transport;

use App\Models\Transport;
use Livewire\Component;

class Show extends Component
{
    public $transports;
    public $transport;
    public $confirmingTransportDeletion = false;
    public $confirmingTransportAdd = false;

    protected $rules = [
        'transport.zone' => 'required',
        'transport.inscription' => 'required|numeric',
        'transport.monthly_payment' => 'required|numeric',
    ];

    protected $messages = [
        'transport.zone.required' => 'La désignation ne peut etre vide.',
        'transport.zone.unique' => 'Cette désignation a déjà été utilisé.',
        'transport.inscription.required' => 'Le montant de l\'inscription est obligatoire.',
        'transport.inscription.numeric' => 'Le montant est un numérique.',
        'transport.monthly_payment.required' => 'La mensualité est obligatoire.',
        'transport.monthly_payment.numeric' => 'La mensualité est un numérique.',
    ];

    public function mount()
    {
        $this->transports = Transport::all();
    }

    public function render()
    {
        return view('livewire.transport.show', [
            'transports' => $this->transports,
        ]);
    }

    public function confirmTransportAdd()
    {
        $this->reset(['transport']);
        $this->confirmingTransportAdd = true;
    }

    public function confirmTransportDeletion($id)
    {
        $this->confirmingTransportDeletion = $id;
    }

    public function deleteTransport(Transport $transport)
    {
        $transport->delete();
        $this->confirmingTransportDeletion = false;
        session()->flash('message', 'Le transport a été supprimé.');
    }

    public function confirmTransportEdit(Transport $transport)
    {
        $this->resetErrorBag();
        $this->transport['id'] = $transport->id;
        $this->transport['zone'] = $transport->zone;
        $this->transport['inscription'] = $transport->inscription;
        $this->transport['monthly_payment'] = $transport->monthly_payment;
        $this->transport['comment'] = $transport->comment;
        $this->confirmingTransportAdd = true;
    }

    public function saveTransport()
    {
        $this->validate();

        if (isset($this->transport['id'])) {
            $transportModel = Transport::find($this->transport['id']);
            $transportModel->update($this->transport);
            session()->flash('message', 'Le transport a été modifié.');
        } else {
            $transport = new Transport;
            $transport->zone = $this->transport['zone'];
            $transport->inscription = $this->transport['inscription'];
            $transport->monthly_payment = $this->transport['monthly_payment'];
            $transport->comment = $this->transport['comment'];
            $transport->save();
            session()->flash('message', 'La cantine a été ajouté.');
        }
        $this->confirmingTransportAdd = false;
        $this->transports = Transport::all();
    }
}
