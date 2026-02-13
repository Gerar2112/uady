<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::view('/educacion', 'educacion')->name('educacion');
Route::view('/investigacion', 'investigacion')->name('investigacion');
Route::view('/compromiso-social', 'compromiso')->name('compromiso');
Route::view('/', 'home')->name('home');



