<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
//        $foo = session()->all();
//        dd($foo);

        return view('login.index');
    }

    public function store(Request $request)
    {
        // authenticate user

        alert(__('Welcome'));

//        if (true) {
//            return redirect()->back()->withInput();
//        }

        return redirect()->route('user');
    }
}
