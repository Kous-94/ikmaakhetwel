<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AppointmentController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/webshop', [ProductController::class, 'webshop'])->name('products.webshop'); 
    Route::get('/webshop/products/{id}', [ProductController::class, 'webshopShow'])->name('webshop.show');


    // Product Management Routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // List all products
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Create form
    Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store new product
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show'); // View a single product
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Edit form
    Route::patch('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // Update product
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete product
    
    // Appointment Management Routes
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index'); // List all appointments
    Route::get('/appointments/{id}', [AppointmentController::class, 'show'])->name('appointments.show'); // View single appointment
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy'); // Delete appointment    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store'); // Store new appointment
});

// Other public routes
Route::get('/over-ons', function () {
    return view('over-ons');
})->name('over-ons');

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
Route::post('/contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');

// Routes for appointment booking page (public)
Route::get('/afspraak', [AppointmentController::class, 'showForm'])->name('afspraak.show');
Route::post('/afspraak', [AppointmentController::class, 'store'])->name('appointments.store');
