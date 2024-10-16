<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::get('article/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('article/index', [ArticleController::class, 'index'])->name('articles.index');

Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('article/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');