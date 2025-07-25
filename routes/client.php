<?php

use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class, 'index'])->name('page.hero');
