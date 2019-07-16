<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/leer', function () {
    return view('leer');
})->name('leer');

Route::get('/autor', function () {
    return view('autor');
})->name('autor');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
