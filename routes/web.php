<?php

use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PenyakitController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin.index');
});
// Route::get('/gejala', function () {
//     return view('gejala');
// });
Route::get('/konsultasi', function () {
    return view('konsultasi');
});

Route::get('konsultasi-form', [KonsultasiController::class, 'index']);
Route::get('gejala', [GejalaController::class, 'index']);
Route::get('penyakit', [PenyakitController::class, 'index']);
