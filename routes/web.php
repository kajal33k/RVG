<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route for the homepage, loading the 'frontend.index' view
Route::get('/', function () {
    return view('frontend.index');
});



Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/product', [HomeController::class, 'product'])->name('frontend.product');
Route::get('/career', [HomeController::class, 'career'])->name('frontend.career');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('frontend.pricing');
Route::get('/features', [HomeController::class, 'features'])->name('frontend.features');;
