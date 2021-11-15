<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use App\Models\SchoolClass;
use App\Models\SchoolYear;
use Carbon\Carbon;
use Livewire\Component;
use Barryvdh\DomPDF\Facade as PDF;
class Show extends Component
{
    public $invoices = [];
    public $search;

    public function render()
    {
        return view('livewire.invoice.show', [
            'years' => $this->getSchoolYears(),
            'classes' => $this->getSchoolClasses(),
        ]);
    }

    public function preview()
    {
        session()->forget('error');
        $date = $this->search['date'] ?? null;
        $year = $this->search['year'] ?? null;
        $class = $this->search['class'] ?? null;

        if ($date && $year && $class) {
            $this->invoices = $this->getInvoices($date, $year, $class);
        } else {
            $this->invoices = [];
            session()->flash('error', 'Veuillez remplir tout les champs.');
        }
    }

    private function getSchoolYears()
    {
        return SchoolYear::all();
    }

    private function getSchoolClasses()
    {
        return SchoolClass::all();
    }

    private function getInvoices($date, $year, $class)
    {
        $date = Carbon::parse($date);
        $yearInstance = SchoolYear::where('designation', $year)->first();
        $classInstance = SchoolClass::where('designation', $class)->first();

        $this->invoices = Invoice::with('subscription')
            ->whereMonth('period', $date->month)
            ->get();

        $invoices = $this->invoices->filter(function ($invoice) use ($yearInstance, $classInstance) {
            return $invoice->subscription->school_year_id == $yearInstance->id &&
                $invoice->subscription->school_class_id == $classInstance->id;
        });

        return $invoices;
    }

    // public function download()
    // {
    //     $pdf = PDF::loadView('livewire.invoice.preview', [
    //         'invoices' => $this->invoices,
    //     ])->output();

    //     $name = 'factures_' . $this->search['date'] . '.pdf';

    //     return $pdf->stream(
    //         fn () => print($pdf),
    //         $name
    //     );
    // }
}
