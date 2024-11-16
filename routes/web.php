<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil',function () {
    return view('profil');
});
    
    Route::get('/beranda',function () {
    return view('beranda');
});
Route::get('/dashboard',function () {
    return view('dashboard');
});
Route::get('/layanan',function () {
    return view('layanan');
});
Route::get('/kontak',function () {
    return view('kontak');});