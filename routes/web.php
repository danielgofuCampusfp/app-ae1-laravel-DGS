<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('info');
});

Route::get('/saludo/{nombre}', function (string $nombre) {
    return view('saludo',['nombre' => $nombre]);
});
