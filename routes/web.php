<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

require __DIR__ . '/api.php';
require __DIR__ . '/auth-admin.php';
require __DIR__ . '/admin-auth.php';
require __DIR__ . '/tupusat-auth.php';
require __DIR__ . '/tuunit-auth.php';
