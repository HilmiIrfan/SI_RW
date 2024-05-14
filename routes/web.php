<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;

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
