<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


Auth::routes();

// Route::get('/', [CarController::class, 'for_index'])->name('welcome');


Route::get('/delivery', function() {
    return view('delivery');
});
Route::get('/customs-clearance', function() {
    return view('customs');
});
Route::get('/certification', function() {
    return view('cert');
});
Route::get('/franchise', function() {
    return view('franchise');
});

Route::get('/', [CarController::class, 'for_index'])->name('welcome');
Route::get('/preview/car', function() {
    $images = [
        ['path' => 'korea2.jpg'],
        ['path' => 'korea3.jpg'],
        ['path' => 'korea4.jpg'],
        ['path' => 'korea1.jpg']
    ];

    return view('car', compact('images'));
});
Route::get('/about', function() {
    return view('about');
});
Route::get('/posts', function() {
    return view('posts');
});
Route::get('/faq', function() {
    return view('faq');
});

Route::get('/contact', function() {
    return view('contact');
});
Route::get('/reviews', function() {
    return view('reviews');
});





Route::get('/cars/create', [CarController::class, 'create'])->middleware('checkAuth')->name('cars.create');
Route::post('/add-car-script', [CarController::class, 'store'])->name('cars.store');
Route::post('/autos/filtered', [CarController::class, 'filterCars'])->name('cars.filtered');
Route::post('/make-order', [CarController::class, 'order'])->name('cars.order');


Route::get('/autos/{vin}', [CarController::class, 'show'])->name('cars.show');



Route::get('/autos/edit/{id}', [CarController::class, 'editForm'])->name('cars.edit-form');
Route::post('/autos/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::get('/autos', [CarController::class, 'no_filter'])->name('cars.no-filter');
Route::get('/china', [CarController::class, 'china_no_filter'])->name('cars.china-no-filter');
Route::post('/china/filtered', [CarController::class, 'china_filtered'])->name('cars.china-filtered');
Route::get('/search', [CarController::class, 'search'])->name('cars.search');

Route::get('/sitemap.xml', function () {
    $cars = \App\Models\Car::all();
    return response()->view('sitemap', compact('cars'))->header('Content-Type', 'application/xml');
});


