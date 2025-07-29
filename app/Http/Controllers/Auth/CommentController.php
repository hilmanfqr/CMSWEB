<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with(['post', 'user'])->latest()->get();
        return view('auth.dashboard-comments', compact('comments'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);
        $comment->update(['status' => $request->status]);
        return redirect()->route('comments.index')->with('alert-success', 'Comment status updated!');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('alert-success', 'Comment deleted!');
    }
} 