<x-layout-admin>
    <x-slot name="header">

    </x-slot>
    <html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Manajemen Data Jenis Pembayaran
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="flex flex-col h-screen">
   <!-- Main Content -->
   <div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
     <h2 class="text-2xl font-bold">
      Manajemen Data Jenis Pembayaran
     </h2>
     <div class="flex items-center">
      <p class="mr-4">
     </div>
    </div>
    <div class="bg-white p-6 rounded shadow-md">
     <h2 class="text-xl font-bold mb-4 bg-green-500 text-white p-2 rounded">
      Tambah Data Jenis Pembayaran
     </h2>
     <form method="POST" action="{{ route('admin.create-jenis-pembayaran-submit') }}">
        @csrf
      <div class="grid grid-cols-1 gap-4">
       <div class="flex items-center">
        <label class="w-1/4" for="nama_pembayaran">
         Nama Pembayaran
        </label>
        <input class="w-3/4 p-2 border rounded" id="nama_pembayaran" name="nama_pembayaran" type="text"/>
       </div>
       <div class="flex items-center">
        <label class="w-1/4" for="tipe_pembayaran">
         Tipe Pembayaran
        </label>
        <select class="w-3/4 p-2 border rounded" id="type" name="type">
        <option>Pilih Tipe Pembayaran</option>
                            <option value="Bulanan" {{ request('type') == 'Bulanan' ? 'selected' : '' }}>Bulanan</option>
                            <option value="Semester" {{ request('type') == 'Semester' ? 'selected' : '' }}>Semester</option>
                            <option value="Bebas" {{ request('type') == 'Bebas' ? 'selected' : '' }}>Bebas</option>
        </select>
       </div>
       <div class="flex items-center">
        <label class="w-1/4" for="tahun">
         Tahun
        </label>
        <select class="w-3/4 p-2 border rounded" id="tahun" name="tahun">
        <option>Pilih Tahun</option>
                            <option value="2024" {{ request('tahun') == '2024' ? 'selected' : '' }}>2024</option>
                            <option value="2025" {{ request('tahun') == '2025' ? 'selected' : '' }}>2025</option>
                            <option value="2026" {{ request('tahun') == '2026' ? 'selected' : '' }}>2026</option>
        </select>
       </div>
       <div class="flex items-center">
        <label class="w-1/4" for="nominal">
         Nominal
        </label>
        <input class="w-3/4 p-2 border rounded" id="nominal_jenispembayaran" name="nominal_jenispembayaran" type="text"/>
       </div>
       <div class="flex items-center">
        <label class="w-1/4" for="unit">
         Unit
        </label>
        <select class="w-3/4 p-2 border rounded" id="idunitpendidikan" name="idunitpendidikan">
        <option>Pilih Unit</option>
                            <option value="1" {{ request('unitpendidikan') == '1' ? 'selected' : '' }}>TK</option>
                            <option value="2" {{ request('unitpendidikan') == '2' ? 'selected' : '' }}>SD</option>
                            <option value="3" {{ request('unitpendidikan') == '3' ? 'selected' : '' }}>SMP</option>
                            <option value="4" {{ request('unitpendidikan') == '4' ? 'selected' : '' }}>SMA</option>
                            <option value="5" {{ request('unitpendidikan') == '5' ? 'selected' : '' }}>TPQ</option>
                            <option value="6" {{ request('unitpendidikan') == '6' ? 'selected' : '' }}>MADIN</option>
                            <option value="7" {{ request('unt_pendidikan') == '7' ? 'selected' : '' }}>PONDOK</option>
        </select>
       </div>
      </div>
      <div class="flex justify-end mt-4"> 
            <a href="{{ route('admin.manage-jenis-pembayaran') }}">
       <button class="bg-red-500 text-white px-4 py-2 rounded mr-2" type="button">
        Kembali
       </button> </a>
       <button class="bg-green-500 text-white px-4 py-2 rounded" type="submit">
        Simpan
       </button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>
    </p>
</x-layout-admin>
