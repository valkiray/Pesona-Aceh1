<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

// Define the route for posts.gallery before the resource route for PostController
Route::get('/posts/gallery', [PostController::class, 'gallery'])->name('posts.gallery');

// Define the route for posts.about before the resource route for PostController
Route::get('/posts/about', [PostController::class, 'about'])->name('posts.about');

// Resource route for PostController
Route::resource('posts', PostController::class);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
