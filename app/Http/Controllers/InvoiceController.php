<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Imports\InvoiceImport;
use App\Imports\NotHeaderInvoice;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EnvoiceNoHeaderImport;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;

class InvoiceController extends Controller
{
    public function export()
    {
        return view('invoice.export');
    }
    public function import()
    {
        return view('invoice.import');
    }

    public function importStore(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:csv,xlsx,txt'
        ]);

        // $file = $request->file('file');

        // verifica si se ha subido un archivo Excel
        if (!isset($_FILES['file']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
            die('No se ha seleccionado un archivo Excel.');
        }
        // obtenemos la ruta temporal del archivo subido
        $excelFilePath = $_FILES['file']['tmp_name'];

        // nombres de las columnas del encabezado
        $expectedHeaders = array('serie', 'base', 'igv', 'total', 'created_at');
        // carga el archivo Excel
        $spreadsheet = IOFactory::load($excelFilePath);

        // obtiene la hoja activa del archivo
        $worksheet = $spreadsheet->getActiveSheet();

        // obtiene la primera fila del archivo
        $firstRow = $worksheet->getRowIterator()->current();

        // obtiene los nombres de las celdas de la primera fila
        $headerNames = [];
        foreach ($firstRow->getCellIterator() as $cell) {
            $headerNames[] = $cell->getValue();
        }
        // verifica si los nombres de las celdas de la primera fila coinciden con los nombres esperados
        if ($headerNames === $expectedHeaders) {
            // importar el archivo
            Excel::import(new InvoiceImport, $excelFilePath);
            return redirect()->back()->with('success', 'Excel ó CSV con encabezado importado correctamente');
        } else {
            // el archivo no tiene los encabezados esperados
            Excel::import(new EnvoiceNoHeaderImport, $excelFilePath);
            return redirect()->back()->with('success', 'Excel ó CSV sin encabezado importado correctamente');
        }
        // return Excel::toCollection(new InvoiceImport, $file); //para verificar que tipo de datos nos trae y su presentación
        // Excel::import(new InvoiceImport, $file);
        // return "success";
    }

}
