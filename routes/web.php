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

Route::get('/', function () {
    return view('login');
});
Route::get('/manage-user', action: function () {
    return view(view: 'manage-user');
});
Route::get('/manage-unit-pendidikan', function () {
    return view(view: 'manage-unit-pendidikan');
});
Route::get('/manage-jenis-pembayaran', function () {
    return view(view: 'manage-jenis-pembayaran');
});
Route::get('/manage-data-siswa', action: function () {
    return view(view: 'manage-data-siswa');
});
Route::get('/manage-kelas', function () {
    return view('manage-kelas');
});
Route::get('/manage-tahun-ajaran', action: function () {
    return view(view: 'manage-tahun-ajaran');
});
Route::get('/manage-biaya', action: function () {
    return view(view: 'manage-biaya');
});