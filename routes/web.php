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

//users
Route::get('/', function () {
    return view('landing-page');
});
Route::get('/1', function () {
    return view('users.penawaran');
});

//admin
Route::get('/barang', function () {
    return view('admin.barang');
});
Route::get('/petugas', function () {
    return view('admin.petugas');
});
Route::get('/laporan', function () {
    return view('admin.laporan');
});

//petugas
Route::get('/aktivasi', function () {
    return view('petugas.aktivasi');
});


