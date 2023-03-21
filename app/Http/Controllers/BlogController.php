<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Eligendi, eos!'
        ];

        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Eligendi, eos!'
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return 'Like';
    }
}
