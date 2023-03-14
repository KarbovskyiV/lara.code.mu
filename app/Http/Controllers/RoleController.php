<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleController extends Controller
{
    public function show()
    {
        $roles = Role::with(['users'])->get();

        foreach ($roles as $role) {
            dump($role->users);
            foreach ($role->users as $user) {
                dump($user->name);
            }
        }
    }
}
