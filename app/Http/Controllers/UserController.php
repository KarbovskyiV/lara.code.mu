<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        $users = User::paginate(5);

        return view('user.all', [
            'users' => $users
        ]);
    }

    public function showAll()
    {
        return view('user.showAll', [
            'users' => DB::table('users')->orderBy('age')->paginate(5)
        ]);
    }

    public function form()
    {
        return view('user.form');
    }

    public function submit(Request $request)
    {
        $city_id = $request->input('city_id');
        $login = $request->input('login');
        $password = $request->input('password');
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');
        $salary = $request->input('salary');

        DB::table('users')->insert([
            'city_id' => $city_id,
            'login' => $login,
            'password' => $password,
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'salary' => $salary,
        ]);

        return redirect('user/all');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user/all')->with('success', 'User deleted successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(User $id, Request $request)
    {
        $item = User::findOrFail($id->id);

        $item->update();

        return redirect('/user/all')->with('success', 'User updated successfully');
    }
}
