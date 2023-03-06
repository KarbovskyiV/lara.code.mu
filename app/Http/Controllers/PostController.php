<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show()
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

    public function all()
    {
        return 'Post all show';
    }
}