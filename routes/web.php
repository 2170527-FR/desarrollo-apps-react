<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');

    Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
});

require __DIR__.'/settings.php';
