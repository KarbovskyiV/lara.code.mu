<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($name)
    {
        $users = [
            'user1' => 'city 1',
            'user2' => 'city 2',
            'user3' => 'city 3',
            'user4' => 'city 4',
            'user5' => 'city 5',
        ];

        if (array_key_exists($name, $users)) {
            return $users[$name];
        }

        return 'Error';
    }

    public function all()
    {
        return "User all";
    }

    public function showAll($surname, $name)
    {
        return "$surname $name";
    }
}
