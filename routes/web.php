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
    return view('Mentor');
});

Route::get('beranda', function () {
    return view('home.layout.beranda');
});

Route::get('skema_sertifikasi', function () {
    return view('home.layout.skema_sertifikasi');
});

Route::get('profil', function () {
    return view('home.layout.profil');
});

