<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RulesController;
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



Route::get('about', function(){
    return view('about');
});

Route::get('konsultasi-form', [KonsultasiController::class, 'index']);
Route::post('konsultasi-form/proses', [KonsultasiController::class, 'proses']);
Route::get('konsultasi-form/{data_diagnosa}', [KonsultasiController::class, 'showdata']);
Route::get('login', [LoginController::class, 'login']);


Route::middleware('auth')->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('index');
    Route::get('admin/rules', [RulesController::class, 'index']);
    Route::get('admin/pasien', [PasienController::class, 'index']);
    Route::resource('admin/gejala', GejalaController::class);
    Route::resource('admin/penyakit', PenyakitController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});
