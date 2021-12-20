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
    public $savedAmount = 0;
    public $paid = false;

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
        $subscription = $this->invoice->subscription;
        $dept = $subscription->debt;
        $this->savedAmount = $this->amount;

        if ($this->amount + $this->invoice->regulations->sum('amount') > $this->invoice->total) {
            session()->flash('error', 'La somme des réglements ne peut être supérieur au total.');
        } else {
            if ($dept > 0) {
                $this->paid = false;
                while ($dept > 0) {
                    $subscription = $subscription->load('invoices');
                    $oldestUnpaidInvoices = $subscription
                        ->invoices()
                        ->where('id', '<>', $this->invoice->id)
                        ->oldest()
                    ->get();

                    foreach ($oldestUnpaidInvoices as $invoice) {
                        while ($invoice->isPaid == false || $this->amount > 0) {
                            if ($this->amount > $invoice->total) {
                                $invoice->regulations()->create([
                                    'amount' => $invoice->total,
                                    'date' => $this->search['date'] ? $this->search['date'] : now(),
                                ]);
                                $this->amount -= $invoice->total;
                            } else {
                                $invoice->regulations()->create([
                                    'amount' => $invoice->amount,
                                    'date' => $this->search['date'] ? $this->search['date'] : now(),
                                ]);
                                $this->amount = 0;
                            }
                        }
                    }
                    $dept = $this->invoice->subscription->debt;
                }
                session()->flash('success', 'Paiement effectué avec succès.');
                $this->paid = true;
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
        }

        $this->amount = 0;
    }
}
