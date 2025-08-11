<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/about-us', [FrontendController::class,'about'])->name('about');
Route::get('/products', [FrontendController::class,'products'])->name('products');
Route::get('/services', [FrontendController::class,'services'])->name('services');
Route::get('/testimonials', [FrontendController::class,'testimonials'])->name('testimonials');
Route::get('/blog', [FrontendController::class,'blog'])->name('blog');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/login', [FrontendController::class,'login'])->name('login');
