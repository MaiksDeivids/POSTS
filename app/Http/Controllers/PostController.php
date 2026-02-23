<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APP\Models\Post;


class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Article::create(['title' => $request->input('title'), 'content' => $request->input('content')]);
        return "Success";
    }
}