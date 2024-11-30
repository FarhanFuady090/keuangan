<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Menampilkan form login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba untuk melakukan autentikasi
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika autentikasi berhasil, redirect ke rute yang sesuai
            return redirect()->intended('admin.manage-biaya'); // Ganti dengan rute yang sesuai
        }

        // Jika autentikasi gagal, kembalikan ke halaman sebelumnya dengan pesan kesalahan
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username')); // Hanya menyimpan input username
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan logout
        return redirect('/login'); // Redirect ke halaman login
    }
}