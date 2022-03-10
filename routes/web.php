<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DAController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Landing Page
Route::middleware(['guest'])->group(function()
{
    // Auth
    Route::get('/login', [AuthController::class, 'loginAdmin'])->name('loginAdmin');
    Route::post('/login-proses', [AuthController::class, 'loginProses'])->name('login-proses');
    Route::prefix('auth')->group(function() {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    // Landingpage
    Route::get('/', [LandingPageController::class, 'landing'])->name('landingpage');
    Route::get('/info-detail', [LandingPageController::class, 'information'])->name('info-detail');
});


// Admins
Route::middleware(['auth', 'role'])->group(function() {
    Route::prefix('admin')->group(function() {
        Route::get('/dashboard', [DAController::class, 'index'])->name('admin');
    });
    Route::prefix('user')->group(function() {
        Route::get('/dashboard', [UserController::class, 'index'])->name('user');
        Route::get('/dashboard/create', [UserController::class, 'create'])->name('createUsers');
        Route::get('/dashboard/edit', [UserController::class, 'edit'])->name('editUsers');
    });
});


// Database School
// Route::get('/dashboard/school', [SchoolController::class, 'index'])->name('school');
