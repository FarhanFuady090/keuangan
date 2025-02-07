<x-layout-admin>
    <x-slot name="header">

    </x-slot>

    <body class="bg-gray-100">
        <div class="flex h-screen">
         <!-- Main Content -->
         <div class="flex-1 p-6">
          <div class="flex justify-between items-center mb-6">
           <div class="text-2xl font-bold">
            Manajemen Unit Pendidikan
           </div>
          </div>
          <div class="bg-white p-4 rounded shadow">
           <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-4">
             <a href="{{ route('admin.create-manage-unit-pendidikan') }}">
                          <x-primary-button class="bg-green-500 text-white px-4 py-2 rounded flex items-center">
                          <i class="fas fa-plus mr-2">
                          </i>
                              {{ __('Tambah Data') }}
                          </x-primary-button>
              </a>
            </div>
           </div>
           <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-2">
             <label class="text-sm" for="entries">Show</label>
             <select class="border border-gray-300 rounded p-2" id="entries">
              <option>10</option>
              <option>20</option>
              <option>30</option>
              <option>40</option>
              <option>50</option>
             </select>
             <label class="text-sm" for="entries">entries</label>
            </div>
            <div class="flex items-center space-x-2 w-full max-w-lg">
             <label class="text-sm" for="search">Cari :</label>
             <input class="border border-gray-300 rounded p-2 flex-grow" id="search" type="text"/>
            </div>
           </div>
           <div class="overflow-x-auto">
           <table class="min-w-full bg-white border border-gray-300">
              <tr class="bg-green-500 text-white text-center">
               <th class="py-2 px-4 border-r border-gray-300">No.</th>
               <th class="py-2 px-4 border-r border-gray-300">Nama Unit Pendidikan</th>
               <th class="py-2 px-4 border-r border-gray-300">Kategori</th>
               <th class="py-2 px-4 border-r border-gray-300">Status</th>
               <th class="py-2 px-4 border-r border-gray-300">Aksi</th>
              </tr>
              @foreach ($unitpendidikan as $dataa)
              <tr class="bg-white text-black text-center border-b border-gray-300">
               <td class="py-2 px-4 border-r border-gray-300">{{ $loop->iteration }}</td>
               <td class="py-2 px-4 border-r border-gray-300">{{ $dataa->nama_unit }}</td>
               <td class="py-2 px-4 border-r border-gray-300">{{ $dataa->kategori }}</td>
               <td class="py-2 px-4 border-r border-gray-300">{{ $dataa->status_unit }}</td>
               <td>
                  <a href="{{ route('admin.edit-manage-unit-pendidikan', $dataa->idunitpendidikan) }}">Edit</a>

                  <form action="{{ route('admin.delete', $dataa->idunitpendidikan) }}" method="post">
                      @csrf
                      <a href="{{ route('admin.delete', $dataa->idunitpendidikan) }}">Hapus</a>
                  </form>
               </td>
              </tr>
              @endforeach
          </table>
           </div>
          </div>
         </div>
        </div>
       </body>
</x-layout-admin>
