<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about-us', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('frontend.blog');
Route::get('/blog-details', [HomeController::class, 'blogdetails'])->name('frontend.blog.details');
Route::get('/products', [HomeController::class, 'product'])->name('frontend.products');
Route::get('/careers', [HomeController::class, 'career'])->name('frontend.careers');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('frontend.pricing');
Route::get('/services', [HomeController::class, 'services'])->name('frontend.services');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('frontend.privacy.policy');
Route::get('/terms-and-conditions', [HomeController::class, 'condition'])->name('frontend.terms.conditions');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('frontend.refund.policy');
Route::get('/details', [HomeController::class, 'detail'])->name('frontend.details');
Route::get('/learn-more', [HomeController::class, 'learnmore'])->name('frontend.learn.more');
Route::get('/category', [HomeController::class, 'category'])->name('frontend.category');
Route::get('/testing',[HomeController::class, 'testing'])->name('frontend.testing');
