<?php

namespace App\View\Components\Invoice;

use Illuminate\View\Component;

class ReceiptContent extends Component
{
    public array $arrayData;

    public function __construct(array $arrayData)
    {
        $this->arrayData = $arrayData;
    }

    public function render()
    {
        return view('components.invoice.receipt-content');
    }
}
