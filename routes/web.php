<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/session/tampil',
'App\Http\Controllers\TesController@tampilkanSession');

Route::get('/session/buat',
'App\Http\Controllers\TesController@buatSession');

Route::get('/session/hapus',
'App\Http\Controllers\TesController@hapusSession');
