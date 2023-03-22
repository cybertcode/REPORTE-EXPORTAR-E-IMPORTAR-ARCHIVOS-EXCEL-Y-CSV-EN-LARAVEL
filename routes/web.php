<?php

use App\Http\Controllers\InvoiceController;
use App\Imports\InvoiceImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('invoice/export', [InvoiceController::class, 'export'])->name('invoice.export');
    Route::get('invoice/import', [InvoiceController::class, 'import'])->name('invoice.import');
    Route::post('invoice/import', [InvoiceController::class, 'importStore'])->name('invoice.importStore');
    Route::get('prueba', function () {
        return Excel::toCollection(new InvoiceImport, 'csv/test.csv');
        // return Excel::toCollection(new InvoiceImport, $file); //para verificar que tipo de datos nos trae y su presentación
    });

});
