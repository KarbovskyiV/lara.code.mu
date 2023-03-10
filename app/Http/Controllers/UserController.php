<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        return view('user.show', [
            'title' => 'User title',
            'text' => 'User content',
            'links' => [
                [
                    'text' => 'text1',
                    'href' => 'href1',
                ],
                [
                    'text' => 'text2',
                    'href' => 'href2',
                ],
                [
                    'text' => 'text3',
                    'href' => 'href3',
                ],
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
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'salary' => 4000,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'salary' => 5000,
                ],
            ],
            'users' => [
                [
                    'name' => 'user1',
                    'surname' => 'surname1',
                    'banned' => true,
                ],
                [
                    'name' => 'user2',
                    'surname' => 'surname2',
                    'banned' => false,
                ],
                [
                    'name' => 'user3',
                    'surname' => 'surname3',
                    'banned' => true,
                ],
                [
                    'name' => 'user4',
                    'surname' => 'surname4',
                    'banned' => false,
                ],
                [
                    'name' => 'user5',
                    'surname' => 'surname5',
                    'banned' => false,
                ],
            ],
            'array_str' => [
                'str1',
                'str2',
                'str3',
                'str4',
            ],
            'days' => [
                1,
                2,
                4,
                5,
                6,
                7,
                8,
                9,
                10,
                15,
                16,
                18,
                20,
                22,
                23,
                26,
                28,
                29,
                30
            ],
            'today' => 6,

        ]);
    }

    public function all()
    {
        User::withTrashed()
            ->where('id', 9)
            ->restore();
    }

    public function showAll($surname, $name)
    {
        return "$surname $name";
    }
}
