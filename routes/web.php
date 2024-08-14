<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchFilterController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});
Route::get('/find-property', function () {
    return Inertia::render('FindProperty');
});
Route::get('/search-result', function () {
    return Inertia::render('SearchResult');
});
Route::get('/bidder-profile', function () {
    return Inertia::render('BidderProfile');
});
Route::get('/owner-profile', function () {
    return Inertia::render('OwnerProfile');
});
Route::post('/search',[SearchFilterController::class, 'searchFilter']);


Route::get('/single-property', function () {
    return Inertia::render('SingleProperty');
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
