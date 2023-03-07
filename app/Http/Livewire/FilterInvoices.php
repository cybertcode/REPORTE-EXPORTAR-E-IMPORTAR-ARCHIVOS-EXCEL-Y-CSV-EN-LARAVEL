<?php

namespace App\Http\Livewire;

use App\Exports\InvoiceExport;
use App\Models\Invoice;
use Livewire\Component;
use Livewire\WithPagination;

class FilterInvoices extends Component
{
    use WithPagination;
    // protected $queryString = ['filters'];
    public $filters = [
        'serie' => '',
        'fromNumber' => '',
        'toNumber' => '',
        'fromDate' => '',
        'toDate' => '',
    ];

    public function render()
    {
        $invoices = Invoice::filter($this->filters)->paginate(10);
        return view('livewire.filter-invoices', compact('invoices'));
    }
    public function clear()
    {
        $this->reset();
    }
    public function generateReport()
    {
        return new InvoiceExport($this->filters);
        // return Excel::download(new InvoiceExport(), 'Invoices.xlsx'); //PARA EXCEL
        // return Excel::download(new InvoiceExport(), 'Invoices.csv', \Maatwebsite\Excel\Excel::CSV); // PARA CSV  // ojo para csv tener presente ésta forma
        // return (new InvoiceExport())->download(); // REFACTORIZADO
        // return new InvoiceExport(); // REFACTORIZADO II

    }
}
