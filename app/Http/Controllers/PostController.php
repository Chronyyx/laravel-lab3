<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('author')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with(['author', 'comments'])->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}


