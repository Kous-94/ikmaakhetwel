<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/over-ons', function () {
    return view('over-ons');
})->name('over-ons');

Route::get('/webshop', function () {
    return view('webshop');
})->name('webshop');

Route::get('/zakelijk', function () {
    return view('zakelijk');
})->name('zakelijk');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/it-nieuws', function () {
    return view('it-nieuws');
})->name('it-nieuws');

Route::get('/reparaties', function () {
    return view('reparaties');
})->name('reparaties');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

