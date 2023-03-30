<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categories = [
            null => __('All category'),
            1 => __('First category'),
            2 => __('Second category'),
        ];

        $posts = Post::query()
            ->latest('published_at')
            ->paginate(12, ['id', 'title', 'published_at']);

        return view('blog.index', compact('posts', 'categories'));
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
