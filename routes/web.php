<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('admin', [AuthController::class, 'admin'])->name('auth.admin');
