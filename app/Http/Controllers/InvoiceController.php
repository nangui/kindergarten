<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\SchoolClass;
use App\Models\SchoolYear;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public $invoices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download($date, $year, $class)
    {
        $this->getInvoices($date, $year, $class);

        return PDF::loadView('livewire.invoice.preview', [
            'invoices' => $this->invoices,
            'isPreview' => false,
        ])->stream();
    }

    public function downloadReceipt(Request $request)
    {
        $data = $request->only([
            'month',
            'tutor',
            'pupil',
            'total',
            'amount_to_pay',
            'total_amount_paid',
            'class_desc',
            'dept',
            'given_amount',
            'code',
            'created_date',
            'year'
        ]);

        return PDF::loadView('livewire.regulation.receipt', [
            'data' => $data
        ])->stream();
    }

    private function getInvoices($date, $year, $class)
    {
        $date = Carbon::parse($date);
        $yearInstance = SchoolYear::where('designation', $year)->first();
        $classInstance = SchoolClass::where('designation', $class)->first();

        $this->invoices = Invoice::with('subscription')
            ->whereMonth('period', $date->month)
            ->get();

        $this->invoices = $this->invoices->filter(function ($invoice) use ($yearInstance, $classInstance) {
            return $invoice->subscription->school_year_id == $yearInstance->id &&
                $invoice->subscription->school_class_id == $classInstance->id;
        });
    }
}
