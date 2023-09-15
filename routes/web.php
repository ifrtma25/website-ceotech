<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeanggotaanController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/demisioner', [KeanggotaanController::class, 'demisioner'])->name('demisioner');
Route::get('/struktur-organisasi', [KeanggotaanController::class, 'struktur_organisasi'])->name('struktur_organisasi');

Route::get('/profil', [ProfilController::class, 'index_profil'])->name('profil');

Route::middleware(['auth', 'checkroll:Admin'])->group(function () {
    Route::get('/dashboard_admin', [AdminPageController::class, 'index'])->name('dashboard_admin');
});

Auth::routes();
