<x-layout-admin>
    <x-slot name="header"></x-slot>

    <html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Edit Data Unit Pendidikan</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-gray-100">
        <div class="flex h-screen">
            <!-- Main Content -->
            <main class="flex-1 p-6">
                <div class="bg-white p-6 rounded shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Edit Data Unit Pendidikan</h2>
                    <form action="{{ route('admin.update', $unitpendidikan->idunitpendidikan) }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center space-x-4">
                                <label for="nama_unit" class="text-sm font-medium text-gray-700 w-1/4">Unit Pendidikan</label>
                                <select id="nama_unit" name="nama_unit" class="w-3/4 px-4 py-2 border rounded-md">
                                    <option value="TK" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'TK' ? 'selected' : '' }}>TK</option>
                                    <option value="SD" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'SD' ? 'selected' : '' }}>SD</option>
                                    <option value="SMP" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'SMP' ? 'selected' : '' }}>SMP</option>
                                    <option value="SMA" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'SMA' ? 'selected' : '' }}>SMA</option>
                                    <option value="TPQ" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'TPQ' ? 'selected' : '' }}>TPQ</option>
                                    <option value="PONDOK" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'PONDOK' ? 'selected' : '' }}>PONDOK</option>
                                    <option value="MADIN" {{ old('nama_unit', $unitpendidikan->nama_unit) == 'MADIN' ? 'selected' : '' }}>MADIN</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div class="flex items-center space-x-4">
                                <label for="kategori" class="text-sm font-medium text-gray-700 w-1/4">Kategori</label>
                                <select id="kategori" name="kategori" class="w-3/4 px-4 py-2 border rounded-md">
                                    <option value="FORMAL" {{ old('kategori', $unitpendidikan->kategori) == 'FORMAL' ? 'selected' : '' }}>FORMAL</option>
                                    <option value="NON FORMAL" {{ old('kategori', $unitpendidikan->kategori) == 'NON FORMAL' ? 'selected' : '' }}>NON FORMAL</option>
                                    <option value="EXTRA" {{ old('kategori', $unitpendidikan->kategori) == 'EXTRA' ? 'selected' : '' }}>EXTRA</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 mt-4">
                            <div class="flex items-center space-x-4">
                                <label for="status_unit" class="text-sm font-medium text-gray-700 w-1/4">Status Unit</label>
                                <select id="status_unit" name="status_unit" class="w-3/4 px-4 py-2 border rounded-md">
                                    <option value="AKTIF" {{ old('status_unit', $unitpendidikan->status_unit) == 'AKTIF' ? 'selected' : '' }}>AKTIF</option>
                                    <option value="NON AKTIF" {{ old('status_unit', $unitpendidikan->status_unit) == 'NON AKTIF' ? 'selected' : '' }}>NON AKTIF</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4 mt-6">
                            <!-- Tombol kembali -->
                            <a href="{{ route('admin.manage-unit-pendidikan') }}" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 inline-flex items-center">
                                <i class="fas fa-arrow-left mr-2"></i>Kembali
                            </a>
                            <!-- Tombol simpan -->
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </body>
    </html>
</x-layout-admin>
