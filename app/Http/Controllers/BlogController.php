<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        return 'Posts in blog';
    }

    public function show($post)
    {
        return 'One post in blog';
    }

    public function like($post)
    {
        return 'Like';
    }
}
