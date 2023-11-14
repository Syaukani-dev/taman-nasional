<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user\UserController;

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

Route::get('/', function () {
    return view('auth.login');
})->name('home');


Auth::routes();
Route::get('/klaim_hadiah', [App\Http\Controllers\HomeController::class, 'klaimHadiah'])->name('klaimHadiah');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/scan', [App\Http\Controllers\HomeController::class, 'scan'])->name('scan');
Route::get('/sejarah', [App\Http\Controllers\HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/celepuk', [App\Http\Controllers\HomeController::class, 'celepuk'])->name('celepuk');
Route::get('/elang', [App\Http\Controllers\HomeController::class, 'elang'])->name('elang');
Route::get('/floraFauna', [App\Http\Controllers\HomeController::class, 'floraFauna'])->name('floraFauna');
Route::get('/hadiah', [App\Http\Controllers\HomeController::class, 'hadiah'])->name('hadiah');
Route::get('/konservasi', [App\Http\Controllers\HomeController::class, 'konservasi'])->name('konservasi');
Route::get('/mitigasi', [App\Http\Controllers\HomeController::class, 'mitigasi'])->name('mitigasi');
Route::get('/monyet', [App\Http\Controllers\HomeController::class, 'monyet'])->name('monyet');
Route::get('/pasang', [App\Http\Controllers\HomeController::class, 'pasang'])->name('pasang');
Route::get('/puspa', [App\Http\Controllers\HomeController::class, 'puspa'])->name('puspa');
Route::get('/tesek', [App\Http\Controllers\HomeController::class, 'tesek'])->name('tesek');

Route::get('/konservasi', [App\Http\Controllers\HomeController::class, 'updateKonservasiStatus'])->name('konservasi');
Route::get('/floraFauna', [App\Http\Controllers\HomeController::class, 'updateFloradanFaunaStatus'])->name('floraFauna');
Route::get('/mitigasi', [App\Http\Controllers\HomeController::class, 'updateMitigasiStatus'])->name('mitigasi');
Route::get('/sejarah', [App\Http\Controllers\HomeController::class, 'updateSejarahStatus'])->name('sejarah');
