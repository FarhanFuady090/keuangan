<?php

use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\admin\Auth\RegisteredUserController;
use App\Http\Controllers\AdminProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/dashboard', action: function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/manage-biaya', action: function () {
        return view('admin.manage-biaya');
    })->name('admin.manage-biaya');

    Route::get('/manage-data-siswa', action: function () {
        return view('admin.manage-data-siswa');
    })->name('admin.manage-data-siswa');

    Route::get('/manage-jenis-pembayaran', action: function () {
        return view('admin.manage-jenis-pembayaran');
    })->name('admin.manage-jenis-pembayaran');

    Route::get('/manage-kelas', action: function () {
        return view('admin.manage-kelas');
    })->name('admin.manage-kelas');

    Route::get('/create-kelas', action: function () {
        return view('admin.create-kelas');
    })->name('admin.create-kelas');

    Route::get(uri: '/edit-kelas', action: function () {
        return view('admin.edit-kelas');
    })->name('admin.edit-kelas');

    Route::get('/perpindahan-kelas', action: function () {
        return view('admin.perpindahan-kelas');
    })->name('admin.perpindahan-kelas');

    Route::get('/manage-tahun-ajaran', action: function () {
        return view('admin.manage-tahun-ajaran');
    })->name('admin.manage-tahun-ajaran');

    Route::get('/manage-unit-pendidikan', action: function () {
        return view('admin.manage-unit-pendidikan');
    })->name('admin.manage-unit-pendidikan');

    Route::get('/manage-user', action: function () {
        return view('admin.manage-user');
    })->name('admin.manage-user');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', action: [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::patch('/profile', action: [AdminProfileController::class, 'update'])->name('admin.profile.update');
        Route::delete('/profile', action: [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
    });


    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});
