<?php

use App\Http\Controllers\IklanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserPembayaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ================= Admin Routes =================
Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'middleware' => ['auth', IsAdmin::class],
], function () {
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('iklan', IklanController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('saran', KritikSaranController::class);
});

// ================= User Routes =================
Route::group([
    'prefix'     => 'user',
    'as'         => 'user.',
    'middleware' => ['auth'],
], function () {
    // Dashboard utama user
    Route::get('/', [UserDashboardController::class, 'index'])->name('dashboard');

    // Halaman home user
    Route::get('/home', function () {
        return view('users.home.index');
    })->name('home');

    // Daftar pembayaran
    Route::get('/pembayaran', [App\Http\Controllers\UserPembayaranController::class, 'index'])
        ->name('pembayaran.index');

    // Riwayat pembayaran
    Route::get('/pembayaran/riwayat', [App\Http\Controllers\UserPembayaranController::class, 'riwayat'])
        ->name('pembayaran.riwayat');

    // Detail pembayaran
    Route::get('/pembayaran/{id}/detail', [UserPembayaranController::class, 'detail'])
    ->name('pembayaran.detail');

    // Bayar
    Route::post('/pembayaran/{id}/bayar', [App\Http\Controllers\UserPembayaranController::class, 'bayar'])
        ->name('pembayaran.bayar');
});
