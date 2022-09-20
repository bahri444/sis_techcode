<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// import controller agar controller bisa di deteksi oleh view
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

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
//     // return view('welcome');
//     return view('admin.dashboard');
// });
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/member', [MemberController::class, 'index'])->name('member');
Route::get('/admin/user', [UserController::class, 'index'])->name('user');
Route::get('/admin/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/admin/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/admin/keuangan', [KeuanganController::class, 'index'])->name('keuangan');
Route::get('/admin/belanja', [BelanjaController::class, 'index'])->name('belanja');
Route::get('/admin/administrasi', [AdministrasiController::class, 'index'])->name('administrasi');
Route::get('/admin/history', [HistoryController::class, 'index'])->name('history');
Route::get('/admin/moduls', [ModulsController::class, 'index'])->name('moduls');
Route::get('/admin/absensi', [AbsensiController::class, 'index'])->name('absensi');
