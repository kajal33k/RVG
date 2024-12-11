<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route for the homepage, loading the 'frontend.index' view
Route::get('/', function () {
    return view('frontend.index');
});



Route::get('/happiness', [HomeController::class, 'happiness'])->name('frontend.happiness');
Route::get('/join',[HomeController::class, 'join'])->name('frontend.join');