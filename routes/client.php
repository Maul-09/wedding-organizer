<?php

use App\Http\Controllers\client\AboutController;
use App\Http\Controllers\client\HeroController;
use App\Http\Controllers\client\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HeroController::class, 'index'])->name('page.hero');
Route::get('/client/contact-us', [HeroController::class, 'contact'])->name('page.contact');
Route::get('/about-user', [AboutController::class, 'about'])->name('page.about');


Route::get('/client/paket/wedding', [ProdukController::class, 'wedding'])->name('page.paket.wedding');
Route::get('/client/paket/mua', [ProdukController::class, 'mua'])->name('page.paket.mua');
Route::get('/client/paket/dekorasi', [ProdukController::class, 'decor'])->name('page.paket.dekor');
Route::get('/client/paket/dokumentasi', [ProdukController::class, 'dokumentasi'])->name('page.paket.dokumentasi');
Route::get('/client/paket/prewed', [ProdukController::class, 'prewed'])->name('page.paket.prewed');

