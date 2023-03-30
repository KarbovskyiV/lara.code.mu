<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate(12);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
        ]);

        $post = Post::query()->create([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at'] ?? null),
            'published' => $validated['published'] ?? false,
        ]);

        dd($post->toArray());

        alert(__('Saved'));

        return redirect()->route('user.posts.show', 123);
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Eligendi, eos!'
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Eligendi, eos!'
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string'],
        ]);

        alert(__('Saved'));

        return redirect()->back();
    }

    public function delete($post)
    {
        return redirect()->route('user.posts');
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
