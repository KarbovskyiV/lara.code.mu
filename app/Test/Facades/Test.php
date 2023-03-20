<?php

namespace App\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'test';
    }
}
