<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\Auth\UnitPendidikanController;
use App\Http\Controllers\Admin\Auth\DashboardController;
use App\Http\Controllers\Admin\Auth\JenisPembayaranController;
use App\Http\Controllers\AdminProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', action: [DashboardController::class, 'showUser'])->name(name: 'admin.dashboard')->middleware(['auth:admin', 'verified']);
Route::get('/dashboard', function () {
    return redirect('/admin/dashboard');
});

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name(name: 'admin.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin', 'verified')->group(function () {

    Route::get('/dashboard', action: [DashboardController::class, 'showUser'])->name(name: 'admin.dashboard');

    Route::get('/manage-biaya', action: function () {
        return view('admin.manage-biaya');
    })->name('admin.manage-biaya');

    Route::get('/manage-data-siswa', action: function () {
        return view('admin.manage-data-siswa');
    })->name('admin.manage-data-siswa');

    Route::middleware('auth')->group(function () {
        Route::get('/create-jenis-pembayaran', action: [JenisPembayaranController::class, 'create'])->name('admin.create-jenis-pembayaran');
        Route::get('/manage-jenis-pembayaran', action: [JenisPembayaranController::class, 'showData'])->name('admin.manage-jenis-pembayaran');
        Route::get('/tagihan-jenis-pembayaran', action: [JenisPembayaranController::class, 'showData'])->name('admin.tagihan-jenis-pembayaran');
        Route::get('/laporan-jenis-pembayaran', action: [JenisPembayaranController::class, 'showData'])->name('admin.laporan-jenis-pembayaran');
        Route::post('/jenis-pembayaran', action: [JenisPembayaranController::class, 'submit'])->name('admin.submit');
        Route::get('/admin/search', [JenisPembayaranController::class, 'search']);
        Route::get('/admin/filter-jenis-pembayaran', [JenisPembayaranController::class, 'filterData'])->name('admin.filter-jenis-pembayaran');
        Route::post('/create-jenis-pembayaran', action: [JenisPembayaranController::class, 'store'])->name('admin.create-jenis-pembayaran-submit');
        Route::get('/edit-jenis-pembayaran/{id}', [JenisPembayaranController::class, 'editData'])->name('admin.edit-jenis-pembayaran');

        Route::post('/update-jenis-pembayaran/{id}', [JenisPembayaranController::class, 'updateData'])->name('admin.update-jenis-pembayaran');
    });
    Route::get('/manage-kelas', action: function () {
        return view('admin.manage-kelas');
    })->name('admin.manage-kelas');

    Route::get('/create-kelas', action: function () {
        return view('admin.create-kelas');
    })->name('admin.create-kelas');

    Route::get('/edit-kelas', action: function () {
        return view('admin.edit-kelas');
    })->name('admin.edit-kelas');

    Route::get('/perpindahan-kelas', action: function () {
        return view('admin.perpindahan-kelas');
    })->name('admin.perpindahan-kelas');

    Route::get('/update-kelas', action: function () {
        return view('admin.update-kelas');
    })->name('admin.update-kelas');

    Route::get('/manage-tahun-ajaran', action: function () {
        return view('admin.manage-tahun-ajaran');
    })->name('admin.manage-tahun-ajaran');


    Route::middleware('auth')->group(callback: function () {
        Route::get('/manage-user', [UserController::class, 'indexuser'])->name('admin.manage-user');
        Route::get('/create-user', [UserController::class, 'createuser'])->name('admin.create-user');
        Route::post('/submit-user', [UserController::class, 'submituser'])->name('admin.submitUser');
        Route::get('/edit-user/{id}', action: [UserController::class, 'edituser'])->name('admin.update-user');
        Route::post('/update-user/{id}', [UserController::class, 'updateuserr'])->name('admin.updateuserrr');

        Route::get('/delete-user/{id}', [UserController::class, 'deleteuserr'])->name('admin.deleteuserrr');
    });

    Route::middleware('auth')->group(callback: function () {
        Route::get('/profile', action: [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::patch('/profile', action: [AdminProfileController::class, 'update'])->name('admin.profile.update');
        Route::delete('/profile', action: [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/manage-unit-pendidikan', [UnitPendidikanController::class, 'indexunit'])->name('admin.manage-unit-pendidikan');
        Route::get('/create-unit-pendidikan', [UnitPendidikanController::class, 'createunit'])->name('admin.create-manage-unit-pendidikan');
        Route::post('/submit-unit-pendidikan', [UnitPendidikanController::class, 'submitunit'])->name(name: 'admin.submitUnit');
        Route::get('/edit-unit-pendidikan/{id}', [UnitPendidikanController::class, 'editunit'])->name('admin.edit-manage-unit-pendidikan');
        Route::post('/update-unit-pendidikan/{id}', [UnitPendidikanController::class, 'updateunit'])->name('admin.update');

        Route::get('/delete-unit-pendidikan/{id}', [UnitPendidikanController::class, 'deleteunit'])->name('admin.delete');
    });


    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});