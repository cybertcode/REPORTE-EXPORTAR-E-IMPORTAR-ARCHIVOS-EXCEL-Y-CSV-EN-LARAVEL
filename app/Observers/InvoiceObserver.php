<?php

namespace App\Observers;

use App\Models\Invoice;

class InvoiceObserver
{
    public function creating(Invoice $invoice)
    {
        // Queremos cambiar una propiedad de un modelo - correlative  | la condicion
        $invoice->correlative = Invoice::where('serie', $invoice->serie)->count() + 1;
    }
}
