<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/single', [PageController::class, 'blogSingle'])->name('blog.single');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSend'])->name('contact.send');
