<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'commenter_name' => 'required|string',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $request->commenter_name,
            'comment' => $request->comment,
        ]);

        return redirect("/posts/$postId")->with('success', 'Comment added!');
    }
}
