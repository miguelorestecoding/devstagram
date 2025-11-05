<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/test', function () {
    return 'Funciona';
});
