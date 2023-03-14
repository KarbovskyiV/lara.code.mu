<?php

namespace App\Http\Controllers;

use App\Models\City;

class CityController extends Controller
{
    public function show()
    {
        $city = City::find(1);

        dump($city->country->name);
    }
}
