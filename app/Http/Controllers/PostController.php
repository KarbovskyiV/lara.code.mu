<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($id)
    {
        $posts = [
            1 => 'Post 1',
            2 => 'Post 2',
            3 => 'Post 3',
            4 => 'Post 4',
            5 => 'Post 5',
        ];

        return $posts[$id];
    }

    public function all()
    {
        return 'Post all show';
    }
}
