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
Route::get('/blog-details', [HomeController::class, 'blogdetails'])->name('frontend.blogdetails');
Route::get('/product', [HomeController::class, 'product'])->name('frontend.product');
Route::get('/career', [HomeController::class, 'career'])->name('frontend.career');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('frontend.pricing');
Route::get('/features', [HomeController::class, 'features'])->name('frontend.features');
Route::get('/privacypolicy', [HomeController::class, 'privacypolicy'])->name('frontend.privacypolicy');
Route::get('/condition', [HomeController::class, 'condition'])->name('frontend.condition');
Route::get('/refund', [HomeController::class, 'refund'])->name('frontend.refund');
Route::get('/detail', [HomeController::class, 'detail'])->name('frontend.detail');
Route::get('/learnmore', [HomeController::class, 'learnmore'])->name('frontend.learnmore');