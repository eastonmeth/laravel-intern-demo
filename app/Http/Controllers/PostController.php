<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post): View
    {
        return view('post', [
            'post' => $post,
        ]);
    }

    public function create(): View
    {
        return view('create');
    }
}
