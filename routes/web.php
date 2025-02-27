<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;
Route::view('/movielist', 'movielist');
Route::view('/', 'home');
Route::controller(MovieController::class)->group(function() {
    Route::get('/movies', 'index');
    Route::get('/movies/{id}','show');
});
Route::controller(ReviewController::class)->group(function() {
    Route::get('/reviews', 'index');
    Route::get('/reviews/{id}','show');
});
Route::controller(CollectionController::class)->group(function() {
    Route::get('/collections', 'index');
    Route::get('/collections/{id}','show');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::controller(MovieController::class)->group(function() {
        Route::get('movies/create', 'create');
        Route::post('movies/store', 'store');
        Route::get('movies/edit/{id}', 'edit');
        Route::patch('movies/update/{id}','update');
        Route::delete('movies/destroy/{id}', 'destroy');
    });
    Route::controller(ReviewController::class)->group(function() {
        Route::get('reviews/create', 'create');
        Route::post('reviews/store', 'store');
        Route::get('reviews/edit/{id}', 'edit');
        Route::patch('reviews/update/{id}','update');
        Route::delete('reviews/destroy/{id}', 'destroy');
    });
    Route::controller(CollectionController::class)->group(function() {
        Route::get('collections', [CollectionController::class, 'index'])->name('collections.index');
        Route::get('collections/create', [CollectionController::class, 'create'])->name('collections.create');
        Route::post('collections/store', [CollectionController::class, 'store'])->name('collections.store');
        Route::get('collections/edit/{id}', [CollectionController::class, 'edit'])->name('collections.edit');
        Route::patch('collections/update/{id}', [CollectionController::class, 'update'])->name('collections.update');
        Route::delete('collections/destroy/{id}', [CollectionController::class, 'destroy'])->name('collections.destroy');
    });
});

require __DIR__.'/auth.php';
