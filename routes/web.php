<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\UserDashboardController;
// use App\Http\Controllers\UserPembayaranController;
// use App\Http\Controllers\UserKegiatanController;
// use App\Http\Controllers\UserSaranController;






Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'middleware' => ['auth', IsAdmin::class],
], function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('saran', KritikSaranController::class);
});

Route::group([
    'prefix'     => 'user',
    'as'         => 'user.',
    'middleware' => ['auth'],
], function () {
    Route::get('/', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', function () {
        return view('users.home.index');
    })->name('home');
    // Route::resource('pembayaran', UserPembayaranController::class);
    // Route::resource('kegiatan', UserKegiatanController::class);
    // Route::resource('saran', UserSaranController::class);
});

