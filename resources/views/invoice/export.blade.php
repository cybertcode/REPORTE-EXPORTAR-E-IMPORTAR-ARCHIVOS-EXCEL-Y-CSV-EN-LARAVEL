<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Exportar facturas
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @livewire('filter-invoices')
            </div>
        </div>
    </div>
</x-app-layout>
