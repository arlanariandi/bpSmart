<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laporan Pengeluaran SPP') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        width: '5%'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'noted',
                        name: 'noted'
                    },
                    {
                        data: 'officer',
                        name: 'officer'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                ]
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.expenditureprint') }}" target="_black"
                    class="bg-rose-500 hover:bg-rose-800 text-white font-bold py-2 px-4 rounded shadow-lg">
                    Cetak
                </a>
            </div>
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead class="text-left">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Besarnya</th>
                                <th>Detail</th>
                                <th>Petugas</th>
                                <th>Ket Input</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
