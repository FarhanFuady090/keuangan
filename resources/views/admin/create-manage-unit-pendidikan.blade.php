<x-layout-admin>
    <x-slot name="header">

    </x-slot>

    <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Manajemen Unit Pendidikan
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="flex h-screen">
   <!-- Main Content -->
    <main class="flex-1 p-6">
     <div class="bg-white p-6 rounded shadow-md">
      <h2 class="text-xl font-semibold mb-4">
       Tambah Unit Pendidikan
      </h2>
      <form action="{{ route('admin.submitUnit') }}" method="POST">
        @csrf
       <div class="grid grid-cols-1 gap-4">
        <div class="flex items-center">
         <label for="nama_unit" class="text-sm font-medium text-gray-700 w-1/4">Unit Pendidikan</label>
         <select id="nama_unit" name="nama_unit" class="w-3/4 px-4 py-2 border rounded-md focus:ring focus:ring-green-300">
             <option value="">Pilih Pendidikan</option>
             <option value="TK">TK</option>
             <option value="SD">SD</option>
             <option value="SMP">SMP</option>
             <option value="SMA">SMA</option>
             <option value="TPQ">TPQ</option>
             <option value="PONDOK">PONDOK</option>
             <option value="MADIN">MADIN</option>
         </select>
        </div>

        <div class="flex items-center">
         <label class="w-1/3">Kategori </label>
         <select class="w-2/3 p-2 border rounded" name="kategori" class="form-control">
         <option value="">Pilih</option>
         <option value="FORMAL">Formal</option>
         <option value="EXTRA">EXTRA</option>
         <option value="NON FORMAL">NON FORMAL</option>
         </select>
        </div>
       </div>

       <div class="flex justify-end mt-4">
        <a href="{{ route('admin.manage-unit-pendidikan') }}">
        <button class="bg-red-500 text-white px-4 py-2 rounded mr-2" type="button">Kembali</button>
        </a>

        <a href="{{ route('admin.manage-unit-pendidikan') }}">
        <button class="bg-green-500 text-white px-4 py-2 rounded" type="submit">Simpan</button>
        </a>
       </div>

      </form>
     </div>
    </main>
   </div>
  </div>
 </body>
</html>
</x-layout-admin>
