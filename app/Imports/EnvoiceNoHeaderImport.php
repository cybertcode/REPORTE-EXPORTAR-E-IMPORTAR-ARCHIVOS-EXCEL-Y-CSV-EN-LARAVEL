<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Invoice;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class EnvoiceNoHeaderImport implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new Invoice([
            'serie' => $row[0],
            'base' => $row[1],
            'igv' => $row[2],
            'total' => $row[3],
            'user_id' => 1,
            'created_at' => is_numeric($row[4]) ? Carbon::instance(Date::excelToDateTimeObject($row[4])) : Carbon::createFromFormat('d/m/Y', $row[4]),
        ]);
    }

}
