<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

// Redirect to post index
Route::get('/', [PostController::class, 'index']);

// Show all blog posts
Route::get('/posts', [PostController::class, 'index']);

// Show a specific post by ID (with comments)
Route::get('/posts/{id}', [PostController::class, 'show']);

// Submit a new comment for a specific post
Route::post('/posts/{id}/comments', [CommentController::class, 'store']);
