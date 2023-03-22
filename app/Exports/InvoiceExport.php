<?php

namespace App\Exports;

use App\Models\Invoice;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\ShouldAutoSize; columa automático
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class InvoiceExport implements FromCollection, WithCustomStartCell, Responsable, WithMapping, WithColumnFormatting, WithHeadings, WithColumnWidths, WithDrawings, WithStyles
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
        return 'A10';
    }
    // ES imprescindible definir este método para evitar error de WithHeadings
    public function headings(): array
    {
        return [
            'serie',
            'Correlativo',
            'Base',
            'IGV',
            'Total',
            'Usuario',
            'Creado',
        ];
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

    // ES imprescindible definir este método para evitar error de WithColumnWidths
    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 10,
            'C' => 10,
            'D' => 10,
            'E' => 10,
            'F' => 30,
            'G' => 15,
        ];
    }
    // ES imprescindible definir este método para evitar error de WithDrawings
    public function drawings()
    {
        $drawings = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawings->setName('MKEVYN HH');
        $drawings->setDescription('MI LOGO');
        $drawings->setPath(public_path('img/logos/logo.png'));
        $drawings->setHeight(90);
        $drawings->setCoordinates('B2');
        return $drawings;

    }
    // ES imprescindible definir este método para evitar error de WithStyles
    public function styles(Worksheet $sheet)
    {
        $sheet->setTitle('Invoices');
        // $sheet->mergeCells('B8:F8'); combinar celdas
        // Un conjunto de celdas
        /*************
         * OPCIÓN 01 *
         *************/
        $sheet->getStyle('A10:G10')->applyFromArray([
            'font' => ['bold' => true, 'name' => 'Arial'],
            'alignment' => ['horizontal' => 'center'],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => ['argb' => 'C5D9F1'],
            ],
        ]);
        // Bordes de celdas
        $sheet->getStyle('A10:G' . $sheet->getHighestRow())->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => 'thin',
                ],
            ],
        ]);
        // Para ubicar el cursor en la celda
        $sheet->getStyle('A11')->applyFromArray([]);
        /*****************
         * FIN OPCIÓN 01 *
         *****************/
        /*************
         * OPCIÓN 02 *
         *************/
        return [
            'A10:G10' => [
                'font' => ['bold' => true, 'name' => 'Arial'],
                'alignment' => ['horizontal' => 'center'],
                'fill' => [
                    'fillType' => 'solid',
                    'startColor' => ['argb' => 'C5D9F1']
                ]
            ],
            'A10:G' . $sheet->getHighestRow() => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => 'thin',
                    ],
                ],
            ],
            'A11' => [],
        ];

    }
}
