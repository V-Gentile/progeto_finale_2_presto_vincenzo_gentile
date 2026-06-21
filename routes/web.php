<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/annunci/crea', function () {
    return view('articles.create');
})->middleware('auth');

Route::get('/annunci', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/annuncio/{article}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/categoria/{category_id}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');
