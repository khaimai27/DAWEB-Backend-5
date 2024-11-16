<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'Login'])->name('login');
Route::post('/hd-login', [LoginController::class, 'hdLogin'])->name('hd-login');
