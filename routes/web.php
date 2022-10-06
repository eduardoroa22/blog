<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\Privaci;


Route::get('/', [PostController::class,'index'])->name('posts.index');

Route::get('search', SearchController::class)->name('search');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');


Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');











