<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::view('/dashboard','dashboard');
Route::view('/login','login');
Route::view('/movielist','movielist');
Route::view('/reviews','reviews');

// dashboard views
Route::get('/dashboard/reviews', function () {

    return view('welcome');
});
Route::get('/dashboard/movies', function () {
    
    return view('welcome');
});