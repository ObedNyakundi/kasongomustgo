<?php
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


//original page before breaking it down
Route::get('/original', function () {
    return view('landing');
})->name('original');

//new page after breaking it into components
Route::get('/', function () {
    return view('home');
})->name('home');

//route for handling the landing page
Route::get('/home', [LandingPageController::class,'homepage'])->name('home.page');
