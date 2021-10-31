<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DAController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Page
Route::get('/', [LandingPageController::class, 'landing'])->name('landingpage');

//Login
Route::get('/admin_login', [AdminController::class, 'index'])->name('LoginAdmin');

// Dashboard Admin
Route::get('/dashboard', [DAController::class, 'index'])->name('Admin');
