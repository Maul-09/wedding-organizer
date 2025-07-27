<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AkunController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\PageClientController;
use App\Http\Controllers\admin\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

    Route::get('/admin-dashboard/client/hero', [PageClientController::class, 'berandaClient'])->name('admin.page.client');
    Route::get('/admin-dashboard/client/about', [PageClientController::class, 'tentangClient'])->name('admin.page.about.client');
    Route::get('/admin-dashboard/client/kontak', [PageClientController::class, 'kontakClient'])->name('admin.page.contact.client');

    Route::get('/admin-dashboard/paket/wedding', [PackageController::class, 'weddingAdmin'])->name('admin.package.wedding');
    Route::get('/admin-dashboard/paket/prewed', [PackageController::class, 'prewedAdmin'])->name('admin.package.prewed');
    Route::get('/admin-dashboard/paket/dekorasi', action: [PackageController::class, 'dekorasiAdmin'])->name('admin.package.dekorasi');
    Route::get('/admin-dashboard/paket/mua', action: [PackageController::class, 'muaAdmin'])->name('admin.package.mua');
    Route::get('/admin-dashboard/paket/dokumentasi', [PackageController::class, 'dokumentasiAdmin'])->name('admin.package.dokumentasi');

    Route::get('/admin-dashboard/booking', [TransaksiController::class, 'showBooking'])->name('admin.show.booking');

    Route::get('/admin-dashboard/testimoni', [AkunController::class, 'testimoni'])->name('admin.testimoni');
    Route::get('/admin-dashboard/data-pengguna', [AkunController::class, 'dataClient'])->name('admin.data-pengguna');

});
