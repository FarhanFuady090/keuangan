<x-layout-admin>
    <x-slot name="header">


    </x-slot>
    <style>
        .w-fixed-small {
    width: 60px; /* Role */
}

.w-fixed-medium {
    width: 100px; /* Unit */
}

    </style>
    <div class="bg-white p-6 rounded-lg shadow-md w-full" style="min-height: 700px;">
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">Manage User</h2>

        <!-- Filter and Add User Section -->
        <div class="flex flex-wrap gap-4 mb-6">
            <div class="w-full sm:w-1/4">
                <select id="role" name="role" class="block w-full p-3 border border-gray-300 rounded-lg text-sm">
                    <option value="all">Pilih Peran User</option>
                    <option value="admin">Admin</option>
                    <option value="tupusat">Tu Pusat</option>
                    <option value="tuunit">Tu Unit</option>
                </select>
            </div>

            <div class="w-full sm:w-1/2">
                <input type="text" id="search" class="block w-full p-3 border border-gray-300 rounded-lg text-sm" placeholder="Cari">
            </div>
        </div>

        <div class="flex justify-between items-center gap-4 mb-6">
            <div class="flex items-center gap-3">
                <label for="show" class="text-sm font-medium">Show:</label>
                <select id="show" name="show" class="block w-20 p-3 border border-gray-300 rounded-lg text-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>

            <form action="{{ route('admin.create-user') }} ">
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition">
                   + Tambah User
                </button>
            </form>
        </div>

        <div class="mb-4">
            <span id="totalItems" class="text-sm font-medium text-gray-700">Total Data: {{ $users->count() }}</span>
        </div>


        @if ($users->isEmpty())
        <div class="p-4 bg-yellow-200 text-yellow-800 rounded-lg mb-4">
            <p>Maaf, saat ini tidak ada data pengguna yang tersedia.</p>
        </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full h-10 table-auto border-collapse border border-gray-300 text-xs" style="table-layout: fixed;">
                <thead>
                    <tr class="bg-green-500 text-black">
                        <th class="py-2 px-4 border-b border-r border-gray-300 text-left" colspan="10">
                            Data User
                        </th>
                    </tr>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium text-center w-12">No.</th>
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-20">Nama</th>
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-20">Email</th>
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-32">No. Telp</th>
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-32">Username</th>
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-36">Password</th>
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-16">Peran</th> <!-- Lebar lebih kecil -->
                        <th class="border border-gray-300 px-1 py-0.5 text-xs font-medium w-20">Unit</th> <!-- Lebar lebih kecil -->
                        <th colspan="2" class="border border-gray-300 px-1 py-0.5 text-xs font-medium text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="userTable">
                    @foreach ($users as $item)
                    <tr class="user-row hover:bg-gray-50" data-role="{{ strtolower($item->role) }}">
                        <td class="border border-gray-300 px-1 py-0.5 text-center text-xs ">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs truncate">{{ $item->name }}</td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs truncate">{{ $item->email }}</td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs truncate">{{ $item->no_telp }}</td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs truncate">{{ $item->username }}</td>

                        <td class="border border-gray-300 px-2 py-1 text-xs">
                            <div class="flex items-center space-x-2">
                                <!-- Input Password -->
                                <input type="password"
                                       id="password-{{ $item->id }}"
                                       value="{{ $item->password }}"
                                       class="password-input w-full px-2 py-1 border border-gray-300 rounded bg-gray-50 text-gray-700 truncate"
                                       readonly>

                                <!-- Tombol Toggle Password -->
                                <button type="button"
                                        onclick="togglePassword({{ $item->id }})"
                                        class="p-1 focus:outline-none">
                                    <i class="fas fa-eye text-black" id="eye-icon-{{ $item->id }}"></i>
                                </button>
                            </div>
                        </td>


                        <td class="border border-gray-300 px-1 py-0.5 text-xs truncate text-center">{{ $item->role }}</td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs truncate text-center">{{ $item->nama_unit }}</td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs text-center">
                            <a href="{{ route('admin.update-user', $item->id) }}"
                                class="inline-flex items-center px-3 py-1.5 bg-yellow-500 text-white text-xs font-medium rounded hover:bg-yellow-900 transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-1.036L6.75 17.75a2 2 0 11-2.829-2.829L13.5 4.5m1.061-1.061L17.5 7.5m-3.061-4.061a2 2 0 113.536 1.536L8.75 16.25a2 2 0 11-2.829-2.829L13.5 4.5m1.061-1.061z" />
                                </svg>
                                Edit
                            </a>
                        </td>
                        <td class="border border-gray-300 px-1 py-0.5 text-xs text-center">
                            <a href="{{ route('admin.deleteuserrr', $item->id) }}"
                                class="inline-flex items-center px-3 py-1.5 bg-red-500 text-white text-xs font-medium rounded hover:bg-red-600 transition duration-150 ease-in-out"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2v6m-6 4h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />
                                </svg>
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search');
            const showDropdown = document.getElementById('show');
            const roleDropdown = document.getElementById('role');
            const tableRows = document.querySelectorAll('.user-row');
            const totalItemsElement = document.getElementById('totalItems');

            function updateTotalItems() {
                const visibleRows = Array.from(tableRows).filter(row => row.style.display !== 'none');
                totalItemsElement.textContent = `Total Data: ${visibleRows.length}`;
            }

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.toLowerCase();
                tableRows.forEach(row => {
                    const nameCell = row.querySelector('td:nth-child(2)');
                    const nameText = nameCell ? nameCell.textContent.toLowerCase() : '';
                    if (nameText.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
                updateTotalItems();
            });

            showDropdown.addEventListener('change', function () {
                const numberOfRows = parseInt(showDropdown.value, 10);
                tableRows.forEach((row, index) => {
                    if (index < numberOfRows) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
                updateTotalItems();
            });

            roleDropdown.addEventListener('change', function () {
                const selectedRole = roleDropdown.value.toLowerCase();
                tableRows.forEach(row => {
                    const roleCell = row.getAttribute('data-role');
                    if (selectedRole === 'all' || roleCell.includes(selectedRole)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
                updateTotalItems();
            });

            updateTotalItems();
        });

        function togglePassword(userId) {
            const passwordInput = document.getElementById(`password-${userId}`);
            const eyeIcon = document.getElementById(`eye-icon-${userId}`);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</x-layout-admin>
