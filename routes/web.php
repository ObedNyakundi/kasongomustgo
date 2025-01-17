<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//original page before breaking it down
Route::get('/original', function () {
    return view('landing');
})->name('original');

//new page after breaking it into components
Route::get('/', function () {
    return view('home');
})->name('home');
