<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\unitpendidikan;
use App\Models\Admin;
use App\Models\tupusat;
use App\Models\tuunit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function indexuser()
    {
        $users = User::all(); // Mengambil semua data dari model User
        return view('admin.manage-user', compact('users')); // Mengirimkan data ke view
    }

    function createuser()
    {
        return view('admin.create-user');
    }


    //update data
    public function edituser($id)
    {
        $users = User::findorFail($id); // Mendapatkan data user berdasarkan ID
        return view('admin.update-user', compact('users'));
    }
    public function updateuserr(Request $request, $id)
    {
        $users = User::findorFail($id);
        $users->update($request->all());
        return redirect()->route('admin.manage-user', $id)->with('success', 'Data berhasil di edit');
    }

    //delete data
    public function deleteuserr($id)
    {
        $users = User::findorFail($id);
        $users->delete();
        return redirect()->route('admin.manage-user', $id)->with('success', 'Data berhasil di hapus');
    }

    // Fungsi untuk menyimpan data user
    public function submituser(Request $request)
    {
        // Validasi request (hapus validasi user_id karena akan di-generate otomatis)
        $validated = $request->validate([
            'nama_user' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'no_telp' => 'required|numeric',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6',
            'peran_user' => 'nullable|string|in:admin,tupusat,tuunit',
            'nama_unit' => 'nullable|string',
        ]);

        // Pastikan unit pendidikan valid jika role = tuunit
        if ($validated['peran_user'] === 'tuunit' && empty($validated['nama_unit'])) {
            return redirect()->back()->withErrors(['nama_unit' => 'Unit Pendidikan harus dipilih jika peran adalah TU Unit.']);
        }

        DB::transaction(function () use ($validated) {
            // Simpan user
            $users = User::create([
                'name' => $validated['nama_user'],
                'email' => $validated['email'],
                'username' => $validated['username'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['peran_user'],
                'no_telp' => $validated['no_telp'],
                'nama_unit' => $validated['nama_unit'],
            ]);

            // Simpan data berdasarkan role
            switch ($validated['peran_user']) {
                case 'admin':
                    $admin = Admin::create([
                        'user_id' => $users->id,
                        'name' => $validated['nama_user'],
                        'email' => $validated['email'],
                        'password' => bcrypt($validated['password']),
                        'role' => $validated['peran_user'],
                    ]);
                    break;

                case 'tupusat':
                    Tupusat::create([
                        'user_id' => $users->id,
                        'name' => $validated['nama_user'],
                        'email' => $validated['email'],
                        'password' => bcrypt($validated['password']),
                        'role' => $validated['peran_user'],
                    ]);
                    break;

                case 'tuunit':
                    Tuunit::create([
                        'user_id' => $users->id,
                        'name' => $validated['nama_user'],
                        'email' => $validated['email'],
                        'password' => bcrypt($validated['password']),
                        'role' => $validated['peran_user'],
                    ]);
                    break;
            }
        });

        return redirect()->route('admin.manage-user')->with('success', 'User berhasil ditambahkan!');
    }
}
