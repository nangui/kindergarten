<?php

namespace App\Http\Livewire\Regulation;

use App\Models\Pupil;
use App\Models\Regulation;
use Livewire\Component;

class Show extends Component
{
    public $search = [];
    public $pupil;
    public $amount = 0;
    public $invoice = null;

    public function render()
    {
        return view('livewire.regulation.show');
    }

    public function performSearch()
    {
        if ($this->search['code'] && $this->search['date']) {
            $this->pupil = Pupil::where('code', $this->search['code'])->first();

            $subscription = $this->pupil->subscriptions()->latest()->first()->load('invoices');
            $this->invoice = $subscription->invoices()->latest()->first();

        } else {
            $this->search = [];
            session()->flash('error', 'Veuillez remplir tout les champs.');
        }
    }

    public function pay()
    {
        $dept = $this->invoice->subscription->debt;

        if ($dept > 0) {
            $subscription = $this->pupil->subscriptions()->latest()->first()->load('invoices');
            $oldestUnpaidInvoice = $subscription
                ->invoices()
                ->where('id', '<>', $this->invoice->id)
                ->oldest()
            ->first();

            while ($dept > 0) {
                
            }

            // if ($this->amount <= $oldestUnpaidInvoice->amount) {
            //     $oldestUnpaidInvoice->regulations()->create([
            //         'amount' => $this->amount,
            //         'date' => $this->search['date'] ? $this->search['date'] : now(),
            //     ]);
            //     session()->flash('success', 'Paiement effectué avec succès.');
            // } else {}
        } else {
            if ($this->amount > $this->invoice->total) {
                session()->flash('error', 'Le montant payé ne doit pas etre supérieur au montant dû.');
            } else {
                $this->invoice->regulations()->create([
                    'amount' => $this->amount,
                    'date' => $this->search['date'] ? $this->search['date'] : now(),
                ]);
                session()->flash('success', 'Paiement effectué avec succès.');
            }
        }

        dd($this->amount);
    }
}
