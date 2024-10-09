<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/layout', [DashboardController::class, 'layout'])->name('dashboard.layout')->middleware(AuthenticateMiddleware::class);

Route::get('login', [AuthController::class, 'login'])->name('auth.login')->middleware('checklogin');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('admin', [AuthController::class, 'admin'])->name('auth.admin');
