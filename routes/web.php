<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard','dashboard');
Route::view('/login','login');
Route::view('/movielist','movielist');
Route::view('/reviews','reviews');
