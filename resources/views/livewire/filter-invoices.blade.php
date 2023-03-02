<!--
  This example requires Tailwind CSS v2.0+

  The alpine.js code is *NOT* production ready and is included to preview
  possible interactivity
-->
<div class="py-10 bg-gray-100">
    <div class="mx-auto max-w-7xl">

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Users</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name,
                        title, email and role.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button type="button"
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                        user</button>
                </div>
            </div>
            <div
                class="mt-8 -mx-4 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Serie
                            </th>
                            <th scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">
                                Correlativo</th>
                            <th scope="col"
                                class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">
                                Base</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">IGV
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Fecha
                            </th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Acciones</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($invoices as $invoice)
                            <tr>
                                <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">{{ $invoice->id }}
                                </td>
                                <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">{{ $invoice->serie }}
                                </td>
                                <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">
                                    {{ $invoice->correlative }}
                                </td>
                                <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">S/ {{ $invoice->base }}
                                </td>
                                <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">S/ {{ $invoice->igv }}
                                </td>
                                <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">
                                    S/ {{ $invoice->total }}
                                </td>
                                <td class="px-3 py-4 text-sm text-gray-500">{{ $invoice->created_at->format('d-m-Y') }}
                                </td>
                                <td class="py-4 pl-3 pr-4 text-sm font-medium text-right sm:pr-6">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar<span
                                            class="sr-only">, Lindsay Walton</span></a>
                                </td>
                            </tr>

                        @empty
                        @endforelse



                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            {{ $invoices->links() }}
        </div>
    </div>

</div>
