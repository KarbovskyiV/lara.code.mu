<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function show()
    {
        $cities = Country::find(1)
            ->cities()
            ->where('id', '>', 1)
            ->get();

        dump($cities);
    }

    public function all()
    {
        $countries = Country::all();

        return view('country.all', [
            'countries' => $countries,
        ]);
    }
}
