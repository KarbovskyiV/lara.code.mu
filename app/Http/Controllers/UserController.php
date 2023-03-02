<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show()
    {
        return view('user.show', [
            'title' => 'User title',
            'text' => 'User content',
        ]);
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
