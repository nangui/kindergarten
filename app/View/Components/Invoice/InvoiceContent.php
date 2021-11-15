<?php

namespace App\View\Components\Invoice;

use Illuminate\View\Component;

class InvoiceContent extends Component
{
    public $invoice;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.invoice.invoice-content');
    }
}
