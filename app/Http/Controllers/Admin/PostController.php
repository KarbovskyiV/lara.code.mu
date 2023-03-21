<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'All posts';
    }

    public function create()
    {
        return 'Create post';
    }

    public function store()
    {
        return 'Request create post';
    }

    public function show($post)
    {
        return "Show post №{$post}";
    }

    public function edit($post)
    {
        return "Edit post №{$post}";
    }

    public function update()
    {
        return 'Request edit post';
    }

    public function delete()
    {
        return 'Delete post';
    }

    public function like()
    {
        return 'Like + 1';
    }

    public function show2()
    {
        return view('post.show', [
            'title' => 'Post title',
            'text' => 'Як обрати фреймворк для інтернет магазину',
            'href' => 'https://uageneral.net/blog/it/yak-obraty-freymvork-dlya-internet-magazynu/',
            'name' => 'Name',
            'age' => '22',
            'salary' => 10000,
            'class' => 'text',
            'input1' => 'My',
            'input2' => 'Name',
            'input3' => 'Is',
            'color' => 'color:red',
            'employee' => [
                'name' => 'Employee name',
                'age' => 24,
                'salary' => 10000,
            ],
            'location' => [
                'country' => 'Some country',
                'city' => 'Some sity',
            ],
            'year' => '2022 ',
            'month' => '12 ',
            'day' => '02',
            'str' => '<b>text</b>',
            'isAuth' => 11,
            'numbers' => [
                2,
                3,
                5,
                10,
                0,
                8,
            ],
            'data' => 44,
            'array_str' => [
                'str 1',
                'str 2',
                'str 3',
                'str 4',
            ],
            'twoDarr' => [
                [1, 2, 3],
                [4, 5, 6],
                [7, 8, 9]
            ],
            'employees' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'salary' => 1000,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'salary' => 2000,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'salary' => 3000,
                ],
            ],
            'users' => [],

        ]);
    }

    public function form(Request $request)
    {
        echo $request->fullUrl();

        return view('post.form', [

        ]);
    }

    public function result(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $salary = $request->input('salary');

        return view('post.result', [
            'name' => $name,
            'age' => $age,
            'salary' => $salary,
        ]);
    }

    public function test(Request $request)
    {
        echo $request->path();
        echo $request->url();
        echo $request->fullUrl();
    }

    public function all()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            dump($post->thumbnail->path);
            dump($post->thumbnail->alt);
        }
    }
}
