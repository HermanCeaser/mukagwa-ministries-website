<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    
    public function index(): View
    {
        $title = "News Articles";

        $posts = Post::with(['author:id,name', 'categories:name,slug'])->where('status', 'published')->paginate(6);
        // dd($posts);
        return view('pages.news', compact('posts', 'title'));
    }
}
