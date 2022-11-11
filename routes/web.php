<?php

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
Route::get('/admin/symptom', function () {
    return view('admin.symptom');
});
Route::get('/konsultasi', function () {
    return view('konsultasi');
});