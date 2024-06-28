<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/over-ons', function () {
    return view('over-ons');
})->name('over-ons');

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

Route::post('/contact', [ContactController::class,'sendContactEmail'])->name('contact.send');

Route::get('/webshop', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
