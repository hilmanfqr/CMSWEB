<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $postCount = Post::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $categories = Category::all();
        $users = User::all();
        $media = \App\Models\Media::all();
        $comments = \App\Models\Comment::with(['post','user'])->latest()->get();
        $settings = \App\Models\Setting::pluck('value', 'key')->toArray();
        $user = auth()->user();
        return view('auth.dashboard', compact('postCount', 'categoryCount', 'userCount', 'categories', 'users', 'media', 'comments', 'settings', 'user'));
    }
}
