<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\LaporanAdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PendudukController;
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
Route::get('/warga', [AdminController::class, 'warga'])->name('warga.dashboard');

Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/agenda', function () {
    return view('agenda.agenda');
});
Route::get('/agendaadmin', function () {
    return view('agenda.agendaadmin');
});


Route::get('/laporan', function () {
    return view('laporan.laporan');
});
Route::get('/laporanshow', [LaporanController::class, 'laporanshow']);

Route::get('/bansos', function () {
    return view('bansos.bansos');
});

Route::get('/bansosfilt', [BansosController::class, 'index'])->name('bansos.filter');
Route::post('/bansos/terima/{id}', [BansosController::class, 'terima'])->name('bansos.terima');
Route::post('/bansos', [BansosController::class, 'store'])->name('bansos.store');
Route::get('/bansos/filtered', [BansosController::class, 'filtered'])->name('bansosfilt');
Route::get('/bansos/filteredAdmin', [BansosController::class, 'filteredAdmin'])->name('bansosfiltAdmin');
Route::put('/bansos/undo_terima/{id}', [BansosController::class, 'undoTerima'])->name('bansos.undo_terima');


Route::get('/galerishow', function () {
    return view('galeri.galeri');
});
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

Route::get('/pengurus', function () {
    return view('pengurus.pengurus');
});
Route::get('/pengurusadmin', function () {
    return view('pengurus.pengurusadmin');
});

Route::get('/welcome', function () {
    return view('/welcome');
})->name('welcome');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/laporanshow', [LaporanAdminController::class,'index']);
Route::get('/showlap', [LaporanAdminController::class,'show']);
Route::get('/laporan/create', [LaporanAdminController::class,'create']);

Route::get('/iuran',[IuranController::class,'index']);
Route::get('/iuranAdmin',[IuranController::class,'indexAdmin']);
Route::get('/iuran/create', 'IuranController@create')->name('iuran.create');
Route::post('/iuran', 'IuranController@store')->name('iuran.store');
Route::get('/iuran/{id}/edit', 'IuranController@edit')->name('iuran.edit');
Route::put('/iuran/{id}', 'IuranController@update')->name('iuran.update');
Route::delete('/iuran/{id}', 'IuranController@destroy')->name('iuran.destroy');

Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
Route::get('/penduduk/{no_kk}', [PendudukController::class, 'show'])->name('penduduk.show');