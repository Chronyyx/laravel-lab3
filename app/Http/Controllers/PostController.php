<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // Display a list of all blog posts with authors
    public function index()
    {
        // Eager load the related 'author' for performance
        $posts = Post::with('author')->get();
        return view('posts.index', compact('posts'));
    }

    // Show a specific blog post by its ID, with its author and comments
    public function show($id)
    {
        // Eager load both author and comments
        $post = Post::with(['author', 'comments'])->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
