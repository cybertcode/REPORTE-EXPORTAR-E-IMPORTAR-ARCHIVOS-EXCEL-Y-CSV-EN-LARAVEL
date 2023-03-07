<?php

namespace App\Exports;

use App\Models\Invoice;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class InvoiceExport implements FromCollection, WithCustomStartCell, Responsable, WithMapping, WithColumnFormatting
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
    // ES imprescindible definir este método para evitar error DE WithCustomStartCell
    public function startCell(): string
    {
        return 'A5';
    }
    // ES imprescindible definir este método para evitar error de WithMapping
    public function map($invoice): array
    {
        return [
            $invoice->serie,
            $invoice->correlative,
            $invoice->base,
            $invoice->igv,
            $invoice->total,
            $invoice->user->name,
            Date::dateTimeToExcel($invoice->created_at),
        ];
    }
    // ES imprescindible definir este método para evitar error de WithColumnFormatting
    public function columnFormats(): array
    {
        // G => Es la columna del excel a formaterar
        return [
            'G' => 'dd/mm/yyyy',
        ];
    }

}
