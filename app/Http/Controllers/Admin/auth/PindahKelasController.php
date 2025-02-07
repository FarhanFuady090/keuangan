<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\PindahKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PindahKelasController extends Controller
{
    public function showData()
    {
        $all_data = DB::table('pindahkelas')
            ->join('siswas', 'pindahkelas.siswa_id', '=', 'siswas.id')
            ->join('siswas', 'pindahkelas.siswa_nis', '=', 'siswas.nis')
            ->join('siswas', 'pindahkelas.siswa_nisn', '=', 'siswas.nisn')
            ->join('siswas', 'pindahkelas.siswa_nama', '=', 'siswas.nama')
            ->join('pindahkelas.kelas_id', '=', 'kelas.id')
            ->join('kelas', 'pindahkelas.kelas_nama_kelas', '=', 'kelas.nama_kelas')
            ->select('siswas.*', 'kelas.*')
            ->get();

        $filtered_pindahkelas = DB::table('pindahkelas')
            ->join('siswas', 'pindahkelas.siswa_id', '=', 'siswas.id')
            ->join('siswas', 'pindahkelas.siswa_nis', '=', 'siswas.nis')
            ->join('siswas', 'pindahkelas.siswa_nisn', '=', 'siswas.nisn')
            ->join('siswas', 'pindahkelas.siswa_nama', '=', 'siswas.nama')
            ->join('kelas', 'pindahkelas.kelas_id', '=', 'kelas.id')
            ->where('pindahkelas.kelas_id', '!=', 'kelas.id')
            ->select('pindahkelas.*', 'siswas.*', 'kelas.*')
            ->join('kelas', 'pindahkelas.kelas_nama_kelas', '=', 'kelas.nama_kelas')
            ->select('siswas.*', 'kelas.*')
            ->get();

        return view('admin.perpindahan-kelas', compact('all_data', 'filtered_pindahkelas'));
    }
}
