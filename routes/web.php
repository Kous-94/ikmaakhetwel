<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AppointmentController;

require __DIR__ . '/auth.php';

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

    // Product Management Routes
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index'); // List all products
        Route::get('/create', [ProductController::class, 'create'])->name('create'); // Create form
        Route::post('/', [ProductController::class, 'store'])->name('store'); // Store new product
        Route::get('{id}', [ProductController::class, 'show'])->name('show'); // View a single product
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit'); // Edit form
        Route::patch('{id}', [ProductController::class, 'update'])->name('update'); // Update product
        Route::delete('{id}', [ProductController::class, 'destroy'])->name('destroy'); // Delete product
    });

    // Appointment Management Routes
    Route::prefix('appointments')->name('appointments.')->group(function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('index'); // List all appointments
        Route::get('{id}', [AppointmentController::class, 'show'])->name('show'); // View single appointment
        Route::delete('{id}', [AppointmentController::class, 'destroy'])->name('destroy'); // Delete appointment
        Route::post('/', [AppointmentController::class, 'store'])->name('store'); // Store new appointment
    });

    // Contact Management Routes
    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index'); // List all contacts
        Route::get('{id}', [ContactController::class, 'show'])->name('show'); // View a single contact
        Route::delete('{id}', [ContactController::class, 'destroy'])->name('destroy'); // Delete a contact
    });
});

Route::get('/webshop', [ProductController::class, 'webshop'])->name('products.webshop');
Route::get('/webshop/products/{id}', [ProductController::class, 'webshopShow'])->name('webshop.show');


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
