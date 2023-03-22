<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Importar facturas
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
                @include('invoice.alerts')
            @endif
            <hr>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white px-4 py-5 sm:px-6">
                    <form action="{{ route('invoice.importStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-validation-errors class="mb-4" />
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Seleccione el archivo para
                                importar</h3>
                            <input type="file" name="file" id="" accept=".csv, .xlsx">
                        </div>
                        <x-button class="mt-4">Importar archivo</x-button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
