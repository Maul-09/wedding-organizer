<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');
