<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/recovery', 'recovery')->name('recovery');
Route::view('/soluciones', 'soluciones')->name('soluciones');
Route::view('/contacto', 'contacto')->name('contacto');