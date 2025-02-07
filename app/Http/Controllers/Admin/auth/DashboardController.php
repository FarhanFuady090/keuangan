<?php

namespace App\Http\Controllers\Admin\auth;

use App\Models\Kelas;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{


    public function showUser()
    {
        // total user
        $users = User::count();

        $roleAdmin = User::where('role', '=', 'admin')->count();
        $roleTuunit = User::where('role', '=', 'tuunit')->count();
        $roleTupusat = User::where('role', '=', 'tupusat')->count();

        $listOfAllRole = [
            "admin" => $roleAdmin,
            "tuunit" => $roleTuunit,
            "tupusat" => $roleTupusat,
        ];

        $nama_unitTk = User::where('nama_unit', '=', 'TK')->count();
        $nama_unitSd = User::where('nama_unit', '=', 'SD')->count();
        $nama_unitSmp = User::where('nama_unit', '=', 'SMP')->count();
        $nama_unitSma = User::where('nama_unit', '=', 'SMA')->count();
        $nama_unitMadin = User::where('nama_unit', '=', 'MADIN')->count();
        $nama_unitPondok = User::where('nama_unit', '=', 'PONDOK')->count();
        $nama_unitTpq = User::where('nama_unit', '=', 'TPQ')->count();

        $listOfAllUnit = [
            "TK" => $nama_unitTk,
            "SD" => $nama_unitSd,
            "SMP" => $nama_unitSmp,
            "SMA" => $nama_unitSma,
            "MADIN" => $nama_unitMadin,
            "PONDOK" => $nama_unitPondok,
            "TPQ" =>  $nama_unitTpq,
        ];

        // dd($listOfAllUnit);

        return view('admin.dashboard', compact(
            'users',
            'listOfAllRole',
            'listOfAllUnit',
        ),);
    }
}
