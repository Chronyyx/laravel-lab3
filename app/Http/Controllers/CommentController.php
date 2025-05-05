<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Handle the submission of a new comment for a given post
    public function store(Request $request, $postId)
    {
        // Validate input from the form
        $request->validate([
            'commenter_name' => 'required|string',
            'comment' => 'required|string',
        ]);

        // Save the comment to the database
        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $request->commenter_name,
            'comment' => $request->comment,
        ]);

        // Redirect back to the post page with a success message
        return redirect("/posts/$postId")->with('success', 'Comment added!');
    }
}
