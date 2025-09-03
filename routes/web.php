<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KritikSaranController;



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
    Route::resource('kritik', KritikSaranController::class);
});
