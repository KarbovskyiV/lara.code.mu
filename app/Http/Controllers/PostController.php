<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show()
    {
        return view('post.show', [
            'title' => 'Post title',
            'text' => 'Post content',
        ]);
    }

    public function all()
    {
        return 'Post all show';
    }
}
