<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CeoStoreController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemisionerController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KeanggotaanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PengurusController;
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

Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

Route::get('/member', [KeanggotaanController::class, 'member'])->name('member');
Route::get('/demisioner', [KeanggotaanController::class, 'demisioner'])->name('demisioner');
Route::get('/struktur-organisasi', [KeanggotaanController::class, 'struktur_organisasi'])->name('struktur.organisasi');

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

Route::get('/ceoStore', [CeoStoreController::class, 'index'])->name('ceoStore');

Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran');
Route::post('/pendaftaran/create', [PendaftaranController::class, 'store'])->name('create.pendaftaran');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_admin', [AdminPageController::class, 'index'])->name('dashboard.admin');

    Route::get('/pendaftar', [PendaftaranController::class, 'index'])->name('pendaftar');
    Route::get('/pendaftar/cari', [PendaftaranController::class, 'cari'])->name('cari.pendaftar');
    Route::delete('/pendaftar/delete/{id}', [PendaftaranController::class, 'delete'])->name('delete.pendaftar');

    Route::get('/member_admin', [MemberController::class, 'index'])->name('member.admin');
    Route::get('/member_admin/cari', [MemberController::class, 'cari'])->name('cari.member');
    Route::get('/member_angkatan6', [MemberController::class, 'index_angkatan6'])->name('angkatan6');
    Route::get('/member_angkatan7', [MemberController::class, 'index_angkatan7'])->name('angkatan7');
    Route::get('/member_angkatan8', [MemberController::class, 'index_angkatan8'])->name('angkatan8');
    Route::get('/member_angkatan9', [MemberController::class, 'index_angkatan9'])->name('angkatan9');
    Route::get('/member_angkatan10', [MemberController::class, 'index_angkatan10'])->name('angkatan10');
    Route::get('/member_admin/create', [MemberController::class, 'create'])->name('create.member');
    Route::post('/member_admin/post', [MemberController::class, 'store'])->name('store.member');
    Route::get('/member_admin/edit/{id}', [MemberController::class, 'edit'])->name('edit.member');
    Route::put('/member_admin/update/{id}', [MemberController::class, 'update'])->name('update.member');
    Route::delete('/member_admin/delete/{id}', [MemberController::class, 'delete'])->name('delete.member');

    Route::get('/demisioner_admin', [DemisionerController::class, 'index'])->name('demisioner.admin');
    Route::get('/demisioner_admin/cari', [DemisionerController::class, 'cari'])->name('cari.demisioner');
    Route::get('/demisioner_2020-2021', [DemisionerController::class, 'periode20_21'])->name('2020-2021');
    Route::get('/demisioner_2021-2022', [DemisionerController::class, 'periode21_22'])->name('2021-2022');
    Route::get('/demisioner_2022-2023', [DemisionerController::class, 'periode22_23'])->name('2022-2023');
    Route::get('/demisioner_admin/create', [DemisionerController::class, 'create'])->name('create.demisioner');
    Route::post('/demisioner_admin/post', [DemisionerController::class, 'store'])->name('store.demisioner');
    Route::get('/demisioner_admin/edit/{id}', [DemisionerController::class, 'edit'])->name('edit.demisioner');
    Route::put('/demisioner_admin/update/{id}', [DemisionerController::class, 'update'])->name('update.demisioner');
    Route::delete('/demisioner_admin/delete/{id}', [DemisionerController::class, 'delete'])->name('delete.demisioner');

    Route::get('/pengurus', [PengurusController::class, 'index'])->name('pengurus.admin');
    Route::get('/pengurus/create', [PengurusController::class, 'create'])->name('create.pengurus');
    Route::post('/pengurus/post', [PengurusController::class, 'store'])->name('store.pengurus');
    Route::get('/pengurus/edit/{id}', [PengurusController::class, 'edit'])->name('edit.pengurus');
    Route::put('/pengurus/update/{id}', [PengurusController::class, 'update'])->name('update.pengurus');
    Route::delete('/pengurus/delete/{id}', [PengurusController::class, 'delete'])->name('delete.pengurus');

    // Route::get('/upload_gallery', [GalleryController::class, 'index'])->name('gallery.admin');
    // Route::get('/upload_gallery/create', [GalleryController::class, 'create'])->name('create.gallery');
    // Route::post('/upload_gallery/post', [GalleryController::class, 'store'])->name('store.gallery');
    // Route::get('/upload_gallery/edit/{id}', [GalleryController::class, 'edit'])->name('edit.gallery');
    // Route::put('/upload_gallery/update/{id}', [GalleryController::class, 'update'])->name('update.gallery');
    // Route::delete('/upload_gallery/delete/{id}', [GalleryController::class, 'delete'])->name('delete.gallery');

    Route::get('/profil', [AdminPageController::class, 'profil'])->name('admin.profil');
});

Auth::routes();
