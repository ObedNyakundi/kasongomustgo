<?php
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


//original page before breaking it down
Route::get('/original', function () {
    return view('landing');
})->name('original');

//route for handling the landing page
Route::get('/', [LandingPageController::class,'homepage'])->name('home');

//route for handling a post request
Route::get('/{postId}/post', [LandingPageController::class,'singlepost'])->name('single.post');
