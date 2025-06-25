<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductOrderController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     // Take the 3 newest posts
//     $latestArticles = Article::orderBy('published_at', 'desc')->take(3)->get();

//     return view('welcome', compact('latestArticles'));
// })->name('home');

Route::redirect('/', '/categories');

// Resource routes of the base pages. For more info on Resource Routes
// Route::resource('/articles', ArticleController::class);
// Route::resource('/products', ProductController::class);
// Route::resource('/orders', ProductOrderController::class);
Route::resource('/categories', CategoryController::class);
