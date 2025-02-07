<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use App\Models\UnitPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UnitPendidikanController extends Controller
{
    function indexunit()
    {
        $unitpendidikan = UnitPendidikan::all();
        return view('admin.manage-unit-pendidikan', compact('unitpendidikan'));
    }

    function createunit()
    {
        return view("admin.create-manage-unit-pendidikan");
    }

    function submitunit(Request $request)
    {
        $unitpendidikan = new UnitPendidikan();
        $unitpendidikan->nama_unit = $request->nama_unit;
        $unitpendidikan->kategori = $request->kategori;
        // Set status_unit default ke 'aktif' jika tidak ada dalam request
        $unitpendidikan->status_unit = $request->status_unit ?? 'aktif';
        $unitpendidikan->save();

        return redirect()->route('admin.manage-unit-pendidikan');
    }

    function editunit($idunitpendidikan)
    {
        $unitpendidikan = UnitPendidikan::find($idunitpendidikan);
        return view('admin.edit-manage-unit-pendidikan', compact('unitpendidikan'));
    }

    function updateunit(Request $request, $idunitpendidikan)
    {
        $unitpendidikan = UnitPendidikan::find($idunitpendidikan);
        $unitpendidikan->nama_unit = $request->nama_unit;
        $unitpendidikan->kategori = $request->kategori;
        $unitpendidikan->status_unit = $request->status_unit;
        $unitpendidikan->update();


        return redirect()->route('admin.manage-unit-pendidikan');
    }

    function deleteunit($idunitpendidikan)
    {
        $unitpendidikan = UnitPendidikan::find($idunitpendidikan);
        $unitpendidikan->delete();
        return redirect()->route('admin.manage-unit-pendidikan')->with('success', 'Data Unit Pendidikan berhasil dihapus.');
    }
}
