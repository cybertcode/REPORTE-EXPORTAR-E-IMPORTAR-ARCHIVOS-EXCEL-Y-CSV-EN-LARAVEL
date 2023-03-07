<?php

namespace App\Exports;

use App\Models\Invoice;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Excel;

class InvoiceExport implements FromCollection, WithCustomStartCell, Responsable
{
    use Exportable;
    private $filters;
    private $fileName = 'Invoices.xlsx';
    private $writerType = Excel::XLSX;

    public function __construct($filters)
    {
        $this->filters = $filters;
    }
    public function collection()
    {
        return Invoice::filter($this->filters)->get();
    }
    // ES imprescindible definir este método para evitar error
    public function startCell(): string
    {
        return 'A5';
    }
}
