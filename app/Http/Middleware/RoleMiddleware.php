<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
        $user = \App\User::where('email', $request->email)->first();
        // Ambil role pengguna yang sedang login
        $userRole = Auth::user()->role; // Pastikan Anda memiliki kolom 'role' di tabel users

        if ($user->role == 'admin') {
            return redirect('admin/dashboard');
        }
        else if ($user->role == 'tupusat') {
            return redirect('tupusat/dashboard');
        }
        else if ($user->role == 'tuunit') {
            return redirect('tuunit/dashboard');
        }
        else {
            return redirect('/'); // Ganti dengan rute login Anda
        }
        return $next($request);
}
?>