<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('home');
Route::view('/recovery', 'recovery')->name('recovery');
Route::view('/services', 'services')->name('services');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');