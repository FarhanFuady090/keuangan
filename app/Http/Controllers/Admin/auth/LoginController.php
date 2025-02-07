<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    public function store(AdminRequest $request): RedirectResponse
    {
        $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(route('admin.dashboard', absolute: false));
        if (Auth::attempt()) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard', absolute: false));
        } else {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.login', absolute: true));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard(name: 'admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended(route('admin.login'));
    }
}
