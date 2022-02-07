<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DAController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Auth
Route::prefix('auth')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-proses', [AuthController::class, 'loginProses'])->name('login-proses');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Landing Page
Route::middleware(['guest'])->group(function()
{
    Route::get('/', [LandingPageController::class, 'landing'])->name('landingpage');
    Route::get('/info-detail', [LandingPageController::class, 'information'])->name('info-detail');

});


// Admins
Route::middleware(['auth','admin'])->group(function()
{
    Route::prefix('admin')->group(function() {
        Route::get('/dashboard', [DAController::class, 'index'])->name('admin');
    });
});

Route::prefix('user')->group(function() {
        Route::get('/dashboard', [UserController::class, 'index'])->name('user');
        Route::get('/dashboard/create', [UserController::class, 'create'])->name('createUsers');
        Route::get('/dashboard/edit', [UserController::class, 'edit'])->name('editUsers');
    });
// Users
Route::middleware(['auth','register'])->group(function()
{

});


// Database School
Route::get('/dashboard/school', [SchoolController::class, 'index'])->name('school');
