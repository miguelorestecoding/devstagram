<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/phppractice', function () {
    return view('phppractice');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/test', function () {
    return 'Funciona';
});

Route::get('/saludo', function () {
    return 'Hola desde Laravel';
});
