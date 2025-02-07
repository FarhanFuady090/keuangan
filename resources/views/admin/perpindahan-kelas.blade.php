<x-layout-admin>
    <x-slot name="header">

    </x-slot>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Perpindahan Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleSelectAll(source) {
            const checkboxes = document.querySelectorAll('.student-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
        }

        function filterStudents() {
            const selectedUnit = document.getElementById('filter-nama-unit').value.toLowerCase();
            const selectedClass = document.getElementById('filter-kelas').value.toLowerCase();
            const selectedGrade = document.getElementById('filter-grade').value.toLowerCase();
            const selectedStatus = document.getElementById('filter-status').value.toLowerCase();
            const rows = document.querySelectorAll('#student-table tbody tr');

            rows.forEach(row => {
                const unitCell = row.querySelector('.student-unit').textContent.trim().toLowerCase();
                const classCell = row.querySelector('.student-class').textContent.trim().toLowerCase();
                const gradeCell = row.querySelector('.student-grade').textContent.trim().toLowerCase();
                const statusCell = row.querySelector('.student-status').textContent.trim().toLowerCase();

                if (
                    (selectedUnit === '' || unitCell.includes(selectedUnit)) &&
                    (selectedClass === '' || classCell === selectedClass) &&
                    (selectedGrade === '' || gradeCell === selectedGrade) &&
                    (selectedStatus === '' || statusCell === selectedStatus)
                ) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('filter-nama-unit').addEventListener('change', filterStudents);
            document.getElementById('filter-kelas').addEventListener('change', filterStudents);
            document.getElementById('filter-grade').addEventListener('change', filterStudents);
            document.getElementById('filter-status').addEventListener('change', filterStudents);
        });
    </script>
</head>
<body class="bg-gray-100 p-4">
    <div class="bg-white p-6 rounded shadow w-full">
        <h1 class="text-2xl font-semibold mb-4">Proses Perpindahan Kelas</h1>

        <div class="flex flex-wrap items-center mb-4 space-x-4">
            <!-- Filter Nama Unit -->
            <select id="filter-nama-unit" class="border border-gray-300 rounded px-3 py-2 text-sm">
                <option value="">Pilih Nama Unit</option>
                <option value="TK">TK</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="TPQ">TPQ</option>
                <option value="PONDOK">PONDOK</option>
                <option value="MADIN">MADIN</option>
            </select>

            <!-- Filter Kelas -->
            <select id="filter-kelas" class="border border-gray-300 rounded px-3 py-2 text-sm">
                <option value="">Pilih Kelas</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>

            <!-- Filter Grade -->
            <select id="filter-grade" class="border border-gray-300 rounded px-3 py-2 text-sm">
                <option value="">Pilih Grade</option>
                <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
            </select>

            <!-- Filter Status -->
            <select id="filter-status" class="border border-gray-300 rounded px-3 py-2 text-sm">
                <option value="">Pilih Status</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <div>
            <div class="bg-green-500 p-4 rounded-t">
                <h2 class="text-lg font-semibold text-white">Pilih Siswa yang akan Diproses</h2>
            </div>
            <div class="border p-4 rounded-b">
                <table id="student-table" class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">No.</th>
                            <th class="border p-2">NIS</th>
                            <th class="border p-2">Nama Siswa</th>
                            <th class="border p-2">Unit</th>
                            <th class="border p-2">Kelas</th>
                            <th class="border p-2">Grade</th>
                            <th class="border p-2">Status</th>
                            <th class="border p-2">
                                Pilih Semua <input type="checkbox" onclick="toggleSelectAll(this)">
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
                <div class="flex flex-wrap items-center space-x-4 mt-4">
                    <label for="filter-tujuan-unit" class="font-medium">Filter Nama Unit</label>
                    <select id="filter-tujuan-unit" class="border rounded p-2">
                        <option value="">Pilih Unit</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="TPQ">TPQ</option>
                        <option value="PONDOK">PONDOK</option>
                        <option value="MADIN">MADIN</option>
                    </select>

                    <label for="filter-tujuan-kelas" class="font-medium">Filter Kelas</label>
                    <select id="filter-tujuan-kelas" class="border rounded p-2">
                        <option value="">Pilih Kelas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

                    <label for="filter-tujuan-grade" class="font-medium">Filter Grade</label>
                    <select id="filter-tujuan-grade" class="border rounded p-2">
                        <option value="">Pilih Grade</option>
                        <option value="-">-</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>

                    <button class="bg-red-500 text-white px-4 py-2 rounded">Proses Pindah/Naik Kelas</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

</x-layout-admin>
