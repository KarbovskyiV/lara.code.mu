<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:10');
    }

    public function __invoke(): string
    {
        return 'Test';
    }
}
