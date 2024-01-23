<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Sunmori', function () {
    return view('Sunmori.Home');
});

Route::get('/Home', [AnggotaController::class, 'Home'])->name('Sunmori.Home');

Route::get('/Anggota', [AnggotaController::class, 'Anggota'])->name('Sunmori.Anggota');
Route::get('/Pendaftaran', [AnggotaController::class, 'Pendaftaran'])->name('Sunmori.Pendaftaran');

Route::get('/anggotas/create', [AnggotaController::class, 'create']);
Route::post('/anggotas', [AnggotaController::class, 'store'])->name('anggotas.store');
Route::get('/anggotas', [AnggotaController::class, 'index'])->name('Sunmori.Anggota');