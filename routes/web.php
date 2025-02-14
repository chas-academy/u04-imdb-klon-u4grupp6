<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CollectionController;
use App\Http\Middleware\EnsureIsAdmin;
use Illuminate\Support\Facades\Route;

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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ReviewController::class)->group(function() {
        Route::get('reviews/create', 'create');
        Route::post('reviews/store', 'store');
        Route::get('reviews/edit/{id}', 'edit');
        Route::patch('reviews/update/{id}','update');
        Route::delete('reviews/destroy/{id}', 'destroy')->name('movies.destroy');
    });
    Route::controller(CollectionController::class)->group(function() {
        Route::get('collections/create', 'create');
        Route::post('collections/store', 'store');
        Route::get('collections/edit/{id}', 'edit');
        Route::patch('collections/update/{id}','update');
        Route::delete('collections/destroy/{id}', 'destroy');
    });
});

Route::middleware([EnsureIsAdmin::class])->group(function() {
    Route::controller(MovieController::class)->group(function() {
        Route::get('movies/create', 'create');
        Route::post('movies/store', 'store');
        Route::get('movies/edit/{id}', 'edit');
        Route::patch('movies/update/{id}','update');
        Route::delete('movies/destroy/{id}', 'destroy')->name('movies.destroy');
    });
    Route::controller(AdminController::class)->group(function() {
        Route::get('admin/users','index');
        Route::get('admin/users/{id}', 'show');
        Route::get('admin/users/edit/{id}', 'edit');
        Route::patch('admin/users/update/{id}','update');
        Route::delete('admin/users/destroy{id}', 'destroy');
    });
});

require __DIR__.'/auth.php';
