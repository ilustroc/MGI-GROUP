<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('home');
Route::view('/recovery', 'recovery')->name('recovery');
Route::view('/services', 'services')->name('services');
Route::view('/contacto', 'contacto')->name('contacto');