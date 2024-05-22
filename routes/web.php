<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\LaporanAdminController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Warga\GaleriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and will be assigned to
| the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/rt', [AdminController::class, 'rt'])->name('rt.dashboard');
Route::get('/rw', [AdminController::class, 'rw'])->name('rw.dashboard');


Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/agenda', function () {
    return view('agenda.agenda');
});

Route::get('/laporan', function () {
    return view('laporan.laporan');
});

Route::get('/bansos', function () {
    return view('bansos.bansos');
});
Route::get('/bansosfilt', [BansosController::class, 'index']);
Route::post('/bansos/terima/{id}', [BansosController::class, 'terima'])->name('bansos.terima');
Route::post('/bansos', [BansosController::class, 'store'])->name('bansos.store');

Route::get('/galerishow', function () {
    return view('galeri.galeri');
});
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/pengurus', function () {
    return view('pengurus.pengurus');
});

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/laporanshow', [LaporanAdminController::class,'index']);
Route::get('/showlap', [LaporanAdminController::class,'show']);
Route::get('/laporan/create', [LaporanAdminController::class,'create']);
