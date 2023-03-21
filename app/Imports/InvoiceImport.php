<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;

// class InvoiceImport implements ToModel
class InvoiceImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    // public function model(array $row)
    // {
    //     return new Invoice([
    //         'serie' => $row[0],
    //         'base' => $row[1],
    //         'igv' => $row[2],
    //         'total' => $row[3],
    //         'user_id' => 1,
    //         'created_at' => is_numeric($row[4]) ? Carbon::instance(Date::excelToDateTimeObject($row[4])) : Carbon::createFromFormat('d/m/Y', $row[4]),
    //     ]);
    // }
    // Para hacer cosas mas complejas
    public function collection($rows)
    {
        foreach ($rows as $row) {
            $invoice = Invoice::create([
                'serie' => $row[0],
                'base' => $row[1],
                'igv' => $row[2],
                'total' => $row[3],
                'user_id' => 1,
                'created_at' => is_numeric($row[4]) ? Carbon::instance(Date::excelToDateTimeObject($row[4])) : Carbon::createFromFormat('d/m/Y', $row[4]),
            ]);
        }
        // Aquí podemos crear mas cosas como crear otro registro con otro modelo
    }
}
