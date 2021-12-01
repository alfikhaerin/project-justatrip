<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostControllers extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "posts",
            "posts" => Post::all()

        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            "title" => "single Post",
            "post" => $post
        ]);
    }
}
