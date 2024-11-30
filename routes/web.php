<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\Auth\LoginController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/manage-biaya', function () {
//         return view('admin.manage-biaya');
//     })->name('admin.manage-biaya');
// });
Route::get('/admin/manage-data-siswa', function () {
    return view('admin.manage-data-siswa'); // Ganti dengan view yang sesuai
})->middleware('auth');
Route::get('/admin/manage-jenis-pembayaran', function () {
    return view('admin.manage-jenis-pembayaran'); // Ganti dengan view yang sesuai
})->middleware('auth');
Route::get('/admin/manage-kelas', function () {
    return view('admin.manage-kelas'); // Ganti dengan view yang sesuai
})->middleware('auth');
Route::get('/admin/manage-tahun-ajaran', function () {
    return view('admin.manage-tahun-ajaran'); // Ganti dengan view yang sesuai
})->middleware('auth');
Route::get('/admin/manage-unit-pendidikan', function () {
    return view('admin.manage-unit-pendidikan'); // Ganti dengan view yang sesuai
})->middleware('auth');
Route::get('/admin/manage-user', function () {
    return view('admin.manage-user'); // Ganti dengan view yang sesuai
})->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
