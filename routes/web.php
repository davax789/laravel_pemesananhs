<?php

use App\Http\Controllers\DatapemesanController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\DetailHistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get(uri: '/pemesanan', action: [PemesananController::class, 'index'])->name('pemesanan');
Route::get(uri: '/datapemesanan', action: [DatapemesanController::class, 'index'])->name('datapemesanan');
Route::get(uri: '/tambahdata', action: [PemesananController::class, 'create'])->name('tambahdata');
Route::post(uri: '/simpandata', action: [PemesananController::class, 'store'])->name('simpandata');
Route::get('/editdata/{id}', [DatapemesanController::class, 'edit'])->name('editdata');
Route::post('/updatedata/{id}', [DatapemesanController::class, 'update'])->name('updatedata');
Route::get('/delete/{id}', [DatapemesanController::class, 'destroy'])->name('delete');
Route::get('/details/{id}', [DetailsController::class, 'show'])->name('details');
Route::get('/invoice/{id}', [PemesananController::class, 'show'])->name('invoice');
Route::put('/pemesanan/{id}/selesai', [HistoriController::class, 'selesai'])->name('pemesanan.selesai');
Route::get('/history', action: [HistoriController::class, 'index'])->name('history.index');
Route::get('/detailshistory/{id}', [DetailHistoryController::class, 'show'])->name('details');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::group(['middleware' => ['auth']], function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get(uri: '/pemesanan', action: [PemesananController::class, 'index'])->name('pemesanan');
Route::get(uri: '/datapemesanan', action: [DatapemesanController::class, 'index'])->name('datapemesanan');
Route::get(uri: '/tambahdata', action: [PemesananController::class, 'create'])->name('tambahdata');
Route::post(uri: '/simpandata', action: [PemesananController::class, 'store'])->name('simpandata');
Route::get('/editdata/{id}', [DatapemesanController::class, 'edit'])->name('editdata');
Route::post('/updatedata/{id}', [DatapemesanController::class, 'update'])->name('updatedata');
Route::get('/delete/{id}', [DatapemesanController::class, 'destroy'])->name('delete');
Route::get('/details/{id}', [PemesananController::class, 'details']);
Route::get('/invoice/{id}', [PemesananController::class, 'show'])->name('invoice');
Route::put('/pemesanan/{id}/selesai', [HistoriController::class, 'selesai'])->name('pemesanan.selesai');
Route::get('/history', [HistoriController::class, 'index'])->name('history.index');
Route::get('/detailshistory/{id}', [DetailHistoryController::class, 'show'])->name('detailshistory');
Route::get('/home', [DashboardController::class, 'index'])->name('home');
Route::get('/kamars', [KamarController::class, 'index'])->name('kamars.index');
Route::get('/kamarhapus/{id}', [KamarController::class, 'destroy'])->name('kamar.hapus');
Route::get(uri: '/tambahkamar', action: [KamarController::class, 'create'])->name('tambahkamar');
Route::post(uri: '/simpankamar', action: [KamarController::class, 'store'])->name('simpankamar');
Route::post('/update-status/{id}', [KamarController::class, 'updateStatus'])->name('updateStatus');
Route::post('kamar/available/{id}', [KamarController::class, 'updateStatusToAvailable'])->name('updateStatusToAvailable');
Route::post('simpanDt', [PemesananController::class, 'simpanDt'])->name('simpanDt');

});