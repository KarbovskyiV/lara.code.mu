<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function all()
    {
        $profiles = Profile::all();
        return view('profile.all', [
            'profiles' => $profiles,
        ]);
    }
}
