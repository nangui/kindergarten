<?php

namespace App\Http\Livewire\Invoice;

use App\Models\Invoice;
use App\Models\SchoolClass;
use App\Models\SchoolYear;
use Carbon\Carbon;
use Livewire\Component;
use PDF;

class Preview extends Component
{
    public $invoices;
    public $date;
    public $isPreview = true;

    public function mount($date, $year, $class)
    {
        $this->date = $date;
        $this->invoices = $this->getInvoices($date, $year, $class);
    }

    public function render()
    {
        return view('livewire.invoice.preview')
            ->layout('layouts.print');
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

    public function download()
    {
        $this->isPreview = false;
        $pdf = PDF::loadView('livewire.invoice.preview', [
            'invoices' => $this->invoices,
            'isPreview' => false,
        ]);

        $name = 'factures_' . $this->date . '.pdf';

        return $pdf->download($name);
    }
}
