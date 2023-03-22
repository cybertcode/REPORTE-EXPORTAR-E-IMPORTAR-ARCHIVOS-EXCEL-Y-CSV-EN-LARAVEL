<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithGroupedHeadingRow;

// class InvoiceImport implements ToModel, WithGroupedHeadingRow, WithCustomCsvSettings
class InvoiceImport implements ToCollection, WithGroupedHeadingRow, WithCustomCsvSettings, WithHeadingRow
{

    // public function model(array $row)
    // {
    //     return new Invoice([
    //         'serie' => $row['serie'],
    //         'base' => $row['base'],
    //         'igv' => $row['igv'],
    //         'total' => $row['total'],
    //         'user_id' => 1,
    //         'created_at' => is_numeric($row['created_at']) ? Carbon::instance(Date::excelToDateTimeObject($row['created_at'])) : Carbon::createFromFormat('d/m/Y', $row['created_at']),
    //     ]);
    // }
    // Para hacer cosas mas complejas
    public function collection($rows)
    {
        foreach ($rows as $row) {
            if (count($row) >= 5) {
                $invoice = Invoice::create([
                    'serie' => $row['serie'],
                    'base' => $row['base'],
                    'igv' => $row['igv'],
                    'total' => $row['total'],
                    'user_id' => 1,
                    'created_at' => is_numeric($row['created_at']) ? Carbon::instance(Date::excelToDateTimeObject($row['created_at'])) : Carbon::createFromFormat('d/m/Y', $row['created_at']),
                ]);
            } else {
                die('no tiene filas completas');
            }
        }
        //     // Aquí podemos crear mas cosas como crear otro registro con otro modelo
    }
    // Necesita esta clase WithCustomCsvSettings
    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'UTF-8',
            'delimiter' => ';'
        ];
    }
}
